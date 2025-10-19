<template>
    <section class="relative w-full overflow-hidden bg-gray-50">
        <!-- Slides -->
        <div class="relative h-[80vh] flex items-center justify-center">
            <transition-group name="fade" tag="div" class="absolute inset-0">
                <div
                    v-for="(slide, index) in slides"
                    :key="index"
                    v-show="currentSlide === index"
                    class="absolute inset-0 flex flex-col md:flex-row items-center justify-center px-6 md:px-20 text-center md:text-left"
                >
                    <!-- Texte -->
                    <div class="md:w-1/2 space-y-4 z-10">
                        <h1 class="text-3xl md:text-5xl font-bold text-gray-900 leading-tight">
                            {{ slide.title }}
                        </h1>
                        <p class="text-gray-700 text-lg md:text-xl">
                            {{ slide.description }}
                        </p>
                        <a
                            href="/register"
                            class="inline-block mt-4 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl shadow-lg transition"
                        >
                            Rejoignez-nous
                        </a>
                    </div>

                    <!-- Image -->
                    <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
                        <img
                            :src="slide.image"
                            alt="Illustration"
                            class="max-h-[450px] w-auto object-contain"
                        />
                    </div>
                </div>
            </transition-group>
        </div>

        <!-- Boutons -->
        <div class="absolute inset-x-0 bottom-6 flex justify-center space-x-3">
            <button
                v-for="(slide, index) in slides"
                :key="index"
                @click="goToSlide(index)"
                class="w-3 h-3 rounded-full transition-all duration-300"
                :class="currentSlide === index ? 'bg-blue-600 w-6' : 'bg-gray-300'"
            ></button>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";

const slides = [
    {
        title: "Vous êtes un professionnel du numérique ?",
        description:
            "Bénéficiez des missions et offres passionnantes dans votre domaine d'expertise.",
        image: "/assets/images/tortue.png",
    },
    {
        title: "Vous êtes une entreprise en quête de solutions numériques ?",
        description:
            "Nos experts vous accompagnent pour transformer votre projet en succès.",
        image: "/assets/images/tortue.png",
    },
];

const currentSlide = ref(0);
let interval = null;

const goToSlide = (index) => {
    currentSlide.value = index;
};

const nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % slides.length;
};

onMounted(() => {
    interval = setInterval(nextSlide, 6000);
});

onUnmounted(() => {
    clearInterval(interval);
});
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 1s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
