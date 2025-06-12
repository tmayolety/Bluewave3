<script setup>

import SingleLineBusBar from '../components/SingleLineBusBar.vue'
import SingleLineHeader from '../components/SingleLineHeader.vue'
import TextAnalogueValue from '../components/TextAnalogueValue.vue'

</script>

<template>

    <section style=" max-height: 100%;">
        <article>

            <div class="ui grid type1 cols-mini-1">

                <SingleLineBusBar :gen1BreakerSignalId="11" :gen2BreakerSignalId="4338"
                    :genEmergencyBreakerSignalId="4699" :shorePowerBreakerSignalId="12"
                    :busTideBreakerSignalId="2049" />

                <div class="ui grid type1 cols-mini-4 pad-no gap-med">

                    <!-- GENERATOR 1 -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="GENERATOR 1" :signalIdBox="11" :NC="1" />
                    </div>

                    <!--SHORE -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="SHORE POWER" :signalIdBox="12" :NC="1" />
                    </div>

                    <!-- GENERATOR 2 -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="GENERATOR 2" :signalIdBox="4338" :NC="1" />
                    </div>

                    <!-- EMERGENCY GENERATOR -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="EMERGENCY GENERATOR" :signalIdBox="4699" :NC="1" />
                    </div>

                    <!-- GENERATOR 1 -->
                    <div class="ui grid type1 cols-mini-6 pad-no gap-sm mini-1">

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Current" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4398" title="Reactive Power" unit="KVAr" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4399" title="Apparent Power" unit="KVA" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Frequency" unit="Hz" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4399" title="Active Power" unit="Kw" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4399" title="L1" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4001" title="L2" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4399" title="L3" unit="A" valueMode="raw" />
                        </div>

                    </div>

                    <!-- SHORE POWER -->
                    <div class="ui grid type1 cols-mini-6 pad-no gap-sm mini-1">

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Current" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4398" title="Reactive Power" unit="KVAr" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4399" title="Apparent Power" unit="KVA" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Frequency" unit="Hz" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4399" title="Active Power" unit="Kw" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4399" title="L1" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4001" title="L2" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4399" title="L3" unit="A" valueMode="raw" />
                        </div>

                    </div>

                    <!-- GENERATOR 2 -->
                    <div class="ui grid type1 cols-mini-6 pad-no gap-sm mini-1">

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Current" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4398" title="Reactive Power" unit="KVAr" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4399" title="Apparent Power" unit="KVA" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Frequency" unit="Hz" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4399" title="Active Power" unit="Kw" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4399" title="L1" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4001" title="L2" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4399" title="L3" unit="A" valueMode="raw" />
                        </div>

                    </div>

                    <!-- EMERGENCY GENERATOR -->
                    <div class="ui grid type1 cols-mini-6 pad-no gap-sm mini-1">

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Current" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4398" title="Reactive Power" unit="KVAr" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4399" title="Apparent Power" unit="KVA" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4001" title="Frequency" unit="Hz" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4399" title="Active Power" unit="Kw" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4399" title="L1" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4001" title="L2" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="4399" title="L3" unit="A" valueMode="raw" />
                        </div>
                    </div>

                </div>




            </div>
        </article>

    </section>
</template>
