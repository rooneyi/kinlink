<template>
    <div class="bg-gray-50 font-sans text-gray-900">
        <!-- Navbar -->
        <Header :user="$page.props.auth.user" />

        <!-- Hero Section -->
        <section class="hero py-40 text-center relative">
            <div class="container mx-auto px-6">
                <div class="inline-block mb-7 px-6 py-2 border rounded-full bg-white/80 shadow-sm font-semibold text-gray-600">
                    <i class="fas fa-crown text-blue-600 mr-2"></i> Abonnement Premium
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold mb-6">
                    Passez à <span class="text-blue-600">NAYE BUSINESS</span>
                </h1>
                <p class="text-gray-600 text-lg md:text-xl max-w-xl mx-auto mb-8">
                    Accédez à tous les avantages premium pour booster votre activité et votre réseau !
                </p>
                <div>
                    <a href="/login" class="inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-full shadow-md">
                        <i class="fas fa-arrow-right"></i> S'abonner maintenant
                    </a>
                </div>
            </div>
        </section>

        <Separator />

        <!-- Avantages exclusifs Section -->
        <section class="py-20 bg-white/90 backdrop-blur-md border border-gray-200 shadow-sm">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold mb-4">
                        Vos <span class="bg-blue-50 text-blue-600 px-4 py-1 rounded-full">avantages exclusifs</span>
                    </h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Découvrez tout ce que l'abonnement NAYE BUSINESS vous réserve :</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <FeatureCard delay="0.1s">
                        <template #icon>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="#007bff" stroke-width="2"/><path d="M12 8v4" stroke="#007bff" stroke-width="2" stroke-linecap="round"/><circle cx="12" cy="16" r="1.2" fill="#007bff"/></svg>
                        </template>
                        <template #title>Espace personnel</template>
                        <template #description>Gérez votre profil, vos informations et vos préférences en toute simplicité.</template>
                    </FeatureCard>

                    <FeatureCard delay="0.2s">
                        <template #icon>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="3" stroke="#007bff" stroke-width="2"/><path d="M8 12h8M8 16h5" stroke="#007bff" stroke-width="2" stroke-linecap="round"/></svg>
                        </template>
                        <template #title>Suivi des missions</template>
                        <template #description>Visualisez et pilotez toutes vos missions en cours et passées.</template>
                    </FeatureCard>

                    <FeatureCard delay="0.3s">
                        <template #icon>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="#007bff" stroke-width="2"/><path d="M12 8v4l3 2" stroke="#007bff" stroke-width="2" stroke-linecap="round"/></svg>
                        </template>
                        <template #title>Offre Conseil</template>
                        <template #description>Accédez à l’expertise de nos consultants pour booster votre croissance.</template>
                    </FeatureCard>
                    <!-- Ajouter les autres FeatureCards similaires -->
                </div>
            </div>
        </section>

        <Separator />

        <!-- Naye Social Section -->
        <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold mb-4">
                        Naye <span class="bg-blue-50 text-blue-600 px-4 py-1 rounded-full">Social</span>
                    </h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Soutenez l’avenir du digital africain en investissant dans la formation, le mentorat et l’inclusion sociale des jeunes talents.
                    </p>
                </div>

                <div class="flex flex-col md:flex-row items-center gap-8 justify-center">
                    <FeatureCard delay="0.1s" isPriceCard>
                        <template #icon>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5" stroke="#ff9800" stroke-width="2"/><path d="M12 7v5l3 3" stroke="#ff9800" stroke-width="2" stroke-linecap="round"/></svg>
                        </template>
                        <template #title>Faites un Don Social</template>
                        <template #description>
                            En soutenant Naye Social, vous permettez à des jeunes de bénéficier de formations, de mentorat et d’actions solidaires dans les écoles et centres de formation. Votre don offre un accès à des ressources numériques, du matériel, et un accompagnement personnalisé pour révéler leur potentiel et ouvrir les portes du digital.
                        </template>
                        <template #price>
                            <span class="text-lg font-bold bg-yellow-100 px-4 py-2 rounded-full border border-yellow-200">À partir de 10 $</span>
                        </template>
                        <template #cta>
                            <a href="/login" class="btn btn-primary mt-4">Faire un don maintenant</a>
                        </template>
                    </FeatureCard>

                    <ImpactMessage>
                        <template #badge>
              <span class="inline-flex items-center gap-2 bg-blue-50 text-blue-600 px-6 py-3 rounded-full font-semibold">
                <i class="fas fa-hand-holding-heart"></i> Impact direct : chaque don permet à un jeune d’accéder à outils, compétences et accompagnement pour construire son avenir.
              </span>
                        </template>
                        Ensemble, nous créons des opportunités concrètes et favorisons l’émergence d’une nouvelle génération de talents africains.
                    </ImpactMessage>
                </div>
            </div>
        </section>

        <Separator />

        <!-- Offres exclusives Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold mb-4">
                        Profitez de nos <span class="bg-blue-50 text-blue-600 px-4 py-1 rounded-full">offres</span> exclusives !
                    </h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Choisissez la formule qui correspond à vos ambitions et bénéficiez d’un accompagnement sur-mesure pour accélérer votre réussite.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-items-center">
                    <FeatureCard delay="0.1s" isPriceCard>
                        <template #icon>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="#007bff" stroke-width="2"/><path d="M12 8v8" stroke="#007bff" stroke-width="2" stroke-linecap="round"/><path d="M8 12h8" stroke="#007bff" stroke-width="2" stroke-linecap="round"/></svg>
                        </template>
                        <template #title>Offre Naye Business</template>
                        <template #price>30 $ / mois</template>
                        <template #description>
                            Idéale pour les entreprises qui souhaitent gérer leurs missions, accéder à la communauté et profiter de services premium tout en gardant la liberté de mettre l’abonnement en pause à tout moment.
                        </template>
                        <template #cta>
                            <a href="/login" class="btn btn-primary mt-4">S'abonner</a>
                        </template>
                    </FeatureCard>

                    <FeatureCard delay="0.2s" isPriceCard>
                        <template #icon>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5" stroke="#00b894" stroke-width="2"/><path d="M12 7v10" stroke="#00b894" stroke-width="2" stroke-linecap="round"/><path d="M8 12h8" stroke="#00b894" stroke-width="2" stroke-linecap="round"/></svg>
                        </template>
                        <template #title>Offre Naye Rapipe</template>
                        <template #price>45 $ / mois</template>
                        <template #description>
                            Pour les entreprises ambitieuses qui veulent un accès illimité, un renouvellement automatique et un accompagnement sans limite pour booster durablement leur activité.
                        </template>
                        <template #cta>
                            <a href="/login" class="btn btn-primary mt-4">S'abonner</a>
                        </template>
                    </FeatureCard>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <Footer />
    </div>
</template>

<script setup>
import Header from '@/components/Header.vue'
import Footer from '@/components/Footer.vue'
import FeatureCard from '@/components/FeatureCard.vue'
import Separator from '@/components/Separator.vue'
import ImpactMessage from '@/components/ImpactMessage.vue'
</script>
