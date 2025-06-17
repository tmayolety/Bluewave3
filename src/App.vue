<script setup>
import headerComponent from './components/header.vue'
import sideNavComponent from './components/sideNav.vue'
import { RouterView } from 'vue-router'
</script>

<template>
  <div class="layout-wrapper">
    <!-- Menú colapsado ocupa espacio -->
    <div class="menu-placeholder" />

    <!-- Menú real (colapsado o expandido, se superpone solo al expandirse) -->
    <sideNavComponent />

    <main id="mainContent">
      <headerComponent />
      <RouterView />
    </main>
  </div>
</template>

<style scoped>
.layout-wrapper {
  display: flex;
  height: 100vh;
  width: 100vw;
}

.menu-placeholder {
  width: 60px;
  flex-shrink: 0;
}

#mainContent {
  flex: 1;
  overflow-y: hidden!important;;
  overflow-x: hidden!important;
  max-height: 100vh;
  transition: none;
}
</style>
