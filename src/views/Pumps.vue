<script setup>

import IconTextValueDigitalLine from '../components/IconTextValueDigitalLine.vue'
import IconTwoOptionsDigitalLine from '../components/IconTwoOptionsDigitalLine.vue'

</script>

<template>
<section>
    <article>

<div class="ui grid type1 cols-mini-1  phone-1">
    <div class="ui grid cols-mini-1 col mini-1 gap-sm pad-no has-header">
        <header class="ui col">
            <font>Pumps</font>
            <span class="gradients">
                    <span class="gradient-left"></span>
                    <span class="gradient-right"></span>
                </span>
            <span class="dots-left"></span>
            <span class="dots-right"></span>
        </header>
        <div class="col-content overflow">
            <ul class="ui table size-mini resp">
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 2, signalId2: 1, title: 'Hydrophore Pump 1', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 4, signalId2: 3, title: 'Hydrophore Pump 2', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 28, signalId2: 27, title: 'Black Water Ob. Discharge', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 30, signalId2: 29, title: 'Fuel Transfer Pump 2', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 32, signalId2: 31, title: 'Fuel Transfer Pump 1', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 38, signalId2: 37, title: 'Clean Oil Transfer Pump', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 40, signalId2: 39, title: 'Dirty Oil Transfer Pump', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 6, signalId2: 5, title: 'Sanitary Pump 1', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 8, signalId2: 7, title: 'Sanitary Pump 2', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 34, signalId2: 33, title: 'Hot Water Pump 1', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 36, signalId2: 35, title: 'Hot Water Pump 2', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 22, signalId2: 21, title: 'Grey Water Pump 1', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 24, signalId2: 23, title: 'Grey Water Pump 2', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 12, signalId2: 10, title: 'Deck Washer Pump', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                <IconTextValueDigitalLine v-bind="{  signalId: 19, title: 'Fire Pump', icon: 'engines', size: '20', zeroText: 'Stop', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                <IconTextValueDigitalLine v-bind="{  signalId: 17, title: 'Bilge Pump', icon: 'engines', size: '20', zeroText: 'Stop', zeroColor: 'danger', oneText: 'Run', oneColor: 'success' }"></IconTextValueDigitalLine>
                <IconTwoOptionsDigitalLine v-bind="{  signalId1: 14, signalId2: 16, title: 'Black Water OB', icon: 'engines', size: '20', zeroTextSignal1: 'Local', zeroTextSignal2: 'Stop' , zeroColorSignal1: 'primary', zeroColorSignal2: 'danger', oneTextSignal1: 'Remote', oneTextSignal2: 'Run' , oneColorSignal1: 'primary', oneColorSignal2: 'success'}"></IconTwoOptionsDigitalLine>
                   
            </ul>
        </div>
    </div>
</div>

</article>
</section>

</template>