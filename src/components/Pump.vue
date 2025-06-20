<script setup>
import { ref, watchEffect, inject } from 'vue';

const props = defineProps([
  'feedbackSignalId',
  'startSignalId',
  'stopSignalId',
  'label',
  'commandMode', // 'pulse' o 'fixed'
  'header' // Nueva prop para la cabecera
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
        mode: props.commandMode || 'pulse'
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
    <div class="pump-header" v-if="props.header">{{ props.header }}</div>
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
  min-width: 150px;
  max-width: 190px;
  margin: 0 auto;
}
.pump-header {
  font-size: 16px;
  color: #fff;
  text-align: center;
  margin-bottom: 8px;
  white-space: pre-line;
}
.pump-label {
  font-weight: bold;
  font-size: 15px;
  color: #fff;
  text-align: center;
  margin-bottom: 8px;
}
.pump-switch {
  display: flex;
  flex-direction: column;
  border-radius: 24px;
  overflow: hidden;
  background: #0a1e2b;
  box-shadow: 0 2px 12px rgba(0,0,0,0.4);
  min-width: 120px;
  width: 100%;
  max-width: 160px;
}
.pump-button {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100px;
  font-size: 22px;
  font-weight: bold;
  letter-spacing: 1px;
  border-radius: 12px 12px 0 0;
  cursor: pointer;
  user-select: none;
  transition: background 0.2s, color 0.2s;
  color: #fff;
}
.pump-run {
  background: #19303a;
  color: #fff;
  border-radius: 12px 12px 0 0;
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
  height: 54px;
  font-size: 19px;
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
  color: #fff;
}
.pump-stop {
  background: #b71c1c;
  color: #fff;
  border-radius: 0 0 12px 12px;
  height: 100px;
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
  font-size: 22px;
  font-weight: bold;
  letter-spacing: 1px;
  color: #fff;
}
@media (min-width: 1200px) {
  .pump-control {
    min-width: 180px;
    max-width: 230px;
  }
  .pump-switch {
    min-width: 150px;
    max-width: 200px;
  }
  .pump-button, .pump-stop {
    height: 110px;
    font-size: 26px;
  }
  .pump-status {
    height: 70px;
    font-size: 24px;
  }
  .button-text {
    font-size: 26px;
  }
}
@media (max-width: 1080px) {
  .pump-control {
    min-width: 110px;
    max-width: 140px;
  }
  .pump-switch {
    min-width: 90px;
    max-width: 110px;
  }
  .pump-button, .pump-stop {
    height: 38px;
    font-size: 13px;
  }
  .pump-status {
    height: 18px;
    font-size: 10px;
  }
  .button-text {
    font-size: 13px;
  }
}
@media (max-width: 700px) {
  .pump-control {
    min-width: 70px;
    max-width: 90px;
  }
  .pump-switch {
    min-width: 50px;
    max-width: 60px;
  }
  .pump-button, .pump-stop {
    height: 32px;
    font-size: 9px;
  }
  .pump-status {
    height: 14px;
    font-size: 7px;
  }
  .button-text {
    font-size: 9px;
  }
}
</style>
