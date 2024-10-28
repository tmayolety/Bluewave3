<script setup>
import {RouterLink, useRoute} from 'vue-router'
import { ref, watch } from 'vue';
import menuItems from '../../buildApp.json'

const route = useRoute();
const activeIndex = ref(null)

watch(() => route.path, (newPath) => {
  const index = menuItems.headers.findIndex(item => item.path === newPath);
  
  if (index !== -1) {
    activeIndex.value = index;
  }

}, { immediate: true });


const dataMainNavPhone = ref('')
const displayMainMenu = ref(true)

function toggleMenu(){
    dataMainNavPhone.value = dataMainNavPhone.value == '' ? 'active' : '';
    displayMainMenu.value = dataMainNavPhone.value == false ? true : false;

}

</script>

<template>

<aside class="aside" :data-main-nav-phone="dataMainNavPhone" id="mainNav">
<nav class="main-nav">

    <h2 class="font-regular">
    Select a Section

    </h2>

    <ul data-items="18" id="navigationMenu">

        <li v-for="(item, index) in menuItems.headers" :key="index" :class="{ 'dev-menuItem': true, 'active': activeIndex === index }">
            <RouterLink :to="item.path" @click="toggleMenu">
                <a v-html="item.svg + item.label"></a>
            </RouterLink>
        </li>

    </ul>

</nav>

<div class="phone-menu-btn" @click="toggleMenu" style="z-index: 999999;">
    <div v-if="displayMainMenu === true">
        <svg class="ui icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g><path d="M100,16V26.76A5.33,5.33,0,0,1,94.73,32H5.27a5.07,5.07,0,0,1-3.71-1.56A5.07,5.07,0,0,1,0,26.76V16A5.09,5.09,0,0,1,1.56,12.3a5.07,5.07,0,0,1,3.71-1.56H94.73A5.33,5.33,0,0,1,100,16Zm0,28.51V55.27a6.25,6.25,0,0,1-1.56,3.91,5.09,5.09,0,0,1-3.71,1.56H5.27a5.07,5.07,0,0,1-3.71-1.56A6.25,6.25,0,0,1,0,55.27V44.53a5.07,5.07,0,0,1,1.56-3.71,5.07,5.07,0,0,1,3.71-1.56H94.73A5.33,5.33,0,0,1,100,44.53Zm0,28.71V83.79a5.33,5.33,0,0,1-1.56,3.91,5.09,5.09,0,0,1-3.71,1.56H5.27A5.07,5.07,0,0,1,1.56,87.7,5.33,5.33,0,0,1,0,83.79V73.24a5.29,5.29,0,0,1,1.56-3.9,5.08,5.08,0,0,1,3.71-1.57H94.73a5.1,5.1,0,0,1,3.71,1.57A5.29,5.29,0,0,1,100,73.24Z"/></g></svg>
    </div>
    <div v-else>
        <svg class="ui icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 80"><g id="arrow-1-bottom"><path d="M50,59.21,87.06,21.93a7.69,7.69,0,0,1,10.75,0,7.42,7.42,0,0,1,0,10.53L50,80.26,2.19,32.46A7.19,7.19,0,0,1,0,27.19a8.24,8.24,0,0,1,2.19-5.26,7.19,7.19,0,0,1,5.27-2.19,7.18,7.18,0,0,1,5.26,2.19Z"></path></g></svg>
   
    </div>

</div>

</aside>
</template>
