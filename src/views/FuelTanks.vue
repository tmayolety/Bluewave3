<script setup>
import TanksMenu from '../submenus/TanksMenu.vue'
import VerticalBar from '../components/VerticalBar.vue'
import VerticalBarTotal from '../components/VerticalBarTotal.vue';
import TankSvgMap from '../components/TankSvgMap.vue';
import RealTimeTrendChart from '../components/RealTimeTrendChart.vue';

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
    <section>
        <article>
            <div class="ui grid type1 cols-mini-7 gap-sm">

                <div class="ui col mini-1  flex-center" data-tank-index="0">
                    <VerticalBar :signalId="108" title="Tank 11 Port" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#7f461b" />
                </div>
                <div class="ui col mini-1  flex-center" data-tank-index="1">
                    <VerticalBar :signalId="109" title="Tank 11 Stbd" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#7f461b" />
                </div>
                <div class="ui col mini-1  flex-center" data-tank-index="2">
                    <VerticalBar :signalId="110" title="Tank 12 Port" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#7f461b" />
                </div>
                <div class="ui col mini-1  flex-center" data-tank-index="3">
                    <VerticalBar :signalId="111" title="Tank 12 Stbd" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#7f461b" />
                </div>
                <div class="ui col mini-1  flex-center" data-tank-index="4">
                    <VerticalBar :signalId="112" title="Tank 13 Port" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#7f461b" />
                </div>
                <div class="ui col mini-1  flex-center" data-tank-index="5">
                    <VerticalBar :signalId="113" title="Tank 13 Stbd" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#7f461b" />
                </div>
                <div class="ui col mini-1  flex-center">
                    <VerticalBarTotal :signalIds="[108, 109, 110, 111, 112, 113]" title="Total Fuel" unit="L"
                        :scaleBottom="0" :scaleTop="9000" :scaleStep="1000" :displayScale="true" color="#7f461b" />
                </div>


            </div>
            <div class="ui grid type1 cols-mini-2 mini-1 gap-sm mg-top-5">

                <div class="ui col mini-1" style="height: 220px;">

                    <TankSvgMap src="/ga/tanks/fuelTanks.svg" targetGroupPrefix="Fuel Tank" :groupIdToTankIndex="{
                        'Fuel Tank 11 Port': 0,
                        'Fuel Tank 11 Stbd': 1,
                        'Fuel Tank 12 Port': 2,
                        'Fuel Tank 12 Stbd': 3,
                        'Fuel Tank 13 Port': 4,
                        'Fuel Tank 13 Stbd': 5
                    }" @tank-clicked="onTankClick" />

                </div>

                <div class="ui col mini-1" style="height: 220px;">
                    <RealTimeTrendChart :signalIds="[108, 109, 110, 111, 112, 113]" title="Total Fuel Trend"
                        valueMode="raw" :maxPoints="60" color="#7f461b" />
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
