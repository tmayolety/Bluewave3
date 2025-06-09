# bluewave 3

This project is the **next-generation UI for BlueWave 3**, featuring live signal visualization, WebSocket communication, and a simplified backend simulation layer.

## Project Setup

```sh
npm install

## Compile and Hot-Reload for Development

```sh
npm run dev

## Project Structure

```sh
bluewave3/
├── backend/                # Python backend (signal simulator)
│   └── server.py           # Sends simulated signal & alarm JSON
├── src/
│   ├── services/
│   │   └── signalStore.js  # Vue signal store: reactivity & handlers
│   ├── ws-bridge.js        # WebSocket bridge logic
│   ├── views/              # Screens (e.g., SingleLine.vue)
│   ├── components/         # Reusable Vue UI components
│   └── ...
├── main.js                 # App entrypoint + provide/inject wiring
├── App.vue                 # Layout + routing

## Run with

```sh
cd backend
py server.py
