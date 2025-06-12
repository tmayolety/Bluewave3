import asyncio
import websockets
import json
import logging
from pyModbusTCP.client import ModbusClient
from typing import Dict, Any, Optional, List, Tuple
import time
import os
from concurrent.futures import ThreadPoolExecutor
import threading

logging.basicConfig(level=logging.INFO, format='%(asctime)s - %(levelname)s - %(message)s')
logger = logging.getLogger(__name__)

SIGNALS_FILE = os.path.join(os.path.dirname(__file__), 'signals.json')

def load_signals_config(path: str) -> Dict[str, Any]:
    with open(path, 'r') as f:
        return json.load(f)

class PLCWebSocketServer:
    def __init__(self, plc_ip: str = '192.168.11.12', plc_port: int = 502, 
                 websocket_port: int = 8765, poll_interval: float = 1.0, 
                 max_chunk_size: int = 125, max_workers: int = 4):
        self.plc_ip = plc_ip
        self.plc_port = plc_port
        self.websocket_port = websocket_port
        self.poll_interval = poll_interval
        self.max_chunk_size = max_chunk_size
        self.max_workers = max_workers

        self.signals_config = load_signals_config(SIGNALS_FILE)
        self.required_addresses = sorted(set(
            int(cfg["address"]) for cfg in self.signals_config.values()
        ))

        # Preparar chunks para lectura concurrente
        self.chunks = self._prepare_chunks()
        
        # Thread pool para lecturas concurrentes
        self.executor = ThreadPoolExecutor(max_workers=self.max_workers)
        
        # Crear múltiples clientes Modbus para concurrencia
        self.modbus_clients = []
        self._init_modbus_clients()
        
        self.connection_status = False

    def _init_modbus_clients(self):
        """Inicializa múltiples clientes Modbus para concurrencia"""
        for i in range(self.max_workers):
            client = ModbusClient(
                host=self.plc_ip, 
                port=self.plc_port, 
                auto_open=True, 
                auto_close=False,
                timeout=5.0
            )
            self.modbus_clients.append(client)
            logger.debug(f"Created Modbus client {i+1}/{self.max_workers}")

    def _prepare_chunks(self) -> List[Dict[str, int]]:
        """Prepara los chunks de lectura basados en las direcciones requeridas"""
        if not self.required_addresses:
            return []
        
        chunks = []
        min_addr = min(self.required_addresses) - 1  # Modbus offset
        max_addr = max(self.required_addresses) - 1
        total_range = max_addr - min_addr + 1
        
        # Dividir en chunks
        for start in range(min_addr, max_addr + 1, self.max_chunk_size):
            count = min(self.max_chunk_size, max_addr - start + 1)
            chunks.append({
                'start_address': start,
                'count': count,
                'end_address': start + count - 1
            })
        
        logger.info(f"📊 Prepared {len(chunks)} chunks for {total_range} registers")
        return chunks

    def _get_client_for_thread(self) -> ModbusClient:
        """Obtiene un cliente Modbus específico para el hilo actual"""
        thread_id = threading.get_ident()
        client_index = thread_id % len(self.modbus_clients)
        return self.modbus_clients[client_index]

    def _read_modbus_chunk(self, chunk: Dict[str, int]) -> Tuple[Dict[str, int], Optional[List[int]]]:
        """Lee un chunk específico de registros Modbus"""
        try:
            client = self._get_client_for_thread()
            
            # Asegurar conexión
            if not client.is_open:
                success = client.open()
                if not success:
                    logger.error(f"❌ Failed to open client for chunk {chunk['start_address']}")
                    return chunk, None
            
            # Leer el chunk
            result = client.read_input_registers(chunk['start_address'], chunk['count'])
            
            if result is None:
                logger.error(f"❌ Failed to read chunk {chunk['start_address']}-{chunk['end_address']}")
                return chunk, None
            
            logger.debug(f"✅ Read chunk {chunk['start_address']}-{chunk['end_address']}: {len(result)} registers")
            return chunk, result
            
        except Exception as e:
            logger.error(f"❌ Exception reading chunk {chunk['start_address']}: {e}")
            return chunk, None

    async def connect_to_plc(self) -> bool:
        """Conecta todos los clientes Modbus"""
        try:
            success_count = 0
            for i, client in enumerate(self.modbus_clients):
                if not client.is_open:
                    success = client.open()
                    if success:
                        success_count += 1
                    else:
                        logger.error(f"❌ Failed to connect client {i+1}")
                else:
                    success_count += 1
            
            if success_count > 0:
                self.connection_status = True
                logger.info(f"✅ Connected {success_count}/{len(self.modbus_clients)} clients to PLC at {self.plc_ip}:{self.plc_port}")
                return True
            else:
                logger.error(f"❌ Failed to connect any client to PLC {self.plc_ip}:{self.plc_port}")
                return False
                
        except Exception as e:
            logger.error(f"❌ Exception connecting to PLC: {e}")
            return False

    async def read_plc_data(self) -> Optional[Dict[str, Any]]:
        """Lee datos del PLC usando chunks concurrentes"""
        if not self.connection_status:
            return None

        result = {}
        try:
            # Ejecutar lecturas concurrentes
            loop = asyncio.get_event_loop()
            futures = []
            
            for chunk in self.chunks:
                future = loop.run_in_executor(self.executor, self._read_modbus_chunk, chunk)
                futures.append(future)
            
            # Esperar a que todas las lecturas terminen
            chunk_results = await asyncio.gather(*futures)
            
            # Reconstruir el mapa completo de registros
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
            
            # Procesar señales configuradas
            timestamp = time.time()
            
            for sid, cfg in self.signals_config.items():
                addr = int(cfg["address"]) - 1  # Modbus offset
                
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
                        "address": addr + 1,
                        "description": cfg.get("description", ""),
                        "type": cfg["type"],
                        "bit": cfg.get("bit") if cfg["type"] == "digital" else None,
                        "timestamp": timestamp
                    }
                else:
                    logger.warning(f"⚠️ Signal {sid} address {cfg['address']} not found in read data")
            
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

                signals = await self.read_plc_data()

                if signals is not None:
                    websocket_data = {
                        "signals": signals,
                        "plc_status": {
                            "connected": self.connection_status,
                            "ip": self.plc_ip,
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
        """Cleanup de recursos"""
        if hasattr(self, 'modbus_clients'):
            for client in self.modbus_clients:
                if client.is_open:
                    client.close()
        if hasattr(self, 'executor'):
            self.executor.shutdown(wait=True)
        logger.info("🔒 All Modbus connections closed")

async def main():
    server = PLCWebSocketServer(
        plc_ip='192.168.11.12',
        plc_port=502,
        websocket_port=8765,
        poll_interval=3.0,
        max_chunk_size=125,  # Registros por chunk
        max_workers=1       # Hilos concurrentes
    )
    try:
        await server.start_server()
    except KeyboardInterrupt:
        logger.info("🛑 Server stopped by user")
    except Exception as e:
        logger.error(f"❌ Critical error: {e}")
    finally:
        if hasattr(server, 'modbus_clients'):
            for client in server.modbus_clients:
                if client.is_open:
                    client.close()
        if hasattr(server, 'executor'):
            server.executor.shutdown(wait=True)

if __name__ == '__main__':
    asyncio.run(main())
