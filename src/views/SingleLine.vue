<script setup>

import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'
import GaugeTotalRender from '@/components/GaugeTotal.vue'
import GaugeRender from '@/components/Gauge.vue'

</script>

<template>

    <section class="dev-sectionContent dev-menuNavigation-single" id="singleNav" style=" max-height: 100%;">
        <article>

            <div class="ui grid type1 cols-mini-1  phone-1">
                <div class="ui grid cols-mini-1 col mini-1 gap-mini pad-no has-header">
                    <header class="ui col">
                        <font>Port Generator</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>
                    <div class="col-content overflow">
                        <ul class="ui table size-mini resp">
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 4338, title: 'Gen Set Status', icon: 'generators', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }">
                            </IconTextValueDigitalLine>
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 4336, title: 'Breaker Status', icon: 'singleline', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }">
                            </IconTextValueDigitalLine>

                            <IconTextValueAnalogueLine
                                v-bind="{ signalId: 4011, size: '20', unit: 'KW', valueMode: 'escalated', title: 'Power', icon: 'shore' }">
                            </IconTextValueAnalogueLine>
                            <IconTextValueAnalogueLine
                                v-bind="{ signalId: 4011, size: '20', unit: '%', valueMode: 'escalated', valueDecimals: 1, title: 'Load', icon: 'generators' }">
                            </IconTextValueAnalogueLine>
                            <IconTextValueAnalogueLine
                                v-bind="{ signalId: 4007, size: '20', unit: 'Hz', valueMode: 'escalated', valueDecimals: 1, title: 'Frequency', icon: 'shore' }">
                            </IconTextValueAnalogueLine>
                            <IconTextValueAnalogueLine
                                v-bind="{ signalId: 4014, size: '20', unit: 'PF', valueMode: 'escalated', valueDecimals: 1, title: 'Converter Output', icon: 'shore' }">
                            </IconTextValueAnalogueLine>
                        </ul>
                    </div>
                    <div class="ui grid type1  cols-phone-3">
                        <div
                            class="ui grid type1 col  phone-1  gap-no pad-no align-baseline radius shadow has-col-header-sm">
                            <header class="col-header size-med" style="height: 30px;">Current L1</header>
                            <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                <GaugeRender
                                    v-bind="{ signalId: 4008, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                </GaugeRender>

                            </div>
                        </div>
                        <div
                            class="ui grid type1 col phone-1 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                            <header class="col-header size-med" style="height: 30px;">Current L2</header>
                            <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                <GaugeRender
                                    v-bind="{ signalId: 4009, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                </GaugeRender>

                            </div>
                        </div>

                        <div
                            class="ui grid type1 col phone-1  gap-no pad-no align-baseline radius shadow has-col-header-sm">
                            <header class="col-header size-med" style="height: 30px;">Current L3</header>
                            <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                <GaugeRender
                                    v-bind="{ signalId: 4010, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                </GaugeRender>

                            </div>
                        </div>
                    </div>

                    <div class="col-content overflow">
                        <ul class="ui table size-mini resp">
                            <IconTextValueAnalogueLine
                                v-bind="{ signalId: 4001, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L1-2', icon: 'shore' }">
                            </IconTextValueAnalogueLine>
                            <IconTextValueAnalogueLine
                                v-bind="{ signalId: 4002, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L2-3', icon: 'shore' }">
                            </IconTextValueAnalogueLine>
                            <IconTextValueAnalogueLine
                                v-bind="{ signalId: 4003, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L3-1', icon: 'shore' }">
                            </IconTextValueAnalogueLine>
                        </ul>
                    </div>

                    <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header mg-top-phone-10">
                        <header class="ui col">
                            <font>Shore Power Converter</font>
                            <span class="gradients">
                                <span class="gradient-left"></span>
                                <span class="gradient-right"></span>
                            </span>
                            <span class="dots-left"></span>
                            <span class="dots-right"></span>
                        </header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 2049, title: 'Converter Set Status', icon: 'shore', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }">
                                </IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 2050, title: 'Breaker Status', icon: 'singleline', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }">
                                </IconTextValueDigitalLine>
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 2006, size: '20', unit: '%', valueMode: 'escalated', valueDecimals: 1, title: 'Load', icon: 'shore' }">
                                </IconTextValueAnalogueLine>
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 2007, size: '20', unit: 'Hz', valueMode: 'escalated', valueDecimals: 1, title: 'Frequency', icon: 'shore' }">
                                </IconTextValueAnalogueLine>
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 2026, size: '20', unit: 'PF', valueMode: 'escalated', valueDecimals: 1, title: 'Converter Output', icon: 'shore' }">
                                </IconTextValueAnalogueLine>
                            </ul>
                        </div>
                        <div
                            class="ui grid type1 col phone-1  gap-no pad-no align-baseline radius shadow has-col-header-sm">
                            <header class="col-header size-med" style="height: 30px;">Power</header>
                            <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                <GaugeTotalRender
                                    v-bind="{ signalId: 2004, signalId2: 2071, unit: 'KW', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, gaugeSizeHeight: 90, gaugeSizeWidth: 300 }">
                                </GaugeTotalRender>

                            </div>
                        </div>

                        <div class="ui grid type1  cols-phone-3">
                            <div
                                class="ui grid type1 col  phone-1  gap-no pad-no align-baseline radius shadow has-col-header-sm">
                                <header class="col-header size-med" style="height: 30px;">Current L1</header>
                                <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                    <GaugeTotalRender
                                        v-bind="{ signalId: 2014, signalId2: 2081, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                    </GaugeTotalRender>

                                </div>
                            </div>
                            <div
                                class="ui grid type1 col phone-1 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                                <header class="col-header size-med" style="height: 30px;">Current L2</header>
                                <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                    <GaugeTotalRender
                                        v-bind="{ signalId: 2015, signalId2: 2082, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                    </GaugeTotalRender>

                                </div>
                            </div>

                            <div
                                class="ui grid type1 col phone-1  gap-no pad-no align-baseline radius shadow has-col-header-sm">
                                <header class="col-header size-med" style="height: 30px;">Current L3</header>
                                <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                    <GaugeTotalRender
                                        v-bind="{ signalId: 2016, signalId2: 2083, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                    </GaugeTotalRender>

                                </div>
                            </div>
                        </div>

                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 2008, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L1-2', icon: 'shore' }">
                                </IconTextValueAnalogueLine>
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 2009, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L2-3', icon: 'shore' }">
                                </IconTextValueAnalogueLine>
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 2010, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L3-1', icon: 'shore' }">
                                </IconTextValueAnalogueLine>
                            </ul>
                        </div>


                        <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header mg-top-phone-10">
                            <header class="ui col">
                                <font>Stbd Generator</font>
                                <span class="gradients">
                                    <span class="gradient-left"></span>
                                    <span class="gradient-right"></span>
                                </span>
                                <span class="dots-left"></span>
                                <span class="dots-right"></span>
                            </header>
                            <div class="col-content overflow">
                                <ul class="ui table size-mini resp">
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 4701, title: 'Gen Set Status', icon: 'generators', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }">
                                    </IconTextValueDigitalLine>
                                    <IconTextValueDigitalLine
                                        v-bind="{ signalId: 4699, title: 'Breaker Status', icon: 'singleline', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }">
                                    </IconTextValueDigitalLine>
                                    <IconTextValueAnalogueLine
                                        v-bind="{ signalId: 4374, size: '20', unit: 'KW', valueMode: 'escalated', title: 'Power', icon: 'shore' }">
                                    </IconTextValueAnalogueLine>
                                    <IconTextValueAnalogueLine
                                        v-bind="{ signalId: 4374, size: '20', unit: '%', valueMode: 'escalated', valueDecimals: 1, title: 'Load', icon: 'generators' }">
                                    </IconTextValueAnalogueLine>
                                    <IconTextValueAnalogueLine
                                        v-bind="{ signalId: 4370, size: '20', unit: 'Hz', valueMode: 'escalated', valueDecimals: 1, title: 'Frequency', icon: 'shore' }">
                                    </IconTextValueAnalogueLine>
                                    <IconTextValueAnalogueLine
                                        v-bind="{ signalId: 4377, size: '20', unit: 'PF', valueMode: 'escalated', valueDecimals: 1, title: 'Converter Output', icon: 'shore' }">
                                    </IconTextValueAnalogueLine>
                                </ul>
                            </div>

                            <div class="ui grid type1  cols-phone-3">
                                <div
                                    class="ui grid type1 col  phone-1  gap-no pad-no align-baseline radius shadow has-col-header-sm">
                                    <header class="col-header size-med" style="height: 30px;">Current L1</header>
                                    <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                        <GaugeRender
                                            v-bind="{ signalId: 4371, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                        </GaugeRender>

                                    </div>
                                </div>
                                <div
                                    class="ui grid type1 col phone-1 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                                    <header class="col-header size-med" style="height: 30px;">Current L2</header>
                                    <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                        <GaugeRender
                                            v-bind="{ signalId: 4372, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                        </GaugeRender>

                                    </div>
                                </div>

                                <div
                                    class="ui grid type1 col phone-1  gap-no pad-no align-baseline radius shadow has-col-header-sm">
                                    <header class="col-header size-med" style="height: 30px;">Current L3</header>
                                    <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                        <GaugeRender
                                            v-bind="{ signalId: 4373, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                        </GaugeRender>

                                    </div>
                                </div>
                            </div>
                            <div class="col-content overflow">
                                <ul class="ui table size-mini resp">
                                    <IconTextValueAnalogueLine
                                        v-bind="{ signalId: 4364, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L1-2', icon: 'shore' }">
                                    </IconTextValueAnalogueLine>
                                    <IconTextValueAnalogueLine
                                        v-bind="{ signalId: 4365, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L2-3', icon: 'shore' }">
                                    </IconTextValueAnalogueLine>
                                    <IconTextValueAnalogueLine
                                        v-bind="{ signalId: 4366, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L3-1', icon: 'shore' }">
                                    </IconTextValueAnalogueLine>
                                </ul>
                            </div>

                            <div class="ui grid cols-mini-1 col mini-1 gap-mini pad-no has-header mg-top-phone-10">
                                <header class="ui col">
                                    <font>Emergency Generator</font>
                                    <span class="gradients">
                                        <span class="gradient-left"></span>
                                        <span class="gradient-right"></span>
                                    </span>
                                    <span class="dots-left"></span>
                                    <span class="dots-right"></span>
                                </header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 4338, title: 'Gen Set Status', icon: 'generators', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }">
                                        </IconTextValueDigitalLine>
                                        <IconTextValueDigitalLine
                                            v-bind="{ signalId: 4336, title: 'Breaker Status', icon: 'singleline', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }">
                                        </IconTextValueDigitalLine>

                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4011, size: '20', unit: 'KW', valueMode: 'escalated', title: 'Power', icon: 'shore' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4011, size: '20', unit: '%', valueMode: 'escalated', valueDecimals: 1, title: 'Load', icon: 'generators' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4007, size: '20', unit: 'Hz', valueMode: 'escalated', valueDecimals: 1, title: 'Frequency', icon: 'shore' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4014, size: '20', unit: 'PF', valueMode: 'escalated', valueDecimals: 1, title: 'Converter Output', icon: 'shore' }">
                                        </IconTextValueAnalogueLine>
                                    </ul>
                                </div>
                                <div class="ui grid type1  cols-phone-3">
                                    <div
                                        class="ui grid type1 col  phone-1  gap-no pad-no align-baseline radius shadow has-col-header-sm">
                                        <header class="col-header size-med" style="height: 30px;">Current L1</header>
                                        <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                            <GaugeRender
                                                v-bind="{ signalId: 4008, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                            </GaugeRender>

                                        </div>
                                    </div>
                                    <div
                                        class="ui grid type1 col phone-1 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                                        <header class="col-header size-med" style="height: 30px;">Current L2</header>
                                        <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                            <GaugeRender
                                                v-bind="{ signalId: 4009, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                            </GaugeRender>

                                        </div>
                                    </div>

                                    <div
                                        class="ui grid type1 col phone-1  gap-no pad-no align-baseline radius shadow has-col-header-sm">
                                        <header class="col-header size-med" style="height: 30px;">Current L3</header>
                                        <div class="ui col mini-1 align-middle-center" style="height: 100px">

                                            <GaugeRender
                                                v-bind="{ signalId: 4010, unit: 'A', icon: 'shore', size: '20', marginTopValue: 'mg-top-15', textSizeClass: 'text-size-12', valueMode: 'escalated', scaleInterval: 25, isBattery: true, startAngle: 220, endAngle: 320, gaugeSizeHeight: 100, gaugeSizeWidth: 100 }">
                                            </GaugeRender>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4001, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L1-2', icon: 'shore' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4002, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L2-3', icon: 'shore' }">
                                        </IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 4003, size: '20', unit: 'V', valueMode: 'escalated', title: 'Voltage L3-1', icon: 'shore' }">
                                        </IconTextValueAnalogueLine>
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
