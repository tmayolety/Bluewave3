<script setup>
    import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
    import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'
    import BasicHorizontalBar from '../components/BasicHorizontalBar.vue'
    import GaugeRender from '../components/Gauge.vue'
    import MainEnginesMenu from '../submenus/MainEnginesMenu.vue'

</script>

<template>
    
    <MainEnginesMenu/>

    <section>
        <article>

            <div class="ui grid type1 cols-mini-1  phone-1 enginesPage1AppMobile">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Main Engines</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>

                    <div class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                        <header class="col-header size-med" style="height: 30px;">Port Engine</header>
                        <div class="ui col mini-1 align-top" style="height: 250px;">

                                <GaugeRender
                                v-bind="{ signalId: 8005, unit: 'rpm', icon: 'engines', size: '35', marginTopValue: 'mg-top-40', textSizeClass: 'text-size-20', valueMode: 'escalated', scaleInterval: 100 }">
                                </GaugeRender>

                        </div>
                    </div>

                    <div class="ui grid type1 cols-phone-1 gap-sm mg-top-5">
                        <div class="ui grid type1 resp cols-phone-1 pad-no gap-med col phone-1">

                            <BasicHorizontalBar
                                v-bind="{ signalId: 333, unit: 'KPa', title: 'Engine oil pressure', displayScale: true, displayCapacity: false, color: 'color-fl-red', scaleBottom: 0, scaleTop: 600, scaleStep: 100, scaleSegments: 7, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 338, unit: 'ºC', title: 'Engine coolant temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 2000, scaleStep: 500, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 337, unit: 'KPa', title: 'Filtered fuel pressure', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 800, scaleStep: 100, scaleSegments: 9, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 340, unit: 'ºC', title: 'Left exhaust temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 339, unit: 'ºC', title: 'Right exhaust temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 334, unit: 'l/h', title: 'Fuel consumption', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18001, unit: 'V', title: 'Battery voltage', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'KPa', title: 'Boost pressure', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'KPa', title: 'Engine oil pressure differential', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'KPa', title: 'Engine fuel pressure differential', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'ºC', title: 'Coolant temperature', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'KPa', title: 'Transmission oil pressure', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'ºC', title: 'Engine oil temperature', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                        </div>
                    </div>

                    <div class="col-content overflow">
                        <ul class="ui table size-mini resp">
                            <IconTextValueAnalogueLine
                                v-bind="{ signalId: 8005, size: '20', unit: 'KPa', valueMode: 'filtered', title: 'Right air filter restriction', icon: 'engines' }"></IconTextValueAnalogueLine>
                            <IconTextValueAnalogueLine
                                v-bind="{ signalId: 8007, size: '20', unit: 'KPa', valueMode: 'filtered', title: 'Left air filter restriction', icon: 'engines' }"></IconTextValueAnalogueLine>
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 20061, title: 'CCM Communication Fault', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 20060, title: 'Port Engine Common alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 20062, title: 'STDB Engine Common alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }"></IconTextValueDigitalLine>
                        </ul>
                    </div>


                    <div
                        class="ui grid type1 cols-mini-1 col mini-1 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                        <header class="col-header size-med" style="height: 30px;">Stbd Engine</header>
                        <div class="ui col mini-1 align-top" style="height: 250px;">
                            <GaugeRender
                                v-bind="{ signalId: 8016, unit: 'rpm', icon: 'engines', size: '35', marginTopValue: 'mg-top-40', textSizeClass: 'text-size-20', valueMode: 'escalated', scaleInterval: 100 }">
                            </GaugeRender>
                        </div>

                    </div>

                    <div class="ui grid type1 cols-phone-1 gap-sm mg-top-5">
                        <div class="ui grid type1 resp cols-phone-1 pad-no gap-med col phone-1">

                            <BasicHorizontalBar
                                v-bind="{ signalId: 333, unit: 'KPa', title: 'Engine oil pressure', displayScale: true, displayCapacity: false, color: 'color-fl-red', scaleBottom: 0, scaleTop: 600, scaleStep: 100, scaleSegments: 7, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 338, unit: 'ºC', title: 'Engine coolant temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 2000, scaleStep: 500, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 337, unit: 'KPa', title: 'Filtered fuel pressure', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 800, scaleStep: 100, scaleSegments: 9, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 340, unit: 'ºC', title: 'Left exhaust temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 339, unit: 'ºC', title: 'Right exhaust temperature', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 334, unit: 'l/h', title: 'Fuel consumption', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18001, unit: 'V', title: 'Battery voltage', displayScale: true, displayCapacity: false, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'KPa', title: 'Boost pressure', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'KPa', title: 'Engine oil pressure differential', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'KPa', title: 'Engine fuel pressure differential', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'ºC', title: 'Coolant temperature', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'KPa', title: 'Transmission oil pressure', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                            <BasicHorizontalBar
                                v-bind="{ signalId: 18002, unit: 'ºC', title: 'Engine oil temperature', displayScale: true, displayCapacity: true, color: 'color-fl-blue', scaleBottom: 0, scaleTop: 120, scaleStep: 30, scaleSegments: 5, size: 'medium', limitFlag: 'onBar', showLimits: true, valueMode: 'filtered', orientation: 'horizontal' }"></BasicHorizontalBar>
                        </div>
                    </div>

                    <div class="col-content overflow">
                        <ul class="ui table size-mini resp">
                            <IconTextValueAnalogueLine
                                v-bind="{ signalId: 8005, size: '20', unit: 'KPa', valueMode: 'filtered', title: 'Right air filter restriction', icon: 'engines' }"></IconTextValueAnalogueLine>
                            <IconTextValueAnalogueLine
                                v-bind="{ signalId: 8007, size: '20', unit: 'KPa', valueMode: 'filtered', title: 'Left air filter restriction', icon: 'engines' }"></IconTextValueAnalogueLine>
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 20061, title: 'CCM Communication Fault', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 20060, title: 'Port Engine Common alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }"></IconTextValueDigitalLine>
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 20062, title: 'STDB Engine Common alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Fault', oneColor: 'danger' }"></IconTextValueDigitalLine>
                        </ul>
                    </div>


                </div>
            </div>

        </article>
    </section>
</template>
