<!-- resources/js/pages/Home.vue -->
<script setup>
import Header from '@/components/Header.vue';
import Slider from '@/components/Slider.vue';
import Podcast from '@/components/Podcast.vue';
import HowWeProcess from '@/components/HowWeProcess.vue';
// import CallToAction from '@/components/CallToAction.vue';
// import Investor from '@/components/Investor.vue';
// import ProfessionalSubscribe from '@/components/ProfessionalSubscribe.vue';
// import Avis from '@/components/Avis.vue';
import Footer from '@/components/Footer.vue';
// Aucun script dynamique nécessaire ici
</script>

<template>
    <div class="min-h-screen bg-gray-50 text-gray-800 flex flex-col">

        <!-- Navbar (à remplacer par ton composant Header si besoin) -->
        <Header />

        <!-- Slider -->
        <Slider />

        <!-- Podcast -->
        <Podcast />

        <!-- How We Process -->
        <HowWeProcess />

        <!-- Process / Services Section -->
        <div class="process-section pt-0">
            <div class="container mx-auto px-6">
                <div class="process-header animate-item fade-in-up">
                    <h2 class="section-title text-3xl font-bold text-center mb-8">
                        Nos <span class="bubble-word text-blue-600">services</span>
                    </h2>
                </div>

                <div class="process-grid space-y-16">
                    <!-- Service 1 -->
                    <div class="process-row animate-item fade-in-up flex flex-col md:flex-row items-center gap-8">
                        <div class="process-content flex-1">
                            <h3 class="animate-item fade-in-up process-title-offset mb-2" style="--animation-delay:0.05s">
                                <span class="process-badge"><i class="fas fa-user-tie"></i> Pro</span>
                                Recrutement
                            </h3>
                            <p>
                                Trouvez ici des profils professionnels qualifiés et expérimentés, des passionnés, pour réaliser vos missions dans le digital et le management de projet.
                            </p>
                        </div>
                        <div class="process-img-container flex-1">
                            <img src="/assets/img/services/design-graphique.jpg" class="process-img rounded-xl shadow-lg w-full object-cover" alt="Recrutement" />
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="process-row animate-item fade-in-up flex flex-col md:flex-row-reverse items-center gap-8">
                        <div class="process-content flex-1">
                            <h3 class="animate-item fade-in-up process-title-offset mb-2" style="--animation-delay:0.10s">
                                <span class="process-badge"><i class="fas fa-laptop-code"></i> Skills</span>
                                Développement
                            </h3>
                            <p>
                                Bénéficiez de nos formations, de notre réseau de mentoring ainsi que de divers outils pour développer vos compétences et qualifications. Boostez votre savoir-être et savoir-faire !
                            </p>
                        </div>
                        <div class="process-img-container flex-1">
                            <img src="/assets/img/services/it.jpg" class="process-img rounded-xl shadow-lg w-full object-cover" alt="Développement" />
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="process-row animate-item fade-in-up flex flex-col md:flex-row items-center gap-8">
                        <div class="process-content flex-1">
                            <h3 class="animate-item fade-in-up process-title-offset mb-2" style="--animation-delay:0.15s">
                                <span class="process-badge"><i class="fas fa-user-graduate"></i> Expert</span>
                                Accompagnement
                            </h3>
                            <p>
                                Augmentez votre chiffre d'affaires et vos parts de marchés avec les conseils de nos experts Innovation, Industrie, IT et Stratégie business.
                            </p>
                        </div>
                        <div class="process-img-container flex-1">
                            <img src="/assets/img/services/programmation.jpg" class="process-img rounded-xl shadow-lg w-full object-cover" alt="Accompagnement" />
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="process-row animate-item fade-in-up flex flex-col md:flex-row-reverse items-center gap-8">
                        <div class="process-content flex-1">
                            <h3 class="animate-item fade-in-up process-title-offset mb-2" style="--animation-delay:0.20s">
                                <span class="process-badge"><i class="fas fa-users"></i> Plus</span>
                                Collaboration
                            </h3>
                            <p>
                                Échangez avec vos pairs et trouvez facilement des collaborateurs, partenaires, équipiers, associés ou simplement des contacts de domaine et d'horizon divers et varié.
                            </p>
                        </div>
                        <div class="process-img-container flex-1">
                            <img src="/assets/img/services/communication.jpg" class="process-img rounded-xl shadow-lg w-full object-cover" alt="Collaboration" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <CallToAction />

        <!-- Investor Section -->
        <Investor />

        <!-- Professional Subscribe -->
        <ProfessionalSubscribe />

        <!-- Avis Section -->
        <Avis />

        <!-- Footer -->
        <Footer />

    </div>
</template>


