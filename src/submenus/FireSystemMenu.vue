<script setup>

import { RouterLink, useRoute } from 'vue-router';
import { watch, ref } from 'vue';

const route = useRoute();

const activeIndex = ref(0);

watch(() => route.path, (newPath) => {
  if (newPath === '/fireSystem1') {
    activeIndex.value = 0;
  } else if (newPath === '/fireSystem2') {
    activeIndex.value = 1;
  }
  else if (newPath === '/fireSystem3') {
    activeIndex.value = 2;
  }
}, { immediate: true });

</script>

<template>
    <div class="ui main-tabs">
        <ul>
            <RouterLink to="/fireSystem1" custom v-slot="{ navigate }">
                <li data-alert="" :class="{ 'active': activeIndex === 0 }" @click="() => navigate()">
                    <a>Loop 1</a>
                </li>
            </RouterLink>

            <RouterLink to="/fireSystem2" custom v-slot="{ navigate }">
                <li data-alert="" :class="{ 'active': activeIndex === 1 }" @click="() => navigate()">
                    <a>Loop 2</a>
                </li>
            </RouterLink>

            <RouterLink to="/fireSystem3" custom v-slot="{ navigate }">
                <li data-alert="" :class="{ 'active': activeIndex === 2 }" @click="() => navigate()">
                    <a>Loop 3</a>
                </li>
            </RouterLink>
        </ul>
    </div>
</template>
