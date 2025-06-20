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


                <div class="ui grid cols-mini-2 pad-no gap-med">

                    <div class="ui col mini-2 bilge-svg-container" style="position: relative;">
                        <div class="ui col">
                            <img src="/ga/doors/subDeck.svg" alt="Sub Deck Doors Diagram"
                                style="width: 100%; height: 100%; object-fit: contain;" />

                            <!-- H10 - Aft Port Cofferdam Hatch -->
                            <IconValue :signalId="418" icon="hatch" size="30" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 33%; left: 16.2%;" />

                            <!-- H11 - Aft Stbd Cofferdam Hatch -->
                            <IconValue :signalId="418" icon="hatch" size="30" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 66%; left: 23.7%;" />

                            <!-- H12 - Midship Hatch (Frame 49) -->
                            <IconValue :signalId="418" icon="hatch" size="30" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 74%; left: 39.3%;" />

                            <!-- H13 - Midship Hatch (Frame 62) -->
                            <IconValue :signalId="418" icon="hatch" size="30" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 37%; left: 51%;" />

                            <!-- H14 - Port Stabilizer Hatch -->
                            <IconValue :signalId="418" icon="hatch" size="30" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 25%; left: 53.2%;" />

                            <!-- H15 - Stbd Stabilizer Hatch -->
                            <IconValue :signalId="418" icon="hatch" size="30" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 59%; left: 53.2%;" />
                        </div>
                    </div>

                    <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                        <div class="ui col mini-1">
                            <div class="col-content overflow">
                                <ul class="ui table size-mini resp"><!-- H10 - Aft Port Cofferdam Hatch -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H10 - Aft Port Cofferdam Hatch', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- H11 - Aft Stbd Cofferdam Hatch -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H11 - Aft Stbd Cofferdam Hatch', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- H12 - Midship Hatch (Frame 49) -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H12 - Midship Hatch (Frame 49)', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                        <div class="ui col mini-1">
                            <div class="col-content overflow">
                                <ul class="ui table size-mini resp">
                                    <!-- H13 - Midship Hatch (Frame 62) -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H13 - Midship Hatch (Frame 62)', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- H14 - Port Stabilizer Hatch -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H14 - Port Stabilizer Hatch', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

                                    <!-- H15 - Stbd Stabilizer Hatch -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H15 - Stbd Stabilizer Hatch', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'large' }" />

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