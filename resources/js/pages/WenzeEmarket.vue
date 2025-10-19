<script setup>
import Header from '@/components/Header.vue'
import Footer from '@/components/Footer.vue'
import ProductCard from '@/components/ProductCard.vue'
import PartnerCard from '@/components/PartnerCard.vue'
import Badge from '@/components/ui/Badge.vue'
import Button from '@/components/ui/button/Button.vue'
</script>
<template>
    <div class="min-h-screen bg-[#f8faff] text-[#212121] font-inter">
        <!-- Header -->
        <Header :user="$page.props.auth.user" />

        <!-- Hero Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto flex flex-col lg:flex-row items-center gap-10">
                <div class="lg:w-1/2 text-center lg:text-left space-y-6">
                    <h1 class="text-4xl font-extrabold text-[#1e293b]">
                        Achetez tout ce dont vous avez besoin
                    </h1>
                    <p class="text-[#64748b] text-lg">
                        Découvrez notre sélection de produits et services de qualité pour professionnels du digital.
                    </p>
                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start">
                        <Button variant="default" href="#products">Voir nos produits</Button>
                        <Button variant="outline" href="#partners">Produits partenaires</Button>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img src="/assets/img/banner/ecommerce.jpg" alt="Boutique Wenze" class="rounded-xl shadow-lg" />
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section id="products" class="py-20 bg-[#f8fafc]">
            <div class="container mx-auto space-y-10 text-center">
                <div class="space-y-3">
                    <Badge color="blue">Nos offres</Badge>
                    <h2 class="text-3xl font-bold text-[#1e293b]">Nos produits et services</h2>
                    <p class="text-[#64748b] max-w-xl mx-auto">
                        Découvrez notre catalogue complet de produits et services spécialement sélectionnés pour les professionnels du digital.
                    </p>
                </div>
                <div class="grid lg:grid-cols-2 gap-8">
                    <ProductCard
                        icon="fa-laptop"
                        title="Matériel informatique"
                        description="Ordinateurs, accessoires et équipements de qualité pour professionnels."
                        borderColor="#3b82f6"
                        iconBg="#e0f2fe"
                        iconColor="#3b82f6"
                    />
                    <ProductCard
                        icon="fa-headset"
                        title="Services professionnels"
                        description="Hébergement, noms de domaine et services web essentiels."
                        borderColor="#10b981"
                        iconBg="#d1fae5"
                        iconColor="#10b981"
                    />
                    <ProductCard
                        icon="fa-mobile-alt"
                        title="Accessoires mobiles"
                        description="Téléphones, tablettes et accessoires mobiles de dernière génération."
                        borderColor="#8b5cf6"
                        iconBg="#ede9fe"
                        iconColor="#8b5cf6"
                    />
                    <ProductCard
                        icon="fa-book"
                        title="Formations & Ressources"
                        description="Cours, livres et ressources pour développer vos compétences."
                        borderColor="#ec4899"
                        iconBg="#fce7f3"
                        iconColor="#ec4899"
                    />
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section id="partners" class="py-20 bg-white">
            <div class="container mx-auto space-y-10 text-center">
                <div class="space-y-3">
                    <Badge color="green">Nos partenaires</Badge>
                    <h2 class="text-3xl font-bold text-[#1e293b]">Produits de nos partenaires</h2>
                    <p class="text-[#64748b] max-w-xl mx-auto">
                        Découvrez les produits de qualité de nos partenaires stratégiques.
                    </p>
                </div>
                <div class="grid lg:grid-cols-2 gap-8">
                    <PartnerCard
                        title="Produits Premium"
                        description="Sélection de produits haut de gamme de nos partenaires privilégiés."
                        borderColor="#f59e0b"
                        icon="fa-star"
                        iconBg="#fef3c7"
                        iconColor="#f59e0b"
                    />
                    <PartnerCard
                        title="Solutions Professionnelles"
                        description="Solutions métiers et services professionnels de nos partenaires experts."
                        borderColor="#8b5cf6"
                        icon="fa-certificate"
                        iconBg="#ede9fe"
                        iconColor="#8b5cf6"
                    />
                </div>
            </div>
        </section>

        <!-- Footer -->
        <Footer />
    </div>
</template>
