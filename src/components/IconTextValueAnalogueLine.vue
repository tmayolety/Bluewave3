<script setup>
import { ref, watchEffect, inject, onMounted } from 'vue';
import axios from 'axios';

const props = defineProps([
  'signalId', 
  'unit',
  'icon',
  'size',
  'title',
  'valueMode', 
  'valueDecimals'
])

const getSignalValueRaw = inject('getSignalValueRaw')
const getSignalValueEscalated = inject('getSignalValueEscalated')

const value = ref(null)
const iconRoute = `../../framework/3-modules/icons/${props.icon}.svg`
const iconSize = `icon-size-${props.size}`
const svgId = `svg_${props.signalId}_${Math.floor(Math.random() * (1000 - 100)) + Date.now()}`
const iconColor = ref(null)
const valueTextColor = ref(null)
const svgContent = ref('')
const titleDisplay = ref(false)
const decimals = ref(0)
const valueDecimalsAnalogue = ref(null)

onMounted( async ()=>{  
  const response = await axios.get(iconRoute);
  svgContent.value = response.data;

  if(props.title != null) {
    titleDisplay.value = true
  }
  if(props.valueDecimals === 'undefined'){
    decimals.value = 0
  }else{
    decimals.value = props.valueDecimals
  }
})

watchEffect(() => {

  switch (props.valueMode) {
      case "escalated":
          value.value = getSignalValueEscalated(props.signalId);
          break;
      default:
      case "raw":
          value.value = getSignalValueRaw(props.signalId);
          break;
  }

  if(!isNaN(value.value)){
    valueDecimalsAnalogue.value = parseFloat(value.value).toFixed(decimals.value)
  }else{
    valueDecimalsAnalogue.value = 0
  }

});

</script>

<template>

    <li>
        <div class="col-40 align-middle-center">
            <i class="ui" :class='[iconSize, iconColor]' :id="svgId" v-html="svgContent"></i>
        </div>

        <div v-if="titleDisplay" class="col-100-min">
            <span>{{ title }}</span>
        </div>

        <div class="col-80 align-middle-right" :class='[valueTextColor]'>
            <span class="font-bold ">{{ valueDecimalsAnalogue }}</span>
            <small class="font-regular color-text-type-secondary-dark">&nbsp {{ unit }}</small>
        </div>

    </li>

</template>
