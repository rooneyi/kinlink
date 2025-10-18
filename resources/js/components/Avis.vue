
<script setup>
import { ref, onMounted } from "vue";

const section = ref(null);
const visible = ref(false);

onMounted(() => {
    const observer = new IntersectionObserver(
        (entries) => {
            if (entries[0].isIntersecting) visible.value = true;
        },
        { threshold: 0.2 }
    );
    if (section.value) observer.observe(section.value);
});
</script>

<template>
    <section
        ref="section"
        class="relative flex items-center justify-center py-24 min-h-[340px] bg-[#f8faff] overflow-hidden"
    >
        <!-- Quadrillage subtile de fond -->
        <div
            class="absolute inset-0 bg-[length:50px_50px] bg-center bg-fixed"
            style="background-image:linear-gradient(to right,rgba(0,0,0,0.03)_1px,transparent_1px),linear-gradient(to bottom,rgba(0,0,0,0.03)_1px,transparent_1px)"
        ></div>

        <div
            class="relative z-10 bg-white border border-gray-200 rounded-2xl shadow-md max-w-xl w-full px-8 py-14 text-center transition-all duration-700"
            :class="{
        'opacity-100 translate-y-0 blur-0': visible,
        'opacity-0 translate-y-8 blur-sm': !visible,
      }"
        >
            <!-- Badge animé -->
            <span
                class="absolute -top-5 left-1/2 -translate-x-1/2 bg-gradient-to-r from-blue-600 to-blue-300 text-white text-sm font-semibold rounded-full px-6 py-2 shadow-md animate-float"
            >
        ⚡ Nouveau !
      </span>

            <!-- Titre -->
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 flex justify-center items-center gap-2">
                💬 Donnez-nous votre
                <span
                    class="inline-block bg-blue-50 border border-blue-200 text-blue-600 px-4 py-1 rounded-full font-semibold"
                >
          avis
        </span>
            </h2>

            <!-- Sous-titre -->
            <p class="text-gray-600 text-lg leading-relaxed mb-8">
                Votre opinion compte vraiment : aidez-nous à rendre la plateforme encore plus performante et agréable pour vous et la communauté.
            </p>

            <!-- Bouton -->
            <a
                href="https://forms.gle/WWyg2UGq8f4jM5W1A"
                target="_blank"
                class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-blue-600 text-white font-semibold text-lg rounded-full shadow-md border border-blue-600 transition-transform transform hover:scale-105 hover:-translate-y-1 hover:bg-blue-700"
            >
                ⭐ Évaluer maintenant
            </a>
        </div>
    </section>
</template>


<style scoped>
@keyframes float {
    0% {
        transform: translate(-50%, 0);
    }
    100% {
        transform: translate(-50%, 8px);
    }
}
.animate-float {
    animation: float 2.5s ease-in-out infinite alternate;
}
</style>
