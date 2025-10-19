<template>
  <span class="hero-badge animate-item fade-in-up">
    <i :class="icon"></i>
    <span>{{ text }}</span>
  </span>
</template>

<script setup>
defineProps({
    icon: String,
    text: String
})
</script>
