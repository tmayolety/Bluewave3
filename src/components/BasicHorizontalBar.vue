<script setup>
import { ref, watchEffect, inject, computed } from 'vue';


const props = defineProps([
    'signalId',
    'unit',
    'title',
    'displayScale',
    'displayCapacity',
    'color',
    'scaleBottom',
    'scaleTop',
    'scaleStep',
    'scaleSegments',
    'size',
    'limitFlag',
    'showLimits',
    'valueMode',
    'orientation'
])
const getSignalValueRaw = inject('getSignalValueRaw')
const getSignalValueEscalated = inject('getSignalValueEscalated')
const getLimits = inject('getLimits')

const value = ref(null)
const limits = ref(null)
const HH = ref(null)
const H = ref(null)
const L = ref(null)
const LL = ref(null)
const positionHH = ref(null)
const positionH = ref(null)
const positionL = ref(null)
const positionLL = ref(null)
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

watchEffect(() => {

    if (value.value == null) {
        value.value = 'N/A'
    }

    switch (props.valueMode) {
        case "escalated":
            value.value = getSignalValueEscalated(props.signalId);
            break;
        default:
        case "raw":
            value.value = getSignalValueRaw(props.signalId);
            break;
    }
    value.value = Math.round(value.value)

    if (!isNaN(value.value)) {

        limits.value = getLimits(props.signalId)

        HH.value = limits.value.HH
        H.value = limits.value.H
        L.value = limits.value.L
        LL.value = limits.value.LL

        positionHH.value = { 'flex-basis': percentage(HH.value) + '%' }
        positionH.value = { 'flex-basis': percentage(H.value) + '%' }
        positionL.value = { 'flex-basis': percentage(L.value) + '%' }
        positionLL.value = { 'flex-basis': percentage(LL.value) + '%' }

        if (props.limitFlag === 'onBar') {
            if (value.value >= HH.value && HH.value != null) {
                barClass.value = 'color-fl-red glow';
            } else if (value.value >= H.value && value.value < HH.value && HH.value != null && H.value != null) {
                barClass.value = 'color-fl-yellow glow';
            } else if (value.value > L.value && value.value < H.value) {
                barClass.value = props.color;
            } else if (value.value <= L.value && value.value > LL.value && L.value != null && LL.value != null) {
                barClass.value = 'color-fl-yellow glow';
            } else if (value.value <= LL.value && LL.value != null) {
                barClass.value = 'color-fl-red glow';
            }
        }
    } else {
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
                    <div :class="[barClass]" :style="barStyle"></div>
                </div>
                <ul class="pbar--value">
                    <li class="value-yellow" v-if="H && showLimits" :style="positionH">
                        <div>H</div>
                    </li>
                </ul>
                <ul class="pbar--value">
                    <li class="value-red" v-if="HH && showLimits" :style="positionHH">
                        <div>HH</div>
                    </li>
                </ul>
                <ul class="pbar--value">
                    <li class="value-yellow" v-if="L && showLimits" :style="positionL">
                        <div>L</div>
                    </li>
                </ul>
                <ul class="pbar--value">
                    <li class="value-red" v-if="LL && showLimits" :style="positionLL">
                        <div>LL</div>
                    </li>
                </ul>
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
