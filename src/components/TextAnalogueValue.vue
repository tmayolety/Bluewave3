<script setup>
import { ref, watchEffect, inject } from 'vue';

const props = defineProps({
  signalId: { type: Number, required: true },
  unit: { type: String, default: '' },
  title: { type: String, default: '' },
  valueMode: { type: String, default: 'raw' }, 
  valueDecimals: { type: Number, default: 0 },
});

const getSignalValueRaw = inject('getSignalValueRaw');
const getSignalValueEscalated = inject('getSignalValueEscalated');

const value = ref(null);
const formattedValue = ref(0);

watchEffect(() => {
  let raw = props.valueMode === 'escalated'
    ? getSignalValueEscalated?.(props.signalId)
    : getSignalValueRaw?.(props.signalId);

  if (!isNaN(raw)) {
    value.value = Number(raw);
    formattedValue.value = value.value.toFixed(props.valueDecimals);
  } else {
    formattedValue.value = 0;
  }
});
</script>

<template>
  <div class="text-analogue-widget">
    <div class="title">{{ title }}</div>
    <div class="value-line">
      <span class="value">{{ formattedValue }}</span>
      <span class="unit">{{ unit }}</span>
    </div>
  </div>
</template>

<style scoped>
.text-analogue-widget {
  padding: 0.75rem 1rem;
  border-radius: 0.4rem;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.title {
  color: #d3dce3;
  font-size: 0.9rem;
  font-weight: 500;
  margin-bottom: 0.3rem;
}

.value-line {
  display: flex;
  align-items: baseline;
  gap: 0.25rem;
}

.value {
  color: white;
  font-weight: 700;
  font-size: 1.6rem;
  line-height: 1;
}

.unit {
  color: #6b7986;
  font-size: 0.9rem;
  font-weight: 400;
}
</style>
