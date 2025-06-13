// WebSocketBridge.js
import { applySignalData, applyAlarmData } from '../src/services/signalStore.js'

// Variables globales
let socket = null
const commandQueue = []
let reconnectAttempts = 0
const RECONNECT_BASE_DELAY = 3000

// Función para enviar comandos
export function sendCommand(command) {
  if (socket?.readyState === WebSocket.OPEN) {
    socket.send(JSON.stringify({ type: 'command', data: command }))
  } else {
    commandQueue.push(command)
    console.warn('[WebSocket] Comando en cola - conexión no disponible')
  }
}

// Procesar cola de comandos pendientes
function processQueue() {
  while (commandQueue.length > 0 && socket?.readyState === WebSocket.OPEN) {
    const cmd = commandQueue.shift()
    socket.send(JSON.stringify({ type: 'command', data: cmd }))
  }
}

export function startWebSocketBridge() {
  socket = new WebSocket('ws://localhost:8765')

  socket.onopen = () => {
    reconnectAttempts = 0
    console.debug('%c[WebSocket]', 'color: #4CAF50', 'Conexión establecida')
    processQueue() // Enviar comandos pendientes
  }

  socket.onmessage = (event) => {
    try {
      const data = JSON.parse(event.data)
      
      if (data.signals) applySignalData(data.signals)
      if (data.alarms) applyAlarmData(data.alarms)
      
    } catch (err) {
      console.error('[WebSocket] Error procesando mensaje:', err)
    }
  }

  socket.onerror = (err) => {
    console.error('[WebSocket] Error:', err)
  }

  socket.onclose = () => {
    const delay = RECONNECT_BASE_DELAY * Math.pow(2, reconnectAttempts)
    reconnectAttempts = Math.min(reconnectAttempts + 1, 5)
    
    console.warn(`[WebSocket] Reconectando en ${Math.round(delay/1000)}s...`)
    setTimeout(startWebSocketBridge, delay)
  }
}
