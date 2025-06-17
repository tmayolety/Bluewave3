<script setup>

import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'
import WindRose from '../components/WindRose.vue'
import TrueWind from '../components/TrueWind.vue'
import SogCog from '../components/SogCog.vue'

</script>

<template>
    <section style="overflow: hidden;">
        <article>


            <div class="ui grid type1 cols-mini-1  phone-1">
                <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
                    <header class="ui col">
                        <font>Navigation Equipment</font>
                        <span class="gradients">
                            <span class="gradient-left"></span>
                            <span class="gradient-right"></span>
                        </span>
                        <span class="dots-left"></span>
                        <span class="dots-right"></span>
                    </header>
 
                    <div class="ui col mini-1  gap-no pad-no has-col-header-sm overflow-no radius shadow"
                        style="overflow: hidden!important; min-height:300px; display:block; justify-content:center">

                        <div class=" middle-center radius shadow" style="padding: 0.2em; max-height: 300px;">

                            <WindRose style="border:none;"
                                v-bind="{ signalId: 12019, valueMode: 'raw' }"></WindRose>

                        </div>
                    </div>
             
                    <div class="ui col mini-1  gap-no pad-no has-col-header-sm overflow-no radius shadow"
                        style="overflow: hidden!important; min-height:300px; display:block; justify-content:center">
                        <header class="col-header text-size-8">True Wind</header>
                        <div class="ui grid type1 cols-mini-1 middle-center pad-mini">
                            <TrueWind style="border:none; height:300px"
                                v-bind="{ signalId1: 12021, signalId2: 12023, valueMode: 'raw' }"></TrueWind>
                        </div>
                    </div>

                    <div class="ui col mini-1 pad-no has-col-header-sm radius shadow"
                        style="overflow: hidden!important; min-height:300px; display:block; justify-content:center">
                        <header class="col-header text-size-8">SOG & COG</header>
                        <div class="ui grid type1 cols-mini-1 middle-center pad-mini">
                            <SogCog style="border:none; height:300px "
                                v-bind="{ signalId1: 12017, signalId2: 12019, valueMode: 'raw' }"></SogCog>
                        </div>
                    </div>
                  
                    <div class="ui grid cols-mini-1 bg-no pad-no gap-med">

                        <div class="ui col mini-1 xl-1 grid cols-mini-1 mini-1 bg-no pad-no gap-med align-start">
                            <div class="ui col mini-1 has-col-header-sm radius shadow">
                                <header class="col-header size-med"></header>
                                <div class="col-content overflow">
                                    <ul class="ui table size-mini resp">
                                
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 12005, size: '20', unit: 'º', valueMode: 'escalated', valueDecimals: 1, title: 'Latitude', icon: 'navigation' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 12011, size: '20', unit: 'º', valueMode: 'escalated', valueDecimals: 1, title: 'Longitude', icon: 'navigation' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 12021, size: '20', unit: 'º', valueMode: 'escalated', valueDecimals: 1, title: 'TWD', icon: 'navigation' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 12023, size: '20', unit: 'Kn', valueMode: 'escalated', valueDecimals: 1, title: 'TWS', icon: 'navigation' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 12019, size: '20', unit: 'º', valueMode: 'escalated', valueDecimals: 1, title: 'Heading', icon: 'navigation' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 12027, size: '20', unit: 'm', valueMode: 'escalated', valueDecimals: 1, title: 'Depth', icon: 'navigation' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 12017, size: '20', unit: 'Kn', valueMode: 'escalated', valueDecimals: 1, title: 'SOG', icon: 'navigation' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 12019, size: '20', unit: 'º', valueMode: 'escalated', valueDecimals: 1, title: 'COG', icon: 'navigation' }"></IconTextValueAnalogueLine>
                                        <IconTextValueAnalogueLine
                                            v-bind="{ signalId: 12025, size: '20', unit: 'ºC', valueMode: 'escalated', valueDecimals: 1, title: 'Water Temp', icon: 'navigation' }"></IconTextValueAnalogueLine>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>
    </section>
</template>
