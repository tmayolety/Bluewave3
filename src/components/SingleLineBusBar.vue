<script setup>
import { computed, inject } from 'vue'

const props = defineProps({
  gen1BreakerSignalId: Number,
  gen2BreakerSignalId: Number,
  genEmergencyBreakerSignalId: Number,
  shorePowerBreakerSignalId: Number,
  busTideBreakerSignalId: Number,
})

const getSignalValueRaw = inject('getSignalValueRaw')

const gen1Value = computed(() => getSignalValueRaw?.(props.gen1BreakerSignalId) || 0)
const gen2Value = computed(() => getSignalValueRaw?.(props.gen2BreakerSignalId) || 0)
const gen3Value = computed(() => getSignalValueRaw?.(props.genEmergencyBreakerSignalId) || 0)
const shoreValue = computed(() => getSignalValueRaw?.(props.shorePowerBreakerSignalId) || 0)
const busTideValue = computed(() => getSignalValueRaw?.(props.busTideBreakerSignalId) || 0)

const classIfActive = val => (val === 1 ? 'active' : '')

const gen1Class = computed(() => classIfActive(gen1Value.value))
const gen2Class = computed(() => classIfActive(gen2Value.value))
const gen3Class = computed(() => classIfActive(gen3Value.value))
const shoreClass = computed(() => classIfActive(shoreValue.value))
const busTideClass = computed(() => classIfActive(busTideValue.value))

const gen1Gen2Class = computed(() =>
  gen1Value.value === 1 || gen2Value.value === 1 || busTideValue.value === 1 ? 'active' : ''
)

const gen3Gen4Class = computed(() =>
  gen3Value.value === 1 || busTideValue.value === 1 ? 'active' : ''
)

</script>

<template>
  <div class="singleline-tree2" data-cables="4">
    <div class="horz">
      <div :class="[gen1Gen2Class]" class="item" data-link>
        <div class="cable"><div class="link"></div></div>
      </div>

      <div :class="[busTideClass]" class="item" data-link="true">
        <div class="cable"><div class="link"></div></div>
      </div>

      <div :class="[gen3Gen4Class]" class="item" data-link>
        <div class="cable"><div class="link"></div></div>
      </div>
    </div>

    <div class="vert" style="height: 40px">
      <div :class="[gen1Class]" class="item" data-link>
        <div class="cable">
          <div class="link" :style="{ height: gen1Class !== 'active' ? '25px' : '15px' }"></div>
        </div>
      </div>

      <div :class="[shoreClass]" class="item" data-link>
        <div class="cable">
          <div class="link" :style="{ height: shoreClass !== 'active' ? '25px' : '15px' }"></div>
        </div>
      </div>

      <div :class="[gen2Class]" class="item" data-link>
        <div class="cable">
          <div class="link" :style="{ height: gen2Class !== 'active' ? '25px' : '15px' }"></div>
        </div>
      </div>

      <div :class="[gen3Class]" class="item" data-link>
        <div class="cable">
          <div class="link" :style="{ height: gen3Class !== 'active' ? '25px' : '15px' }"></div>
        </div>
      </div>

    </div>
  </div>
</template>

<style scoped>

</style>
