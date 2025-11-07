<template>
    <div
      class="p-6 h-95 rounded-xl shadow-sm hover:shadow-lg hover:-translate-y-2 transition-transform transition-shadow duration-300 bg-white border-l-4 overflow-hidden"
      :style="{ borderColor: borderColor }"
    >
      <!-- Image -->
      <div class="mb-4 overflow-hidden rounded-lg">
        <img
          v-if="image"
          :src="image"
          alt="Card image"
          class="w-full h-34 object-cover transition-transform duration-500 hover:scale-105"
        />
      </div>
  
      <!-- Icon + title -->
      <div class="flex items-center mb-4 gap-4">
        <div
          class="w-10 h-10 rounded-lg flex items-center justify-center"
          :style="{ backgroundColor: iconBg, color: iconColor }"
        >
          <i :class="['fas', icon, 'text-xl']"></i>
        </div>
        <h3 class="text-lg font-semibold text-[#1e293b]">{{ title }}</h3>
      </div>
  
      <!-- Description -->
      <p class="text-[#64748b] mb-4">{{ description }}</p>
  
      <!-- Button -->
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
    image: String, 
    icon: String,
    title: String,
    description: String,
    borderColor: String,
    iconBg: String,
    iconColor: String,
    buttonClass: {
      type: String,
      default: 'border-teal-600 text-black hover:bg-teal-600 hover:text-white transition-colors duration-300'
    }
  })
  </script>
  
  <style scoped>
  
  img {
    border-radius: 0.5rem;
  }
  </style>
  