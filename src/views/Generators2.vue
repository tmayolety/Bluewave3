<script setup>
import TextAnalogueValue from '../components/TextAnalogueValue.vue'
import BasicHorizontalBar from '../components/BasicHorizontalBar.vue'
import GaugeRender from '../components/Gauge.vue'
import GeneratorsMenu from '../submenus/GeneratorsMenu.vue'
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
</script>

<template>

    <GeneratorsMenu />

    <section style="overflow: hidden;">
        <article>
            <div class="ui grid type1 cols-mini-1 gap-med">

                <!--EMERGENCY GENERATOR-->

                <div class="ui grid cols-mini-2 col mini-1 gap-sm pad-no">
                    <div
                        class="ui grid type1 cols-mini-1 col mini-2 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                        <header class="col-header size-med" style="height: 30px;">Emergency Generator</header>
                        <div class="ui col mini-1 align-top" style="height: 200px;">
                             <GaugeRender :signalId="57" unit="kw" textSizeClass="text-size-30"
                                unitSizeClass="text-size-15" :scaleInterval="100" :height="'200px'" />
                        </div>
                    </div>

                    <div class="ui grid type1 resp  pad-no gap-mini col mini-2">
                        <BasicHorizontalBar :signalId="58" title="Engine RPM" unit="rpm" :scaleBottom="0"
                            :scaleTop="3000" :scaleStep="500" :displayScale="true" color="#3498db" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="59" title="Oil Press." unit="bar" valueMode="raw" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="60" title="Coolant Press." unit="bar" valueMode="raw" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="61" title="Coolant Temp." unit="C" valueMode="raw" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="62" title="Oil Temp." unit="C" valueMode="raw" />
                    </div>

                    <div class="ui col mini-1">
                        <ul class="ui table size-mini resp">
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 422, title: 'Remote Mode', icon: 'settings', size: '20', zeroText: 'Local', zeroColor: 'secondary', oneText: 'Remote', oneColor: 'primary' }" />
                        </ul>
                    </div>
                    <div class="ui col mini-1">
                        <ul class="ui table size-mini resp">
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 423, title: 'Common Alarm', icon: 'tripping', size: '20', zeroText: 'No Alarm', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                        </ul>
                    </div>
                    <div class="ui col mini-1">
                        <ul class="ui table size-mini resp">
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 424, title: 'Status', icon: 'engines', size: '20', zeroText: 'Stopped', zeroColor: 'secondary', oneText: 'Running', oneColor: 'primary' }" />
                        </ul>
                    </div>
                    <div class="ui col mini-1">
                        <ul class="ui table size-mini resp">
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 425, title: 'Shutdown', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'success', oneText: 'Alarm', oneColor: 'danger' }" />
                        </ul>
                    </div>
                    <div class="ui col mini-1">
                        <ul class="ui table size-mini resp">
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 426, title: 'Lube Oil Pump', icon: 'on-off', size: '20', zeroText: 'OFF', zeroColor: 'secondary', oneText: 'ON', oneColor: 'primary' }" />
                        </ul>
                    </div>
                    <div class="ui col mini-1">
                        <ul class="ui table size-mini resp">
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 427, title: 'Main Breaker State', icon: 'tripping', size: '20', zeroText: 'Local', zeroColor: 'secondary', oneText: 'Remote', oneColor: 'primary' }" />
                        </ul>
                    </div>
                    <div class="ui col mini-1">
                        <ul class="ui table size-mini resp">
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 428, title: 'Main Breaker Status', icon: 'tripping', size: '20', zeroText: 'Opened', zeroColor: 'secondary', oneText: 'Closed', oneColor: 'primary' }" />
                        </ul>
                    </div>
                    <div class="ui col mini-1">
                        <ul class="ui table size-mini resp">
                            <IconTextValueDigitalLine
                                v-bind="{ signalId: 429, title: 'Main Breaker Tripped', icon: 'tripping', size: '20', zeroText: 'OK', zeroColor: 'primary', oneText: 'Alarm', oneColor: 'danger' }" />
                        </ul>
                    </div>




                </div>

            </div>

        </article>
    </section>
</template>
