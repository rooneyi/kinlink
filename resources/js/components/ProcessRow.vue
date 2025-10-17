<template>
    <div
        class="flex flex-col md:flex-row items-stretch bg-white border border-gray-200 rounded-3xl shadow-md overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1 hover:scale-[1.01]"
        :class="{ 'md:flex-row-reverse': reverse }"
    >
        <div class="flex-1 p-8 flex flex-col justify-center">
            <h3 class="text-2xl font-bold text-blue-600 flex items-center gap-3 mb-4">
        <span
            class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-400 text-white rounded-full px-4 py-1 font-semibold shadow-md animate-bounce-slow"
        >
          <i :class="`fas ${item.badge.icon}`"></i> {{ item.badge.text }}
        </span>
                {{ item.title }}
            </h3>
            <p
                class="text-gray-600 text-lg leading-relaxed"
                v-html="item.description"
            ></p>
        </div>

        <div
            class="flex items-center justify-center bg-gradient-to-br from-gray-50 to-blue-50 border-t md:border-t-0 md:border-l border-gray-200 min-w-[300px] md:max-w-[400px]"
        >
            <img
                :src="item.img"
                class="rounded-2xl border-4 border-white shadow-md object-cover w-[90%] aspect-video"
                :alt="item.title"
            />
        </div>
    </div>
</template>

<script setup>
defineProps({
    item: Object,
    reverse: Boolean,
});
</script>

<style scoped>
@keyframes bounce-slow {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(6px);
    }
}
.animate-bounce-slow {
    animation: bounce-slow 2.5s ease-in-out infinite alternate;
}
</style>
