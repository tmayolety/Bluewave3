<script setup>
import { ref, watchEffect, inject, onMounted } from 'vue';
import axios from 'axios';

const props = defineProps([
    'signalId1',
    'signalId2',
    'icon',
    'size',
    'title',
    'zeroTextSignal1',
    'zeroTextSignal2',
    'oneTextSignal1',
    'oneTextSignal2',
    'zeroColorSignal1',
    'zeroColorSignal2',
    'oneColorSignal1',
    'oneColorSignal2'
])
const getSignalValueRaw = inject('getSignalValueRaw')

const value1 = ref(null)
const value2 = ref(null)
const iconRoute = `../../framework/3-modules/icons/${props.icon}.svg`
const iconSize = `icon-size-${props.size}`
const svgId = `svg_${props.signalId}_${Math.floor(Math.random() * (1000 - 100)) + Date.now()}`
const valueText1 = ref('N/A');
const valueText2 = ref('N/A');
const iconColor = ref(null)
const valueTextColor1 = ref(null)
const valueTextColor2 = ref(null)
const svgContent = ref('')

watchEffect(() => {
    value1.value = getSignalValueRaw(props.signalId1);
    value2.value = getSignalValueRaw(props.signalId2);

    if (value1.value == 1) {
        valueText1.value = props.oneTextSignal1;
        valueTextColor1.value = 'color-text-type-' + props.oneColorSignal1;

    } else if (value1.value == 0) {
        valueText1.value = props.zeroTextSignal1;
        valueTextColor1.value = 'color-text-type-' + props.zeroColorSignal1;
    } else {
        valueText1.value = 'N/A';
    }

    if (value2.value == 1) {
        valueText2.value = props.oneTextSignal2;
        iconColor.value = 'color-fill-type-' + props.oneColorSignal2
        valueTextColor2.value = 'color-text-type-' + props.oneColorSignal2;

    } else if (value2.value == 0) {
        valueText2.value = props.zeroTextSignal2;
        iconColor.value = 'color-fill-type-' + props.zeroColorSignal2
        valueTextColor2.value = 'color-text-type-' + props.zeroColorSignal2;
    } else {
        valueText2.value = 'N/A';
    }
});

onMounted(async () => {
    const response = await axios.get(iconRoute);
    svgContent.value = response.data;

})

</script>

<template>

    <li>
        <div class="col-40 align-middle-center">
            <i class="ui" :class='[iconSize, iconColor]' :id="svgId" v-html="svgContent"></i>
        </div>
        <div class="col-100-min"><span>{{ title }}</span></div>

        <div class="col-80 align-middle-center" :class='[valueTextColor1]'><span
                class="font-bold glow">{{ valueText1 }}</span></div>
        <div class="col-80 align-middle-center" :class='[valueTextColor2]'><span
                class="font-bold glow">{{ valueText2 }}</span></div>
    </li>

</template>
