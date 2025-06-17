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
                            <VerticalBar :signalId="63" title="Engine Oil Pressure" unit="bar" :scaleBottom="0" :scaleTop="3000"
                                :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>

                        <div class="ui col mini-3 ">
                            <GaugeRender :signalId="64" unit="rpm" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'220px'" :centerY="'94%'" :radius="'120'" />
                        </div>

                        <div class="ui col mini-1  flex-center">
                            <VerticalBar :signalId="65" title="Coolant Temperature" unit="C" :scaleBottom="0"
                                :scaleTop="3000" :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>

                    </div>

                    <div class="ui grid type1 cols-mini-3 col mini-2">

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="66" title="Battery Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="67" title="Engine Hours" unit="h" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="68" title="Filtered Fuel Press." unit="bar"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="69" title="Left Exhaust Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="70" title="Right Exhaust Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="71" title="Fuel Consumption" unit="l/h" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="72" title="Boost Press." unit="KPa" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="73" title="Engine Oil Press. Diff." unit="KPa"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="74" title="Engine Fuel Press. Diff." unit="KPa"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="75" title="Coolant Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="76" title="Right Air Filter Restriction" unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="77" title="Left Air Filter Restriction" unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="78" title="Transsmission Oil Temp." unit="C"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="79" title="Transmission Oil Press." unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="80" title="Engine Oil Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 430, title: 'CCM Communication Fault', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 431, title: 'Port Engine Common Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                            </ul>
                        </div>

                    </div>


                </div>

                <!--STBD MAIN ENGINE-->
                <div class="ui grid cols-mini-2 col mini-1 gap-sm pad-no">


                    <div class="ui grid type1 cols-mini-5 col mini-2">

                        <div class="ui col mini-1  flex-center">
                            <VerticalBar :signalId="81" title="Engine Oil Pressure" unit="bar" :scaleBottom="0" :scaleTop="3000"
                                :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>

                        <div class="ui col mini-3 ">
                            <GaugeRender :signalId="82" unit="rpm" textSizeClass="text-size-20"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'220px'" :centerY="'94%'" :radius="'120'" />
                        </div>

                        <div class="ui col mini-1  flex-center">
                            <VerticalBar :signalId="83" title="Coolant Temperature" unit="C" :scaleBottom="0"
                                :scaleTop="3000" :scaleStep="500" :displayScale="true" color="#3498db" />
                        </div>

                    </div>

                    <div class="ui grid type1 cols-mini-3 col mini-2">

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="84" title="Battery Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="85" title="Engine Hours" unit="h" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="86" title="Filtered Fuel Press." unit="bar"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="87" title="Left Exhaust Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="88" title="Right Exhaust Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="89" title="Fuel Consumption" unit="l/h" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="90" title="Boost Press." unit="KPa" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="91" title="Engine Oil Press. Diff." unit="KPa"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="92" title="Engine Fuel Press. Diff." unit="KPa"
                                valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="93" title="Coolant Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="94" title="Right Air Filter Restriction" unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="95" title="Left Air Filter Restriction" unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="96" title="Transsmission Oil Temp." unit="C"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="97" title="Transmission Oil Press." unit="KPa"
                                valueMode="raw" />
                        </div>
                        <div class="ui col mini-1">
                            <TextAnalogueValue :signalId="98" title="Engine Oil Temp." unit="C" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 432, title: 'CCM Communication Fault', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 433, title: 'Stbd Engine Common Alarm', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                            </ul>
                        </div>


                    </div>


                </div>

            </div>

        </article>
    </section>
</template>
