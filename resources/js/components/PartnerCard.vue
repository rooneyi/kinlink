<template>
    <div
        class="p-6 rounded-xl shadow-sm hover:shadow-lg hover:-translate-y-2 transition-transform transition-shadow duration-300 bg-[#f8fafc] border-t-4"
        :style="{ borderColor: borderColor }"
    >
        <div class="flex items-center mb-4 gap-4">
            <div
                class="w-14 h-14 rounded-lg flex items-center justify-center"
                :style="{ backgroundColor: iconBg, color: iconColor }"
            >
                <i :class="['fas', icon, 'text-2xl']"></i>
            </div>
            <h3 class="text-lg font-semibold text-[#1e293b]">{{ title }}</h3>
        </div>
        <p class="text-[#64748b] mb-4">{{ description }}</p>
        <a
            href="#"
            class="inline-flex items-center px-4 py-2 rounded-full text-white transition-colors duration-300"
            :style="{ backgroundColor: borderColor, borderColor: borderColor }"
        >
            <i class="fas fa-shopping-cart mr-2"></i> Voir les produits
        </a>
    </div>
</template>

<script setup>
defineProps({
    title: String,
    description: String,
    borderColor: String,
    icon: String,
    iconBg: String,
    iconColor: String
})
</script>
