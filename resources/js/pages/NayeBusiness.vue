<script setup>
const features = [
    {
        icon: 'fa-chart-line',
        title: 'Analyse financière',
        desc: 'Suivez vos revenus, dépenses et marges avec précision.'
    },
    {
        icon: 'fa-file-invoice-dollar',
        title: 'Facturation rapide',
        desc: 'Créez et envoyez vos factures en quelques clics.'
    },
    {
        icon: 'fa-lock',
        title: 'Sécurité maximale',
        desc: 'Vos données sont protégées par un chiffrement de haut niveau.'
    }
]

const stats = [
    { icon: 'fa-users', label: '10,000+ Utilisateurs' },
    { icon: 'fa-globe', label: '25 Pays' },
    { icon: 'fa-building', label: '1,500+ Entreprises' },
    { icon: 'fa-trophy', label: 'Prix Innovation 2025' }
]
</script>
<template>


    <main class="relative z-10 bg-gradient-to-b from-gray-50 to-white overflow-hidden">
        <!-- Section Hero -->
        <section class="text-center py-24 px-6">
            <div class="max-w-4xl mx-auto">
        <span
            class="inline-flex items-center text-sm font-semibold text-blue-600 bg-blue-100 px-3 py-1 rounded-full mb-6 uppercase"
        >
          <i class="fa fa-bolt mr-2"></i> Nos solutions
        </span>

                <h1
                    class="text-4xl md:text-6xl font-extrabold tracking-tight text-gray-900 mb-4"
                >
                    Simplifiez votre
                    <span class="text-blue-600">comptabilité</span>
                </h1>

                <p class="text-gray-600 text-lg md:text-xl mb-8">
                    Découvrez nos solutions modernes pour une gestion financière claire,
                    rapide et efficace.
                </p>

                <div class="flex flex-wrap justify-center gap-4">
                    <a
                        href="#"
                        class="inline-flex items-center justify-center bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transform hover:-translate-y-1 transition-all duration-300"
                    >
                        <i class="fa fa-play mr-2"></i> Commencer
                    </a>
                    <a
                        href="#"
                        class="inline-flex items-center justify-center border border-gray-300 text-gray-800 px-6 py-3 rounded-full font-semibold hover:border-blue-500 hover:text-blue-600 hover:bg-blue-50 transform hover:-translate-y-1 transition-all duration-300"
                    >
                        <i class="fa fa-info-circle mr-2"></i> En savoir plus
                    </a>
                </div>
            </div>
        </section>

        <!-- Séparateur -->
        <div class="w-11/12 mx-auto border-t border-gray-200 my-12"></div>

        <!-- Section Fonctionnalités -->
        <section class="py-20 bg-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Nos <span class="text-blue-600">fonctionnalités</span>
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto mb-12">
                    Des outils puissants et simples à utiliser pour automatiser vos
                    opérations comptables.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        v-for="(feature, index) in features"
                        :key="index"
                        class="group relative bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 overflow-hidden"
                    >
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-500 via-indigo-500 to-blue-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"
                        ></div>

                        <div class="flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 flex items-center justify-center bg-blue-50 border border-blue-100 rounded-xl mb-6"
                            >
                                <i :class="['fa', feature.icon, 'text-2xl text-blue-600']"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">
                                {{ feature.title }}
                            </h3>
                            <p class="text-gray-600 mb-4">{{ feature.desc }}</p>
                            <a
                                href="#"
                                class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-all"
                            >
                                Découvrir <i class="fa fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Statistiques défilantes -->
        <section class="py-10 bg-blue-50 overflow-hidden">
            <div class="animate-scroll flex gap-12 whitespace-nowrap px-10">
                <div
                    v-for="(stat, index) in stats"
                    :key="index"
                    class="flex items-center gap-3 text-blue-800 text-lg font-semibold"
                >
                    <i :class="['fa', stat.icon, 'text-blue-600']"></i>
                    <span>{{ stat.label }}</span>
                </div>
            </div>
        </section>
    </main>
</template>



<style scoped>
@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}
.animate-scroll {
    animation: scroll 30s linear infinite;
}
</style>

<Header :user="$page.props.auth.user" />
