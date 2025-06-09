<script setup>
import { RouterLink, useRoute } from 'vue-router'
import { ref, watch, onMounted } from 'vue'
import menuItems from '../../buildApp.json'
import { useActiveLabel } from '../composables/useActiveLabel'

const route = useRoute()
const activeIndex = ref(null)
const activeLabel = useActiveLabel()

watch(() => route.path, (newPath) => {
  const index = menuItems.headers.findIndex(item => item.path === newPath)
  if (index !== -1) {
    activeIndex.value = index
    activeLabel.value = menuItems.headers[index].label
  }
}, { immediate: true })


const collapsed = ref(true)

function toggleMenu() {
  collapsed.value = !collapsed.value
  const main = document.getElementById('mainContent')
  if (main) {
    main.setAttribute('data-nav-collapsed', collapsed.value)
  }
}

onMounted(() => {
  const main = document.getElementById('mainContent')
  if (main) {
    main.setAttribute('data-nav-collapsed', collapsed.value)
  }
})
</script>


<template>
  <aside :class="['side-nav', { collapsed, expanded: !collapsed }]">
    <div class="top-bar">
      <button class="toggle-btn" @click="toggleMenu">
        <span v-if="collapsed">☰</span>
        <span v-else>
            <svg class="ui icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="white"><g id="arrow-1-left"><path d="M40.79,50,78.07,87.06a7.69,7.69,0,0,1,0,10.75,7.42,7.42,0,0,1-10.53,0L19.74,50,67.54,2.19A7.19,7.19,0,0,1,72.81,0a8.24,8.24,0,0,1,5.26,2.19,7.19,7.19,0,0,1,2.19,5.27,7.18,7.18,0,0,1-2.19,5.26Z"/></g></svg>
        </span>
      </button>
    </div>

    <nav class="menu-list">
      <ul>
        <li
          v-for="(item, index) in menuItems.headers"
          :key="index"
          :class="{ 'active': activeIndex === index }"
        >
          <RouterLink :to="item.path">
            <div class="icon" v-html="item.svg" />
            <span v-if="!collapsed" class="label">{{ item.label }}</span>
          </RouterLink>
        </li>
      </ul>
    </nav>
  </aside>
</template>


<style scoped>
.side-nav {
  top: 0;
  left: 0;
  height: 100vh;
  color: white;
  background-color: #061f2e;
  transition: width 0.3s ease;
}

.side-nav.collapsed {
  position: absolute; /* Lo posicionamos sobre el placeholder */
  width: 60px;
  z-index: 10;
}

.side-nav.expanded {
  position: fixed;
  width: 220px;
  z-index: 999;
}

.toggle-btn {
  background: none;
  border: none;
  color: white;
  font-size: 1.8rem;
  margin: 1rem;
  cursor: pointer;
}

.top-bar {
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.menu-list {
  padding-top: 1rem;
}

.menu-list ul {
  list-style: none;
  padding: 0;
}

.menu-list li {
  margin: 0.5rem 0;
}

.menu-list li a {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 0.75rem 1rem;
  color: white;
  text-decoration: none;
}

.menu-list li.active a {
  background-color: #0e3a54;
  font-weight: bold;
  border-left: 4px solid #00d8ff;
}

.menu-list li a:hover {
  background-color: #104865;
}

.icon {
  min-width: 24px;
  max-width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.icon :deep(svg) {
  fill: white !important;
  color: white !important;
}


.icon svg {
  width: 100%;
  height: 100%;
}

.label {
  white-space: nowrap;
}
</style>
