<script setup>
import { RouterLink, useRoute } from 'vue-router'
import { ref, watch, onMounted, onBeforeUnmount } from 'vue'
import menuItems from '../../buildApp.json'
import { useActiveLabel } from '../composables/useActiveLabel'

const route = useRoute()
const activeIndex = ref(null)
const activeLabel = useActiveLabel()

watch(() => route.path, (newPath) => {
  const index = menuItems.headers.findIndex(item => newPath.startsWith(item.path))
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

function handleMenuItemClick() {
  if (!collapsed.value) {
    collapsed.value = true
    const main = document.getElementById('mainContent')
    if (main) {
      main.setAttribute('data-nav-collapsed', collapsed.value)
    }
  }
}

function handleClickOutside(event) {
  const aside = document.querySelector('.side-nav')
  if (aside && !aside.contains(event.target) && !collapsed.value) {
    collapsed.value = true
    const main = document.getElementById('mainContent')
    if (main) {
      main.setAttribute('data-nav-collapsed', collapsed.value)
    }
  }
}

onMounted(() => {
  const main = document.getElementById('mainContent')
  if (main) {
    main.setAttribute('data-nav-collapsed', collapsed.value)
  }
  document.addEventListener('click', handleClickOutside)
})

onBeforeUnmount(() => {
  document.removeEventListener('click', handleClickOutside)
})
</script>


<template>
  <aside :class="['side-nav', { collapsed, expanded: !collapsed }]" @click.stop>
    <div class="top-bar">
      <button class="toggle-btn" @click.stop="toggleMenu">
        <span v-if="collapsed">☰</span>
      </button>
    </div>

    <nav class="menu-list">
      <ul>
        <li
          v-for="(item, index) in menuItems.headers"
          :key="index"
          :class="{ 'active': activeIndex === index }">
          <RouterLink :to="item.path" @click="handleMenuItemClick">
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
  background-color: #123851;
  transition: width 0.3s cubic-bezier(.4,0,.2,1), background-color 0.3s cubic-bezier(.4,0,.2,1);
  overflow-x: hidden;
  outline: none;
}

.side-nav.collapsed {
  position: absolute;
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

.menu-list ul {
  list-style: none;
  padding: 0;
}

.menu-list li {
  margin: 0.2rem 0;
}

.menu-list li a {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 0.5rem 1.3rem;
  color: white;
  text-decoration: none;
}

.menu-list li.active a {
  background-color: #3498db;
  border-left: 4px solid #ffffff;
  padding: 0.5rem 1.1rem;
}


.icon {
  min-width: 20px;
  max-width: 20px;
  height: 20px;
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
  font-size: small;
  opacity: 1;
  transition: opacity 0.25s cubic-bezier(.4,0,.2,1) 0.08s;
}
.side-nav.collapsed .label {
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.1s cubic-bezier(.4,0,.2,1) 0s;
}
</style>
