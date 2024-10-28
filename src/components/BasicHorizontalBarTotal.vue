<script setup>
import { ref, watchEffect, inject, computed } from 'vue';


const props = defineProps([
    'signalId1',
    'signalId2',
    'signalId3',
    'signalId4',
    'signalId5',
    'signalId6',
    'signalId7',
    'signalId8',
    'signalId9',
    'signalId10',
    'unit',
    'title',
    'displayScale',
    'color',
    'scaleBottom',
    'scaleTop',
    'scaleStep',
    'scaleSegments',
    'size',
    'limitFlag',
    'showLimits',
    'valueMode',
    'orientation',
])
const getSignalValueRaw = inject('getSignalValueRaw')
const getSignalValueEscalated = inject('getSignalValueEscalated')

const value = ref(null)
const value1 = ref(null)
const value2 = ref(null)
const value3 = ref(null)
const value4 = ref(null)
const value5 = ref(null)
const value6 = ref(null)
const value7 = ref(null)
const value8 = ref(null)
const value9 = ref(null)
const value10 = ref(null)
const barClass = ref('')


const sizeClass = computed(() => {
    let classOutput;
    if (props.size === 'regular') {
        classOutput = 'size-lg header-sm-x1 footer-lg-x1';
    } else if (props.size === 'small') {
        classOutput = 'size-mini  header-mini-x1 footer-mini-x1';
    } else if (props.size === 'medium') {
        classOutput = 'size-mini header-mini-x1 footer-mini-x1';
    } else if (props.orientation === 'horizontal') {
        classOutput = 'size-mini header-mini-x1 footer-mini-x1';
    }
    return classOutput;
});

const scaleCode = computed(() => {
    let codeResult = ''
    for (let i = props.scaleBottom; i <= props.scaleTop; i += props.scaleStep) {
        codeResult = codeResult + '<li><div>' + i + '</div></li>'
    }
    return codeResult
});

const labelCode = computed(() => {
    let codeResult = ''
    for (let i = 0; i <= props.scaleSegments; i++) {
        codeResult = codeResult + '<li></li>'
    }
    return codeResult
});

const barStyle = computed(() => {
    return {
        'flex-basis': percentage(value.value) + '%',
    };
});

const percentage = (sentValue) => {
    let range;
    if (parseInt(props.scaleBottom) >= 0) {
        range = Number(props.scaleTop) - Number(props.scaleBottom)
    } else {
        range = Number(props.scaleTop) + Math.abs(props.scaleBottom)
    }
    var result = (parseInt(sentValue) * 100) / parseInt(range);
    return result.toFixed(2)
}

const updateTotalValue = () => {
    value.value = Math.floor(
        (value1?.value || 0) + 
        (value2?.value || 0) + 
        (value3?.value || 0) + 
        (value4?.value || 0) + 
        (value5?.value || 0) + 
        (value6?.value || 0) + 
        (value7?.value || 0) + 
        (value8?.value || 0) + 
        (value9?.value || 0) + 
        (value10?.value || 0)
    );
};

watchEffect(() => {

    switch (props.valueMode) {
        case "escalated":
            value1.value = getSignalValueEscalated(props.signalId1);
            value2.value = getSignalValueEscalated(props.signalId2);
            value3.value = getSignalValueEscalated(props.signalId3);
            value4.value = getSignalValueEscalated(props.signalId4);
            value5.value = getSignalValueEscalated(props.signalId5);
            value6.value = getSignalValueEscalated(props.signalId6);
            value7.value = getSignalValueEscalated(props.signalId7);
            value8.value = getSignalValueEscalated(props.signalId8);
            value9.value = getSignalValueEscalated(props.signalId9);
            value10.value = getSignalValueEscalated(props.signalId10);
            break;
        default:
        case "raw":
            value1.value = getSignalValueRaw(props.signalId1);
            value2.value = getSignalValueRaw(props.signalId2);
            value3.value = getSignalValueRaw(props.signalId3);
            value4.value = getSignalValueRaw(props.signalId4);
            value5.value = getSignalValueRaw(props.signalId5);
            value6.value = getSignalValueRaw(props.signalId6);
            value7.value = getSignalValueRaw(props.signalId7);
            value8.value = getSignalValueRaw(props.signalId8);
            value9.value = getSignalValueRaw(props.signalId9);
            value10.value = getSignalValueRaw(props.signalId10);
            break;
    }
    updateTotalValue()

    if (value.value === null || isNaN(value.value)) {
        value.value = 0
    }

});

</script>

<template>

    <div class="ui col pad-med">
        <div class="ui pbar pbar-1 horizontal label divider value-2" :class='[sizeClass]'>
            <header>
                <h5 class="font-semibold">{{ title }}</h5>
            </header>
            <div class="pbar--container" style="margin-top: 2px">
                <ul class="ui pbar--label" v-if="displayScale" v-html="scaleCode">
                </ul>
                <ul class="ui pbar--label-divider" v-html="labelCode">
                </ul>
                <div class="ui pbar--item">
                    <div :class="[color]" :style="barStyle"></div>
                </div>
                
            </div>
            <footer>
                <div className="font-regular">
                    <h5 class="font-bold mg-left-10"> {{ value }} <small
                            class="font-regular text-size-mini-7 clr-subvalue-ui"> {{ unit }} </small></h5>
                </div>
            </footer>
        </div>
    </div>

</template>
