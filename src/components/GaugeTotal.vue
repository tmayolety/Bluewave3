<script setup>
import { ref, watchEffect, inject, onMounted, computed } from 'vue';
import { DxCircularGauge, DxScale, DxGeometry, DxValueIndicator, DxRangeContainer, DxRange, DxLabel, DxTick } from 'devextreme-vue/circular-gauge';
import axios from 'axios';

const props = defineProps([
  'signalId', 
  'signalId2',
  'unit',
  'icon',
  'size',
  'marginTopValue',
  'textSizeClass',
  'valueMode',
  'scaleInterval',
  'isBattery',
  'startAngle',
  'endAngle',
  'gaugeSizeHeight',
  'gaugeSizeWidth'
])

const getSignalValueRaw = inject('getSignalValueRaw')
const getSignalValueEscalated = inject('getSignalValueEscalated')
const getLimits = inject('getLimits')

const value = ref(null)
const value2 = ref(null)
const valueDisplay = ref(null)
const iconRoute = `../../framework/3-modules/icons/${props.icon}.svg`
const iconSize = `icon-size-${props.size}`
const iconColor = ref('')
const svgId = `svg_${props.signalId}_${Math.floor(Math.random() * (1000 - 100)) + Date.now()}`
const svgContent = ref('')

const limits = ref(null)
const limits2 = ref(null)
const HH = ref(null)
const H = ref(null)
const L = ref(null)
const LL = ref(null)
const Min = ref(null)
const Max = ref(null)

const valueRangeColor = ref('')
const startAngle = computed(() => props.startAngle !== undefined ? props.startAngle : 180);
const endAngle = computed(() => props.endAngle !== undefined ? props.endAngle : 0);
const height = props.gaugeSizeHeight
const width = props.gaugeSizeWidth


onMounted( async ()=>{  
  const response = await axios.get(iconRoute);
  svgContent.value = response.data;

})

const colorIconRender = () => {
  if (value.value <= LL.value || value.value >= HH.value && HH.value != 0) {
    iconColor.value = 'color-fill-type-danger';
    valueRangeColor.value = "#ff0000"
  }
  else if (value.value <= L.value || (value.value > H.value && value.value < HH.value)) {
    iconColor.value = 'color-fill-type-warning';
    valueRangeColor.value = "#f3e330"
  }
  else {
    iconColor.value = 'color-fill-type-success';
    valueRangeColor.value = "#27ae60"
  }

}

const reDrawLimits = () => {


    limits.value = getLimits(props.signalId)
    limits2.value = getLimits(props.signalId2)

    HH.value = limits.value.HH + limits2.value.HH
    H.value = limits.value.H + limits2.value.H
    L.value = limits.value.L + limits2.value.L
    LL.value = limits.value.LL + limits2.value.LL
    Min.value = limits.value.Min + limits2.value.Min
    Max.value = limits.value.Max + limits2.value.Max

}

watchEffect(() => {
    switch (props.valueMode) {
      case "escalated":
          value.value = getSignalValueEscalated(props.signalId);
          value2.value = getSignalValueEscalated(props.signalId2);
          break;
      default:
      case "raw":
          value.value = getSignalValueRaw(props.signalId);
          value2.value = getSignalValueRaw(props.signalId2);
          break;
  }
    
    if(!isNaN(value.value) && !isNaN(value2.value)){
      valueDisplay.value = Math.floor(value.value) + Math.floor(value2.value)
      reDrawLimits()
      colorIconRender()
    }else{
      valueDisplay.value = 0
      colorIconRender()
      HH.value = 0
      H.value = 0
      L.value = 0
      LL.value = 0
      Min.value = 0
      Max.value = 100
    }
  


});

</script>

<template>
  
    <DxCircularGauge :value=valueDisplay :height="height" :width="width">
        <DxScale :start-value=Min :end-value=Max :tick-interval=props.scaleInterval>
   
        <DxLabel :visible="!isBattery" />
        <DxTick :visible="!isBattery" color="#22323c"/>

        </DxScale>
    
        <DxRangeContainer :offset="6">
            <DxRange :start-value = Min :end-value = LL  color="#3d151e" />
            <DxRange :start-value = LL :end-value = L color="#4c3b28" />
            <DxRange :start-value = L :end-value = H color="#22323c" />
            <DxRange :start-value = H :end-value = HH color="#4c3b28" />
            <DxRange :start-value = HH :end-value = Max color="#3d151e" />
            <DxRange :start-value = Min :end-value = Max color="#0a1e2b" />
            <DxRange v-if="HH == 0 && H == 0 && L == 0 && LL == 0" :start-value = Min :end-value = Max color="#0a1e2b" />
        </DxRangeContainer>

        <DxGeometry  :start-angle="startAngle" :end-angle="endAngle" />
        <DxValueIndicator type="rangeBar" :color=valueRangeColor backgroundColor="#22323c" :offset=7 :size="15" />
    </DxCircularGauge>

    <div class="infos-container visible" :class='[marginTopValue]'>
        <i class="ui status-icon glow visible" :class='[iconSize, iconColor]' :id="svgId" v-html="svgContent"></i>
        <div class="ui clr-subvalue-ui color-text-type-secondary-dark">{{unit}}</div>
        <div class="ui font-bold" :class='[textSizeClass]'>{{valueDisplay}}</div>
    </div>

</template>
