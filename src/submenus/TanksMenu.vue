<script setup>

import { RouterLink, useRoute } from 'vue-router';
import { watch, ref } from 'vue';

const route = useRoute();

const activeIndex = ref(0);

watch(() => route.path, (newPath) => {
  if (newPath === '/waterTanks') {
    activeIndex.value = 0;
  } 
  else if (newPath === '/fuelTanks') {
    activeIndex.value = 1;
  }
  else if (newPath === '/oilTanks') {
    activeIndex.value = 2;
  }
}, { immediate: true });

</script>

<template>
    <div class="ui main-tabs">
        <ul>
            <RouterLink to="/waterTanks" custom v-slot="{ navigate }">
                <li data-alert="" :class="{ 'active': activeIndex === 0 }" @click="() => navigate()">
                    <a>Water Tanks</a>
                </li>
            </RouterLink>

            <RouterLink to="/fuelTanks" custom v-slot="{ navigate }">
                <li data-alert="" :class="{ 'active': activeIndex === 1 }" @click="() => navigate()">
                    <a>Fuel Tanks</a>
                </li>
            </RouterLink>

            <RouterLink to="/oilTanks" custom v-slot="{ navigate }">
                <li data-alert="" :class="{ 'active': activeIndex === 2 }" @click="() => navigate()">
                    <a>Oil & Waste Tanks</a>
                </li>
            </RouterLink>
        </ul>
    </div>
</template>
