<script setup>
import { ref, watchEffect, inject, computed } from 'vue'

const props = defineProps({
  signalId: Number,
  title: String,
  unit: String,
  scaleBottom: Number,
  scaleTop: Number,
  scaleStep: Number,
  displayScale: Boolean,
  valueMode: {
    type: String,
    default: 'raw'
  },
  color: {
    type: String,
    default: '#1ec2a4'
  }
})

const getSignalValueRaw = inject('getSignalValueRaw')
const getSignalValueEscalated = inject('getSignalValueEscalated')

const value = ref(0)

const percentage = computed(() => {
  const range = props.scaleTop - props.scaleBottom
  const clamped = Math.max(props.scaleBottom, Math.min(value.value, props.scaleTop))
  return ((clamped - props.scaleBottom) * 100) / range
})

const scaleTicks = computed(() => {
  const ticks = []
  for (let i = props.scaleBottom; i <= props.scaleTop; i += props.scaleStep) {
    ticks.push(i)
  }
  return ticks
})

watchEffect(() => {
  const raw = props.valueMode === 'escalated'
    ? getSignalValueEscalated?.(props.signalId)
    : getSignalValueRaw?.(props.signalId)

  value.value = isNaN(raw) ? 0 : Math.round(raw)
})
</script>

<template>
  <div class="industrial-bar">
    <div class="bar-header">
      <span class="bar-title">{{ title }}</span>
      <span class="bar-value">
        {{ value }}
        <span class="bar-unit">{{ unit }}</span>
      </span>
    </div>

    <div class="bar-container">
      <div class="bar-fill" :style="{ width: percentage + '%', backgroundColor: color }"></div>
    </div>

    <div v-if="displayScale" class="bar-scale">
      <span v-for="tick in scaleTicks" :key="tick" class="bar-tick">{{ tick }}</span>
    </div>
  </div>
</template>

<style scoped>
.industrial-bar {
  background-color: #0a1e2b;
  padding: 1rem;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  width: 100%;
  max-width: 100%;
  box-sizing: border-box;
}

.bar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 0.25rem;
}

.bar-title {
  font-size: 0.9rem;
  color: #ffffff;
  font-weight: 500;
  flex: 1 1 auto;
  min-width: 120px;
}

.bar-value {
  font-size: 1.2rem;
  color: #ffffff;
  font-weight: bold;
  text-align: right;
  white-space: nowrap;
}

.bar-unit {
  font-size: 0.75rem;
  color: #aaaaaa;
  margin-left: 0.3rem;
}

.bar-container {
  height: 1.5rem;
  background-color: #22323c;
  border-radius: 6px;
  overflow: hidden;
  position: relative;
  width: 100%;
  flex-shrink: 0;
}

.bar-fill {
  height: 100%;
  transition: width 0.3s ease;
}

.bar-scale {
  display: flex;
  justify-content: space-between;
  font-size: 0.7rem;
  color: #7c8b9a;
  padding: 0 2px;
  flex-wrap: nowrap;
  overflow-x: auto;
  white-space: nowrap;
}

.bar-tick {
  flex: 1 1 auto;
  text-align: center;
  min-width: 20px;
}
</style>
