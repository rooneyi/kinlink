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
                        class="btn btn-outline w-max px-6 rounded-full border border-white hover:bg-white hover:text-black transition"
                    >
                        Mes candidatures
                    </Link>
                </div>
            </div>
        </section>

        <!-- Liste des missions -->
        <section class="py-12">
            <div class="container mx-auto px-4">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold mb-2">Missions disponibles</h2>
                    <p class="text-gray-500">Trouvez une mission qui correspond à votre profil</p>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <div v-if="missions.length" v-for="mission in missions" :key="mission.id">
                        <div class="h-full flex flex-col shadow-md rounded-2xl overflow-hidden transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <img
                                :src="mission.image ? `/uploads/missions/${mission.image}` : defaultImage"
                                :alt="mission.title"
                                class="w-full h-48 object-cover rounded-t-2xl"
                            />
                            <div class="flex flex-col flex-grow p-5">
                                <h5 class="text-center text-blue-600 font-semibold mb-2">{{ mission.title }}</h5>
                                <p class="text-gray-500 text-sm mb-3 line-clamp-3">{{ mission.description }}</p>

                                <ul class="text-gray-400 text-sm mb-3 space-y-1">
                                    <li><i class="fas fa-briefcase mr-1"></i><strong>Contrat :</strong> {{ mission.remotely ? 'CDD' : 'CDI' }}</li>
                                    <li><i class="fas fa-map-marker-alt mr-1"></i><strong>Localisation :</strong> {{ mission.location }}</li>
                                    <li><i class="fas fa-euro-sign mr-1"></i><strong>Budget :</strong> {{ mission.costMax }} €</li>
                                </ul>

                                <div class="mt-auto flex flex-col gap-2">
                                    <Link
                                        :href="`/missions/${mission.id}/apply`"
                                        class="btn btn-primary w-full rounded-full"
                                    >
                                        Candidater
                                    </Link>
                                    <Link
                                        :href="`/missions/${mission.id}`"
                                        class="btn btn-outline w-full rounded-full"
                                    >
                                        En savoir plus
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-else class="col-span-full">
                        <div class="text-center py-4 px-6 rounded-lg bg-blue-100 text-blue-800">
                            <i class="fas fa-info-circle mr-2"></i> Aucune mission disponible pour le moment.
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

const defaultImage = '@/assets/img/default/mission.jpg'

// Simuler les missions reçues depuis l'API Symfony/Twig
const missions = ref([
    // Exemple
    {
        id: 1,
        title: 'Développeur Frontend',
        description: 'Développez des interfaces modernes...',
        location: 'Remote',
        remotely: true,
        costMax: 1200,
        image: null
    },
    {
        id: 2,
        title: 'Marketing Digital',
        description: 'Optimisez les campagnes publicitaires...',
        location: 'Kinshasa',
        remotely: false,
        costMax: 800,
        image: 'marketing.jpg'
    }
])
</script>

<style scoped>
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    line-clamp: 3; /* Ajout de la propriété standard */
    overflow: hidden;
}
</style>
