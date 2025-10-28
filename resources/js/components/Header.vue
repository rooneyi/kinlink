<template>
    <header>
        <!-- Top Header -->
        <div class="bg-[#0B2A35] text-white py-2">
            <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-4">
                <div class="flex items-center space-x-4">
                    <Link href="/about" class="bg-[#00CDB0] text-white px-3 py-1 rounded text-sm hover:bg-[#00b39c]">
                        Qui sommes-nous ?
                    </Link>
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
                <Link href="/" class="flex items-center">
                    <img src="/assets/img/logo-principal.png" alt="Logo" class="h-10" />
                </Link>

                <!-- Desktop Menu -->
                <ul class="hidden md:flex items-center space-x-6 text-gray-700">
                    <li><Link href="/" class="hover:text-[#00CDB0]">Accueil</Link></li>

                    <!-- Naye Business Dropdown -->
                    <li class="relative" @mouseenter="isOpen = true" @mouseleave="isOpen = false">
                        <span class="flex items-center hover:text-[#00CDB0] cursor-pointer">
                            Naye Business
                            <i class="icofont-simple-down ml-1"></i>
                        </span>
                        <ul
                            v-show="isOpen"
                            class="absolute bg-white shadow-lg rounded-md mt-2 w-56 transition-all"
                        >
                            <li>
                                <Link href="/search-profil" class="block px-4 py-2 hover:bg-gray-100">
                                    Rechercher un profil
                                </Link>
                            </li>
                            <li>
                                <Link href="/missions" class="block px-4 py-2 hover:bg-gray-100">
                                    Missions
                                </Link>
                            </li>
                            <li>
                                <Link href="/abonnement-business" class="block px-4 py-2 hover:bg-gray-100">
                                    Abonnement Business
                                </Link>
                            </li>
                        </ul>
                    </li>

                    <li><Link href="/community" class="hover:text-[#00CDB0]">Naye Community</Link></li>
                    <li><Link href="/naye-pro" class="hover:text-[#00CDB0]">Naye Pro</Link></li>
                    <li><Link href="/wenze" class="hover:text-[#00CDB0]">Wenze E-market</Link></li>

                    <!-- Boutons conditionnels -->
                    <template v-if="!user">
                        <li><Link href="/login" class="hover:text-[#00CDB0]">Log in</Link></li>
                        <li><Link href="/register" class="hover:text-[#00CDB0]">Register</Link></li>
                    </template>
                    <template v-else>
                        <li>
                            <button @click="logout" class="hover:text-[#00CDB0] font-semibold">
                                Déconnexion
                            </button>
                        </li>
                    </template>
                </ul>
            </div>
        </nav>
    </header>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    user: {
        type: Object,
        default: null
    }
});

const isOpen = ref(false);

// Fonction de déconnexion
const logout = () => {
    // Appel API ou route Inertia pour déconnexion
    console.log('Déconnexion...');
    // Ici, il faudra déclencher la vraie déconnexion côté serveur
};
</script>
