<script setup>
import { ref, watchEffect, inject } from 'vue';

const props = defineProps([
  'feedbackSignalId',
  'startSignalId',
  'stopSignalId',
  'label',
  'commandMode' // 'pulse' o 'fixed'
])

const getSignalValueRaw = inject('getSignalValueRaw')
const sendCommand = inject('sendCommand')

const feedbackValue = ref(null)
const isRunning = ref(false)
const buttonState = ref('stopped')

watchEffect(() => {
  feedbackValue.value = getSignalValueRaw(props.feedbackSignalId);
  if (feedbackValue.value > 0) {
    isRunning.value = true
    buttonState.value = 'running'
  } else {
    isRunning.value = false
    buttonState.value = 'stopped'
  }
});

const startPump = async () => {
  if (buttonState.value === 'stopped') {
    buttonState.value = 'starting'
    try {
      await sendCommand({
        signalId: props.startSignalId,
        value: 1,
        mode: props.commandMode || 'pulse' // por defecto 'pulse'
      })
      console.log(`[PUMP] Comando START enviado para señal ${props.startSignalId}`)
    } catch (error) {
      console.error('[PUMP] Error enviando comando START:', error)
      buttonState.value = 'stopped'
    }
  }
}

const stopPump = async () => {
  if (buttonState.value === 'running') {
    buttonState.value = 'stopping'
    try {
      await sendCommand({
        signalId: props.stopSignalId,
        value: 1,
        mode: props.commandMode || 'pulse'
      })
      console.log(`[PUMP] Comando STOP enviado para señal ${props.stopSignalId}`)
    } catch (error) {
      console.error('[PUMP] Error enviando comando STOP:', error)
      buttonState.value = 'running'
    }
  }
}
</script>

<template>
  <div class="pump-control">
    <div class="pump-label">{{ props.label }}</div>
    
    <div class="pump-switch" :class="buttonState">
      <!-- Parte superior - RUN -->
      <div 
        class="pump-button pump-run" 
        :class="{ active: isRunning, disabled: buttonState === 'starting' }"
        @click="startPump"
      >
        <span class="button-text">{{ buttonState === 'starting' ? 'STARTING...' : 'RUN' }}</span>
      </div>
      
      <!-- Separador -->
      <div class="pump-separator"></div>
      
      <!-- Parte inferior - STOP -->
      <div 
        class="pump-button pump-stop" 
        :class="{ active: !isRunning, disabled: buttonState === 'stopping' }"
        @click="stopPump"
      >
        <span class="button-status">{{ isRunning ? 'RUNNING' : 'STOPPED' }}</span>
        <span class="button-text">{{ buttonState === 'stopping' ? 'STOPPING...' : 'STOP' }}</span>
      </div>
    </div>
    
    <!-- Indicador de estado -->
    <div class="pump-feedback">
      <span class="feedback-label">Status:</span>
      <span class="feedback-value" :class="{ running: isRunning, stopped: !isRunning }">
        {{ isRunning ? 'RUNNING' : 'STOPPED' }}
      </span>
    </div>
  </div>
</template>

<style scoped>
.pump-control {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
  min-width: 120px;
}

.pump-label {
  font-weight: bold;
  font-size: 14px;
  color: #333;
  text-align: center;
}

.pump-switch {
  display: flex;
  flex-direction: column;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
  min-width: 100px;
  min-height: 120px;
}

.pump-button {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 15px 20px;
  cursor: pointer;
  transition: all 0.2s ease;
  user-select: none;
  position: relative;
}

.pump-button.disabled {
  cursor: not-allowed;
  opacity: 0.7;
}

.pump-run {
  background: linear-gradient(135deg, #4a90e2, #357abd);
  color: white;
  flex: 1;
}

.pump-run:hover:not(.disabled) {
  background: linear-gradient(135deg, #357abd, #2868a0);
}

.pump-run.active {
  background: linear-gradient(135deg, #2e7d32, #1b5e20);
  box-shadow: inset 0 2px 4px rgba(0,0,0,0.3);
}

.pump-separator {
  height: 2px;
  background: #333;
}

.pump-stop {
  background: linear-gradient(135deg, #e53935, #c62828);
  color: white;
  flex: 1.2;
}

.pump-stop:hover:not(.disabled) {
  background: linear-gradient(135deg, #c62828, #b71c1c);
}

.pump-stop.active {
  background: linear-gradient(135deg, #d32f2f, #b71c1c);
  box-shadow: inset 0 2px 4px rgba(0,0,0,0.3);
}

.button-text {
  font-weight: bold;
  font-size: 14px;
  letter-spacing: 1px;
}

.button-status {
  font-size: 11px;
  font-weight: normal;
  opacity: 0.9;
  margin-bottom: 4px;
}

.pump-feedback {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 12px;
}

.feedback-label {
  color: #666;
}

.feedback-value {
  font-weight: bold;
  padding: 2px 8px;
  border-radius: 4px;
}

.feedback-value.running {
  background: #4caf50;
  color: white;
}

.feedback-value.stopped {
  background: #f44336;
  color: white;
}

/* Animaciones */
.pump-switch.starting .pump-run {
  animation: pulse 1s infinite;
}

.pump-switch.stopping .pump-stop {
  animation: pulse 1s infinite;
}

@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.7; }
}
</style>
