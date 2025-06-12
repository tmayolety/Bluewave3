<script setup>
import { ref, inject, watchEffect } from 'vue'
import { use } from 'echarts/core'
import VChart from 'vue-echarts'
import {
  CanvasRenderer
} from 'echarts/renderers'
import {
  LineChart
} from 'echarts/charts'
import {
  GridComponent,
  TooltipComponent,
  LegendComponent
} from 'echarts/components'

use([
  CanvasRenderer,
  LineChart,
  GridComponent,
  TooltipComponent,
  LegendComponent
])

const props = defineProps({
  signalIds: Array, // <-- múltiples señales
  title: String,
  valueMode: {
    type: String,
    default: 'raw'
  },
  maxPoints: {
    type: Number,
    default: 60
  },
  color: {
    type: String,
    default: '#3498db'
  }
})

const getSignalValueRaw = inject('getSignalValueRaw')
const getSignalValueEscalated = inject('getSignalValueEscalated')

const chartData = ref([])

watchEffect(() => {
  const timer = setInterval(() => {
    const now = new Date()
    const values = props.signalIds.map(id => {
      const val = props.valueMode === 'escalated'
        ? getSignalValueEscalated?.(id)
        : getSignalValueRaw?.(id)
      return isNaN(val) ? 0 : Math.round(val)
    })

    const total = values.reduce((sum, v) => sum + v, 0)
    chartData.value.push([now, total])

    if (chartData.value.length > props.maxPoints) {
      chartData.value.shift()
    }
  }, 1000)

  return () => clearInterval(timer)
})
</script>

<template>
  <VChart
    class="chart"
    :option="{
      title: {
        text: title,
        textStyle: { color: '#ccc', fontWeight: 'normal', fontSize: 14 },
        left: 'center'
      },
      xAxis: {
        type: 'time',
        axisLabel: { color: '#aaa' },
        axisLine: { lineStyle: { color: '#444' } }
      },
      yAxis: {
        type: 'value',
        axisLabel: { color: '#aaa' },
        axisLine: { lineStyle: { color: '#444' } },
        splitLine: { lineStyle: { color: '#222' } }
      },
      series: [{
        name: title,
        type: 'line',
        smooth: true,
        showSymbol: false,
        data: chartData,
        lineStyle: { color: color, width: 2 },
        areaStyle: { color: `${color}22` }
      }],
      tooltip: { trigger: 'axis' },
      grid: { left: 40, right: 20, top: 50, bottom: 30 }
    }"
    autoresize
  />
</template>

<style scoped>
.chart {
  width: 100%;
  height: 100%;
  min-height: 220px;
}
</style>
