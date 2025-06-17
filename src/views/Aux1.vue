<script setup>
import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import VariousSystemsMenu from '../submenus/VariousSystemsMenu.vue'
</script>


<template>
        <VariousSystemsMenu/>
    <section  style="overflow: hidden;">
        <article>

            <div class="ui grid type1 cols-mini-1  phone-1 variousSystemsAppMobile">

                <div class="ui grid cols-mini-1 cols-xl-3 bg-no pad-no gap-med">


                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Various</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                
                                <!-- Example with counting Hours
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 70, title: 'Compressor 1', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1028 }"></IconTextValueDigitalLine> 
                                -->
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 43, title: 'Impressed Current SyS (ICCP)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fail', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 111, title: 'UV Sterilizer', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fail', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 112, title: 'Desalination Plant 1 Fail 1', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 113, title: 'Desalination Plant 1 Fail 2', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 118, title: 'Hamann General Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 119, title: 'Jet System', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fail', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 137, title: 'Anti Fouling Common Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 138, title: 'Compressed Air Flow Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 139, title: 'Bow Thruster and Stabilizer Lube Oil Low Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 140, title: 'Bow Thruster and Stabilizer Lube Oil High Temperature', icon: 'temperature', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 141, title: 'Bow Thruster and Stabilizer Sea Water Pump Running', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Various</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 142, title: 'Cold Room Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 143, title: 'Man in the Cold Room Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 144, title: 'Elevator Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 185, title: 'X01 Extensible Bridge Auto', icon: 'settings', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 212, title: 'Bow Thruster and Stabilizer Filter Clogged (Right)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 213, title: 'Bow Thruster and Stabilizer Filter Clogged (Left)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 295, title: 'Automation General Anomaly Command', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 343, title: 'Fresh Water Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 346, title: 'Fan 1 FB', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 347, title: 'Fan 2 FB', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 348, title: 'Engine Room Extractor FB', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 350, title: 'Rescue Core Volts', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 351, title: 'Bilge Double Bottom', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 352, title: 'Bulbous', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 377, title: 'Sprinkler Plant Fail', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 378, title: 'Sprinkler System Released', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 379, title: 'Fire Detection Power Fail', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 380, title: 'Fire Detection Power Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 381, title: 'Steering Gear System Fail 1', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 382, title: 'Steering Lube Oil Low Level 1', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 383, title: 'Steering Gear System Fail 2', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 384, title: 'Steering Lube Oil Low Level 2', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 394, title: 'E5 Crew Bathroom and Laundry Extractor', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 395, title: 'E3 Crew Bathroom Extractor', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 396, title: 'E6 Owners Room Extractor', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'seconndary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 397, title: 'AHU Crew Area', icon: 'air-quality', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 398, title: 'AHU VIP Area', icon: 'air-quality', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 399, title: 'AHU Damper Crew Area', icon: 'air-quality', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 400, title: 'AHU Damper VIP Area', icon: 'air-quality', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </article>
    </section>
</template>