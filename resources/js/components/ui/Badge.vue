<template>
  <span
      class="inline-flex items-center px-4 py-1 text-sm font-medium rounded-full"
      :style="{ backgroundColor: bgColor, color: textColor }"
  >
    <slot />
  </span>
</template>

<script setup>
import { computed } from 'vue'
const props = defineProps({
  color: {
    type: String,
    default: 'blue'
  }
})
const colors = {
  blue: { bg: '#e0f2fe', text: '#0369a1' },
  green: { bg: '#f0fdf4', text: '#16a34a' },
  yellow: { bg: '#fff7ed', text: '#f59e0b' },
  pink: { bg: '#fce7f3', text: '#ec4899' },
}
const bgColor = computed(() => colors[props.color]?.bg || '#e0f2fe')
const textColor = computed(() => colors[props.color]?.text || '#0369a1')
</script>
