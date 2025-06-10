<script setup>
import TextAnalogueValue from '../components/TextAnalogueValue.vue'
import BasicHorizontalBar from '../components/BasicHorizontalBar.vue'
import GaugeRender from '../components/Gauge.vue'
import GeneratorsMenu from '../submenus/GeneratorsMenu.vue'
</script>

<template>

    <GeneratorsMenu />

    <section>
        <article>
            <div class="ui grid type1 cols-mini-2 gap-med">

                <!--PORT GENERATOR-->
                <div class="ui grid cols-mini-2 col mini-1 gap-sm pad-no">
                    <div
                        class="ui grid type1 cols-mini-1 col mini-2 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                        <header class="col-header size-med" style="height: 30px;">Port Generator</header>
                        <div class="ui col mini-1 align-top" style="height: 200px;">
                            <GaugeRender v-bind="{
                                signalId: 4011, unit: 'kw', marginTopValue: 'mg-top-30', textSizeClass: 'text-size-30',
                                unitSizeClass: 'text-size-15', valueMode: 'escalated', scaleInterval: 20
                            }">
                            </GaugeRender>
                        </div>
                    </div>

                    <div class="ui grid type1 resp  pad-no gap-mini col mini-2">
                        <BasicHorizontalBar :signalId="4391" title="Main Engine RPM" unit="rpm" :scaleBottom="0"
                            :scaleTop="3000" :scaleStep="500" :displayScale="true" color="#3498db" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="4398" title="Oil Press." unit="bar" valueMode="raw" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="4001" title="Coolant Press." unit="bar" valueMode="raw" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="4399" title="Coolant Temp." unit="C" valueMode="raw" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="4001" title="Oil Temp." unit="C" valueMode="raw" />
                    </div>

                </div>

                <!--STBD GENERATOR-->
                <div class="ui grid cols-mini-2 col mini-1 gap-sm pad-no">
                    <div
                        class="ui grid type1 cols-mini-1 col mini-2 gap-no pad-no align-baseline radius shadow has-col-header-sm">
                        <header class="col-header size-med" style="height: 30px;">Stbd Generator</header>
                        <div class="ui col mini-1 align-top" style="height: 200px;">
                            <GaugeRender
                                v-bind="{ signalId: 4011, unit: 'kw', marginTopValue: 'mg-top-30', textSizeClass: 'text-size-30', unitSizeClass: 'text-size-15', valueMode: 'escalated', scaleInterval: 20 }">
                            </GaugeRender>
                        </div>
                    </div>

                    <div class="ui grid type1 resp  pad-no gap-mini col mini-2">
                        <BasicHorizontalBar :signalId="4391" title="Main Engine RPM" unit="rpm" :scaleBottom="0"
                            :scaleTop="3000" :scaleStep="500" :displayScale="true" color="#3498db" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="4398" title="Oil Press." unit="bar" valueMode="raw" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="4001" title="Coolant Press." unit="bar" valueMode="raw" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="4399" title="Coolant Temp." unit="C" valueMode="raw" />
                    </div>

                    <div class="ui col mini-1">
                        <TextAnalogueValue :signalId="4001" title="Oil Temp." unit="C" valueMode="raw" />
                    </div>

                </div>

            </div>

        </article>
    </section>
</template>
