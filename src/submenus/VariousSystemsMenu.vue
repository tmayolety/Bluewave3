<script setup>

import { RouterLink, useRoute } from 'vue-router';
import { watch, ref } from 'vue';

const route = useRoute();

const activeIndex = ref(0);

watch(() => route.path, (newPath) => {
  if (newPath === '/aux1') {
    activeIndex.value = 0;
  } else if (newPath === '/aux2') {
    activeIndex.value = 1;
  }
}, { immediate: true });

</script>

<template>
    <div class="ui main-tabs">
        <ul>
          <!-- <RouterLink to="/refrigerationSystem" custom v-slot="{ navigate }">
               <li data-alert="" :class="{ 'active': activeIndex === 0 }" @click="() => navigate()">
                   <a>Refrigeration System</a>
               </li>
           </RouterLink> -->

            <RouterLink to="/aux1" custom v-slot="{ navigate }">
                <li data-alert="" :class="{ 'active': activeIndex === 0 }" @click="() => navigate()">
                    <a>Aux 1</a>
                </li>
            </RouterLink>

            <RouterLink to="/aux2" custom v-slot="{ navigate }">
                <li data-alert="" :class="{ 'active': activeIndex === 1 }" @click="() => navigate()">
                    <a>Aux 2</a>
                </li>
            </RouterLink>
        </ul>
    </div>
</template>



