<script setup>

import TanksMenu from '../submenus/TanksMenu.vue'
import VerticalBar from '../components/VerticalBar.vue'
import VerticalBarTotal from '../components/VerticalBarTotal.vue';
</script>

<template>

    <TanksMenu />

    <section>
        <article>
            <div class="ui grid type1 cols-mini-6 gap-med">

                <div class="ui col mini-1  flex-center">
                    <VerticalBar :signalId="4391" title="Clean Oil" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#cfa021" />
                </div>
                <div class="ui col mini-1  flex-center">
                    <VerticalBar :signalId="4385" title="Dirty Oil" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#cfa021" />
                </div>
                <div class="ui col mini-1  flex-center">
                    <VerticalBar :signalId="4388" title="Bilge" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#7d7d7d" />
                </div>
                <div class="ui col mini-1  flex-center">
                    <VerticalBar :signalId="4391" title="Sludge" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#7d7d7d" />
                </div>
                <div class="ui col mini-1  flex-center">
                    <VerticalBar :signalId="4385" title="Aft Sewage" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#7d7d7d" />
                </div>
                <div class="ui col mini-1  flex-center">
                    <VerticalBar :signalId="4388" title="Fwd Sewage" unit="L" :scaleBottom="0" :scaleTop="3000"
                        :scaleStep="500" :displayScale="true" color="#7d7d7d" />
                </div>
               
            </div>
        </article>
    </section>
</template>
