<script setup>
import { ref, onMounted } from 'vue'

const sectionRef = ref(null)
const visible = ref(false)

onMounted(() => {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    visible.value = true
                    observer.unobserve(entry.target)
                }
            })
        },
        { threshold: 0.2 }
    )

    if (sectionRef.value) observer.observe(sectionRef.value)
})
</script>

<template>
    <section
        ref="sectionRef"
        class="relative flex items-center justify-center py-24 bg-[#f8faff] overflow-hidden"
    >
        <!-- Quadrillage style Vercel -->
        <div
            class="absolute inset-0 bg-[linear-gradient(to_right,rgba(0,0,0,0.03)_1px,transparent_1px),linear-gradient(to_bottom,rgba(0,0,0,0.03)_1px,transparent_1px)] bg-[length:50px_50px] bg-fixed bg-center"
        ></div>

        <div
            class="relative z-10 max-w-2xl w-full mx-4 bg-white border border-gray-200 rounded-3xl shadow-[0_12px_40px_rgba(0,0,0,0.04),0_2px_8px_rgba(0,0,0,0.08)] p-10 text-center transition-transform duration-500 hover:-translate-y-2 hover:scale-[1.02] opacity-0 transform translate-y-10 ring-1 ring-gray-100 hover:ring-blue-100 hover:shadow-lg"
            :class="{ 'animate-fadeInUp': visible }"
        >
            <!-- Badge flottant -->
            <span
                class="inline-flex items-center px-6 py-2.5 mb-6 rounded-full font-bold text-white text-lg shadow-md animate-bounce bg-gradient-to-r from-blue-600 to-blue-200 gap-2"
            >
        <i class="fas fa-user-tie"></i> Pour vos projets
      </span>

            <!-- Titre -->
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">
                Nos professionnels du
                <span
                    class="inline-block bg-blue-100 text-blue-600 border border-blue-200 rounded-full px-4 py-0.5 font-semibold"
                >numérique</span
                >
            </h2>

            <!-- Sous-titre -->
            <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                Des talents qualifiés prêts à vous accompagner.
            </p>

            <h4 class="text-blue-600 font-semibold text-xl mb-8">
                Soyez parmi les premiers professionnels à offrir leurs talents au monde
            </h4>

            <!-- Bouton -->
            <a
                href="/login"
                class="inline-flex items-center gap-3 px-10 py-4 bg-blue-600 text-white font-semibold rounded-full shadow-lg hover:bg-blue-700 hover:-translate-y-1 hover:scale-105 transition-all duration-300"
            >
                <i class="fas fa-arrow-right"></i> Rejoindre Kinlink Naye
            </a>
        </div>
    </section>
</template>



<style scoped>
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fadeInUp {
    animation: fadeInUp 0.8s ease-out forwards;
}
</style>
