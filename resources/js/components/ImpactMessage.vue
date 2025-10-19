<template>
    <div class="flex flex-col md:flex-row items-center gap-6 justify-center">
        <slot name="badge"></slot>
        <div class="text-center md:text-left max-w-xl text-gray-600 text-lg">
            <slot></slot>
        </div>
    </div>
</template>

<script setup>
</script>

<style scoped>
</style>
