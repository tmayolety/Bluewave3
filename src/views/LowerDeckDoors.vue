<script setup>
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import IconValue from '../components/IconValue.vue'
import DoorsMenu from '../submenus/DoorsMenu.vue';
</script>

<template>
    <DoorsMenu />
    <section style="overflow: hidden;">
        <article>

            <div class="ui grid type1 cols-mini-1  mini-1">


                <div class="ui grid cols-mini-3 pad-no gap-med">

                    <div class="ui col mini-3 bilge-svg-container" style="position: relative;">
                        <div class="ui col">
                            <img src="/ga/doors/lowerDeck.svg" alt="Lower Deck Doors Diagram"
                                style="width: 100%; height: 100%; object-fit: contain;" />

                            <!-- D25 - Fwd Crew Area Watertight Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 44.5%; left: 69.5%;" />

                            <!-- D26 - Fwd Guest Area Watertight Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 44.5%; left: 56%;" />

                            <!-- D27 - Midship Watertight Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 52%; left: 49.5%;" />

                            <!-- D28 - Garage Watertight Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 36.5%; left: 20%;" />

                            <!-- D29 - Garage Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 89%; left: 17%;" />

                            <!-- D30 - Multifunctional Room Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 44%; left: 7.5%;" />

                            <!-- D31 - Aft Folding Bulkwark -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 25%; left: 3.7%;" />

                            <!-- D32 - Storm Shutter -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 60%; left: 11%;" />

                            <!-- H6 - Garage Hatch -->
                            <IconValue :signalId="418" icon="hatch" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 24%; left: 12.5%;" />

                            <!-- H7 - Steering Room Hatch -->
                            <IconValue :signalId="418" icon="hatch" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 18%; left: 14.5%;" />

                            <!-- H8 - Technical Space Hatch -->
                            <IconValue :signalId="418" icon="hatch" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 44.5%; left: 58%;" />

                            <!-- H9 - Bow Thruster Room Hatch -->
                            <IconValue :signalId="418" icon="hatch" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 44.5%; left: 71.5%;" />
                        </div>
                    </div>

                    <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                        <div class="ui col mini-1">
                            <div class="col-content overflow">
                                <ul class="ui table size-mini resp">
                                    <!-- D25 - Fwd Crew Area Watertight Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D25 - Fwd Crew Area Watertight Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- D26 - Fwd Guest Area Watertight Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D26 - Fwd Guest Area Watertight Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- D27 - Midship Watertight Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D27 - Midship Watertight Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- D28 - Garage Watertight Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D28 - Garage Watertight Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                        <div class="ui col mini-1">
                            <div class="col-content overflow">
                                <ul class="ui table size-mini resp">
                                    <!-- D29 - Garage Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D29 - Garage Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- D30 - Multifunctional Room Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D30 - Multifunctional Room Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- D31 - Aft Folding Bulkwark -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D31 - Aft Folding Bulkwark', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- D32 - Storm Shutter -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D32 - Storm Shutter', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                        <div class="ui col mini-1">
                            <div class="col-content overflow">
                                <ul class="ui table size-mini resp">
                                    <!-- H6 - Garage Hatch -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H6 - Garage Hatch', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- H7 - Steering Room Hatch -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H7 - Steering Room Hatch', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- H8 - Technical Space Hatch -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H8 - Technical Space Hatch', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- H9 - Bow Thruster Room Hatch -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H9 - Bow Thruster Room Hatch', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </article>
    </section>
</template>

<style scoped>
.bilge-svg-container {
    height: 280px;
}

@media (min-height: 1080px) {
    .bilge-svg-container {
        height: 360px;
    }
}
</style>