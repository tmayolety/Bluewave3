<script setup>
import TanksMenu from '../submenus/TanksMenu.vue'
import VerticalBar from '../components/VerticalBar.vue'
import VerticalBarTotal from '../components/VerticalBarTotal.vue'
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
            <div class="ui grid type1 cols-mini-4 gap-med">

                <div class="ui col mini-1 flex-center" data-tank-index="0">
                    <VerticalBar :signalId="105" title="Tank 20" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#3498db" />
                </div>

                <div class="ui col mini-1 flex-center" data-tank-index="1">
                    <VerticalBar :signalId="106" title="Tank 22" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#3498db" />
                </div>

                <div class="ui col mini-1 flex-center" data-tank-index="2">
                    <VerticalBar :signalId="107" title="Tank 22W" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#3498db" />
                </div>

                <div class="ui col mini-1 flex-center">
                    <VerticalBarTotal :signalIds="[105, 106, 107]" title="Total Water Tanks" unit="L" :scaleBottom="0"
                        :scaleTop="9000" :scaleStep="1000" :displayScale="true" color="#3498db" />
                </div>

                <div class="ui col mini-2" style="height: 220px;">
                    <TankSvgMap
  src="/ga/tanks/waterTanks.svg"
  targetGroupPrefix="Water Tank"
  @tank-clicked="onTankClick"
/>

                </div>

                <div class="ui col mini-2" style="height: 220px;">
                    <RealTimeTrendChart :signalIds="[105, 106, 107]" title="Total Water Trend" valueMode="raw"
                        :maxPoints="60" color="#3498db" />
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
