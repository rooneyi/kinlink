<script setup lang="ts">
import RegisteredUserController from '@/actions/App/Http/Controllers/Auth/RegisteredUserController';
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Form } from '@inertiajs/vue3';
import { ref } from 'vue';
import { login } from '@/routes';

const strength = ref(0);
const strengthClass = ref('bg-gray-200');
function updateStrength(e) {
  const v = e.target.value || '';
  let score = 0;
  if (v.length >= 6) score++;
  if (/[A-Z]/.test(v)) score++;
  if (/[0-9]/.test(v)) score++;
  if (/[^A-Za-z0-9]/.test(v)) score++;
  strength.value = score;
  if (score === 1) strengthClass.value = 'bg-red-400';
  else if (score === 2) strengthClass.value = 'bg-orange-400';
  else if (score === 3) strengthClass.value = 'bg-yellow-400';
  else if (score === 4) strengthClass.value = 'bg-green-400';
  else strengthClass.value = 'bg-gray-200';
}
</script>

<template>
  <main class="flex items-center justify-center min-h-screen bg-gray-50 py-10 px-4">
    <div class="w-full max-w-5xl bg-white border border-gray-200 rounded-2xl shadow-xl flex overflow-hidden animate-fade-in">
      <!-- Image & texte à gauche -->
      <div class="hidden md:flex flex-col justify-center items-center bg-gradient-to-br from-blue-500 to-blue-700 text-white px-12 py-10 w-2/5">
        <div class="flex items-center justify-center w-20 h-20 rounded-xl bg-white/20 mb-6 backdrop-blur">
          <i class="fas fa-user-plus text-4xl"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2">Rejoignez l'écosystème</h2>
        <p class="text-base opacity-90 max-w-xs text-center">Créez votre compte pour accéder aux opportunités, formations, missions et à la communauté NAYE.</p>
      </div>
      <!-- Formulaire à droite -->
      <div class="flex-1 px-8 py-10">
        <div class="mb-8">
          <h2 class="text-2xl font-bold mb-2">Inscription</h2>
          <p class="text-gray-600">Complétez les informations requises ci-dessous.</p>
        </div>
        <Form
          v-bind="RegisteredUserController.store.form()"
          :reset-on-success="['password', 'password_confirmation']"
          v-slot="{ errors, processing }"
          class="space-y-6"
        >
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col">
              <Label for="email" class="font-semibold mb-1">Adresse e-mail</Label>
              <Input
                id="email"
                type="email"
                required
                autocomplete="email"
                name="email"
                placeholder="Adresse e-mail"
                class="form-control"
              />
              <InputError :message="errors.email" />
            </div>
            <div class="flex flex-col">
              <Label for="name" class="font-semibold mb-1">Nom d'utilisateur</Label>
              <Input
                id="name"
                type="text"
                required
                autocomplete="name"
                name="name"
                placeholder="Nom d'utilisateur"
                class="form-control"
              />
              <InputError :message="errors.name" />
            </div>
            <div class="flex flex-col">
              <Label for="firstName" class="font-semibold mb-1">Prénom</Label>
              <Input
                id="firstName"
                type="text"
                required
                name="firstName"
                placeholder="Prénom"
                class="form-control"
              />
              <InputError :message="errors.firstName" />
            </div>
            <div class="flex flex-col">
              <Label for="phone" class="font-semibold mb-1">Numéro de téléphone</Label>
              <Input
                id="phone"
                type="tel"
                required
                name="phone"
                placeholder="Numéro de téléphone"
                class="form-control"
              />
              <InputError :message="errors.phone" />
            </div>
          </div>
          <div class="section-title-inline text-blue-600 font-bold flex items-center gap-2 mt-8 mb-2">
            <span class="inline-block w-8 h-1 rounded bg-gradient-to-r from-blue-500 to-blue-700"></span>
            Sécurité
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col">
              <Label for="password" class="font-semibold mb-1">Mot de passe</Label>
              <Input
                id="password"
                type="password"
                required
                name="password"
                placeholder="Mot de passe"
                class="form-control"
                @input="updateStrength"
              />
              <div class="h-2 rounded bg-gray-200 mt-2 transition-all" :class="strengthClass" />
              <InputError :message="errors.password" />
            </div>
            <div class="flex flex-col">
              <Label for="password_confirmation" class="font-semibold mb-1">Confirmer le mot de passe</Label>
              <Input
                id="password_confirmation"
                type="password"
                required
                name="password_confirmation"
                placeholder="Confirmer le mot de passe"
                class="form-control"
              />
              <InputError :message="errors.password_confirmation" />
            </div>
          </div>
          <div class="section-title-inline text-blue-600 font-bold flex items-center gap-2 mt-8 mb-2">
            <span class="inline-block w-8 h-1 rounded bg-gradient-to-r from-blue-500 to-blue-700"></span>
            Localisation
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col">
              <Label for="city" class="font-semibold mb-1">Ville</Label>
              <Input
                id="city"
                type="text"
                required
                name="city"
                placeholder="Ville"
                class="form-control"
              />
              <InputError :message="errors.city" />
            </div>
            <div class="flex flex-col">
              <Label for="country" class="font-semibold mb-1">Pays</Label>
              <Input
                id="country"
                type="text"
                required
                name="country"
                placeholder="Pays"
                class="form-control"
              />
              <InputError :message="errors.country" />
            </div>
            <div class="flex flex-col md:col-span-2">
              <Label for="address" class="font-semibold mb-1">Adresse</Label>
              <Input
                id="address"
                type="text"
                required
                name="address"
                placeholder="Adresse (ligne 1)"
                class="form-control"
              />
              <InputError :message="errors.address" />
            </div>
            <div class="flex flex-col md:col-span-2">
              <Input
                id="address2"
                type="text"
                name="address2"
                placeholder="Complément d'adresse (facultatif)"
                class="form-control"
              />
              <InputError :message="errors.address2" />
            </div>
          </div>
          <div class="flex items-start gap-3 mt-6">
            <input type="checkbox" id="agreeTerms" name="agreeTerms" class="mt-1" required />
            <Label for="agreeTerms" class="text-sm">J'accepte les conditions d'utilisation</Label>
          </div>
          <div class="mt-8">
            <Button type="submit" class="btn-primary w-full flex items-center justify-center gap-2">
              Créer mon compte <i class="fas fa-arrow-right"></i>
            </Button>
          </div>
          <div class="mt-6 text-center text-gray-600">
            Déjà un compte ?
            <TextLink :href="login.url()" class="text-blue-600 font-semibold">Se connecter</TextLink>
          </div>
        </Form>
      </div>
    </div>
  </main>
</template>
