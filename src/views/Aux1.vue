<script setup>
import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import VariousSystemsMenu from '../submenus/VariousSystemsMenu.vue'
</script>


<template>
        <VariousSystemsMenu/>
    <section>
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
                                    v-bind="{ signalId: 71, title: 'Impressed Current SyS (ICCP)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fail', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 72, title: 'UV Sterilizer', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fail', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 73, title: 'Desalination Plant 1 Fail 1', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 74, title: 'Desalination Plant 1 Fail 2', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 75, title: 'Hamann General Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 76, title: 'Jet System', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fail', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 77, title: 'Anti Fouling Common Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 84, title: 'Compressed Air Flow Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 82, title: 'Bow Thruster and Stabilizer Lube Oil Low Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 49, title: 'Bow Thruster and Stabilizer Lube Oil High Temperature', icon: 'temperature', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 49, title: 'Bow Thruster and Stabilizer Sea Water Pump Running', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Various</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 49, title: 'Cold Room Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Man in the Cold Room Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 49, title: 'Elevator Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'X01 Extensible Bridge Auto', icon: 'settings', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 49, title: 'Bow Thruster and Stabilizer Filter Clogged (Right)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Bow Thruster and Stabilizer Filter Clogged (Left)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 49, title: 'Automation General Anomaly Command', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Fresh Water Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 49, title: 'Fan 1 FB', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Fan 2 FB', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 49, title: 'Engine Room Extractor FB', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Rescue Core Volts', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Bilge Double Bottom', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Bulbous', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Sprinkler Plant Fail', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Sprinkler System Released', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Fire Detection Power Fail', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Fire Detection Power Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Steering Gear System Fail 1', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Steering Lube Oil Low Level 1', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Steering Gear System Fail 2', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'Steering Lube Oil Low Level 2', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'E5 Crew Bathroom and Laundry Extractor', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'E3 Crew Bathroom Extractor', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'E6 Owners Room Extractor', icon: 'fan', size: '20', zeroText: 'Stopped', zeroColor: 'seconndary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'AHU Crew Area', icon: 'air-quality', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'AHU VIP Area', icon: 'air-quality', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'AHU Damper Crew Area', icon: 'air-quality', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'AHU Damper VIP Area', icon: 'air-quality', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </article>
    </section>
</template>