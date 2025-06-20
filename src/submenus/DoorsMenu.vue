<script setup>
import { RouterLink, useRoute } from 'vue-router';
import { watch, ref } from 'vue';

const route = useRoute();
const activeIndex = ref(0);

watch(
  () => route.path,
  (newPath) => {
    if (newPath === '/sundeck') activeIndex.value = 0;
    else if (newPath === '/upperdeck') activeIndex.value = 1;
    else if (newPath === '/maindeck') activeIndex.value = 2;
    else if (newPath === '/lowerdeck') activeIndex.value = 3;
    else if (newPath === '/subdeck') activeIndex.value = 4;
  },
  { immediate: true }
);
</script>

<template>
  <nav class="submenu">
    <ul>
      <RouterLink to="/sundeck" custom v-slot="{ navigate }">
        <li :class="{ active: activeIndex === 0 }" @click="() => navigate()">
          Sun Deck
        </li>
      </RouterLink>

      <RouterLink to="/upperdeck" custom v-slot="{ navigate }">
        <li :class="{ active: activeIndex === 1 }" @click="() => navigate()">
          Upper Deck
        </li>
      </RouterLink>

      <RouterLink to="/maindeck" custom v-slot="{ navigate }">
        <li :class="{ active: activeIndex === 2 }" @click="() => navigate()">
          Main Deck
        </li>
      </RouterLink>

      <RouterLink to="/lowerdeck" custom v-slot="{ navigate }">
        <li :class="{ active: activeIndex === 3 }" @click="() => navigate()">
          Lower Deck
        </li>
      </RouterLink>

      <RouterLink to="/subdeck" custom v-slot="{ navigate }">
        <li :class="{ active: activeIndex === 4 }" @click="() => navigate()">
          Sub Deck
        </li>
      </RouterLink>


    </ul>
  </nav>
</template>

<style scoped>
.submenu {
  grid-area: menu-tabs;
  background-color: #0a1e2b;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 2.2rem;
}

.submenu ul {
  display: flex;
  gap: 1rem;
  list-style: none;
  padding: 0;
  margin: 0;
}

.submenu li {
  font-size: 0.85rem;
  color: #cbd5e1;
  padding: 0.3rem 0.8rem;
  cursor: pointer;
  position: relative;
  transition: color 0.2s ease;
}

.submenu li::after {
  content: '';
  position: absolute;
  bottom: -4px;
  left: 0;
  right: 0;
  height: 2px;
  background-color: transparent;
  transition: background-color 0.2s ease;
}

.submenu li:hover {
  color: #ffffff;
}

.submenu li.active {
  color: #ffffff;
}

.submenu li.active::after {
  background-color: #3498db; 
}
</style>