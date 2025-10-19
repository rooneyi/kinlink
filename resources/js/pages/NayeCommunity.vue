<template>
    <div>
        <Header :user="$page.props.auth.user" />
        <NuxtPage />
    </div>
</template>

<script setup>
import { useHead } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';

const { props } = usePage();

useHead({
    title: props.appName,
    meta: [
        { name: 'description', content: props.appDescription },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
    ],
});
</script>

<style>
/* Add any global styles here */
</style>
