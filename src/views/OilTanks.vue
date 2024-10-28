<script setup>
import BasicHorizontalBar from '../components/BasicHorizontalBar.vue'
import TanksMenu from '../submenus/TanksMenu.vue'
import { onMounted, ref, watchEffect, inject } from 'vue';
import { initializeWaterTankChart, timelineTimeData, updateWaterTankChart } from '../timelines/Timeline.js';

const getSignalValueEscalated = inject('getSignalValueEscalated');
const valueTotal = ref(null);

let chart;

const updateTime = async (time, rate) => {
    timelineTimeData.value = time
    await updateWaterTankChart(chart, [210, 209], time, rate);
}

onMounted(() => {
    chart = initializeWaterTankChart('totalOil', 3000, 'rgba(235, 208, 132, 0.2)', 'rgba(235, 208, 132, 1)');
    updateWaterTankChart(chart, [210, 209], "-2d", "8h");
});

watchEffect(() => {
    valueTotal.value = getSignalValueEscalated(210) + getSignalValueEscalated(209);
});

</script>

<template>

    <TanksMenu />

    <section>

        <article>


            <div class="ui grid type1 cols-mini-1  phone-1 ">

                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Oil Tanks</font>
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
                                v-bind="{ signalId: 210, unit: 'L', title: 'Clean Oil', displayScale: true, displayCapacity: false, color: 'color-fl-yellow', scaleBottom: 0, scaleTop: 2000, scaleStep: 200, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                            <BasicHorizontalBar
                                v-bind="{ signalId: 209, unit: 'L', title: 'Dirty Oil', displayScale: true, displayCapacity: false, color: 'color-fl-brown', scaleBottom: 0, scaleTop: 1100, scaleStep: 100, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                        </div>
                    </div>

                </div>



                <div class="ui col mini-1 xl-1 has-header grid type1 cols-mini-1"
                    style="margin-top: .5em; width: fit-content;">

                    <div class="canvas-container">
                        <canvas id="totalOil"></canvas>
                    </div>

                    <div class="button-container">
                        <button @click="updateTime('-12h', '1h')" :class="{ active: timelineTimeData === '-12h' }"
                            class="ui btn mini colored primary timeLineButtonWaterTanks"
                            id="btn1WaterTanks">12H</button>
                        <button @click="updateTime('-24h', '1h')" :class="{ active: timelineTimeData === '-24h' }"
                            class="ui btn mini colored primary timeLineButtonWaterTanks"
                            id="btn2WaterTanks">24H</button>
                        <button @click="updateTime('-2d', '3h')" :class="{ active: timelineTimeData === '-2d' }"
                            class="ui btn mini colored primary timeLineButtonWaterTanks" id="btn3WaterTanks">2D</button>
                        <button @click="updateTime('-3d', '6h')" :class="{ active: timelineTimeData === '-3d' }"
                            class="ui btn mini colored primary timeLineButtonWaterTanks" id="btn4WaterTanks">3D</button>
                    </div>

                </div>

            </div>

            <div class="ui grid type1 cols-mini-1  phone-1 mg-top-40">

                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Waste Tanks</font>
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
                                v-bind="{ signalId: 210, unit: 'L', title: 'Bilge Tank', displayScale: true, displayCapacity: false, color: 'color-fl-dark', scaleBottom: 0, scaleTop: 2000, scaleStep: 200, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                            <BasicHorizontalBar
                                v-bind="{ signalId: 209, unit: 'L', title: 'Sludge Tank', displayScale: true, displayCapacity: false, color: 'color-fl-dark', scaleBottom: 0, scaleTop: 1100, scaleStep: 100, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                            <BasicHorizontalBar
                                v-bind="{ signalId: 210, unit: 'L', title: 'Aft Sewage Tank', displayScale: true, displayCapacity: false, color: 'color-fl-dark', scaleBottom: 0, scaleTop: 2000, scaleStep: 200, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                            <BasicHorizontalBar
                                v-bind="{ signalId: 209, unit: 'L', title: 'Fwd Sewage Tank', displayScale: true, displayCapacity: false, color: 'color-fl-dark', scaleBottom: 0, scaleTop: 1100, scaleStep: 100, scaleSegments: 10, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                            </BasicHorizontalBar>

                        </div>
                    </div>

                </div>

            </div>

        </article>

    </section>
</template>
