<!-- resources/js/pages/Home.vue -->
<script setup>
import Header from '@/components/Header.vue';
import Slider from '@/components/Slider.vue';
import Podcast from '@/components/Podcast.vue';
import HowWeProcess from '@/components/HowWeProcess.vue';
import CallToAction from '@/components/CallToAction.vue';
import ProcessService from '@/components/ProcessService.vue';

// import Investor from '@/components/Investor.vue';
import ProfessionalSubscribe from '@/components/ProfessionalSubscribe.vue';
import Avis from '@/components/Avis.vue';
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
        <ProcessService />

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


