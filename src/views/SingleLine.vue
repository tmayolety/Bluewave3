<script setup>

import SingleLineBusBar from '../components/SingleLineBusBar.vue'
import SingleLineHeader from '../components/SingleLineHeader.vue'
import TextAnalogueValue from '../components/TextAnalogueValue.vue'

</script>

<template>

    <section style=" max-height: 100%; overflow: hidden;">
        <article>

            <div class="ui grid type1 cols-mini-1">

                <SingleLineBusBar :gen1BreakerSignalId="401" :gen2BreakerSignalId="402"
                    :genEmergencyBreakerSignalId="403" :shorePowerBreakerSignalId="404"
                    :busTideBreakerSignalId="405" />

                <div class="ui grid type1 cols-mini-4 pad-no gap-med">

                    <!-- GENERATOR 1 -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="GENERATOR 1" :signalIdBox="401" :NC="1" />
                    </div>

                    <!--SHORE -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="SHORE POWER" :signalIdBox="404" :NC="1" />
                    </div>

                    <!-- GENERATOR 2 -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="GENERATOR 2" :signalIdBox="402" :NC="1" />
                    </div>

                    <!-- EMERGENCY GENERATOR -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="EMERGENCY GENERATOR" :signalIdBox="403" :NC="1" />
                    </div>

                    <!-- GENERATOR 1 -->
                    <div class="ui grid type1 cols-mini-6 pad-no gap-sm mini-1">

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="1" title="Current" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="2" title="Reactive Power" unit="KVAr" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="3" title="Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="4" title="Apparent Power" unit="KVA" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="5" title="Frequency" unit="Hz" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="6" title="Active Power" unit="Kw" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="7" title="L1" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="8" title="L2" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="9" title="L3" unit="A" valueMode="raw" />
                        </div>

                    </div>

                    <!-- SHORE POWER -->
                    <div class="ui grid type1 cols-mini-6 pad-no gap-sm mini-1">

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="10" title="Current" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="11" title="Reactive Power" unit="KVAr" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="12" title="Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="13" title="Apparent Power" unit="KVA" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="14" title="Frequency" unit="Hz" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="15" title="Active Power" unit="Kw" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="16" title="L1" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="17" title="L2" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="18" title="L3" unit="A" valueMode="raw" />
                        </div>

                    </div>

                    <!-- GENERATOR 2 -->
                    <div class="ui grid type1 cols-mini-6 pad-no gap-sm mini-1">

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="19" title="Current" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="20" title="Reactive Power" unit="KVAr" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="21" title="Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="22" title="Apparent Power" unit="KVA" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="23" title="Frequency" unit="Hz" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="24" title="Active Power" unit="Kw" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="25" title="L1" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="26" title="L2" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="27" title="L3" unit="A" valueMode="raw" />
                        </div>

                    </div>

                    <!-- EMERGENCY GENERATOR -->
                    <div class="ui grid type1 cols-mini-6 pad-no gap-sm mini-1">

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="28" title="Current" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="29" title="Reactive Power" unit="KVAr" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="30" title="Voltage" unit="V" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="31" title="Apparent Power" unit="KVA" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="32" title="Frequency" unit="Hz" valueMode="raw" />
                        </div>

                        <div class="ui col mini-3">
                            <TextAnalogueValue :signalId="33" title="Active Power" unit="Kw" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="34" title="L1" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="35" title="L2" unit="A" valueMode="raw" />
                        </div>

                        <div class="ui col mini-2">
                            <TextAnalogueValue :signalId="36" title="L3" unit="A" valueMode="raw" />
                        </div>
                    </div>

                </div>




            </div>
        </article>

    </section>
</template>
