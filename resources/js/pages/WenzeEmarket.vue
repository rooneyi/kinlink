<script setup>
import Header from '@/components/Header.vue'
import Footer from '@/components/Footer.vue'
import ProductCard from '@/components/ProductCard.vue'
import PartnerCard from '@/components/PartnerCard.vue'
import Badge from '@/components/ui/Badge.vue'
import Button from '@/components/ui/button/Button.vue'
import { onMounted, ref } from 'vue'

const visibleSections = ref({
  hero: false,
  products: false,
  partners: false,
})

onMounted(() => {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          visibleSections.value[entry.target.id] = true
        }
      })
    },
    { threshold: 0.2 }
  )

  document.querySelectorAll('section').forEach((section) => observer.observe(section))
})
</script>

<template>
  <div class="min-h-screen bg-[#f8faff] text-[#212121] font-inter">
    <!-- Header -->
    <Header :user="$page.props.auth.user" />

    <!-- 🌟 Hero Section -->
    <section
      id="hero"
      class="relative overflow-hidden py-24 bg-gradient-to-br from-blue-50 via-white to-indigo-50"
    >
      <!-- Déco gradient / bulle -->
      <div
        class="absolute top-[-100px] right-[-100px] w-[400px] h-[400px] bg-blue-200 rounded-full blur-3xl opacity-40"
      ></div>
      <div
        class="absolute bottom-[-120px] left-[-80px] w-[300px] h-[300px] bg-indigo-300 rounded-full blur-3xl opacity-30"
      ></div>

      <div
        class="container mx-auto flex flex-col lg:flex-row items-center gap-12 relative z-10"
        :class="visibleSections.hero ? 'animate-fadeInUp' : 'opacity-0 translate-y-10'"
      >
        <!-- Texte -->
        <div class="lg:w-1/2 text-center lg:text-left space-y-6">
          <h1 class="text-5xl font-extrabold text-[#1e293b] leading-tight">
            Achetez tout ce dont <br />
            <span class="text-teal-600">vous avez besoin</span>
          </h1>
          <p class="text-[#475569] text-lg max-w-md mx-auto lg:mx-0">
            Découvrez notre sélection de produits et services de qualité pour les professionnels du digital.
          </p>
          <div class="flex flex-wrap gap-4 justify-center lg:justify-start group/buttons">
            <Button href="#products" class="peer/btn1 border-teal-600 rounded-full hover:bg-teal-600 hover:text-white transition-all duration-300 ease-in-out peer-hover/btn2:bg-white peer-hover/btn2:text-teal-600">Voir nos produits</Button>
            <Button href="#partners" class="peer/btn2 bg-teal-600 rounded-full hover:bg-teal-700 text-white transition-all duration-300 ease-in-out peer-hover/btn1:bg-white peer-hover/btn1:text-teal-600 peer-hover/btn1:border peer-hover/btn1:border-teal-600">Produits partenaires</Button>
          </div>
        </div>

        <!-- Image animée -->
        <div
          class="lg:w-[75%] relative group"
        >
          <img
            src="/assets/images/ecommerce.jpeg"
            alt="Boutique Wenze"
            class="rounded-[2rem] shadow-2xl w-full h-1/2 transition-transform duration-700 group-hover:scale-105 group-hover:rotate-1 animate-float"
          />
          <div
            class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent rounded-[2rem] opacity-0 group-hover:opacity-100 transition-opacity"
          ></div>
        </div>
      </div>
    </section>

<!-- 🛍️ Products Section -->
<section id="products" class="py-24 bg-[#f8fafc] relative overflow-hidden">
  <!-- décoratif gradient -->
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(59,130,246,0.06),transparent_60%)]"></div>

  <div
    class="container mx-auto space-y-12 text-center relative z-10"
    :class="visibleSections.products ? 'animate-fadeInUp' : 'opacity-0 translate-y-10'"
  >
    <div class="space-y-3">
      <Badge color="blue">Nos offres</Badge>
      <h2 class="text-4xl font-bold text-[#1e293b]">Nos produits et services</h2>
      <p class="text-[#64748b] max-w-xl mx-auto">
        Découvrez notre catalogue complet de produits et services spécialement conçus pour les professionnels du digital.
      </p>
    </div>

    <!-- Cards -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">
      <div
        v-for="(item, i) in [
          { 
            icon: 'fa-laptop',
            title: 'Matériel informatique',
            desc: 'Ordinateurs, accessoires et équipements professionnels.',
            colors: ['#3b82f6', '#e0f2fe', '#3b82f6'],
            image: '/assets/images/materielInformatique.jpeg'
          },
          {
            icon: 'fa-headset',
            title: 'Services professionnels',
            desc: 'Hébergement, noms de domaine et services web.',
            colors: ['#10b981', '#d1fae5', '#10b981'],
            image: '/assets/images/servicepro.jpeg'
          },
          {
            icon: 'fa-mobile-alt',
            title: 'Accessoires mobiles',
            desc: 'Téléphones, tablettes et accessoires récents.',
            colors: ['#8b5cf6', '#ede9fe', '#8b5cf6'],
            image: '/assets/images/accessoire.jpeg'
          },
          {
            icon: 'fa-book',
            title: 'Formations & Ressources',
            desc: 'Cours et livres pour améliorer vos compétences.',
            colors: ['#ec4899', '#fce7f3', '#ec4899'],
            image: '/assets/images/formation.jpeg'
          }
        ]"
        :key="i"
        class="transform transition-all hover:-translate-y-2 hover:scale-[1.02]"
      >
        <ProductCard
          :image="item.image"
          :icon="item.icon"
          :title="item.title"
          :description="item.desc"
          :borderColor="item.colors[0]"
          :iconBg="item.colors[1]"
          :iconColor="item.colors[2]"
        />
      </div>
    </div>
  </div>
</section>


    <!-- 🤝 Partners Section -->
    <section id="partners" class="py-24 bg-white relative overflow-hidden">
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(139,92,246,0.05),transparent_60%)]"></div>

      <div
        class="container mx-auto space-y-12 text-center relative z-10"
        :class="visibleSections.partners ? 'animate-fadeInUp' : 'opacity-0 translate-y-10'"
      >
        <div class="space-y-3">
          <Badge color="green">Nos partenaires</Badge>
          <h2 class="text-4xl font-bold text-[#1e293b]">Produits de nos partenaires</h2>
          <p class="text-[#64748b] max-w-xl mx-auto">
            Découvrez les produits exclusifs proposés par nos partenaires stratégiques.
          </p>
        </div>

        <div class="grid md:grid-cols-2 gap-10">
          <div class="transition-transform hover:-translate-y-2 hover:scale-[1.02]">
            <PartnerCard
              title="Produits Premium"
              description="Sélection de produits haut de gamme issus de nos collaborations."
              borderColor="#f59e0b"
              icon="fa-star"
              iconBg="#fef3c7"
              iconColor="#f59e0b"
            />
          </div>
          <div class="transition-transform hover:-translate-y-2 hover:scale-[1.02]">
            <PartnerCard
              title="Solutions Professionnelles"
              description="Solutions métiers et services experts pour les entreprises modernes."
              borderColor="#8b5cf6"
              icon="fa-certificate"
              iconBg="#ede9fe"
              iconColor="#8b5cf6"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <Footer />
  </div>
</template>

<style scoped>
@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(40px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.animate-fadeInUp {
  animation: fadeInUp 1s ease-out forwards;
}

/* Animation de flottement lent */
@keyframes float {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
}
.animate-float {
  animation: float 4s ease-in-out infinite;
}
</style>
