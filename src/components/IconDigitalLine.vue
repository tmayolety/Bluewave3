<script setup>
import { ref, watchEffect, inject, onMounted } from 'vue';
import axios from 'axios';

const props = defineProps([
  'signalId', 
  'icon',
  'size',
  'zeroColor',
  'oneColor',
])
const getSignalValueRaw = inject('getSignalValueRaw')

const value = ref(null)
const iconRoute = `../../framework/3-modules/icons/${props.icon}.svg`
const iconSize = `icon-size-${props.size}`
const svgId = `svg_${props.signalId}_${Math.floor(Math.random() * (1000 - 100)) + Date.now()}`
const iconColor = ref(null)
const svgContent = ref('')

watchEffect(() => {
  value.value = getSignalValueRaw(props.signalId);

  if(value.value  > 0){
    iconColor.value = 'color-fill-type-' + props.oneColor

  } else if(value.value == 0){
    iconColor.value = 'color-fill-type-' + props.zeroColor
  } else {
    iconColor.value = null
  }

});

onMounted( async ()=>{  
  const response = await axios.get(iconRoute);
  svgContent.value = response.data;
})

</script>

<template>

  <div class="col-30 align-top-center">
    <i class="ui" :class= '[iconSize, iconColor]' :id="svgId" v-html="svgContent"></i>
  </div>

</template>

