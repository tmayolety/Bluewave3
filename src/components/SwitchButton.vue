<script setup>
import { ref, inject, watchEffect, computed } from 'vue';

const props = defineProps({
  startSignalId: String,
  stopSignalId: String,
  feedbackSignalId: String,
  commandMode: {
    type: String,
    default: 'pulse'
  }
})

const sendCommand = inject('sendCommand')
const getSignalValueRaw = inject('getSignalValueRaw')

const feedbackValue = ref(null)

watchEffect(() => {
  feedbackValue.value = getSignalValueRaw(props.feedbackSignalId)
})

const activeButton = computed(() => {
  return feedbackValue.value > 0 ? 'start' : 'stop'
})

const handleStart = async () => {
  if (activeButton.value !== 'start') {
    try {
      await sendCommand({
        signalId: props.startSignalId,
        value: 1,
        mode: props.commandMode
      })
    } catch (error) {
      console.error('[SWITCHBUTTON] Error enviando comando START:', error)
    }
  }
}

const handleStop = async () => {
  if (activeButton.value !== 'stop') {
    try {
      await sendCommand({
        signalId: props.stopSignalId,
        value: 1,
        mode: props.commandMode
      })
    } catch (error) {
      console.error('[SWITCHBUTTON] Error enviando comando STOP:', error)
    }
  }
}
</script>

<template>
  <div class="switch-button-control">
    <div class="switch-buttons">
      <div
        class="switch-btn start"
        :class="{ active: activeButton === 'start' }"
        @click="handleStart"
      >
        <span class="btn-text">START</span>
      </div>
      <div
        class="switch-btn stop"
        :class="{ active: activeButton === 'stop' }"
        @click="handleStop"
      >
        <span class="btn-text">STOP</span>
      </div>
    </div>
  </div>
</template>

<style scoped>
.switch-button-control {
  display: flex;
  flex-direction: column;
  align-items: center;
  min-width: 100px;
  max-width: 220px;
  margin: 0 auto;
}
.switch-buttons {
  display: flex;
  flex-direction: row;
  width: 100%;
  justify-content: center;
  gap: 2px;
}
.switch-btn {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100px;
  height: 38px;
  font-size: 20px;
  font-weight: bold;
  border-radius: 10px;
  cursor: pointer;
  user-select: none;
  transition: background 0.2s, color 0.2s;
  color: #fff;
  background: #102e42;
  box-shadow: 0 2px 8px rgba(0,0,0,0.3) inset;
}
.switch-btn.active.start {
  background: #3498db;
  color: #fff;
}
.switch-btn.active.stop {
  background: #102e42;
  color: #fff;
  opacity: 1;
}
.switch-btn:not(.active) {
  opacity: 0.7;
}
.btn-text {
  font-size: 20px;
  font-weight: bold;
  letter-spacing: 1px;
  color: #fff;
}
@media (max-width: 700px) {
  .switch-btn {
    width: 60px;
    height: 24px;
    font-size: 11px;
  }
  .btn-text {
    font-size: 11px;
  }
}
</style> 