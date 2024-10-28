<template>
  <div class="ui col mini-1 pad-med">
    <img src="../../img/bluewave.png" alt="bluewave" width="95%" style="margin-top: 3em">
  </div>

  <div class="ui col mini-1 pad-med" style="margin-top: 3em">
    <input style="font-size: 1.5rem; border: 2px solid #355367; border-radius: 0.6rem; color: #547a95; background-color: #12354c; padding: 0.6rem 2rem;" placeholder="User" id="username" v-model="username">
  </div>

  <div class="ui col mini-1 pad-med">
    <input style="font-size: 1.5rem; border: 2px solid #355367; border-radius: 0.6rem; color: #547a95; background-color: #12354c; padding: 0.6rem 2rem;" placeholder="Password" id="password" type="password" v-model="password">
  </div>

  <div class="ui col mini-1 pad-xl col-100">
    <button v-if="!isFailed" class="ui btn primary med colored" @click="doLogin">Login</button>
    <button v-if="isFailed" class="ui btn danger med colored">Login failed!</button>
  </div>

</template>

<script setup>

import {ref, watch, watchEffect} from 'vue';
import {login, isLogged, isFailed} from "../store/auth";

const username = ref("");
const password = ref("");
const doLogin = () => login( username.value, password.value);

</script>

<style scoped>

</style>