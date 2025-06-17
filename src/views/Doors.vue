<script setup>

    import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'

</script>

<template>
    <section style="overflow: hidden;">
        <article>
            <div class="ui grid type1 cols-mini-1  phone-1 ">

                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header doorsAppMobile">

                    <header class="ui col">
                        <font>Doors and Hatches</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>

                    <div class="ui grid cols-mini-1 cols-xl-3 bg-no pad-no gap-med">

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Sun Deck</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D1 - Fwd Port External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D2 - Fwd Stbd External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D3 - Aft Stbd External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D4 - Aft External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'E01 - Extensible Bridge', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Upper Deck</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D5 - Port External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D6 - Stbd External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D7 - Saloon Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D8 - Fire Sliding Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Main Deck</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D9 - Fwd Port External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D10 - Aft Port External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D11 - Aft Stbd External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D12 - Midship External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D13 - Fwd Stbd External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D14 - Main Saloon External Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D16 - Port Bulwark Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D17 - Pantry Fire Sliding Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D18 - Lobby Fire Sliding Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D19 - Galley Fire Sliding Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D20 - Owner Cabin Fire Sliding Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D21 - Owner Terrace Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D22 - Owner Terrace Shutter', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D23 - Accomodation Ladder', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D24 - Aft Gangway', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H1 - Owner Cabin Escape Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H2 - Crew Cabin Escape', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H3 - Fwd Port Peak Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H5 - Chain Locker Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Lower Deck</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D25 - Fwd Crew Area Watertight Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D26 - Fwd Guest Area Watertight Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D27 - Midship Watertight Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D28 - Garage Watertight Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D29 - Garage Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D30 - Multifunctional Room Door', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D31 - Aft Folding Bulkwark', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'D32 - Storm Shutter', icon: 'hatches', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H6 - Garage Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H7 - Steering Room Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H8 - Technical Space Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H9 - Bow Thruster Room Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Sub Deck</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H10 - Aft Port Cofferdam Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H11 - Aft Stbd Cofferdam Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H12 - Midship Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H13 - Midship Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H14 - Port Stabilizer Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 474, title: 'H15 - Stbd Stabilizer Hatch', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>
    </section>
</template>