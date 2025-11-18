<template>
  <div>
    <h1>Mission Submission Page</h1>
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
