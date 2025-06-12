<script setup>
import { ref, onMounted } from 'vue'

const props = defineProps({
  src: String,
  highlightDuration: {
    type: Number,
    default: 2500
  },
  targetGroupPrefix: {
    type: String,
    default: 'Water Tank'
  }
})

const svgContainer = ref(null)

function highlightTankBar(index) {
  const el = document.querySelector(`[data-tank-index="${index}"]`)
  if (el) {
    el.classList.add('highlight-bar')
    setTimeout(() => {
      el.classList.remove('highlight-bar')
    }, 2000)
  }
}


function highlightSvgGroup(groupId) {
  const group = svgContainer.value?.querySelector(`g[id='${groupId}']`)
  if (!group) return

  const originalFills = []
  group.querySelectorAll('path').forEach((path, i) => {
    originalFills[i] = path.style.fill
    path.style.fill = '#3498db'
  })
  group.classList.add('highlight')

  setTimeout(() => {
    group.querySelectorAll('path').forEach((path, i) => {
      path.style.fill = originalFills[i] || '#2e485a'
    })
    group.classList.remove('highlight')
  }, props.highlightDuration)
}

onMounted(async () => {
  const response = await fetch(props.src)
  const svgText = await response.text()
  svgContainer.value.innerHTML = svgText

  const groups = Array.from(svgContainer.value.querySelectorAll('g'))
  groups.forEach((group, index) => {
    const groupId = group.getAttribute('id')
    if (groupId?.startsWith(props.targetGroupPrefix)) {
      group.style.cursor = 'pointer'
      group.addEventListener('click', () => {
        highlightTankBar(index)
        highlightSvgGroup(groupId)
      })
    }
  })
})
</script>

<template>
  <div class="tank-svg-container" ref="svgContainer"></div>
</template>

<style scoped>
.tank-svg-container {
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.highlight {
  filter: drop-shadow(0 0 4px #3498db);
}
/* en style global o scoped, pero visible para el contenedor .ui.col */
.highlight-bar {
  animation: pulse 1s ease-in-out 2;
}

@keyframes pulse {
  0% { box-shadow: 0 0 0px #3498db; }
  50% { box-shadow: 0 0 36px #3498db; }
  100% { box-shadow: 0 0 0px #3498db; }
}

</style>
