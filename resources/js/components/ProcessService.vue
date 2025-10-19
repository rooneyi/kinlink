<script setup>
import { ref, onMounted } from 'vue'

const sectionRef = ref(null)
const visible = ref(false)

const services = [
    {
        badge: 'Pro',
        title: 'Recrutement',
        description:
            "Trouvez ici des profils professionnels qualifiés et expérimentés, des passionnés, pour réaliser vos missions dans le digital et le management de projet.",
        icon: 'fas fa-user-tie',
        img: '/assets/img/services/design-graphique.jpg'
    },
    {
        badge: 'Skills',
        title: 'Développement',
        description:
            "Bénéficiez de nos formations, de notre réseau de mentoring ainsi que de divers outils pour développer vos compétences et qualifications. Boostez votre savoir-être et savoir-faire !",
        icon: 'fas fa-laptop-code',
        img: '/assets/img/services/it.jpg'
    },
    {
        badge: 'Expert',
        title: 'Accompagnement',
        description:
            "Augmentez votre chiffre d'affaires et vos parts de marchés avec les conseils de nos experts Innovation, Industrie, IT et Stratégie business.",
        icon: 'fas fa-user-graduate',
        img: '/assets/img/services/programmation.jpg'
    },
    {
        badge: 'Plus',
        title: 'Collaboration',
        description:
            "Échangez avec vos pairs et trouvez facilement des collaborateurs, partenaires, équipiers, associés ou simplement des contacts de domaine et d'horizon divers et varié.",
        icon: 'fas fa-users',
        img: '/assets/img/services/communication.jpg'
    }
]

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
    <section ref="sectionRef" class="py-16 bg-gray-50 overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Header -->
            <div
                class="text-center mb-12 opacity-0 transform translate-y-10 transition-all duration-700"
                :class="{ 'animate-fadeInUp': visible }"
            >
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">
                    Nos <span class="inline-block text-blue-600">services</span>
                </h2>
            </div>

            <!-- Services Rows -->
            <div class="space-y-16">
                <div
                    v-for="(item, index) in services"
                    :key="index"
                    class="flex flex-col md:flex-row items-stretch bg-white border border-gray-200 rounded-3xl shadow-md overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1 hover:scale-[1.01] opacity-0 translate-y-10 duration-700"
                    :class="[
    index % 2 === 1 ? 'md:flex-row-reverse' : '',
    visible ? 'animate-fadeInUp' : 'opacity-0 translate-y-10'
]"

                    :style="{ transitionDelay: `${0.05 + index * 0.05}s` }"
                >
                    <div class="flex-1 p-8 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-blue-600 flex items-center gap-3 mb-4">
                            <span
                                class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-400 text-white rounded-full px-4 py-1 font-semibold shadow-md animate-bounce-slow"
                            >
                                <i :class="item.icon"></i> {{ item.badge }}
                            </span>
                            {{ item.title }}
                        </h3>
                        <p
                            class="text-gray-600 text-lg leading-relaxed"
                            v-html="item.description"
                        ></p>
                    </div>

                    <div
                        class="flex items-center justify-center bg-gradient-to-br from-gray-50 to-blue-50 border-t md:border-t-0 md:border-l border-gray-200 min-w-[300px] md:max-w-[400px]"
                    >
                        <img
                            :src="item.img"
                            class="rounded-2xl border-4 border-white shadow-md object-cover w-[90%] aspect-video"
                            :alt="item.title"
                        />
                    </div>
                </div>
            </div>
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
