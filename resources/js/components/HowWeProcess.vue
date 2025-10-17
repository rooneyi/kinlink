<script setup>
import { ref } from "vue";
import ProcessRow from "./ProcessRow.vue";

const items = ref([
    {
        title: "Pro en collaboration",
        badge: { icon: "fa-users", text: "Collaboration" },
        description:
            'Vous êtes en quête d\'un lieu d\'échange et partage d\'expériences entre pairs : Rejoignez nos <b><a href="/pro" class="text-blue-600">communautés</a></b> et vivez une expérience collaborative unique !',
        img: "/assets/img/banner/collaboration.jpg",
    },
    {
        title: "Pro du digital",
        badge: { icon: "fa-laptop-code", text: "Digital" },
        description:
            'Vous cherchez des opportunités professionnelles passionnantes ? Rejoignez <b><a href="/pro" class="text-blue-600">Naye Pro</a></b>, le réseau des talents africains.',
        img: "/assets/img/banner/digital.jpg",
    },
    {
        title: "Entreprises",
        badge: { icon: "fa-building", text: "Entreprise" },
        description:
            'Vous avez des missions à proposer ? Rejoignez <b><a href="/consulting/industry" class="text-blue-600">Naye Business</a></b> et trouvez des professionnels qualifiés.',
        img: "/assets/img/banner/entreprise.png",
    },
    {
        title: "Conseils",
        badge: { icon: "fa-lightbulb", text: "Conseil" },
        description:
            'Votre entreprise veut croître ? Découvrez nos <b><a href="/consulting" class="text-blue-600">offres de conseil</a></b> en stratégie, digital et innovation.',
        img: "/assets/img/banner/conseils.jpg",
    },
    {
        title: "E-commerce",
        badge: { icon: "fa-shopping-cart", text: "E-commerce" },
        description:
            'Sur <b><a href="/wenze" class="text-blue-600">Wenze</a></b>, équipez-vous en matériel informatique et profitez de nos offres exclusives.',
        img: "/assets/img/banner/ecommerce.jpg",
    },
]);
</script>


<template>
    <section class="relative overflow-hidden bg-gray-50 py-24">
        <div
            class="absolute inset-0 bg-[linear-gradient(to_right,rgba(0,0,0,0.03)_1px,transparent_1px),linear-gradient(to_bottom,rgba(0,0,0,0.03)_1px,transparent_1px)] bg-[size:50px_50px] bg-fixed"
        ></div>

        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-5xl font-bold text-gray-900 leading-tight">
                    Bienvenue sur la plateforme qui met le
                    <span class="text-blue-600">génie africain</span> en action !
                </h2>
            </div>

            <!-- Video -->
            <video
                controls
                muted
                autoplay
                poster="/assets/img/banner/collaboration.jpg"
                class="rounded-2xl shadow-lg border-4 border-white mb-16 w-full"
            >
                <source src="/assets/video/spot-2.mp4" type="video/mp4" />
            </video>

            <!-- Process rows -->
            <div class="flex flex-col gap-14 max-w-5xl mx-auto">
                <ProcessRow
                    v-for="(item, index) in items"
                    :key="index"
                    :item="item"
                    :reverse="index % 2 !== 0"
                />
            </div>
        </div>
    </section>
</template>

