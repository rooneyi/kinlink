<template>
    <main class="relative bg-[#f8faff] overflow-x-hidden font-inter">
        <!-- Quadrillage Vercel-like -->
        <div class="fixed inset-0 bg-[length:50px_50px] bg-center bg-[linear-gradient(to_right,rgba(0,0,0,0.03)_1px,transparent_1px),linear-gradient(to_bottom,rgba(0,0,0,0.03)_1px,transparent_1px)] pointer-events-none"></div>

        <!-- Section Hero -->
        <section class="relative z-10 py-28 md:py-36 text-center">
            <div class="max-w-5xl mx-auto px-6">
                <div class="inline-flex items-center gap-2 border border-gray-200 px-5 py-2 rounded-full shadow-sm bg-white/80 backdrop-blur-md mb-6 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                    <i class="fa-solid fa-crown text-blue-600"></i>
                    <span>Naye Pro</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold mb-4 leading-tight text-gray-900">
                    Abonnez-vous et profitez des
                    <span class="text-blue-600">opportunités</span> du digital !
                </h1>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Naye Business vous donne accès à de multiples opportunités dans différents domaines du digital.
                </p>
            </div>
        </section>

        <!-- Section Offres -->
        <section class="relative z-10 py-16 border-y border-gray-200 bg-white/90 backdrop-blur-md shadow-sm">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        Profitez de nos <span class="text-blue-600">offres</span> !
                    </h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Choisissez la formule qui correspond à vos besoins et accédez à tous les avantages Naye Pro.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Offre Moko -->
                    <div class="p-8 border border-gray-200 rounded-2xl bg-white shadow-sm hover:-translate-y-2 hover:shadow-lg transition">
                        <div class="flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-blue-50 border border-blue-100">
                            <i class="fa-solid fa-bolt text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">
                            <i class="fa-solid fa-bolt text-yellow-600 mr-2"></i>Offre Naye Moko
                        </h3>
                        <div class="inline-flex items-center gap-2 bg-yellow-100 border border-yellow-300 text-yellow-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                            <i class="fa-solid fa-coins"></i> 8$ = 165 Crédits
                        </div>
                        <p class="text-gray-600 mb-5 text-sm leading-relaxed">
                            <i class="fa-solid fa-hourglass-half text-yellow-600 mr-1"></i>La consommation dépend de vous.
                            (<i class="fa-solid fa-coins text-yellow-600"></i> 1 crédit =
                            <i class="fa-solid fa-clock text-yellow-600"></i> 1h de connexion)
                        </p>
                        <RouterLink to="/login" class="btn-primary">S’abonner</RouterLink>
                    </div>

                    <!-- Offre Illimitée -->
                    <div class="p-8 border border-gray-200 rounded-2xl bg-white shadow-sm hover:-translate-y-2 hover:shadow-lg transition">
                        <div class="flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-blue-50 border border-blue-100">
                            <i class="fa-solid fa-infinity text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">
                            <i class="fa-solid fa-infinity text-blue-600 mr-2"></i>Offre Naye Illimité
                        </h3>
                        <div class="inline-flex items-center gap-2 bg-blue-100 border border-blue-300 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                            <i class="fa-solid fa-infinity"></i> 5$ / Mois = Accès illimité
                        </div>
                        <p class="text-gray-600 mb-5 text-sm leading-relaxed">
                            <i class="fa-solid fa-pause-circle text-blue-600 mr-1"></i>Peut être mise en standby à volonté.
                        </p>
                        <button class="btn-primary">S’abonner</button>
                    </div>

                    <!-- Offre Essai -->
                    <div class="p-8 border border-gray-200 rounded-2xl bg-white shadow-sm hover:-translate-y-2 hover:shadow-lg transition">
                        <div class="flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-green-50 border border-green-100">
                            <i class="fa-solid fa-gift text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">
                            <i class="fa-solid fa-gift text-green-600 mr-2"></i>1 Mois d’essai gratuit !
                        </h3>
                        <div class="inline-flex items-center gap-2 bg-green-100 border border-green-300 text-green-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                            <i class="fa-solid fa-gift"></i> Essai gratuit
                        </div>
                        <p class="text-gray-600 mb-5 text-sm leading-relaxed">
                            <i class="fa-solid fa-check-circle text-green-600 mr-1"></i>Profitez des services Naye Pro pendant un mois gratuitement.
                        </p>
                        <button class="btn-outline">
                            Profiter de l’offre <i class="fa-solid fa-gift ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>

<script setup>
</script>

<style scoped>
.btn-primary {
    @apply inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-full shadow-md hover:bg-blue-700 hover:-translate-y-1 transition;
}

.btn-outline {
    @apply inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-gray-700 rounded-full font-semibold hover:text-blue-600 hover:border-blue-400 transition;
}
</style>
