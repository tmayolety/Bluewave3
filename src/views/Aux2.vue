<script setup>
import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import VariousSystemsMenu from '../submenus/VariousSystemsMenu.vue'
import BasicHorizontalBar from '../components/BasicHorizontalBar.vue'
</script>


<template>
    <VariousSystemsMenu />
    <section  style="overflow: hidden;">
        <article>

            <div class="ui grid type1 cols-mini-1  phone-1">

                <div class="ui grid cols-mini-1 cols-xl-3 bg-no pad-no gap-med">


                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">AC Distribution and Insulation</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 507, title: 'GMDSS AC Connected', icon: 'settings', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 508, title: 'GMDSS Low/High Battery Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 42, title: 'AC Earth Fault Warning', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 43, title: 'AC Earth Fault Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>

                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Calorifiers</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <BasicHorizontalBar
                                    v-bind="{ signalId: 215, unit: 'Bar', title: 'Calorifier 1', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 80, scaleStep: 20, scaleSegments: 4, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                                <BasicHorizontalBar
                                    v-bind="{ signalId: 216, unit: 'Bar', title: 'Calorifier 2', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 80, scaleStep: 20, scaleSegments: 4, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                                <BasicHorizontalBar
                                    v-bind="{ signalId: 217, unit: 'Bar', title: 'Calorifier 3', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 80, scaleStep: 20, scaleSegments: 4, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                                <BasicHorizontalBar
                                    v-bind="{ signalId: 218, unit: 'Bar', title: 'Calorifier 4', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 80, scaleStep: 20, scaleSegments: 4, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>

                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Power Pack A</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 230, title: 'Pump', icon: 'engines', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger', countingHoursSignalId: 1039 }"></IconTextValueDigitalLine>
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 265, size: '20', unit: 'Cº', valueMode: 'filtered', valueDecimals: 1, title: 'Oil Temperature', icon: 'temps' }"></IconTextValueAnalogueLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 225, title: 'Low Oil Level', icon: 'tripping', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 229, title: 'Solenoid Fault (Fault on PP)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 227, title: 'High Filter D.P.', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>

                            </ul>
                        </div>
                    </div>


                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Emergency Oil Tank</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 237, title: 'Steering Oil Emergency Dump Tank level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>

                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 has-col-header-sm radius shadow">
                        <header class="col-header size-med">Power Pack B</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 236, title: 'Pump', icon: 'engines', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger', countingHoursSignalId: 1040 }"></IconTextValueDigitalLine>
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 266, size: '20', unit: 'Cº', valueMode: 'filtered', valueDecimals: 1, title: 'Oil Temperature', icon: 'temps' }"></IconTextValueAnalogueLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 231, title: 'Low Oil Level', icon: 'tripping', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 235, title: 'Solenoid Fault (Fault on PP)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 233, title: 'High Filter D.P.', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>

        </article>
    </section>
</template>