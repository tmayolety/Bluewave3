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
  return ticks.reverse() 
})

watchEffect(() => {
  const raw = props.valueMode === 'escalated'
    ? getSignalValueEscalated?.(props.signalId)
    : getSignalValueRaw?.(props.signalId)

  value.value = isNaN(raw) ? 0 : Math.round(raw)
})
</script>

<template>
  <div class="industrial-bar-vertical">
    <div class="bar-header">
      <span class="bar-title">{{ title }}</span>
      <span class="bar-value">
        {{ value }}
        <span class="bar-unit">{{ unit }}</span>
      </span>
    </div>

    <div class="bar-graph">
      <div class="bar-container">
        <div class="bar-fill" :style="{ height: percentage + '%', backgroundColor: color }"></div>
      </div>

      <div v-if="displayScale" class="bar-scale">
        <span v-for="tick in scaleTicks" :key="tick" class="bar-tick">{{ tick }}</span>
      </div>
    </div>
  </div>
</template>

<style scoped>
.industrial-bar-vertical {
  background-color: #0a1e2b;
  padding: 1rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.75rem;
  width: 120px;
  box-sizing: border-box;
}

.bar-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 0.25rem;
}

.bar-title {
  font-size: 0.9rem;
  color: #ffffff;
  font-weight: 500;
}

.bar-value {
  font-size: 1.2rem;
  color: #ffffff;
  font-weight: bold;
}

.bar-unit {
  font-size: 0.75rem;
  color: #aaaaaa;
  margin-left: 0.3rem;
}

.bar-graph {
  display: flex;
  flex-direction: row;
  align-items: stretch;
  gap: 8px;
}

.bar-container {
  height: 180px;
  width: 36px;
  background-color: #22323c;
  border-radius: 6px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  position: relative;
}

.bar-fill {
  width: 100%;
  transition: height 0.3s ease;
}

.bar-scale {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  font-size: 0.7rem;
  color: #7c8b9a;
  white-space: nowrap;
}

.bar-tick {
  text-align: left;
  min-height: 1px;
}
</style>
