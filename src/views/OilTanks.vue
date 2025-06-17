<script setup>
import TanksMenu from '../submenus/TanksMenu.vue'
import VerticalBar from '../components/VerticalBar.vue'
import TankSvgMap from '../components/TankSvgMap.vue'
import RealTimeTrendChart from '../components/RealTimeTrendChart.vue'

function onTankClick({ index }) {
  const el = document.querySelector(`[data-tank-index="${index}"]`)
  if (el) {
    el.classList.add('highlight-bar')
    setTimeout(() => {
      el.classList.remove('highlight-bar')
    }, 2000)
  } else {
    console.warn(`No bar found for tank index ${index}`)
  }
}
</script>

<template>
  <TanksMenu />
  <section style="overflow: hidden;">
    <article>
      <div class="ui grid type1 cols-mini-6 gap-med">
        <div class="ui col mini-1 flex-center" data-tank-index="0">
          <VerticalBar :signalId="114" title="Clean Oil" unit="L" :scaleBottom="0" :scaleTop="3000"
            :scaleStep="500" :displayScale="true" color="#cfa021" />
        </div>
        <div class="ui col mini-1 flex-center" data-tank-index="1">
          <VerticalBar :signalId="115" title="Dirty Oil" unit="L" :scaleBottom="0" :scaleTop="3000"
            :scaleStep="500" :displayScale="true" color="#cfa021" />
        </div>
        <div class="ui col mini-1 flex-center" data-tank-index="2">
          <VerticalBar :signalId="116" title="Bilge" unit="L" :scaleBottom="0" :scaleTop="3000"
            :scaleStep="500" :displayScale="true" color="#7d7d7d" />
        </div>
        <div class="ui col mini-1 flex-center" data-tank-index="3">
          <VerticalBar :signalId="117" title="Sludge" unit="L" :scaleBottom="0" :scaleTop="3000"
            :scaleStep="500" :displayScale="true" color="#7d7d7d" />
        </div>
        <div class="ui col mini-1 flex-center" data-tank-index="4">
          <VerticalBar :signalId="118" title="Aft Sewage" unit="L" :scaleBottom="0" :scaleTop="3000"
            :scaleStep="500" :displayScale="true" color="#7d7d7d" />
        </div>
        <div class="ui col mini-1 flex-center" data-tank-index="5">
          <VerticalBar :signalId="119" title="Fwd Sewage" unit="L" :scaleBottom="0" :scaleTop="3000"
            :scaleStep="500" :displayScale="true" color="#7d7d7d" />
        </div>
      </div>

      <div class="ui grid type1 cols-mini-2 mini-1 gap-sm mg-top-5">
        <div class="ui col mini-1" style="height: 220px;">
          <TankSvgMap
            src="/ga/tanks/oilWasteTanks.svg"
            :targetGroupPrefix="null"
            :groupIdToTankIndex="{
              'Clean Oil': 0,
              'Dirty Oil': 1,
              'Waste Bilge Tank': 2,
              'Waste Sludge Tank': 3,
              'Waste Aft Sewage Tank': 4,
              'Waste Fwd Sewage Tank': 5
            }"
            @tank-clicked="onTankClick"
          />
        </div>

        <div class="ui col mini-1" style="height: 220px;">
          <RealTimeTrendChart :signalIds="[116, 117, 118, 119]" title="Total Waste Trend"
            valueMode="raw" :maxPoints="60" color="#7d7d7d" />
        </div>
      </div>
    </article>
  </section>
</template>

<style scoped>
.highlight-bar {
  animation: flash 1s ease-in-out 2;
}

@keyframes flash {
  0% {
    box-shadow: 0 0 0px #3498db;
  }
  50% {
    box-shadow: 0 0 30px #3498db;
  }
  100% {
    box-shadow: 0 0 0px #3498db;
  }
}
</style>
