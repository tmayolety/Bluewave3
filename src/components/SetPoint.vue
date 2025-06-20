<script setup>
import { ref, watch } from 'vue'

const props = defineProps({
  label: {
    type: String,
    default: 'Set Point'
  },
  min: {
    type: Number,
    default: 0
  },
  max: {
    type: Number,
    default: 100
  },
  step: {
    type: Number,
    default: 1
  },
  modelValue: {
    type: Number,
    default: 0
  },
  unit: {
    type: String,
    default: ''
  }
})

const emit = defineEmits(['update:modelValue'])

const value = ref(props.modelValue)

watch(() => props.modelValue, (newVal) => {
  value.value = newVal
})

function updateValue(val) {
  value.value = val
  emit('update:modelValue', val)
}
</script>

<template>
  <div class="setpoint-control">
    <label class="setpoint-label">{{ label }}</label>
    <div class="setpoint-input-group">
      <div class="setpoint-value-row">
        <input
          type="number"
          :min="min"
          :max="max"
          :step="step"
          v-model.number="value"
          @input="updateValue(value)"
          class="setpoint-input"
        />
        <span v-if="unit" class="setpoint-unit">{{ unit }}</span>
      </div>
      <input
        type="range"
        :min="min"
        :max="max"
        :step="step"
        v-model.number="value"
        @input="updateValue(value)"
        class="setpoint-slider"
      />
    </div>
  </div>
</template>

<style scoped>
.setpoint-control {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 10px 0;
  min-width: 120px;
  max-width: 220px;
  border-radius: 16px;
  box-shadow: 0 2px 12px rgba(16,46,66,0.12);
  padding: 18px 12px 14px 12px;
}
.setpoint-label {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 12px;
  color: #fff;
  letter-spacing: 1px;
  text-align: center;
}
.setpoint-input-group {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  gap: 10px;
}
.setpoint-value-row {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  margin-bottom: 2px;
}
.setpoint-input {
  width: 90px;
  padding: 6px 0;
  font-size: 18px;
  border-radius: 8px;
  border: none;
  background: rgba(255,255,255,0.12);
  color: #fff;
  text-align: center;
  font-weight: 600;
  outline: none;
  box-shadow: 0 1px 4px rgba(16,46,66,0.08);
  transition: background 0.2s, color 0.2s;
}
.setpoint-input:focus {
  background: rgba(255,255,255,0.22);
  color: #fff;
}
.setpoint-slider {
  width: 100%;
  accent-color: #3498db;
  background: transparent;
  margin-top: 0;
}
.setpoint-unit {
  color: #b8d6f5;
  font-size: 18px;
  font-weight: 600;
  letter-spacing: 1px;
  margin-left: 2px;
  user-select: none;
}
@media (max-width: 700px) {
  .setpoint-control {
    min-width: 90px;
    max-width: 100%;
    padding: 10px 4px 8px 4px;
  }
  .setpoint-label {
    font-size: 13px;
    margin-bottom: 7px;
  }
  .setpoint-input {
    width: 60px;
    font-size: 13px;
    padding: 3px 0;
  }
}
</style> 