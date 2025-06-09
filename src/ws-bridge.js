import { applySignalData, applyAlarmData } from './main';

export function startWebSocketBridge() {
  const socket = new WebSocket('ws://localhost:8765');

  socket.onopen = () => {
    console.log('%c[WebSocket]', 'color: green', 'Conectado a ws://localhost:8765');
  };

  socket.onmessage = (event) => {
    try {
      const data = JSON.parse(event.data);
      if (data.signals) applySignalData(data.signals);
      if (data.alarms) applyAlarmData(data.alarms);
    } catch (err) {
      console.error('[WebSocket] Error procesando mensaje:', err);
    }
  };

  socket.onerror = (err) => {
    console.error('[WebSocket] Error:', err);
  };

  socket.onclose = () => {
    console.warn('[WebSocket] Conexión cerrada. Reintentando en 3s...');
    setTimeout(startWebSocketBridge, 3000);
  };
}




