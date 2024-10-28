<script setup>
    import BasicHorizontalBar from '../components/BasicHorizontalBar.vue'
    import BasicHorizontalBarTotal from '../components/BasicHorizontalBarTotal.vue';
    import TanksMenu from '../submenus/TanksMenu.vue'
    import { onMounted, ref, watchEffect, inject } from 'vue';
    import { initializeWaterTankChart, timelineTimeData, getTimelineData, updateWaterTankChart } from '../timelines/Timeline.js';

    const getSignalValueEscalated = inject('getSignalValueEscalated');
    const valueTotal = ref(null);

    let chart;

    const updateTime = async(time, rate) =>{
        timelineTimeData.value = time
        await updateWaterTankChart(chart, [453, 454], time, rate);
    }

    onMounted(() => {
        chart = initializeWaterTankChart('totalWater', 85000, 'rgba(52, 152, 219, 0.2)', 'rgba(52, 152, 219, 1)');
        updateWaterTankChart(chart, [453, 454], "-2d", "8h");
    });

    watchEffect(() => {
        valueTotal.value = getSignalValueEscalated(453) + getSignalValueEscalated(454);
    });

</script>

<template>

    <TanksMenu/>

    <section>
        <article style="height: 100vh;">

            <div class="ui grid type1 cols-mini-1 phone-1">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Fresh Water Tanks</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>

                    <div class="ui grid type1 cols-phone-1 gap-sm mg-top-5">

                        <div class="ui grid type1 resp cols-phone-1 pad-no gap-med col phone-1">

                            <BasicHorizontalBar
                                v-bind="{ signalId: 453, unit: 'L', title: 'Port', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 20000, scaleStep: 2000, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'escalated', orientation: 'horizontal' }"></BasicHorizontalBar>

                            <BasicHorizontalBar
                                v-bind="{ signalId: 454, unit: 'L', title: 'Stbd', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 20000, scaleStep: 2000, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'escalated', orientation: 'horizontal' }"></BasicHorizontalBar>
                            
                            <BasicHorizontalBar
                                v-bind="{ signalId: 454, unit: 'L', title: 'Stbd', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 20000, scaleStep: 2000, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'escalated', orientation: 'horizontal' }"></BasicHorizontalBar>    

                            <BasicHorizontalBarTotal
                                v-bind="{ signalId1: 453, signalId2: 454, signalId3: 454, unit: 'L', title: 'Total Fresh Water', displayScale: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 37000, scaleStep: 3700, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'escalated', orientation: 'horizontal' }"></BasicHorizontalBarTotal>

                        </div>

                    </div>

                </div>
                
                <div class="ui col mini-1 xl-1 has-header grid type1 cols-mini-1" style="margin-top: .5em; width: fit-content;">

                    <div class="canvas-container">
                      <canvas id="totalWater"></canvas>
                    </div>

                    <div class="button-container">
                      <button @click="updateTime('-12h', '1h')" :class="{active: timelineTimeData === '-12h'}" class="ui btn mini colored primary timeLineButtonWaterTanks" id="btn1WaterTanks">12H</button>
                      <button @click="updateTime('-24h', '1h')" :class="{active: timelineTimeData === '-24h' }" class="ui btn mini colored primary timeLineButtonWaterTanks" id="btn2WaterTanks">24H</button>
                      <button @click="updateTime('-2d', '3h')" :class="{active: timelineTimeData === '-2d' }" class="ui btn mini colored primary timeLineButtonWaterTanks" id="btn3WaterTanks">2D</button>
                      <button @click="updateTime('-3d', '6h')" :class="{active: timelineTimeData === '-3d' }" class="ui btn mini colored primary timeLineButtonWaterTanks" id="btn4WaterTanks">3D</button>
                    </div>

                </div>
                
            </div>
            
        </article>
    </section>
</template>

<style >
.canvas-container {
  width: 96vw;
  height: 250px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #0a1e2b!important;
}

canvas {
  width: 100% !important;
  height: 100% !important;
  margin-top: 3em!important;
}

.button-container {
  display: flex;
  justify-content: center;
  padding: 0.1em;
  gap: 0.5em;
  position: absolute;
  top: 3px;
  right: 5px;
}

.ui.btn.mini.colored.primary.timeLineButtonWaterTanks {
  width: 50px;
}
</style>