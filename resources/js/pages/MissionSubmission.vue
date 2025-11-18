<template>
  <div>
    <h1>Mission Submission Page</h1>

    <!-- Liste des missions disponibles -->
    <section>
      <h2>Missions Disponibles</h2>
      <ul>
        <li v-for="mission in missions" :key="mission.id">
          <h3>{{ mission.title }}</h3>
          <p>{{ mission.description }}</p>
          <p><strong>Deadline:</strong> {{ mission.deadline }}</p>
        </li>
      </ul>
    </section>

    <!-- Formulaire de soumission -->
    <form @submit.prevent="submitMission">
      <div>
        <label for="missionTitle">Titre de la mission</label>
        <input id="missionTitle" v-model="mission.title" type="text" required />
      </div>
      <div>
        <label for="missionDescription">Description</label>
        <textarea id="missionDescription" v-model="mission.description" required></textarea>
      </div>
      <div>
        <label for="missionDeadline">Date limite</label>
        <input id="missionDeadline" v-model="mission.deadline" type="date" required />
      </div>
      <button type="submit">Soumettre</button>
    </form>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const missions = ref([
  { id: 1, title: 'Mission 1', description: 'Description de la mission 1', deadline: '2025-12-01' },
  { id: 2, title: 'Mission 2', description: 'Description de la mission 2', deadline: '2025-12-15' },
  { id: 3, title: 'Mission 3', description: 'Description de la mission 3', deadline: '2025-12-31' },
]);

const mission = ref({
  title: '',
  description: '',
  deadline: ''
});

const submitMission = () => {
  console.log('Mission soumise :', mission.value);
  // Ajoutez ici la logique pour envoyer les données au serveur
};
</script>

<style scoped>
/* Ajoutez vos styles ici */
</style>
