<template>
    <footer class="bg-[#0B2A35] text-gray-300 pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 border-b border-gray-600 pb-10">

                <!-- Logo & description -->
                <div class="flex flex-col gap-4 border-gray-600 lg:border-r">
                    <img
                        src="/assets/img/logo-color.png"
                        alt="Logo Kinlink Naye"
                        class="h-20 object-contain -mt-2"
                    />
                    <p class="text-sm leading-relaxed">
                        La plateforme collaborative et innovante pour les entreprises et
                        Professionnels du Numérique en Afrique !
                    </p>
                    <div class="flex gap-4 mt-4">
                        <a href="https://facebook.com/KinLinkNaye" target="_blank" class="hover:text-[#00CDB0]">
                            <i class="icofont-facebook text-xl"></i>
                        </a>
                        <a href="https://twitter.com/KinlinkNaye" target="_blank" class="hover:text-[#00CDB0]">
                            <i class="icofont-twitter text-xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/kinlink-naye" target="_blank" class="hover:text-[#00CDB0]">
                            <i class="icofont-linkedin text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/kinlink.naye/" target="_blank" class="hover:text-[#00CDB0]">
                            <i class="icofont-instagram text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Challenges -->
                <div class="flex flex-col gap-4 border-gray-600 lg:border-r">
                    <h3 class="text-lg font-semibold text-white">Challenges</h3>
                    <div class="flex gap-4 items-center">
                        <div class="bg-white rounded-full p-2">
                            <img
                                src="/assets/img/banner/tortue.png"
                                alt="Tortue"
                                class="h-14 w-14 object-contain"
                            />
                        </div>
                        <p class="text-sm leading-snug">
                            Bientôt vous pourriez dévoiler votre talent numérique en vous exprimant et en gagnant des prix.
                        </p>
                    </div>
                </div>

                <!-- Liens rapides -->
                <div class="flex flex-col gap-4 border-gray-600 lg:border-r">
                    <h3 class="text-lg font-semibold text-white">Liens rapides</h3>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="/about" class="hover:text-[#00CDB0] flex items-center gap-2">
                                <i class="icofont-simple-right"></i> Qui sommes-nous ?
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#00CDB0] flex items-center gap-2">
                                <i class="icofont-simple-right"></i> Investisseurs & Partenaires
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#00CDB0] flex items-center gap-2">
                                <i class="icofont-simple-right"></i> Politique de confidentialité
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#00CDB0] flex items-center gap-2">
                                <i class="icofont-simple-right"></i> Termes et conditions
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#00CDB0] flex items-center gap-2">
                                <i class="icofont-simple-right"></i> Plan du site
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="flex flex-col gap-4">
                    <h3 class="text-lg font-semibold text-white">Contact info</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="icofont-location-pin text-[#00CDB0]"></i>
                            <span>Kinshasa, RDC</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="icofont-ui-call text-[#00CDB0]"></i>
                            <a href="tel:+33646712161" class="hover:text-[#00CDB0]">+33 6 46 71 21 61</a>
                        </li>
                    </ul>
                    <a
                        href="/contact"
                        class="mt-3 inline-block bg-[#00CDB0] hover:bg-[#00bda5] text-white text-sm font-semibold px-5 py-2 rounded-lg transition-all duration-300 w-fit"
                    >
                        Contactez-nous
                    </a>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center text-gray-400 text-sm mt-8">
                <p>
                    © {{ new Date().getFullYear() }}
                    <a href="/" class="text-[#00CDB0] hover:underline font-medium">
                        Kinlink Naye
                    </a>
                </p>
            </div>
        </div>
    </footer>
</template>

<script setup>
// Aucun script requis ici
</script>
