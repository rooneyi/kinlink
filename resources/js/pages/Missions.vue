<template>
    <div class="min-h-screen bg-gray-50">
        <!-- Navbar -->
        <Header :user="$page.props.auth.user" />

        <!-- Hero Banner -->
        <section class="relative overflow-hidden">
            <img
                src="/assets/img/banner/business-banner.jpg"
                alt="Banner"
                class="w-full h-96 object-cover"
            />
            <div
                class="absolute inset-0 bg-black bg-opacity-60 flex justify-center items-center px-4"
            >
                <div class="text-center text-white max-w-2xl">
                    <h1 class="text-4xl sm:text-5xl font-extrabold mb-4">
                        Des missions passionnantes vous attendent
                    </h1>
                    <p class="text-lg sm:text-xl mb-6">
                        Saisissez l’opportunité de mettre vos compétences au service d'entreprises digitales.
                    </p>
                    <Link
                        href="/user-applications"
                        class="btn btn-outline w-max px-6 py-4 text-lg sm:text-lg rounded-full border-1 border-teal-500 hover:bg-blue-500 hover:text-white shadow-2xl transition-transform transform hover:scale-105"
                    >
                        Mes candidatures
                    </Link>
                </div>
            </div>
        </section>

        <!-- Liste des missions -->
        <section class="py-12">
            <div class="container mx-auto px-4">
                <!-- Titre -->
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold mb-2">Missions disponibles</h2>
                    <p class="text-gray-500 text-xl font-bold">Trouvez une mission qui correspond à votre profil</p>
                </div>

                <!-- Grille des missions -->
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Liste des missions -->
                    <div
                        v-if="missions.length"
                        v-for="mission in missions"
                        :key="mission.id"
                        class="flex flex-col bg-white rounded-2xl shadow-md hover:shadow-2xl overflow-hidden transition-transform transform hover:-translate-y-2 h-[320px] sm:h-[340px]"
                    >
                        <!-- Image : légèrement plus petite -->
                        <div class="h-2/5">
                            <img
                                :src="getMissionImage(mission.image)"
                                :alt="mission.title"
                                class="w-full h-full object-cover"
                            />
                        </div>

                        <!-- Contenu -->
                        <div class="flex flex-col justify-between h-3/5 p-3">
                            <div>
                                <h5 class="text-center text-base font-bold text-teal-600 mb-1">
                                    {{ mission.title }}
                                </h5>
                                <p class="text-gray-600 text-xs mb-1 line-clamp-2 text-justify">
                                    {{ mission.description }}
                                </p>
                                <ul class="text-gray-500 text-[11px] mb-2 space-y-1">
                                    <li>
                                        <i class="fas fa-briefcase mr-1 text-teal-500"></i>
                                        <strong>Contrat :</strong> {{ mission.remotely ? 'CDD' : 'CDI' }}
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marker-alt mr-1 text-teal-500"></i>
                                        <strong>Localisation :</strong> {{ mission.location }}
                                    </li>
                                    <li>
                                        <i class="fas fa-euro-sign mr-1 text-teal-500"></i>
                                        <strong>Budget :</strong> {{ mission.costMax }} €
                                    </li>
                                </ul>
                            </div>

                            <!-- Boutons -->
                            <div class="flex gap-2 justify-between">
                                <!-- Détails: peer triggers style change on Candidater when hovered -->
                                <Link
                                    :href="`/missions/${mission.id}`"
                                    class="peer flex-1 order-2 text-center py-1.5 text-xs font-semibold rounded-full border-2 border-teal-600 text-teal-600 hover:bg-teal-600 hover:text-white transition"
                                >
                                    Détails
                                </Link>
                                <!-- Candidater: teal by default, becomes outline when hovering Détails -->
                                <Link
                                    :href="`/missions/${mission.id}/apply`"
                                    class="flex-1 order-1 text-center py-1.5 text-xs font-semibold rounded-full bg-teal-600 text-white border-2 border-teal-600 transition peer-hover:bg-transparent peer-hover:text-teal-700 peer-hover:border-teal-700"
                                >
                                    Candidater
                                </Link>
                            </div>
                        </div>
                    </div>

                    <!-- Message si aucune mission -->
                    <div v-else class="col-span-full">
                        <div
                            class="text-center py-6 px-8 rounded-xl bg-blue-50 text-blue-800 border border-blue-200 shadow-sm"
                        >
                            <i class="fas fa-info-circle mr-2"></i>
                            Aucune mission disponible pour le moment.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <Footer />
    </div>
</template>

<script setup>
import { ref } from 'vue'
import Header from '@/components/Header.vue'
import Footer from '@/components/Footer.vue'
import { Link } from '@inertiajs/vue3'
const defaultImage = '/assets/images/devWeb.jpeg'

// Helper pour résoudre correctement le chemin d'image
const getMissionImage = (img) => {
    if (!img) return defaultImage
    if (typeof img === 'string' && img.startsWith('/assets')) return img
    return `/uploads/missions/${img}`
}

// Données exemple
const missions = ref([
    {
        id: 1,
        title: 'Développeur Frontend',
        description: 'Développez des interfaces modernes et interactives pour des applications web.',
        location: 'Remote',
        remotely: true,
        costMax: 1200,
        image: '/assets/images/devWeb.jpeg'
    },
    {
        id: 2,
        title: 'Marketing Digital',
        description: 'Optimisez les campagnes publicitaires et développez la visibilité de marques locales.',
        location: 'Kinshasa',
        remotely: false,
        costMax: 800,
        image: '/assets/images/marketingDigital.jpeg'
    },
    {
        id: 3,
        title: 'Développeur Mobile',
        description: 'Concevez et améliorez des applications mobiles performantes et intuitives.',
        location: 'Kinshasa',
        remotely: false,
        costMax: 1000,
        image: '/assets/images/devmobile.jpeg'
    },
    {
        id: 4,
        title: 'Analyste de Données',
        description: 'Analysez et interprétez des données stratégiques pour des entreprises innovantes.',
        location: 'Kinshasa',
        remotely: false,
        costMax: 900,
        image: '/assets/images/dataAnalyste.jpeg'
    }
])
</script>

<style scoped>
.line-clamp-2 {
    /* Standard property for compatibility */
    line-clamp: 2;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
