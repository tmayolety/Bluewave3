<script setup>
import { ref, inject, watchEffect } from 'vue'
import VChart from 'vue-echarts'
import 'echarts/lib/chart/gauge'
import 'echarts/lib/component/tooltip'
import 'echarts/lib/component/title'

const props = defineProps({
  signalId: Number,
  unit: String,
  valueMode: { type: String, default: 'raw' },
  scaleInterval: Number,
  startAngle: { type: Number, default: 180 },
  endAngle: { type: Number, default: 0 },
  textSizeClass: String,
  unitSizeClass: String,
  marginTopValue: String,
  height: { type: String, default: '100%' },
  centerY: { type: String, default: '94%' },
  radius: { type: String, default: '150%' }
})

const getSignalValueRaw = inject('getSignalValueRaw')
const getSignalValueEscalated = inject('getSignalValueEscalated')
const getLimits = inject('getLimits')

const value = ref(0)
const valueDisplay = ref(0)

const HH = ref(0), H = ref(0), L = ref(0), LL = ref(0), Min = ref(0), Max = ref(100)
const valueRangeColor = ref('#3498db')

function updateColor() {
  if (HH.value === 0 && H.value === 0 && L.value === 0 && LL.value === 0) {
    valueRangeColor.value = '#3498db'
  } else if (value.value <= LL.value || value.value >= HH.value) {
    valueRangeColor.value = '#ff0000'
  } else if (value.value <= L.value || value.value > H.value) {
    valueRangeColor.value = '#f3e330'
  } else {
    valueRangeColor.value = '#3498db'
  }
}

const chartOptions = ref({})

watchEffect(() => {
  const raw = props.valueMode === 'escalated'
    ? getSignalValueEscalated?.(props.signalId)
    : getSignalValueRaw?.(props.signalId)

  value.value = isNaN(raw) ? 0 : raw
  valueDisplay.value = Math.floor(value.value)

  const limits = getLimits?.(props.signalId) || {}
  HH.value = limits.HH || 0
  H.value = limits.H || 0
  L.value = limits.L || 0
  LL.value = limits.LL || 0
  Min.value = limits.Min ?? 0
  Max.value = limits.Max ?? 100

  updateColor()

  chartOptions.value = {
    grid: {
      top: 0,
      bottom: 0,
      left: 0,
      right: 0
    },
    series: [
      {
        type: 'gauge',
        startAngle: props.startAngle,
        endAngle: props.endAngle,
        min: Min.value,
        max: Max.value,
        splitNumber: (Max.value - Min.value) / props.scaleInterval,
        radius: props.radius,
        center: ['50%', props.centerY],
        axisLine: {
          lineStyle: {
            width: 25,
            color: [[1, '#22323c']]
          }
        },
        pointer: {
          show: false
        },
        progress: {
          show: true,
          width: 25,
          roundCap: true,
          itemStyle: {
            color: valueRangeColor.value
          }
        },
        axisTick: {
          show: true,
          distance: -32,
          length: 5,
          lineStyle: {
            color: '#7c8b9a',
            width: 1
          }
        },
        splitLine: {
          show: true,
          distance: -35,
          length: 10,
          lineStyle: {
            color: '#7c8b9a',
            width: 2
          }
        },
        axisLabel: {
          show: true,
          distance: -10,
          color: '#7c8b9a',
          fontSize: 10
        },
        detail: { show: false },
        title: { show: false },
        data: [{ value: valueDisplay.value }]
      }
    ]
  }
})
</script>

<template>
  <div class="custom-gauge" :style="{ height: props.height }">
    <v-chart class="chart" :option="chartOptions" autoresize />
    <div class="infos-container visible" :class='[marginTopValue]'>
      <div class="ui font-bold" :class='[textSizeClass]'>{{ valueDisplay }}</div>
      <div class="ui clr-subvalue-ui color-text-type-secondary-dark" :class='[unitSizeClass]'>{{ unit }}</div>
    </div>
  </div>
</template>

<style scoped>
.custom-gauge {
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: stretch;
  justify-content: center;
  overflow: hidden;
}

.chart {
  width: 100% !important;
  height: 100% !important;
  display: block;
}

.infos-container {
  text-align: center;
  margin-top: 1.5rem;
}
</style>
