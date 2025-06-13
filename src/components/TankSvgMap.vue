<script setup>
import { ref, onMounted } from 'vue'

const emit = defineEmits(['tank-clicked'])

const props = defineProps({
  src: String,
  highlightDuration: {
    type: Number,
    default: 2500
  },
  targetGroupPrefix: {
    type: [String, null],
    default: null
  },
  groupIdToTankIndex: {
    type: Object,
    default: null
  }
})

const svgContainer = ref(null)

function highlightSvgGroup(groupId) {
  const group = svgContainer.value?.querySelector(`g[id='${groupId}']`)
  if (!group || group.classList.contains('highlight')) return

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
  try {
    const response = await fetch(props.src)
    const svgText = await response.text()

    svgContainer.value.innerHTML = ''
    const parser = new DOMParser()
    const svg = parser.parseFromString(svgText, 'image/svg+xml').documentElement
    svgContainer.value.appendChild(svg)

    const groups = Array.from(svg.querySelectorAll('g'))
    groups.forEach((group, index) => {
      const rawId = group.getAttribute('id')
      if (!rawId) return

      const normalizedId = rawId.trim().replace(/\s+/g, ' ')
      const isValid =
        props.groupIdToTankIndex
          ? Object.keys(props.groupIdToTankIndex).includes(normalizedId)
          : props.targetGroupPrefix && normalizedId.startsWith(props.targetGroupPrefix)

      if (!isValid) return

      group.style.cursor = 'pointer'
      group.addEventListener('click', () => {
        const tankIndex = props.groupIdToTankIndex?.[normalizedId] ?? index
        emit('tank-clicked', { index: tankIndex, groupId: normalizedId })
        highlightSvgGroup(normalizedId)
      })
    })
  } catch (err) {
    console.error('Failed to load SVG:', err)
  }
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
</style>
