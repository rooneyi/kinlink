<template>
    <section class="relative w-full overflow-hidden bg-[#f8fafc]">
        <!-- 🌊 Vagues teal animées -->
        <div class="absolute bottom-0 left-0 w-full h-full z-0">
            <svg
                class="absolute bottom-0 left-0 w-[200%] animate-wave-slow opacity-60"
                viewBox="0 0 1200 200"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M0,120 C300,180 900,60 1200,120 L1200,200 L0,200 Z"
                    fill="#14b8a6"
                />
            </svg>

            <svg
                class="absolute bottom-0 left-0 w-[200%] animate-wave-fast opacity-80"
                viewBox="0 0 1200 200"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M0,140 C400,220 800,40 1200,140 L1200,200 L0,200 Z"
                    fill="#0d9488"
                />
            </svg>

            <svg
                class="absolute bottom-0 left-0 w-[200%] animate-wave-medium opacity-70"
                viewBox="0 0 1200 200"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M0,160 C500,230 700,80 1200,160 L1200,200 L0,200 Z"
                    fill="#2dd4bf"
                />
            </svg>
        </div>

        <!-- Slides -->
        <div class="relative h-[80vh] flex items-center justify-center z-10">
            <transition-group name="fade" tag="div" class="absolute inset-0">
                <div
                    v-for="(slide, index) in slides"
                    :key="index"
                    v-show="currentSlide === index"
                    class="absolute inset-0 flex flex-col md:flex-row items-center justify-center px-6 md:px-20 text-center md:text-left"
                >
                    <!-- Texte -->
                    <div class="md:w-1/2 space-y-4 z-20">
                        <h1 class="text-3xl md:text-5xl font-bold text-gray-900 leading-tight">
                            {{ slide.title }}
                        </h1>
                        <p class="text-gray-700 text-lg md:text-xl">
                            {{ slide.description }}
                        </p>
                        <a
                            href="/register"
                            class="inline-block mt-4 px-6 py-3 bg-teal-600 hover:bg-teal-700 text-white rounded-xl shadow-lg transition"
                        >
                            Rejoignez-nous
                        </a>
                    </div>

                    <!-- Image (tortue animée) -->
                    <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
                        <img
                            :src="slide.image"
                            alt="Illustration"
                            class="max-h-[450px] w-auto object-contain tortue-animation z-20"
                        />
                    </div>
                </div>
            </transition-group>
        </div>

        <!-- Boutons -->
        <div class="absolute inset-x-0 bottom-6 flex justify-center space-x-3 z-20">
            <button
                v-for="(slide, index) in slides"
                :key="index"
                @click="goToSlide(index)"
                class="w-3 h-3 rounded-full transition-all duration-300"
                :class="currentSlide === index ? 'bg-teal-600 w-6' : 'bg-gray-300'"
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
/* --- Animation de fondu --- */
.fade-enter-active,
.fade-leave-active {
    transition: opacity 1s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

/* --- Tortue qui flotte doucement --- */
@keyframes tortueMouvement {
    0% {
        transform: translateY(0) rotate(0deg);
    }
    25% {
        transform: translateY(-8px) rotate(1deg);
    }
    50% {
        transform: translateY(0px) rotate(-1deg);
    }
    75% {
        transform: translateY(8px) rotate(0.5deg);
    }
    100% {
        transform: translateY(0) rotate(0deg);
    }
}
.tortue-animation {
    animation: tortueMouvement 6s ease-in-out infinite;
    will-change: transform;
}

/* --- 🌊 Animation des vagues teal --- */
@keyframes waveMoveSlow {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(-50%);
    }
}
@keyframes waveMoveMedium {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(-60%);
    }
}
@keyframes waveMoveFast {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(-70%);
    }
}

.animate-wave-slow {
    animation: waveMoveSlow 18s linear infinite;
}
.animate-wave-medium {
    animation: waveMoveMedium 14s linear infinite;
}
.animate-wave-fast {
    animation: waveMoveFast 10s linear infinite;
}
</style>
