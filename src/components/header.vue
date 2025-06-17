<script setup>
import { useActiveLabel } from '../composables/useActiveLabel'
import HeaderAlarms from '../components/AlarmSystemHeader.vue'

const activeLabel = useActiveLabel()


</script>

<template>
  <header class="main-header">
    <div class="header-title-container">
      <span v-if="activeLabel" class="header-title">{{ activeLabel }}</span>
    </div>

    <div class="header-alarms-container">
        <ul>
            <HeaderAlarms />
        </ul>
    </div>
  </header>
</template>



<style scoped>

.main-header {
  display: flex;
  position: relative;
  height: 3rem;
  background-color: #123851;
}

.header-title-container {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  align-items: center;
  height: 100%;
  pointer-events: none;
}

.header-title {
  font-size: 1.3rem;
  font-weight: bold;
  color: white;
  text-transform: uppercase;
  pointer-events: none;
}

/* Alarma alineada a la derecha */
.header-alarms-container {
  margin-left: auto;
  display: flex;
  align-items: center;
  padding-right: 1rem;
}

</style>
