// src/composables/useActiveLabel.js
import { ref } from 'vue'

const activeLabel = ref('')

export function useActiveLabel() {
  return activeLabel
}
