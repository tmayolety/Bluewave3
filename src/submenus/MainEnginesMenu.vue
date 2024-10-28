<script setup>

import { RouterLink, useRoute } from 'vue-router';
import { watch, ref } from 'vue';

const route = useRoute();

const activeIndex = ref(0);

watch(() => route.path, (newPath) => {
  if (newPath === '/mainEngines') {
    activeIndex.value = 0;
  } else if (newPath === '/enginesTemperatures') {
    activeIndex.value = 1;
  }
}, { immediate: true });

</script>

<template>
    <div class="ui main-tabs">
        <ul>
            <RouterLink to="/mainEngines" custom v-slot="{ navigate }">
                <li data-alert="" :class="{ 'active': activeIndex === 0 }" @click="() => navigate()">
                    <a>Main Engines</a>
                </li>
            </RouterLink>

            <RouterLink to="/enginesTemperatures" custom v-slot="{ navigate }">
                <li data-alert="" :class="{ 'active': activeIndex === 1 }" @click="() => navigate()">
                    <a>Main Engines Detail</a>
                </li>
            </RouterLink>
        </ul>
    </div>
</template>
