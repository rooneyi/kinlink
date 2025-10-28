<script setup>
import { ref, onMounted } from "vue";
import { BriefcaseIcon, Building2Icon, UsersIcon } from "lucide-vue-next";

const section = ref(null);
const cards = ref([]);
const visible = ref(false);
const cardsVisible = ref([]);

const cardData = [
    {
        badge: "Pro",
        title: "Pour les professionnels",
        text: "Bénéficiez des missions et offres passionnantes dans votre domaine d'expertise.",
        icon: BriefcaseIcon,
    },
    {
        badge: "Entreprise",
        title: "Pour les entreprises",
        text: "Trouvez des solutions numériques adaptées à vos besoins spécifiques.",
        icon: Building2Icon,
    },
    {
        badge: "Communauté",
        title: "Nos Communautés",
        text: "Partagez et échangez avec les experts de votre secteur d’activité.",
        icon: UsersIcon,
    },
];

onMounted(() => {
    // Observer pour le titre
    const observer = new IntersectionObserver(
        (entries) => {
            if (entries[0].isIntersecting) visible.value = true;
        },
        { threshold: 0.2 }
    );
    if (section.value) observer.observe(section.value);

    // Observer pour les cartes
    cardsVisible.value = Array(cardData.length).fill(false);
    const cardObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    const index = cards.value.indexOf(entry.target);
                    if (index !== -1) cardsVisible.value[index] = true;
                    cardObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.2 }
    );
    cards.value.forEach((card) => cardObserver.observe(card));
});

const cardsList = cardData;
</script>

<style scoped>
@keyframes bounce-slow {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(6px);
    }
}
.animate-bounce-slow {
    animation: bounce-slow 2.5s ease-in-out infinite;
}
</style>
<template>
    <section
        ref="section"
        class="relative bg-[#f8faff] py-20 overflow-hidden"
    >
        <!-- Grille subtile de fond -->
        <div
            class="absolute inset-0 bg-[length:50px_50px] bg-center bg-fixed"
            style="background-image:linear-gradient(to right,rgba(0,0,0,0.03)_1px,transparent_1px),linear-gradient(to bottom,rgba(0,0,0,0.03)_1px,transparent_1px)"
        ></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6">
            <!-- Titre -->
            <div
                class="text-center mb-16 transition-all duration-700"
                :class="{ 'opacity-100 translate-y-0 blur-0': visible, 'opacity-0 translate-y-12 blur-sm': !visible }"
            >
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Partager et
                    <span class="inline-block bg-blue-50 border border-blue-200 text-blue-600 px-4 py-1 rounded-full font-semibold ml-2 scale-100">
            collaborer
          </span>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Rejoignez la communauté NAYE et accédez à un écosystème d’opportunités, de missions et de collaborations.
                </p>
            </div>

            <!-- Cartes -->
            <div class="grid md:grid-cols-3 gap-8">
                <div
                    v-for="(card, i) in cardsList"
                    :key="i"
                    ref="cards"
                    class="group relative bg-white border border-gray-200 rounded-2xl shadow-md p-8 flex flex-col justify-between transition-all duration-700 ring-1 ring-gray-100 hover:ring-blue-100 hover:shadow-lg hover:-translate-y-1 hover:scale-[1.01]"
                    :class="{
            'opacity-100 translate-y-0 blur-0': cardsVisible[i],
            'opacity-0 translate-y-12 blur-sm': !cardsVisible[i],
          }"
                    :style="{ transitionDelay: `${i * 0.15}s` }"
                >
          <span
              class="absolute -top-4 left-6 bg-gradient-to-r from-blue-600 to-blue-200 text-white text-sm font-semibold rounded-full px-4 py-1 shadow-md animate-bounce-slow"
          >
            {{ card.badge }}
          </span>

                    <div>
                        <h3 class="text-xl font-semibold text-blue-600 mb-3 flex items-center gap-2">
                            <component :is="card.icon" class="w-5 h-5 text-blue-500" />
                            {{ card.title }}
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            {{ card.text }}
                        </p>
                    </div>

                    <a
                        href="/register"
                        class="mt-6 inline-flex items-center justify-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-full shadow-md transition-transform transform group-hover:-translate-y-1 group-hover:scale-[1.03]"
                    >
                        Rejoindre maintenant
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="w-5 h-5 transition-transform group-hover:translate-x-1"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>


