<script setup>
import headerComponent from './components/header.vue'
import mainNavComponent from './components/mainNav.vue'
import loginForm from './components/loginForm.vue'
import { RouterView } from 'vue-router';
import {login, initializeAuth, isLogged} from '../src/store/auth.js'
import {onMounted, watchEffect} from 'vue'
import {fetchData, fetchAlarms} from './main.js'



onMounted( () => {

  initializeAuth();


});
watchEffect(async() =>{
  if (isLogged.value) {
    await fetchData();
    await fetchAlarms();

}
})
</script>

<template>
  <div v-if="!isLogged" class="ui grid" style="margin-top: 1em; overflow: hidden;">

  <loginForm></loginForm>

  </div>

  <div v-else>

    <main data-nav-open="true" id="mainContent" style="overflow-y: scroll; max-height: 100vh;">
      <headerComponent></headerComponent>

      <RouterView />

    </main>

    <mainNavComponent></mainNavComponent>

  </div>
</template>



