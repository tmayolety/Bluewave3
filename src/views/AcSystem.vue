<script setup>
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
</script>

<template>
    <section style="overflow: hidden;">
        <article>

            <div class="ui grid type1 cols-mini-1  phone-1 bilgesAppMobile">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>AC System</font>
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
                                <header class="col-header size-med">Extractors States</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'E2 Guest Bathroom & Pantry Sun Deck', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'E3 Crew Bathroom & Weelhouse Extractor State', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'E4 Saloon & Dining Room Extractor', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'E5 Crew Bathroom & Laundry Extractor', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 418, title: 'E6 Owner Cabin Extractor', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                       
                                    </ul>
                                </div>
                            </div>

                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">UTA's States</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'CDZ1 Main Saloon', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'CDZ2 Upper Saloon', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'UTA Crew Area', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'UTA Vip Area', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                    </ul>
                                </div>
                            </div>

                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Electrical Boiler State</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'Resistence 1', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'Resistence 2', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'Resistence 3', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'Resistence 4', icon: 'circle', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                    </ul>
                                </div>
                            </div>

                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Compressors States</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'Compressor 1', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'Compressor 2', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'Compressor 3', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'Compressor 4', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                    </ul>
                                </div>
                            </div>

                            
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Pump's States</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'Conditioning Water Cooling Pump 1', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'Conditioning Water Cooling Pump 2', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'Conditioning Water Cooling Pump 3', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'Sea Water Pump 1', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'Sea Water Pump 2', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'Sea Water Pump 3', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'Hot Water Pump 1', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'Hot Water Pump 2', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"/>
                                    </ul>
                                </div>
                            </div>

                            
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Main Damper's States</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 241, title: 'CDZ1 Damper Main Saloon', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'CDZ2 Damper MAin Saloon', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'UTA Damper Crew Area', icon: 'hatch', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'UTA Damper Vip Area', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 278, title: 'Damper Crew Bathroom & Laundry Extractor', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'Damper Owner Cabin Extractor', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'Damper Crew Bathroom & Weelhouse Extractor State', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 193, title: 'Damper Saloon & Dining Room Extractor', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 194, title: 'Damper Guest Bathroom & Pantry Sun Deck', icon: 'hatch', size: '20', zeroText: 'Opened', zeroColor: 'danger', oneText: 'Closed', oneColor: 'success' }"/>
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