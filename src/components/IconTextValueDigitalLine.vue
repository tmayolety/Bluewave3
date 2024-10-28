<script setup>
import { ref, watchEffect, inject, onMounted } from 'vue';
import axios from 'axios';

const props = defineProps([
  'signalId', 
  'icon',
  'size',
  'title',
  'zeroText',
  'oneText',
  'zeroColor',
  'oneColor',
  'countingHoursSignalId'
])
const getSignalValueRaw = inject('getSignalValueRaw')

const value = ref(null)
const iconRoute = `${import.meta.env.BASE_URL}../../framework/3-modules/icons/${props.icon}.svg`
const iconSize = `icon-size-${props.size}`
const svgId = `svg_${props.signalId}_${Math.floor(Math.random() * (1000 - 100)) + Date.now()}`
const valueText = ref('N/A');
const iconColor = ref(null)
const valueTextColor = ref(null)
const svgContent = ref('')
const countingHours = ref(false)
const countingHoursValue = ref(null)

watchEffect(() => {
  value.value = getSignalValueRaw(props.signalId);
  countingHoursValue.value = getSignalValueRaw(props.countingHoursSignalId)

  if(value.value  > 0){
    valueText.value = props.oneText;
    iconColor.value = 'color-fill-type-' + props.oneColor
    valueTextColor.value = 'color-text-type-' + props.oneColor;

  } else if(value.value == 0){
    valueText.value = props.zeroText;
    iconColor.value = 'color-fill-type-' + props.zeroColor
    valueTextColor.value = 'color-text-type-' + props.zeroColor;
  } else {
    valueText.value = 'N/A'; 
  }

  if (countingHoursValue.value != null){ countingHours.value = true }

});

onMounted( async ()=>{  
  const response = await axios.get(iconRoute);
  svgContent.value = response.data;

})

</script>

<template>
  
  <li>
    <div class="col-40 align-middle-center">
      <i class="ui" :class= '[iconSize, iconColor]' :id="svgId" v-html="svgContent"></i>
    </div>
    <div class="col-100-min"><span>{{title}}</span></div>
    <div v-if="countingHours" className="col-80 align-middle-center "><span className="font-bold">{{countingHoursValue}}</span>&nbsp;<span>h</span></div>
    <div class="col-80 align-middle-center" :class= '[valueTextColor]'><span class="font-bold glow">{{valueText}}</span></div>
  </li>
  
</template>

