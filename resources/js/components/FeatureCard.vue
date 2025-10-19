<template>
    <div
        class="feature-card animate-item fade-in-up relative overflow-hidden rounded-lg p-10 transition-transform duration-300 ease-in-out shadow-sm hover:shadow-lg"
        :class="{ 'price-card': isPriceCard }"
        :style="{ '--animation-delay': delay }"
    >
        <div class="card-icon flex items-center justify-center mb-7 rounded-lg border shadow-sm"
             :class="iconBgClass">
            <slot name="icon"></slot>
        </div>
        <h3 class="flex items-center mb-3 text-xl font-semibold text-gray-900">
            <slot name="title"></slot>
        </h3>
        <p class="mb-5 text-gray-600 flex-grow">
            <slot name="description"></slot>
        </p>
        <div v-if="isPriceCard" class="text-center mt-3">
            <slot name="price"></slot>
            <slot name="cta"></slot>
        </div>
    </div>
</template>

<script setup>
defineProps({
    isPriceCard: { type: Boolean, default: false },
    delay: { type: String, default: '0s' },
    iconBgClass: { type: String, default: 'bg-blue-50 border-blue-200 text-blue-600' }
})
</script>

<style scoped>
.feature-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.feature-card:hover {
    transform: translateY(-8px);
}
</style>
