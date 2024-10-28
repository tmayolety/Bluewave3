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
                        <header class="col-header size-med">Air Conditioning System</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 70, title: 'Compressor 1', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1028 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 71, title: 'Compressor 2', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1029 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 72, title: 'Compressor 3', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1030 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 73, title: 'Compressor 4', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1031 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 74, title: 'Sea Water Pump 1', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1032 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 75, title: 'Sea Water Pump 2', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1033 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 76, title: 'Chilled Water Pump 1', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1034 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 77, title: 'Chilled Water Pump 2', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1035 }"></IconTextValueDigitalLine>


                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 84, title: 'Chilled Water Flow Low', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 82, title: 'Sea Water Flow Low', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Oily Water Separator</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 49, title: 'Pump', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 50, title: 'PPM alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>

                            </ul>
                        </div>
                    </div>



                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Crane Foredeck</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 479, title: 'Low Oil Level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>

                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Crane Boatdeck</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 559, title: 'Low Oil Level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 560, title: 'High Oil Temperature', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Water Maker</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 189, title: 'Water Maker 1', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1037 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 190, title: 'Water Maker 2', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1038 }"></IconTextValueDigitalLine>

                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 187, title: 'Water Maker 1 Salinity Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 188, title: 'Water Maker 2 Salinity Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Bow Thruster</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 489, size: '20', unit: 'Cº', valueMode: 'filtered', valueDecimals: 1, title: 'Motor Temperature', icon: 'temps' }"></IconTextValueAnalogueLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Fuel Purifier </header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 186, title: 'Pump', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1036 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 185, title: 'Fuel Purifier Alarm', icon: 'settings', size: '20', zeroText: 'Off', zeroColor: 'secondary', oneText: 'On', oneColor: 'primary' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Windlass </header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 471, title: 'Low Oil Level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 472, title: 'High Oil Temperature', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Port Aft Captans</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 247, title: 'High Oil Temp', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Stbd Captans</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 249, title: 'High Oil Temp', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>


                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Sewage Plant</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 57, title: 'Sewage Plant Pump', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1023 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 54, title: 'Release Transfer', icon: 'settings', size: '20', zeroText: 'Off', zeroColor: 'secondary', oneText: 'On', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 51, title: 'Switch On', icon: 'settings', size: '20', zeroText: 'Off', zeroColor: 'secondary', oneText: 'On', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 53, title: 'Sewage General Warning', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 52, title: 'Sewage General Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Stabilizer</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 65, title: 'VFD 1', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1025 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 66, title: 'VFD 2', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1026 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 67, title: 'Cooling Pump', icon: 'settings', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary', countingHoursSignalId: 1027 }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 68, title: 'Low Oil Level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 69, title: 'High Oil Temperature', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>
                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Pasarelle</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 239, title: 'Low Oil Level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 240, title: 'High Oil Temperature', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Vacuum Plant</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 56, title: 'Continuously Running', icon: 'settings', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 55, title: 'Pump Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </article>
    </section>
</template>