import asyncio
import websockets
import json
import logging
from pymodbus.client import AsyncModbusTcpClient
from typing import Dict, Any, Optional, List
import time
import os

logging.basicConfig(level=logging.INFO, format='%(asctime)s - %(levelname)s - %(message)s')
logger = logging.getLogger(__name__)

SIGNALS_FILE = os.path.join(os.path.dirname(__file__), 'signals.json')

def load_signals_config(path: str) -> Dict[str, Any]:
    with open(path, 'r') as f:
        return json.load(f)

class PLCWebSocketServer:
    def __init__(self, plc_ip: str = '192.168.11.12', plc_port: int = 502, 
                 websocket_port: int = 8765, poll_interval: float = 1.0, 
                 max_chunk_size: int = 120, slave_id: int = 1):
        self.primary_plc_ip = '192.168.11.12'
        self.secondary_plc_ip = '192.168.11.11'
        self.active_plc_ip = plc_ip
        self.plc_port = plc_port
        self.websocket_port = websocket_port
        self.poll_interval = poll_interval
        self.max_chunk_size = max_chunk_size
        self.slave_id = slave_id

        self.signals_config = load_signals_config(SIGNALS_FILE)
        self.required_addresses = sorted(set(
            int(cfg["address"]) for cfg in self.signals_config.values()
        ))
       
        self.chunks = self._prepare_chunks()
        self.client: Optional[AsyncModbusTcpClient] = None
        self.connection_status = False
        self.watchdog_signal_id = self._find_watchdog_signal_id()
        self.reconnecting = False
        self.last_watchdog_value = None
        self.last_watchdog_change = None
        self.watchdog_timeout = 5  # segundos, ajustable

    def _find_watchdog_signal_id(self) -> Optional[str]:
        for sid, cfg in self.signals_config.items():
            if (
                str(cfg.get("address", "")) == "0"
                and int(cfg.get("bit", 0)) == 0
                and cfg.get("type") == "digital"
            ):
                return sid
        logger.error("❌ No se encontró señal watchdog (address 0, bit 0, digital) en signals.json")
        return None

    def _prepare_chunks(self) -> List[Dict[str, int]]:
        if not self.required_addresses:
            return []
        chunks = []
        min_addr = min(self.required_addresses)
        max_addr = max(self.required_addresses)
        for start in range(min_addr, max_addr + 1, self.max_chunk_size):
            count = min(self.max_chunk_size, max_addr - start + 1)
            chunks.append({
                'start_address': start,
                'count': count,
                'end_address': start + count - 1
            })
        logger.info(f"📊 Prepared {len(chunks)} chunks for {max_addr - min_addr + 1} registers")
        return chunks

    async def connect_to_plc(self) -> bool:
        if self.reconnecting:
            logger.info("⏳ Already reconnecting, skipping new connection attempt.")
            return False
        self.reconnecting = True
        try:
            self.client = AsyncModbusTcpClient(self.active_plc_ip, port=self.plc_port)
            await self.client.connect()
            self.connection_status = self.client.connected
            if self.connection_status:
                logger.info(f"✅ Connected to PLC at {self.active_plc_ip}:{self.plc_port}")
            else:
                logger.error(f"❌ Failed to connect to PLC {self.active_plc_ip}:{self.plc_port}")
            return self.connection_status
        except Exception as e:
            logger.error(f"❌ Exception connecting to PLC: {e}")
            return False
        finally:
            self.reconnecting = False

    async def read_modbus_chunk(self, chunk: Dict[str, int]):
        try:
            if not self.client or not self.client.connected:
                logger.error("❌ Modbus client not connected")
                return chunk, None
            rr = await self.client.read_input_registers(
                address=chunk['start_address'],
                count=chunk['count'],
                slave=self.slave_id
            )
            if rr.isError():
                logger.error(f"❌ Failed to read chunk {chunk['start_address']}-{chunk['end_address']}")
                return chunk, None
            return chunk, rr.registers
        except Exception as e:
            logger.error(f"❌ Exception reading chunk {chunk['start_address']}: {e}")
            return chunk, None

    async def read_plc_data(self) -> Optional[Dict[str, Any]]:
        if not self.connection_status:
            return None
        result = {}
        try:
            tasks = [self.read_modbus_chunk(chunk) for chunk in self.chunks]
            chunk_results = await asyncio.gather(*tasks)
            register_map = {}
            successful_chunks = 0
            for chunk_info, registers in chunk_results:
                if registers is not None:
                    successful_chunks += 1
                    for i, value in enumerate(registers):
                        register_address = chunk_info['start_address'] + i
                        register_map[register_address] = value
                else:
                    logger.warning(f"⚠️ Chunk {chunk_info['start_address']}-{chunk_info['end_address']} failed")
            logger.debug(f"📊 Successfully read {successful_chunks}/{len(self.chunks)} chunks")
            if successful_chunks == 0:
                logger.error("❌ All chunks failed to read")
                return None
            timestamp = time.time()
            for sid, cfg in self.signals_config.items():
                addr = int(cfg["address"])
                if addr in register_map:
                    reg_value = register_map[addr]
                    if cfg["type"] == "analogue":
                        value = reg_value
                    elif cfg["type"] == "digital":
                        bit = int(cfg.get("bit", 0))
                        value = (reg_value >> bit) & 1
                    else:
                        continue
                    result[sid] = {
                        "value": value,
                        "address": addr,
                        "description": cfg.get("description", ""),
                        "type": cfg["type"],
                        "bit": cfg.get("bit") if cfg["type"] == "digital" else None,
                        "timestamp": timestamp
                    }
                else:
                    logger.warning(f"⚠️ Signal {sid} address {cfg['address']} not found in read data")
            # --- Watchdog robust logic ---
            current_time = time.time()
            if self.watchdog_signal_id and self.watchdog_signal_id in result:
                watchdog_value = result[self.watchdog_signal_id]["value"]
                if self.last_watchdog_value != watchdog_value:
                    self.last_watchdog_change = current_time
                    self.last_watchdog_value = watchdog_value
                    logger.debug(f"🔄 Watchdog toggled to {watchdog_value}")
                else:
                    if self.last_watchdog_change and (current_time - self.last_watchdog_change) > self.watchdog_timeout:
                        logger.warning(f"🚨 Watchdog frozen! No toggling in >{self.watchdog_timeout} seconds")
                        if self.active_plc_ip != self.secondary_plc_ip:
                            logger.warning(f"⚠️ Switching to secondary PLC ({self.secondary_plc_ip})")
                            await self._switch_plc(self.secondary_plc_ip)
                    # No failback automático: solo cambia si el watchdog se congela
            return result
        except Exception as e:
            logger.error(f"❌ Error reading PLC data: {e}")
            self.connection_status = False
            return None

    async def _safe_close_client(self):
        if self.client:
            try:
                await self.client.close()
                logger.info("🔒 Modbus client closed")
            except Exception as e:
                logger.warning(f"⚠️ Exception closing Modbus client: {e}")
            finally:
                self.client = None

    async def _switch_plc(self, new_ip: str):
        logger.info(f"🔄 Switching PLC from {self.active_plc_ip} to {new_ip}")
        await self._safe_close_client()
        self.active_plc_ip = new_ip
        self.connection_status = False
        await asyncio.sleep(0.5)
        await self.connect_to_plc()
        if self.connection_status:
            self.set_new_primary(new_ip)

    def set_new_primary(self, new_primary_ip):
        if new_primary_ip == self.primary_plc_ip:
            return  # Ya es el principal
        self.secondary_plc_ip, self.primary_plc_ip = self.primary_plc_ip, new_primary_ip

    async def handle_modbus_command(self, command):
        try:
            signal_id = str(command.get('signalId'))
            value = int(command.get('value', 0))
            mode = command.get('mode', 'pulse')  # 'pulse' o 'fixed'
            cfg = self.signals_config.get(signal_id)
            if not cfg:
                logger.warning(f"⚠️ Signal ID {signal_id} not found in config")
                return
            address = int(cfg['address'])
            if cfg['type'] == 'digital':
                bit = int(cfg.get('bit', 0))
                rr = await self.client.read_holding_registers(address=address, count=1, slave=self.slave_id)
                if rr.isError():
                    logger.error(f"❌ Error reading holding register {address}")
                    return
                current = rr.registers[0]
                if value:
                    new_value = current | (1 << bit)
                else:
                    new_value = current & ~(1 << bit)
                wr = await self.client.write_register(address=address, value=new_value, slave=self.slave_id)
                if wr.isError():
                    logger.error(f"❌ Error writing to holding register {address}")
                else:
                    logger.info(f"✅ Wrote value {new_value} to holding register {address} (bit {bit}, mode {mode})")
                if mode == 'pulse' and value:
                    await asyncio.sleep(0.1)
                    wr = await self.client.write_register(address=address, value=current, slave=self.slave_id)
                    if wr.isError():
                        logger.error(f"❌ Error clearing pulse in holding register {address}")
            elif cfg['type'] == 'analogue':
                wr = await self.client.write_register(address=address, value=value, slave=self.slave_id)
                if wr.isError():
                    logger.error(f"❌ Error writing to holding register {address}")
                else:
                    logger.info(f"✅ Wrote value {value} to holding register {address}")
            else:
                logger.warning(f"⚠️ Unsupported signal type for writing: {cfg['type']}")
        except Exception as e:
            logger.error(f"❌ Exception in handle_modbus_command: {e}")

    async def send_plc_data(self, websocket):
        consecutive_errors = 0
        max_consecutive_errors = 3
        while True:
            try:
                if not self.connection_status:
                    await self.connect_to_plc()
                    if not self.connection_status:
                        consecutive_errors += 1
                        if consecutive_errors == max_consecutive_errors:
                            logger.warning(f"❌ Unable to connect to PLC at {self.active_plc_ip}. Switching to backup.")
                            target_ip = (
                                self.secondary_plc_ip if self.active_plc_ip == self.primary_plc_ip else self.primary_plc_ip
                            )
                            await self._switch_plc(target_ip)
                        if consecutive_errors >= max_consecutive_errors:
                            logger.warning(f"⚠️ {consecutive_errors} consecutive errors. Waiting longer...")
                            await asyncio.sleep(10)
                            consecutive_errors = 0
                        else:
                            await asyncio.sleep(self.poll_interval)
                        continue
                signals = await self.read_plc_data()
                if signals is not None:
                    websocket_data = {
                        "signals": signals,
                        "plc_status": {
                            "connected": self.connection_status,
                            "ip": self.active_plc_ip,
                            "chunks": len(self.chunks),
                            "timestamp": time.time()
                        }
                    }
                    await websocket.send(json.dumps(websocket_data))
                    consecutive_errors = 0
                    logger.debug(f"📤 Sent {len(signals)} signals via WebSocket")
                else:
                    consecutive_errors += 1
                    logger.warning(f"⚠️ Could not get PLC data (error {consecutive_errors})")
            except websockets.exceptions.ConnectionClosed:
                logger.warning("🔌 WebSocket client disconnected")
                break
            except Exception as e:
                consecutive_errors += 1
                logger.error(f"❌ Error sending data: {e}")
            await asyncio.sleep(self.poll_interval)

    async def websocket_handler(self, websocket):
        client_address = websocket.remote_address
        logger.info(f"🔌 Client connected from {client_address}")
        send_task = asyncio.create_task(self.send_plc_data(websocket))
        try:
            async for message in websocket:
                try:
                    data = json.loads(message)
                    if isinstance(data, dict) and data.get('type') == 'command':
                        await self.handle_modbus_command(data['data'])
                except Exception as e:
                    logger.error(f"❌ Error processing incoming message: {e}")
        except websockets.exceptions.ConnectionClosed:
            logger.info(f"🔌 Client {client_address} disconnected")
        finally:
            send_task.cancel()
            try:
                await send_task
            except asyncio.CancelledError:
                pass

    async def _try_connect_both_plcs(self):
        for ip in [self.primary_plc_ip, self.secondary_plc_ip]:
            self.active_plc_ip = ip
            logger.info(f"🌐 Attempting connection to PLC at {ip}")
            connected = await self.connect_to_plc()
            if connected:
                logger.info(f"✅ Using PLC at {ip}")
                return True
        logger.error("❌ Could not connect to any PLC")
        return False

    async def start_server(self):
        await self._try_connect_both_plcs()
        logger.info(f"🚀 Starting WebSocket server at ws://localhost:{self.websocket_port}")
        async with websockets.serve(
            self.websocket_handler,
            "0.0.0.0",
            self.websocket_port,
            ping_interval=20,
            ping_timeout=10
        ):
            logger.info(f"✅ WebSocket server running at ws://localhost:{self.websocket_port}")
            await asyncio.Future()

    async def close(self):
        await self._safe_close_client()
        logger.info("🔒 Modbus connection closed")

async def main():
    server = PLCWebSocketServer(
        plc_ip='192.168.11.12',
        plc_port=502,
        websocket_port=8765,
        poll_interval=1.0,
        max_chunk_size=120,
        slave_id=1
    )
    try:
        await server.start_server()
    except KeyboardInterrupt:
        logger.info("🛑 Server stopped by user")
    except Exception as e:
        logger.error(f"❌ Critical error: {e}")
    finally:
        await server.close()

if __name__ == '__main__':
    asyncio.run(main())
