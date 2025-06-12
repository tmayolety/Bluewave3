<script setup>

import TanksMenu from '../submenus/TanksMenu.vue'
import VerticalBar from '../components/VerticalBar.vue'
import VerticalBarTotal from '../components/VerticalBarTotal.vue';
</script>

<template>

    <TanksMenu />

    <section>
        <article>
            <div class="ui grid type1 cols-mini-4 gap-med">

                <div class="ui col mini-1  flex-center">
                    <VerticalBar :signalId="4391" title="Tank 20" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#3498db" />
                </div>
                <div class="ui col mini-1  flex-center">
                    <VerticalBar :signalId="4385" title="Tank 22" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#3498db" />
                </div>
                <div class="ui col mini-1  flex-center">
                    <VerticalBar :signalId="4388" title="Tank 22W" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#3498db" />
                </div>
                <div class="ui col mini-1  flex-center">
                    <VerticalBarTotal :signalIds="[4391, 4385, 4388]" title="Total Tanks" unit="L" :scaleBottom="0"
                        :scaleTop="9000" :scaleStep="1000" :displayScale="true" color="#3498db" />
                </div>

                

            </div>
        </article>
    </section>
</template>
