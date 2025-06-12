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
                            <VerticalBar :signalId="4391" title="Engine Oil Pressure" unit="bar" :scaleBottom="0" :scaleTop="3000"
                                :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>
                        <div class="ui col mini-3 ">
                            <GaugeRender :signalId="4011" unit="rpm" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'220px'" :centerY="'94%'" :radius="'120'" />
                        </div>
                        <div class="ui col mini-1  flex-center">
                            <VerticalBar :signalId="4391" title="Coolant Temperature" unit="C" :scaleBottom="0"
                                :scaleTop="3000" :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>
                    </div>

                    <div class="ui grid type1 cols-mini-1 col mini-2">


                        <div class="ui col mini-3">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 1, title: 'Low Oil Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 2, title: 'Coolant High Temperature', icon: 'temperature', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 3, title: 'Water in Fuel Racor Filter', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 4, title: 'Cooling Water Oil Low Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 5, title: 'Power ON QE', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 6, title: 'Interconnection QP/DE', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 7, title: 'Air Flap', icon: 'settings', size: '20', zeroText: 'Opened', zeroColor: 'secondary', oneText: 'Closed', oneColor: 'primary' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 8, title: 'Status', icon: 'settings', size: '20', zeroText: 'Automatic', zeroColor: 'primary', oneText: 'Manual', oneColor: 'primary' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 9, title: 'Motor Blocked from ISS 1 (Shut Down)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 10, title: 'General Alarm from ISS 1', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 41, title: 'Exhaust Valve', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 44, title: 'Override 1 ON', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 53, title: 'Diesel Purifier Running', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 54, title: 'Diesel Purifier Fail', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                            </ul>
                        </div>

                    </div>


                </div>

                <!--STBD MAIN ENGINE-->
                <div class="ui grid cols-mini-2 col mini-1 gap-sm pad-no">

                    <div class="ui grid type1 cols-mini-5 col mini-2">
                        <div class="ui col mini-1  flex-center">
                            <VerticalBar :signalId="4391" title="Engine Oil Pressure" unit="bar" :scaleBottom="0" :scaleTop="3000"
                                :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>
                        <div class="ui col mini-3 ">
                            <GaugeRender :signalId="4011" unit="rpm" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'220px'" :centerY="'94%'" :radius="'120'" />
                        </div>
                        <div class="ui col mini-1  flex-center">
                            <VerticalBar :signalId="4391" title="Coolant Temperature" unit="C" :scaleBottom="0"
                                :scaleTop="3000" :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>
                    </div>

                    <div class="ui grid type1 cols-mini-1 col mini-2">
                        <div class="ui col mini-3">
                            <ul class="ui table size-mini resp">

                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 1, title: 'Low Oil Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 2, title: 'Coolant High Temperature', icon: 'temperature', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 3, title: 'Water in Fuel Racor Filter', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 4, title: 'Cooling Water Oil Low Pressure', icon: 'pressure', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 5, title: 'Power ON QE', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 6, title: 'Interconnection QP/DE', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 7, title: 'Air Flap', icon: 'settings', size: '20', zeroText: 'Opened', zeroColor: 'secondary', oneText: 'Closed', oneColor: 'primary' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 8, title: 'Status', icon: 'settings', size: '20', zeroText: 'Automatic', zeroColor: 'primary', oneText: 'Manual', oneColor: 'primary' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 9, title: 'Motor Blocked from ISS 1 (Shut Down)', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 10, title: 'General Alarm from ISS 1', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 41, title: 'Exhaust Valve', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 44, title: 'Override 1 ON', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 53, title: 'Diesel Purifier Running', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 54, title: 'Diesel Purifier Fail', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</template>
