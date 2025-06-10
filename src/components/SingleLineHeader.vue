<script setup>
import { computed, inject } from 'vue';

const props = defineProps({
  componentTitle: String,
  signalIdBox: Number,
  NC: { type: Number, default: 1 },
});

const getSignalValueRaw = inject('getSignalValueRaw');

const valueBox = computed(() => getSignalValueRaw?.(props.signalIdBox) || 0);

const containerColorClass = computed(() => {
  if (props.NC === 1) {
    return valueBox.value === 1 ? 'color-bg-type-primary active' : 'color-bg-op-type-primary';
  } else {
    return valueBox.value === 0 ? 'color-bg-type-primary active' : 'color-bg-op-type-primary';
  }
});
</script>

<template>
  <div class="ui col mini-1 phone-1 gap-no pad-sm radius-top grid cols-mini-1">
    <header class="col-header" :class="containerColorClass">
      {{ componentTitle }}
    </header>
  </div>
</template>

<style scoped>
.col-header {
  text-align: center;
  font-weight: bold;
  margin-bottom: 0;
  color: white;
  text-transform: uppercase;
  padding: 0.6rem;
  border-radius: 0.5rem;
}
</style>
