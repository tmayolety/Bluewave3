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
                            <img src="/ga/doors/mainDeck.svg" alt="Main Deck Doors Diagram"
                                style="width: 100%; height: 100%; object-fit: contain;" />

                            <!-- D9 - Fwd Port External Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 13.5%; left: 49.2%;" />

                            <!-- D10 - Aft Port External Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 9%; left: 19.2%;" />

                            <!-- D11 - Aft Stbd External Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 79%; left: 19%;" />

                            <!-- D12 - Midship External Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 80%; left: 34.5%;" />

                            <!-- D13 - Fwd Stbd External Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 69%; left: 46.5%;" />

                            <!-- D14 - Main Saloon External Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 45%; left: 17%;" />

                            <!-- D16 - Port Bulwark Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 0%; left: 43%;" />

                            <!-- D17 - Pantry Fire Sliding Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 23%; left: 41.3%;" />

                            <!-- D18 - Lobby Fire Sliding Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 58.3%; left: 41.3%;" />

                            <!-- D19 - Galley Fire Sliding Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 25%; left: 53.5%;" />

                            <!-- D20 - Owner Cabin Fire Sliding Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 59%; left: 63%;" />

                            <!-- D21 - Owner Terrace Door -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 72%; left: 65%;" />

                            <!-- D22 - Owner Terrace Shutter -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 88%; left: 65%;" />

                            <!-- D23 - Accomodation Ladder -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 90%; left: 49%;" />

                            <!-- D24 - Aft Gangway -->
                            <IconValue :signalId="418" icon="hatches" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 78%; left: 2.8%;" />

                            <!-- H1 - Owner Cabin Escape Hatch -->
                            <IconValue :signalId="418" icon="hatch" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 19%; left: 75%;" />

                            <!-- H2 - Crew Cabin Escape -->
                            <IconValue :signalId="418" icon="hatch" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 38%; left: 75.5%;" />

                            <!-- H3 - Fwd Port Peak Hatch -->
                            <IconValue :signalId="418" icon="hatch" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 31%; left: 78%;" />

                            <!-- H5 - Chain Locker Hatch -->
                            <IconValue :signalId="418" icon="hatch" size="25" zeroColor="danger" oneColor="success"
                                style="position: absolute; top: 44%; left: 89%;" />

                        </div>
                    </div>


                    <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                        <div class="ui col mini-1">
                            <div class="col-content overflow">
                                <ul class="ui table size-mini resp">
                                    <!-- D9 - Fwd Port External Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D9 - Fwd Port External Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />
                                    <!-- D10 - Aft Port External Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D10 - Aft Port External Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />
                                    <!-- D11 - Aft Stbd External Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D11 - Aft Stbd External Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />
                                    <!-- D12 - Midship External Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D12 - Midship External Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />
                                    <!-- D13 - Fwd Stbd External Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D13 - Fwd Stbd External Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />
                                    <!-- D14 - Main Saloon External Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D14 - Main Saloon External Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />
                                    <!-- D16 - Port Bulwark Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D16 - Port Bulwark Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                        <div class="ui col mini-1">
                            <div class="col-content overflow">
                                <ul class="ui table size-mini resp">
                                    <!-- D17 - Pantry Fire Sliding Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D17 - Pantry Fire Sliding Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

                                    <!-- D18 - Lobby Fire Sliding Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D18 - Lobby Fire Sliding Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />


                                    <!-- D19 - Galley Fire Sliding Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D19 - Galley Fire Sliding Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

                                    <!-- D20 - Owner Cabin Fire Sliding Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D20 - Owner Cabin Fire Sliding Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

                                    <!-- D21 - Owner Terrace Door -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D21 - Owner Terrace Door', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

                                    <!-- D22 - Owner Terrace Shutter -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D22 - Owner Terrace Shutter', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ui col mini-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                        <div class="ui col mini-1">
                            <div class="col-content overflow">
                                <ul class="ui table size-mini resp">

                                    <!-- D23 - Accomodation Ladder -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D23 - Accomodation Ladder', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

                                    <!-- D24 - Aft Gangway -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'D24 - Aft Gangway', icon: 'hatches', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

                                    <!-- H1 - Owner Cabin Escape Hatch -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H1 - Owner Cabin Escape Hatch', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

                                    <!-- H2 - Crew Cabin Escape -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H2 - Crew Cabin Escape', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

                                    <!-- H3 - Fwd Port Peak Hatch -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H3 - Fwd Port Peak Hatch', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

                                    <!-- H5 - Chain Locker Hatch -->
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 416, title: 'H5 - Chain Locker Hatch', icon: 'hatch', size: '25', zeroText: 'OPENED', zeroColor: 'danger', oneText: 'CLOSED', oneColor: 'success', sizeWidthTitle: 'med' }" />

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