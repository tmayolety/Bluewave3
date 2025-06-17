<script setup>
import IconTextValueAnalogueLine from '../components/IconTextValueAnalogueLine.vue'
import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import VariousSystemsMenu from '../submenus/VariousSystemsMenu.vue'
</script>

<template>
    <VariousSystemsMenu/>
    <section style="overflow: hidden;">
        <article>

            <div class="ui grid type1 cols-mini-1  phone-1 insulationSystemAppMobile">

                <div class="ui grid cols-mini-1 cols-xl-3 bg-no pad-no gap-med">

                    <div class="ui col mini-1 xl-1 has-col-header-sm align-start radius shadow">
                        <header class="col-header size-med">Temperatures</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 14049, unit: 'Cº', valueMode: 'filtered', title: 'Fridge', icon: 'temps', size: '20', valueDecimals: 1 }"></IconTextValueAnalogueLine>
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 14050, unit: 'Cº', valueMode: 'filtered', title: 'Freezer', icon: 'temps', size: '20', valueDecimals: 1 }"></IconTextValueAnalogueLine>
                            </ul>
                        </div>
                    </div>
                    <div class="ui col mini-1 xl-1 has-col-header-sm align-start radius shadow">
                        <header class="col-header size-med">Compressors</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 14033, title: 'Compressor 1 (Fridge)', icon: 'shore', size: '20', oneText: 'ON', oneColor: 'success', zeroText: 'OFF', zeroColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 14034, title: 'Compressor 2 (Fridge)', icon: 'shore', size: '20', oneText: 'ON', oneColor: 'success', zeroText: 'OFF', zeroColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 14035, title: 'Compressor 3 (Fridge)', icon: 'shore', size: '20', oneText: 'ON', oneColor: 'success', zeroText: 'OFF', zeroColor: 'danger' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 14036, title: 'Compressor 4 (Fridge)', icon: 'shore', size: '20', oneText: 'ON', oneColor: 'success', zeroText: 'OFF', zeroColor: 'danger' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                    <div class="ui col mini-1 xl-1 has-col-header-sm align-start radius shadow">
                        <header class="col-header size-med">Defrost</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 14057, unit: 'h', valueMode: 'filtered', title: 'Fridge defrost in', icon: 'temperature', size: '20' }"></IconTextValueAnalogueLine>
                                <IconTextValueAnalogueLine
                                    v-bind="{ signalId: 14058, unit: 'h', valueMode: 'filtered', title: 'Freezer defrost in', icon: 'temperature', size: '20' }"></IconTextValueAnalogueLine>
                            </ul>
                        </div>
                    </div>
                    <div class="ui col mini-1 xl-1 has-col-header-sm align-start radius shadow">
                        <header class="col-header size-med">Sea water</header>
                        <div class="col-content overflow">
                            <ul class="ui table size-mini resp">
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 14037, title: 'Pump 1', icon: 'engines', size: '20', zeroText: 'Stop', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                                <IconTextValueDigitalLine
                                    v-bind="{ signalId: 14038, title: 'Pump 2', icon: 'engines', size: '20', zeroText: 'Stop', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </article>
    </section>
</template>