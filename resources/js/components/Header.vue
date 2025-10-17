<template>
    <header>
        <!-- Top Header -->
        <div class="bg-[#0B2A35] text-white py-2">
            <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-4">
                <div class="flex items-center space-x-4">
                    <a href="/about" class="bg-[#00CDB0] text-white px-3 py-1 rounded text-sm hover:bg-[#00b39c]">
                        Qui sommes-nous ?
                    </a>
                </div>
                <div class="flex items-center space-x-3 mt-2 md:mt-0">
                    <span class="text-sm">Suivez-nous :</span>
                    <a href="https://facebook.com/KinLinkNaye" target="_blank"><i class="icofont-facebook"></i></a>
                    <a href="https://twitter.com/KinlinkNaye" target="_blank"><i class="icofont-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/kinlink-naye" target="_blank"><i class="icofont-linkedin"></i></a>
                    <a href="https://www.instagram.com/kinlink.naye/" target="_blank"><i class="icofont-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="bg-white shadow sticky top-0 z-50">
            <div class="container mx-auto flex justify-between items-center px-4 py-3">
                <a href="/" class="flex items-center">
                    <img src="/assets/img/logo-principal.png" alt="Logo" class="h-10" />
                </a>

                <ul class="hidden md:flex items-center space-x-6 text-gray-700">
                    <li><a href="/" class="hover:text-[#00CDB0]">Accueil</a></li>

                    <li class="relative group">
                        <a href="#" class="flex items-center hover:text-[#00CDB0]">
                            Naye Business <i class="icofont-simple-down ml-1"></i>
                        </a>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-2 w-56">
                            <li><a href="/search-profil" class="block px-4 py-2 hover:bg-gray-100">Trouver un professionnel</a></li>
                            <li><a href="/missions" class="block px-4 py-2 hover:bg-gray-100">Soumettre une mission</a></li>
                            <li><a href="/community" class="block px-4 py-2 hover:bg-gray-100">Communauté d'entreprises</a></li>
                            <li><a href="/abonnement-business" class="block px-4 py-2 hover:bg-gray-100">S'abonner</a></li>
                        </ul>
                    </li>

                    <li><a href="/trainings" class="hover:text-[#00CDB0]">Formations</a></li>
                    <li><a href="/community" class="hover:text-[#00CDB0]">Communautés</a></li>
                    <li><a href="/wenze" class="hover:text-[#00CDB0]">Wenze E-Market</a></li>
                </ul>

                <!-- Right: Auth Buttons -->
                <div class="flex items-center space-x-3">
                    <a href="/register" class="border border-[#00CDB0] text-[#00CDB0] px-3 py-1 rounded hover:bg-[#00CDB0] hover:text-white transition">
                        M'inscrire
                    </a>
                    <a href="/login" class="bg-[#00CDB0] text-white px-3 py-1 rounded hover:bg-[#00b39c] transition">
                        Me connecter
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden" @click="toggleMenu">
                    <i class="icofont-navigation-menu text-2xl text-gray-700"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div v-if="mobileOpen" class="bg-white md:hidden shadow-md">
                <ul class="flex flex-col p-4 space-y-3">
                    <li><a href="/" class="hover:text-[#00CDB0]">Accueil</a></li>
                    <li><a href="/search-profil" class="hover:text-[#00CDB0]">Trouver un professionnel</a></li>
                    <li><a href="/trainings" class="hover:text-[#00CDB0]">Formations</a></li>
                    <li><a href="/community" class="hover:text-[#00CDB0]">Communautés</a></li>
                    <li><a href="/wenze" class="hover:text-[#00CDB0]">Wenze E-Market</a></li>
                </ul>
            </div>
        </nav>
    </header>
</template>

<script setup>
import { ref } from 'vue'
const mobileOpen = ref(false)
const toggleMenu = () => (mobileOpen.value = !mobileOpen.value)
</script>
