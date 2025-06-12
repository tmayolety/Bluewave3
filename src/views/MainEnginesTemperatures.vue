<script setup>
import TextAnalogueValue from '../components/TextAnalogueValue.vue'
import GaugeRender from '../components/Gauge.vue'
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import VerticalBar from '../components/VerticalBar.vue'
import MainEnginesMenu from '../submenus/MainEnginesMenu.vue'
</script>

<template>

    <MainEnginesMenu />

    <section style="overflow: hidden;">
        <article>
            <div class="ui grid type1 cols-mini-2 gap-med">

                <!--PORT MAIN ENGINE-->
                <div class="ui grid cols-mini-2 col mini-1 gap-sm pad-no">

                    <div class="ui grid type1 cols-mini-5 col mini-2">
                        <div class="ui col mini-1  flex-center">
                            <VerticalBar :signalId="99" title="Engine Oil Pressure" unit="bar" :scaleBottom="0" :scaleTop="3000"
                                :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>
                        <div class="ui col mini-3 ">
                            <GaugeRender :signalId="100" unit="rpm" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'220px'" :centerY="'94%'" :radius="'120'" />
                        </div>
                        <div class="ui col mini-1  flex-center">
                            <VerticalBar :signalId="101" title="Coolant Temperature" unit="C" :scaleBottom="0"
                                :scaleTop="3000" :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>
                    </div>

                    <div class="ui grid type1 cols-mini-1 col mini-2">


                        <div class="ui col mini-3">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 434, title: 'Low Oil Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 435, title: 'Coolant High Temperature', icon: 'temperature', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 436, title: 'Water in Fuel Racor Filter', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 437, title: 'Cooling Water Oil Low Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 438, title: 'Power ON QE', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 439, title: 'Interconnection QP/DE', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 440, title: 'Air Flap', icon: 'settings', size: '20', zeroText: 'Opened', zeroColor: 'secondary', oneText: 'Closed', oneColor: 'primary' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 441, title: 'Status', icon: 'settings', size: '20', zeroText: 'Automatic', zeroColor: 'primary', oneText: 'Manual', oneColor: 'primary' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 442, title: 'Motor Blocked from ISS 1 (Shut Down)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 443, title: 'General Alarm from ISS 1', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 444, title: 'Exhaust Valve', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 445, title: 'Override 1 ON', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 446, title: 'Diesel Purifier Running', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 447, title: 'Diesel Purifier Fail', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                            </ul>
                        </div>

                    </div>


                </div>

                <!--STBD MAIN ENGINE-->
                <div class="ui grid cols-mini-2 col mini-1 gap-sm pad-no">

                    <div class="ui grid type1 cols-mini-5 col mini-2">
                        <div class="ui col mini-1  flex-center">
                            <VerticalBar :signalId="102" title="Engine Oil Pressure" unit="bar" :scaleBottom="0" :scaleTop="3000"
                                :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>
                        <div class="ui col mini-3 ">
                            <GaugeRender :signalId="103" unit="rpm" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'220px'" :centerY="'94%'" :radius="'120'" />
                        </div>
                        <div class="ui col mini-1  flex-center">
                            <VerticalBar :signalId="104" title="Coolant Temperature" unit="C" :scaleBottom="0"
                                :scaleTop="3000" :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>
                    </div>

                    <div class="ui grid type1 cols-mini-1 col mini-2">
                        <div class="ui col mini-3">
                            <ul class="ui table size-mini resp">

                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 448, title: 'Low Oil Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 449, title: 'Coolant High Temperature', icon: 'temperature', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 450, title: 'Water in Fuel Racor Filter', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 451, title: 'Cooling Water Oil Low Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 452, title: 'Power ON QE', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 453, title: 'Interconnection QP/DE', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 454, title: 'Air Flap', icon: 'settings', size: '20', zeroText: 'Opened', zeroColor: 'secondary', oneText: 'Closed', oneColor: 'primary' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 455, title: 'Status', icon: 'settings', size: '20', zeroText: 'Automatic', zeroColor: 'primary', oneText: 'Manual', oneColor: 'primary' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 456, title: 'Motor Blocked from ISS 1 (Shut Down)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 457, title: 'General Alarm from ISS 1', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 458, title: 'Exhaust Valve', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 459, title: 'Override 1 ON', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 460, title: 'Diesel Purifier Running', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 461, title: 'Diesel Purifier Fail', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</template>
