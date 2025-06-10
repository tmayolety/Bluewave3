<script setup>

import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'

import SingleLineBusBar from '../components/SingleLineBusBar.vue'
import SingleLineHeader from '../components/SingleLineHeader.vue'

</script>

<template>

    <section style=" max-height: 100%;">
        <article>

            <div class="ui grid type1 cols-mini-1">

                <SingleLineBusBar :gen1BreakerSignalId="4336" :gen2BreakerSignalId="4338"
                    :genEmergencyBreakerSignalId="4699" :shorePowerBreakerSignalId="4701"
                    :busTideBreakerSignalId="2049" />

                <div class="ui grid type1 cols-mini-4 pad-no gap-med">

                    <!-- GENERATOR 1 -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="GENERATOR 1" :signalIdBox="4336" :NC="1" />
                    </div>

                    <!--SHORE -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="SHORE POWER" :signalIdBox="4701" :NC="1" />
                    </div>

                    <!-- GENERATOR 2 -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="GENERATOR 2" :signalIdBox="4338" :NC="1" />
                    </div>

                    <!-- EMERGENCY GENERATOR -->
                    <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
                        <SingleLineHeader componentTitle="EMERGENCY GENERATOR" :signalIdBox="4699" :NC="1" />
                    </div>
                </div>


            </div>
        </article>

    </section>
</template>
