<script setup>
import TextAnalogueValue from '../components/TextAnalogueValue.vue'
import GaugeRender from '../components/Gauge.vue'
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import VerticalBar from '../components/VerticalBar.vue'
import MainEnginesMenu from '../submenus/MainEnginesMenu.vue'
</script>

<template>

    <MainEnginesMenu />

    <section>
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

                    <div class="ui grid type1 cols-mini-3 col mini-2">

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4398" title="Battery Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4398" title="Engine Hours" unit="h" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4398" title="Filtered Fuel Press." unit="bar"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4001" title="Left Exhaust Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4399" title="Right Exhaust Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4390" title="Fuel Consumption" unit="l/h" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4391" title="Boost Press." unit="KPa" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4392" title="Engine Oil Press. Diff." unit="KPa"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4393" title="Engine Fuel Press. Diff." unit="KPa"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4394" title="Coolant Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4395" title="Right Air Filter Restriction" unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4396" title="Left Air Filter Restriction" unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4397" title="Transsmission Oil Temp." unit="C"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4398" title="Transmission Oil Press." unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4399" title="Engine Oil Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 2049, title: 'CCM Communication Fault', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 2049, title: 'Port Engine Common Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
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

                    <div class="ui grid type1 cols-mini-3 col mini-2">

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4398" title="Battery Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4398" title="Engine Hours" unit="h" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4398" title="Filtered Fuel Press." unit="bar"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4001" title="Left Exhaust Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4399" title="Right Exhaust Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4390" title="Fuel Consumption" unit="l/h" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4391" title="Boost Press." unit="KPa" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4392" title="Engine Oil Press. Diff." unit="KPa"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4393" title="Engine Fuel Press. Diff." unit="KPa"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4394" title="Coolant Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4395" title="Right Air Filter Restriction" unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4396" title="Left Air Filter Restriction" unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4397" title="Transsmission Oil Temp." unit="C"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4398" title="Transmission Oil Press." unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="4399" title="Engine Oil Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 2049, title: 'CCM Communication Fault', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 2049, title: 'Stbd Engine Common Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                            </ul>
                        </div>


                    </div>


                </div>

            </div>

        </article>
    </section>
</template>
