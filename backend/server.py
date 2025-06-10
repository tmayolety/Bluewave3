import asyncio
import websockets
import json
import random

async def send_data(websocket):
    while True:
        digital_ids = [4336, 4338, 4699, 4701, 2049, 2050]
        analog_ids = [4001, 4002, 4003, 4007, 4011, 4014, 4370, 4371, 4372, 4373, 4374, 4375, 4376, 4377, 4378, 4379, 4380, 4381, 4382, 4383, 4384, 4385, 4386, 4387, 4388, 4389, 4390, 4391, 4392, 4393, 4394, 4395, 4396, 4397, 4398, 4399]

        signals = {}
        for sid in digital_ids:
            signals[str(sid)] = { "value": random.choice([0, 1]) }

        for sid in analog_ids:
            val = round(random.uniform(0, 1000), 2)
            signals[str(sid)] = { "value": val, "limits": { "Min": 0, "Max": 1000 } }

        alarms = {
            "200": { "state": "active", "ack": False, "muted": False },
            "201": { "state": "cleared", "ack": True, "muted": False }
        }

        await websocket.send(json.dumps({
            "signals": signals,
            "alarms": alarms
        }))

        await asyncio.sleep(3)

async def handler(websocket):
    await send_data(websocket)

async def main():
    async with websockets.serve(handler, "0.0.0.0", 8765):
        print("✅ WebSocket server running on ws://localhost:8765")
        await asyncio.Future()  # Mantiene el servidor vivo

asyncio.run(main())










