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
    <div class="pump-switch">
      <!-- RUN (arriba) -->
      <div
        class="pump-button pump-run"
        :class="{ active: isRunning, disabled: isRunning || buttonState === 'starting' }"
        @click="!isRunning && buttonState !== 'starting' ? startPump() : null"
      >
        <span class="button-text">RUN</span>
      </div>
      <!-- Estado (centro) -->
      <div class="pump-status" :class="{ running: isRunning, stopped: !isRunning }">
        <span class="status-text">{{ isRunning ? 'RUNNING' : 'STOPPED' }}</span>
      </div>
      <!-- STOP (abajo) -->
      <div
        class="pump-button pump-stop"
        :class="{ active: isRunning, disabled: !isRunning || buttonState === 'stopping' }"
        @click="isRunning && buttonState !== 'stopping' ? stopPump() : null"
      >
        <span class="button-text">STOP</span>
      </div>
    </div>
  </div>
</template>

<style scoped>
.pump-control {
  display: flex;
  flex-direction: column;
  align-items: center;
  min-width: 120px;
}
.pump-label {
  font-weight: bold;
  font-size: 14px;
  color: #bfc9d1;
  text-align: center;
  margin-bottom: 10px;
}
.pump-switch {
  display: flex;
  flex-direction: column;
  border-radius: 22px;
  overflow: hidden;
  background: #11222b;
  box-shadow: 0 2px 8px rgba(0,0,0,0.4);
  min-width: 100px;
  width: 90px;
}
.pump-button {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 56px;
  font-size: 20px;
  font-weight: bold;
  letter-spacing: 1px;
  border-radius: 18px 18px 0 0;
  cursor: pointer;
  user-select: none;
  transition: background 0.2s, color 0.2s;
}
.pump-run {
  background: #19303a;
  color: #6c879a;
  border-radius: 18px 18px 0 0;
}
.pump-run.active {
  background: #27ae60;
  color: #fff;
}
.pump-run.disabled {
  pointer-events: none;
  opacity: 0.7;
}
.pump-status {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 38px;
  font-size: 18px;
  font-family: 'Roboto Mono', 'Consolas', monospace;
  font-weight: bold;
  letter-spacing: 1px;
  background: #c0392b;
  color: #fff;
  border-radius: 0;
  margin: 0;
}
.pump-status.running {
  background: #27ae60;
  color: #fff;
}
.pump-status.stopped {
  background: #c0392b;
  color: #fff;
}
.status-text {
  width: 100%;
  text-align: center;
}
.pump-stop {
  background: #b71c1c;
  color: #fff;
  border-radius: 0 0 18px 18px;
  height: 56px;
  font-size: 22px;
  font-weight: bold;
  box-shadow: 0 2px 8px rgba(0,0,0,0.3) inset;
}
.pump-stop.active {
  background: #b71c1c;
  color: #fff;
}
.pump-stop.disabled {
  pointer-events: none;
  opacity: 0.7;
}
.button-text {
  font-size: 20px;
  font-weight: bold;
  letter-spacing: 1px;
}
@media (max-width: 500px) {
  .pump-control {
    min-width: 60px;
  }
  .pump-switch {
    width: 48px;
    min-width: 48px;
  }
  .pump-button, .pump-stop, .pump-run {
    height: 28px;
    font-size: 12px;
    border-radius: 10px 10px 0 0;
  }
  .pump-status {
    height: 18px;
    font-size: 10px;
  }
  .button-text {
    font-size: 12px;
  }
  .pump-stop {
    border-radius: 0 0 10px 10px;
    font-size: 14px;
  }
}
</style>
