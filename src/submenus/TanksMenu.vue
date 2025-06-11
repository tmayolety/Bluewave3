
<script setup>
import { RouterLink, useRoute } from 'vue-router';
import { watch, ref } from 'vue';

const route = useRoute();
const activeIndex = ref(0);

watch(
  () => route.path,
  (newPath) => {
    if (newPath === '/waterTanks') activeIndex.value = 0;
    else if (newPath === '/fuelTanks') activeIndex.value = 1;
    else if (newPath === '/oilTanks') activeIndex.value = 2;
  },
  { immediate: true }
);
</script>

<template>
  <nav class="submenu">
    <ul>
      <RouterLink to="/waterTanks" custom v-slot="{ navigate }">
        <li :class="{ active: activeIndex === 0 }" @click="() => navigate()">
          Water Tanks
        </li>
      </RouterLink>

      <RouterLink to="/fuelTanks" custom v-slot="{ navigate }">
        <li :class="{ active: activeIndex === 1 }" @click="() => navigate()">
          Fuel Tanks
        </li>
      </RouterLink>

        <RouterLink to="/oilTanks" custom v-slot="{ navigate }">
        <li :class="{ active: activeIndex === 2 }" @click="() => navigate()">
          Oil Tanks
        </li>
      </RouterLink>
    </ul>
  </nav>
</template>

<style scoped>
.submenu {
  grid-area: menu-tabs;
  background-color: #1c1f23;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 2.2rem;
  border-top: 1px solid #2a2f35;
  border-bottom: 1px solid #2a2f35;
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