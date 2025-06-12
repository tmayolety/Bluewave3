
// WebSocketBridge.js
import { applySignalData, applyAlarmData } from '../src/services/signalStore.js'

// Configuración de reconexión con backoff exponencial
const RECONNECT_BASE_DELAY = 3000
let reconnectAttempts = 0

export function startWebSocketBridge() {
  const socket = new WebSocket('ws://localhost:8765')

  socket.onopen = () => {
    reconnectAttempts = 0
    console.debug('%c[WebSocket]', 'color: #4CAF50', 'Conexión establecida')
  }

  socket.onmessage = (event) => {
    try {
      const data = JSON.parse(event.data)
      
      // Micro-optimización: evitar JSON.parse para datos conocidos
      if (data.signals) applySignalData(data.signals)
      if (data.alarms) applyAlarmData(data.alarms)
      
    } catch (err) {
      console.error('[WebSocket] Error en el formato de datos:', err)
      // Opcional: enviar feedback al servidor
    }
  }

  socket.onerror = (err) => {
    console.error('[WebSocket] Error de conexión:', err)
  }

  socket.onclose = () => {
    const delay = RECONNECT_BASE_DELAY * Math.pow(2, reconnectAttempts)
    reconnectAttempts = Math.min(reconnectAttempts + 1, 5) // Max 5 intentos
    
    console.warn(`[WebSocket] Reconectando en ${Math.round(delay/1000)}s...`)
    setTimeout(startWebSocketBridge, delay)
  }
}