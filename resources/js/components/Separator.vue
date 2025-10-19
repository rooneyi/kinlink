<template>
    <div
        class="section-separator-container h-px w-11/12 max-w-6xl my-10 bg-gray-200 scale-x-0 origin-center transition-transform duration-1000 ease-in-out"
        :class="{ 'scale-x-100': isVisible }"
        ref="separator"
    ></div>
</template>

<script setup>
import { onMounted, ref } from 'vue'

const isVisible = ref(false)
const separator = ref(null)

onMounted(() => {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    isVisible.value = true
                    observer.unobserve(entry.target)
                }
            })
        },
        { threshold: 0.1 }
    )
    if (separator.value) observer.observe(separator.value)
})
</script>
