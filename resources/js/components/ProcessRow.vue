<template>
    <div
      class="flex flex-col md:flex-row items-center gap-10 md:gap-16 mr-15 ml-15"
      :class="reverse ? 'md:flex-row-reverse' : ''"
    >
      <!-- Image -->
      <div class="w-full md:w-1/2 relative group">
        <img
          :src="item.img"
          :alt="item.title"
          class="w-full h-72 object-cover rounded-3xl shadow-xl transition-transform duration-500 group-hover:scale-105"
        />
  
        <!-- ✅ Légère superposition dégradée -->
        <div
          class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
        ></div>
  
        <!-- ✅ Badge flottant -->
        <div
          class="absolute top-4 left-4 bg-white/90 text-gray-800 text-sm font-semibold px-3 py-1.5 rounded-full shadow-md flex items-center gap-2 backdrop-blur-sm"
        >
          <i :class="['fa', item.badge.icon, 'text-blue-600']"></i>
          <span>{{ item.badge.text }}</span>
        </div>
      </div>
  
      <!-- Contenu -->
      <div class="w-full md:w-1/2 space-y-4">
        <h3 class="text-2xl font-bold text-gray-900">
          {{ item.title }}
        </h3>
  
        <p
          class="text-gray-700 leading-relaxed"
          v-html="item.description"
        ></p>
  
        <button
          class="mt-3 inline-flex items-center gap-2 px-5 py-2.5 bg-teal-500 text-white rounded-full font-medium shadow-md hover:bg-blue-700 transition-all"
        >
          <i class="fa fa-arrow-right"></i>
          En savoir plus
        </button>
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
  /* ✅ Petites animations subtiles */
  button {
    transform: translateY(0);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  button:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(37, 99, 235, 0.3);
  }
  </style>
  