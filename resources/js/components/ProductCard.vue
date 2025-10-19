<template>
    <div
        class="p-6 rounded-xl shadow-sm hover:shadow-lg hover:-translate-y-2 transition-transform transition-shadow duration-300 bg-white border-l-4"
        :style="{ borderColor: borderColor }"
    >
        <div class="flex items-center mb-4 gap-4">
            <div
                class="w-12 h-12 rounded-lg flex items-center justify-center"
                :style="{ backgroundColor: iconBg, color: iconColor }"
            >
                <i :class="['fas', icon, 'text-xl']"></i>
            </div>
            <h3 class="text-lg font-semibold text-[#1e293b]">{{ title }}</h3>
        </div>
        <p class="text-[#64748b] mb-4">{{ description }}</p>
        <a
            href="#"
            class="inline-flex items-center px-4 py-2 rounded-full border transition-colors duration-300"
            :class="buttonClass"
        >
            <i class="fas fa-arrow-right mr-2"></i> Découvrir
        </a>
    </div>
</template>

<script setup>
defineProps({
    icon: String,
    title: String,
    description: String,
    borderColor: String,
    iconBg: String,
    iconColor: String,
    buttonClass: {
        type: String,
        default: 'border-blue-500 text-blue-500 hover:bg-blue-50'
    }
})
</script>
