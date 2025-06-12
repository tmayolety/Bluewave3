import asyncio
import websockets
import json
import logging
from pyModbusTCP.client import ModbusClient
from typing import Dict, Any, Optional
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
                 websocket_port: int = 8765, poll_interval: float = 3.0):
        self.plc_ip = plc_ip
        self.plc_port = plc_port
        self.websocket_port = websocket_port
        self.poll_interval = poll_interval

        self.signals_config = load_signals_config(SIGNALS_FILE)

        self.required_addresses = sorted(set(
            int(cfg["address"]) for cfg in self.signals_config.values()
        ))

        self.modbus_client = ModbusClient(
            host=self.plc_ip, 
            port=self.plc_port, 
            auto_open=True, 
            auto_close=False,
            timeout=5.0
        )
        self.connection_status = False

    async def connect_to_plc(self) -> bool:
        try:
            if not self.modbus_client.is_open:
                success = self.modbus_client.open()
                if success:
                    self.connection_status = True
                    logger.info(f"✅ Connected to PLC at {self.plc_ip}:{self.plc_port}")
                    return True
                else:
                    logger.error(f"❌ Failed to connect to PLC {self.plc_ip}:{self.plc_port}")
                    return False
            return True
        except Exception as e:
            logger.error(f"❌ Exception connecting to PLC: {e}")
            return False

    def read_plc_data(self) -> Optional[Dict[str, Any]]:
        if not self.connection_status:
            return None

        result = {}
        try:

            if self.required_addresses:
                min_addr = min(self.required_addresses) - 1  # Modbus offset
                max_addr = max(self.required_addresses) - 1
                count = max_addr - min_addr + 1
                
                input_registers = self.modbus_client.read_input_registers(min_addr, count)
                
                if input_registers is None:
                    logger.error("❌ Failed to read input registers from PLC")
                    return None
            else:
                input_registers = []

            timestamp = time.time()
            
            # Procesar todas las señales configuradas
            for sid, cfg in self.signals_config.items():
                addr = int(cfg["address"]) - 1  # Modbus offset
                
                # Verificar que el registro está en el rango leído
                if min_addr <= addr <= max_addr:
                    reg_value = input_registers[addr - min_addr]
                    
                    if cfg["type"] == "analogue":
                        # Para analógicas: usar el valor completo del registro
                        value = reg_value
                        
                    elif cfg["type"] == "digital":
                        # Para digitales: extraer el bit específico
                        bit = int(cfg.get("bit", 0))
                        value = (reg_value >> bit) & 1
                        
                    else:
                        continue  # Tipo no reconocido
                    
                    result[sid] = {
                        "value": value,
                        "address": addr + 1,
                        "description": cfg.get("description", ""),
                        "type": cfg["type"],
                        "bit": cfg.get("bit") if cfg["type"] == "digital" else None,
                        "timestamp": timestamp
                    }
                else:
                    logger.warning(f"⚠️ Signal {sid} address {cfg['address']} not in read range")
            
            return result

        except Exception as e:
            logger.error(f"❌ Error reading PLC data: {e}")
            self.connection_status = False
            return None

    async def send_plc_data(self, websocket):
        consecutive_errors = 0
        max_consecutive_errors = 3

        while True:
            try:
                if not self.connection_status:
                    await self.connect_to_plc()
                    if not self.connection_status:
                        consecutive_errors += 1
                        if consecutive_errors >= max_consecutive_errors:
                            logger.warning(f"⚠️ {consecutive_errors} consecutive errors. Waiting longer...")
                            await asyncio.sleep(10)
                            consecutive_errors = 0
                        else:
                            await asyncio.sleep(self.poll_interval)
                        continue

                signals = self.read_plc_data()

                if signals is not None:
                    websocket_data = {
                        "signals": signals,
                        "plc_status": {
                            "connected": self.connection_status,
                            "ip": self.plc_ip,
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

        try:
            await self.send_plc_data(websocket)
        except Exception as e:
            logger.error(f"❌ Error in WebSocket handler: {e}")
        finally:
            logger.info(f"🔌 Client {client_address} disconnected")

    async def start_server(self):
        await self.connect_to_plc()
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

    def __del__(self):
        if hasattr(self, 'modbus_client') and self.modbus_client.is_open:
            self.modbus_client.close()
            logger.info("🔒 Modbus connection closed")

async def main():
    server = PLCWebSocketServer(
        plc_ip='192.168.11.12',
        plc_port=502,
        websocket_port=8765,
        poll_interval=3.0
    )
    try:
        await server.start_server()
    except KeyboardInterrupt:
        logger.info("🛑 Server stopped by user")
    except Exception as e:
        logger.error(f"❌ Critical error: {e}")
    finally:
        if hasattr(server, 'modbus_client') and server.modbus_client.is_open:
            server.modbus_client.close()

if __name__ == '__main__':
    asyncio.run(main())
