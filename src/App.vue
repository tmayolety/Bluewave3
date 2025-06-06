<script setup>
import headerComponent from './components/header.vue';
import mainNavComponent from './components/mainNav.vue';
import { RouterView } from 'vue-router';
</script>

<template>
  <div>
    <main data-nav-open="true" id="mainContent" style="overflow-y: scroll; max-height: 100vh;">
      <headerComponent />
      <RouterView />
    </main>
    <mainNavComponent />
  </div>
</template>
