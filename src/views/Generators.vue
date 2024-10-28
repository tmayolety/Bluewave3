<script setup>
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'
import IconTwoOptionsDigitalLine from '../components/IconTwoOptionsDigitalLine.vue'
import BasicHorizontalBar from '../components/BasicHorizontalBar.vue'
import GaugeRender from '../components/Gauge.vue'
</script>

<template>
    <section>
        <article>
            <div class="ui grid type1 cols-mini-1  phone-1  ">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Generators</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>

                    <div
                        class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                        <header class="col-header size-med" style="height: 30px;">Port Generator</header>
                        <div class="ui col mini-1 align-top" style="height: 250px;">

                            <GaugeRender
                                v-bind="{ signalId: 4011, unit: 'kw', icon: 'shore', size: '35', marginTopValue: 'mg-top-40', textSizeClass: 'text-size-20', valueMode: 'escalated', scaleInterval: 20  }">
                            </GaugeRender>

                        </div>
                    </div>

                    <div class="ui grid cols-mini-1 bg-no pad-no gap-med">

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Port Generator</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                       
                                        <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4338, signalId2: 4336, title: 'Gen Set Status', icon: 'generators', size: '20', zeroTextSignal1: 'Stopped', zeroTextSignal2: 'OK', oneTextSignal1: 'Running', oneTextSignal2: 'Faulty', zeroColorSignal1: 'danger', zeroColorSignal2: 'success', oneColorSignal1: 'primary', oneColorSignal2: 'danger'}">
                                        </IconTwoOptionsDigitalLine>

                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 6003, size: '20', unit: 'rpm', valueMode: 'filtered', title: 'Engine Speed', icon: 'engines' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 6001, size: '20', unit: '%', valueMode: 'filtered', title: 'Load', icon: 'engines' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 6002, size: '20', unit: '%', valueMode: 'filtered', title: 'Torque', icon: 'engines' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4018, size: '20', unit: 'h', valueMode: 'filtered', title: 'Total Engine Hours', icon: 'generators' }">
                                        </IconTextValueAnalogueLine>

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 89, title: 'High Oil Temperature', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 85, title: 'High Engine Temperature', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 86, title: 'Low Oil Pressure', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 87, title: 'Fuel Line Leak', icon: 'tripping', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 88, title: 'Low Coolant Pressure', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 62, title: 'Low Oil Level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 90, title: 'Low Coolant Level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 319, title: 'Sea Water Flow', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 318, title: 'Water In Fuel', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>

                                    </ul>

                                </div>
                                <div class="ui grid type1 cols-phone-1 gap-sm mg-top-5">

                                    <div class="ui grid type1 resp cols-phone-1 pad-no gap-mini col phone-1">

                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6008, unit: 'Bar', title: 'Oil Pressure', displayScale: true, displayCapacity: false, color: 'color-fl-red', scaleBottom: 0, scaleTop: 600, scaleStep: 100, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6006, unit: 'Cº', title: 'Coolant Temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 20, scaleSegments: 7, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6007, unit: 'Cº', title: 'Fuel Temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 100, scaleStep: 20, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6009, unit: 'l/h', title: 'Fuel Rate', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 50, scaleStep: 10, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 358, unit: 'Cº', title: 'Exhaust Temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 800, scaleStep: 160, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 203, unit: 'V', title: 'Battery Voltage', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 35, scaleStep: 7, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>

                                    </div>
                                </div>
                            </div>

                            <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                                <header class="col-header size-med" style="height: 30px;">Starboard Generator</header>
                                <div class="ui col mini-1" style="height: 250px;">
                                    <GaugeRender
                                        v-bind="{ signalId: 4374, unit: 'kw', icon: 'shore', size: '35', marginTopValue: 'mg-top-40', textSizeClass: 'text-size-20', valueMode: 'escalated', scaleInterval: 20 }">
                                    </GaugeRender>
                                </div>
                            </div>

                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Starboard Generator</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4701, signalId2: 4699, title: 'Gen Set Status', icon: 'generators', size: '20', zeroTextSignal1: 'Stopped', zeroTextSignal2: 'OK', oneTextSignal1: 'Running', oneTextSignal2: 'Faulty', zeroColorSignal1: 'danger', zeroColorSignal2: 'success', oneColorSignal1: 'primary', oneColorSignal2: 'danger'}">
                                        </IconTwoOptionsDigitalLine>

                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 6014, size: '20', unit: 'rpm', valueMode: 'filtered', title: 'Engine Speed', icon: 'engines' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 6012, size: '20', unit: '%', valueMode: 'filtered', title: 'Load', icon: 'engines' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 6013, size: '20', unit: '%', valueMode: 'filtered', title: 'Torque', icon: 'engines' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4381, size: '20', unit: 'h', valueMode: 'filtered', title: 'Total Engine Hours', icon: 'generators' }">
                                        </IconTextValueAnalogueLine>

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 95, title: 'High Oil Temperature', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 91, title: 'High Engine Temperature', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 92, title: 'Low Oil Pressure', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 93, title: 'Fuel Line Leak', icon: 'tripping', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 94, title: 'Low Coolant Pressure', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 64, title: 'Low Oil Level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 96, title: 'Low Coolant Level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 371, title: 'Sea Water Flow', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 370, title: 'Water In Fuel', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>

                                    </ul>
                                </div>
                                <div class="ui grid type1 cols-phone-1 gap-sm mg-top-5">

                                    <div class="ui grid type1 resp cols-phone-1 pad-no gap-mini col phone-1">

                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6019, unit: 'Bar', title: 'Oil Pressure', displayScale: true, displayCapacity: false, color: 'color-fl-red', scaleBottom: 0, scaleTop: 600, scaleStep: 100, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: 'true', valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6017, unit: 'Cº', title: 'Coolant Temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 20, scaleSegments: 7, size: 'medium', limitFlag: 'onBar', showLimits: 4, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6018, unit: 'Cº', title: 'Fuel Temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 100, scaleStep: 20, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6020, unit: 'l/h', title: 'Fuel Rate', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 50, scaleStep: 10, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 410, unit: 'Cº', title: 'Exhaust Temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 800, scaleStep: 160, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 204, unit: 'V', title: 'Battery Voltage', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 35, scaleStep: 7, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>

                                    </div>
                                </div>

                            </div>


                            <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                                <header class="col-header size-med" style="height: 30px;">Emergency Generator</header>
                                <div class="ui col mini-1" style="height: 250px;">
                                    <GaugeRender
                                        v-bind="{ signalId: 4374, unit: 'kw', icon: 'shore', size: '35', marginTopValue: 'mg-top-40', textSizeClass: 'text-size-20', valueMode: 'escalated', scaleInterval: 20 }">
                                    </GaugeRender>
                                </div>
                            </div>

                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med">Emergency Generator</header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">

                                        <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4701, signalId2: 4699, title: 'Gen Set Status', icon: 'generators', size: '20', zeroTextSignal1: 'Stopped', zeroTextSignal2: 'OK', oneTextSignal1: 'Running', oneTextSignal2: 'Faulty', zeroColorSignal1: 'danger', zeroColorSignal2: 'success', oneColorSignal1: 'primary', oneColorSignal2: 'danger'}">
                                        </IconTwoOptionsDigitalLine>

                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 6014, size: '20', unit: 'rpm', valueMode: 'filtered', title: 'Engine Speed', icon: 'engines' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 6012, size: '20', unit: '%', valueMode: 'filtered', title: 'Load', icon: 'engines' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 6013, size: '20', unit: '%', valueMode: 'filtered', title: 'Torque', icon: 'engines' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4381, size: '20', unit: 'h', valueMode: 'filtered', title: 'Total Engine Hours', icon: 'generators' }">
                                        </IconTextValueAnalogueLine>

                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 95, title: 'High Oil Temperature', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 91, title: 'High Engine Temperature', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 92, title: 'Low Oil Pressure', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 93, title: 'Fuel Line Leak', icon: 'tripping', size: '20', zeroText: 'Fault', zeroColor: 'danger', oneText: 'OK', oneColor: 'success' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 94, title: 'Low Coolant Pressure', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 64, title: 'Low Oil Level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 96, title: 'Low Coolant Level', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 371, title: 'Sea Water Flow', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 370, title: 'Water In Fuel', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }">
                                        </IconTextValueDigitalLine>

                                    </ul>
                                </div>
                                <div class="ui grid type1 cols-phone-1 gap-sm mg-top-5">

                                    <div class="ui grid type1 resp cols-phone-1 pad-no gap-mini col phone-1">

                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6019, unit: 'Bar', title: 'Oil Pressure', displayScale: true, displayCapacity: false, color: 'color-fl-red', scaleBottom: 0, scaleTop: 600, scaleStep: 100, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: 'true', valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6017, unit: 'Cº', title: 'Coolant Temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 20, scaleSegments: 7, size: 'medium', limitFlag: 'onBar', showLimits: 4, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6018, unit: 'Cº', title: 'Fuel Temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 100, scaleStep: 20, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 6020, unit: 'l/h', title: 'Fuel Rate', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 50, scaleStep: 10, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 410, unit: 'Cº', title: 'Exhaust Temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 800, scaleStep: 160, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>
                                        <BasicHorizontalBar
                                            v-bind="{ signalId: 204, unit: 'V', title: 'Battery Voltage', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 35, scaleStep: 7, scaleSegments: 6, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }">
                                        </BasicHorizontalBar>

                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </article>
    </section>
</template>
