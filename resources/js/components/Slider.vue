<!-- resources/js/components/Slider.vue -->
<script setup>
import { ref } from 'vue';

const slides = ref([
    {
        title: 'Vous êtes un professionnel <br>du numérique ?',
        description: 'Bénéficiez des missions et offres passionnantes <br> dans votre domaine d\'expertise',
        image: '/assets-front/images/tortue.png',
        button: null
    },
    {
        title: 'Vous êtes une entreprise en quête des solutions numériques ?',
        description: 'Nos experts vous accompagnent pour transformer <br> votre projet en succès',
        image: '/assets-front/images/tortue.png',
        button: {
            text: 'Rejoignez-nous',
            href: '/register' // à adapter selon route Laravel
        }
    }
]);

const currentSlide = ref(0);

function nextSlide() {
    currentSlide.value = (currentSlide.value + 1) % slides.value.length;
}

function prevSlide() {
    currentSlide.value = (currentSlide.value - 1 + slides.value.length) % slides.value.length;
}

// Optionnel : autoplay
setInterval(nextSlide, 5000);
</script>

<template>
    <div class="banner-area-two three relative overflow-hidden">
        <div class="relative w-full">
            <div v-for="(slide, index) in slides" :key="index"
                 class="transition-opacity duration-1000 ease-in-out absolute inset-0"
                 :class="currentSlide === index ? 'opacity-100 z-10' : 'opacity-0 z-0'">
                <div class="table w-full h-full">
                    <div class="table-cell align-middle">
                        <div class="container mx-auto px-6">
                            <div class="flex flex-col lg:flex-row items-center">
                                <div class="lg:w-1/2 text-center lg:text-left">
                                    <div class="banner-content">
                                        <h1 class="text-4xl font-bold mb-4" v-html="slide.title"></h1>
                                        <p class="text-lg mb-6" v-html="slide.description"></p>
                                        <div class="banner-btn-area">
                                            <a v-if="slide.button"
                                               :href="slide.button.href"
                                               class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-500 transition">
                                                {{ slide.button.text }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:w-1/2 hidden sm:block">
                                    <div class="banner-img relative z-10">
                                        <img :src="slide.image" alt="Tortue Kinlink" class="mx-auto" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation (flèches) -->
            <button @click="prevSlide"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-100">
                ‹
            </button>
            <button @click="nextSlide"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-100">
                ›
            </button>
        </div>
    </div>
</template>
