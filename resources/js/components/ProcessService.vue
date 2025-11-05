<template>
    <section ref="sectionRef" class="py-20  bg-gray-50 relative overflow-hidden">
      <!-- Fond décoratif subtil -->
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(59,130,246,0.08),transparent_60%)]"></div>
  
      <div class="max-w-6xl mx-auto px-6 relative z-10">
        <!-- Header -->
        <div
          class="text-center mb-16 opacity-0 transform translate-y-10 transition-all duration-700"
          :class="{ 'animate-fadeInUp': visible }"
        >
          <h2 class="text-4xl font-bold text-gray-900">
            Nos <span class="text-teal-600">services</span>
          </h2>
          <p class="text-gray-600 mt-3 text-lg max-w-2xl mx-auto">
            Découvrez nos solutions pensées pour stimuler l’innovation, la collaboration et la croissance professionnelle.
          </p>
        </div>
  
        <!-- Services Rows -->
        <div class="space-y-20 mr-20 ml-20">
          <div
            v-for="(item, index) in services"
            :key="index"
            class="flex flex-col md:flex-row items-center gap-10 md:gap-16"
            :class="[
              index % 2 === 1 ? 'md:flex-row-reverse' : '',
              visible ? 'animate-fadeInUp' : 'opacity-0 translate-y-10'
            ]"
            :style="{ transitionDelay: `${0.1 + index * 0.08}s` }"
          >
            <!-- Image -->
            <div class="w-full md:w-1/2 relative group">
              <img
                :src="item.img"
                :alt="item.title"
                class="w-full h-72 object-cover rounded-3xl shadow-xl transition-transform duration-500 group-hover:scale-105"
              />
  
              <!-- ✅ Légère superposition dégradée -->
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
              ></div>
  
              <!-- ✅ Badge flottant -->
              <div
                class="absolute top-4 left-4 bg-white/90 text-gray-800 text-sm font-semibold px-3 py-1.5 rounded-full shadow-md flex items-center gap-2 backdrop-blur-sm"
              >
                <i :class="item.icon + ' text-blue-600'"></i>
                <span>{{ item.badge }}</span>
              </div>
            </div>
  
            <!-- Contenu -->
            <div class="w-full md:w-1/2 space-y-4">
              <h3 class="text-2xl font-bold text-gray-900">
                {{ item.title }}
              </h3>
  
              <p
                class="text-gray-700 leading-relaxed"
                v-html="item.description"
              ></p>
  
              <button
                class="mt-3 inline-flex items-center gap-2 px-5 py-2.5 bg-teal-500 text-white rounded-full font-medium shadow-md hover:bg-blue-700 transition-all"
              >
                <i class="fa fa-arrow-right"></i>
                En savoir plus
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script setup>
  import { ref, onMounted } from "vue";
  
  const sectionRef = ref(null);
  const visible = ref(false);
  
  const services = [
    {
      badge: "Pro",
      title: "Recrutement",
      description:
        "Trouvez ici des profils professionnels qualifiés et expérimentés, des passionnés, pour réaliser vos missions dans le digital et le management de projet.",
      icon: "fas fa-user-tie",
      img: "/assets/img/services/design-graphique.jpg",
    },
    {
      badge: "Skills",
      title: "Développement",
      description:
        "Bénéficiez de nos formations, de notre réseau de mentoring ainsi que de divers outils pour développer vos compétences et qualifications. Boostez votre savoir-être et savoir-faire !",
      icon: "fas fa-laptop-code",
      img: "/assets/img/services/it.jpg",
    },
    {
      badge: "Expert",
      title: "Accompagnement",
      description:
        "Augmentez votre chiffre d'affaires et vos parts de marchés avec les conseils de nos experts Innovation, Industrie, IT et Stratégie business.",
      icon: "fas fa-user-graduate",
      img: "/assets/img/services/programmation.jpg",
    },
    {
      badge: "Plus",
      title: "Collaboration",
      description:
        "Échangez avec vos pairs et trouvez facilement des collaborateurs, partenaires, équipiers, associés ou simplement des contacts de domaine et d'horizon divers et varié.",
      icon: "fas fa-users",
      img: "/assets/img/services/communication.jpg",
    },
  ];
  
  onMounted(() => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            visible.value = true;
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.2 }
    );
  
    if (sectionRef.value) observer.observe(sectionRef.value);
  });
  </script>
  
  <style scoped>
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(40px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .animate-fadeInUp {
    animation: fadeInUp 0.8s ease-out forwards;
  }
  
  /* ✅ Petites animations subtiles */
  button {
    transform: translateY(0);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  button:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(37, 99, 235, 0.3);
  }
  </style>
  