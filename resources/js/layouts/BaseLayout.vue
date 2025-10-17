<!-- resources/js/layouts/BaseLayout.vue -->
<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Header from '@/components/Header.vue';
</script>

<template>
    <div class="min-h-screen flex flex-col bg-[#FDFDFC] dark:bg-[#0a0a0a]">
        <Head />
        <Header />
        <main class="flex-1">
            <slot />
        </main>
    </div>
</template>
