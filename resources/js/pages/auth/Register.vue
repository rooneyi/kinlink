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
import { LoaderCircle, Mail, Lock, Eye, EyeOff } from 'lucide-vue-next';

const strength = ref(0);
const strengthClass = ref('bg-gray-200');
const strengthWidth = ref('0%');
const showPassword = ref(false);
const showConfirm = ref(false);
function updateStrength(e) {
  const v = e.target.value || '';
  const len = v.length;
  strength.value = len;
  if (len === 0) {
    strengthClass.value = 'bg-gray-200';
    strengthWidth.value = '0%';
  } else if (len <= 2) {
    strengthClass.value = 'bg-red-500';
    strengthWidth.value = '25%';
  } else if (len <= 5) {
    strengthClass.value = 'bg-yellow-400';
    strengthWidth.value = '50%';
  } else {
    strengthClass.value = 'bg-green-500';
    strengthWidth.value = '100%';
  }
}
</script>

<template>
  <main class="relative flex items-center justify-center min-h-screen bg-gray-50 py-10 px-4">
    <!-- Subtle background pattern to match Login -->
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-teal-50 via-transparent to-transparent"></div>
    <div class="relative w-full max-w-5xl bg-white border border-gray-100 rounded-3xl shadow-2xl flex overflow-hidden animate-fade-in">
      <!-- Image & texte à gauche -->
      <div class="hidden md:flex flex-col justify-center items-center bg-gradient-to-br from-teal-600 to-teal-800 text-white px-12 py-10 w-2/5">
        <div class="flex items-center justify-center w-20 h-20 rounded-xl bg-white/20 mb-6 backdrop-blur">
          <i class="fas fa-user-plus text-4xl"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2">Rejoignez l'écosystème</h2>
        <p class="text-base opacity-90 max-w-xs text-center">Créez votre compte pour accéder aux opportunités, formations, missions et à la communauté NAYE.</p>
      </div>
      <!-- Formulaire à droite -->
      <div class="flex-1 px-8 py-10">
        <div class="mb-8">
          <h2 class="text-2xl font-bold mb-2 text-gray-500">Inscription !</h2>
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
              <div class="relative">
                <Mail class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400" />
                <Input
                  id="email"
                  type="email"
                  required
                  autocomplete="email"
                  name="email"
                  placeholder="Adresse e-mail"
                  class="pl-10 rounded-xl bg-gray-50 focus-visible:ring-2 focus-visible:ring-teal-600"
                />
              </div>
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
                class="form-control bg-gray-50 rounded-xl focus-visible:ring-2 focus-visible:ring-teal-600"
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
                class="form-control bg-gray-50 rounded-xl focus-visible:ring-2 focus-visible:ring-teal-600"
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
                class="form-control bg-gray-50 rounded-xl focus-visible:ring-2 focus-visible:ring-teal-600"
              />
              <InputError :message="errors.phone" />
            </div>
          </div>
          <div class="section-title-inline text-blue-600 font-bold flex items-center gap-2 mt-8 mb-2">
            <span class="inline-block w-8 h-1 rounded bg-gradient-to-r from-teal-600 to-teal-800"></span>
            Sécurité
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col">
              <Label for="password" class="font-semibold mb-1">Mot de passe</Label>
              <div class="relative">
                <Lock class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400" />
                <Input
                  id="password"
                  :type="showPassword ? 'text' : 'password'"
                  required
                  name="password"
                  placeholder="Mot de passe"
                  class="pl-10 pr-10 rounded-xl bg-gray-50 focus-visible:ring-2 focus-visible:ring-teal-600"
                  @input="updateStrength"
                />
                <button
                  type="button"
                  class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
                  @click="showPassword = !showPassword"
                  :aria-pressed="showPassword"
                  :aria-label="showPassword ? 'Masquer le mot de passe' : 'Afficher le mot de passe'"
                  :title="showPassword ? 'Masquer le mot de passe' : 'Afficher le mot de passe'"
                >
                  <Eye v-if="!showPassword" class="h-4 w-4" />
                  <EyeOff v-else class="h-4 w-4" />
                </button>
              </div>
              <div class="h-2 w-full bg-gray-200 rounded mt-2 overflow-hidden">
                <div
                  class="h-full transition-all duration-300"
                  :class="strengthClass"
                  :style="{ width: strengthWidth }"
                />
              </div>
              <InputError :message="errors.password" />
            </div>
            <div class="flex flex-col">
              <Label for="password_confirmation" class="font-semibold mb-1">Confirmer le mot de passe</Label>
              <div class="relative">
                <Lock class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400" />
                <Input
                  id="password_confirmation"
                  :type="showConfirm ? 'text' : 'password'"
                  required
                  name="password_confirmation"
                  placeholder="Confirmer le mot de passe"
                  class="pl-10 pr-10 rounded-xl bg-gray-50 focus-visible:ring-2 focus-visible:ring-teal-600"
                />
                <button
                  type="button"
                  class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
                  @click="showConfirm = !showConfirm"
                  :aria-pressed="showConfirm"
                  :aria-label="showConfirm ? 'Masquer le mot de passe' : 'Afficher le mot de passe'"
                  :title="showConfirm ? 'Masquer le mot de passe' : 'Afficher le mot de passe'"
                >
                  <Eye v-if="!showConfirm" class="h-4 w-4" />
                  <EyeOff v-else class="h-4 w-4" />
                </button>
              </div>
              <InputError :message="errors.password_confirmation" />
            </div>
          </div>
          <div class="section-title-inline text-teal-600 font-bold flex items-center gap-2 mt-8 mb-2">
            <span class="inline-block w-8 h-1 rounded bg-gradient-to-r from-teal-600 to-teal-800"></span>
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
                class="form-control bg-gray-50 rounded-xl focus-visible:ring-2 focus-visible:ring-teal-600"
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
                class="form-control bg-gray-50 rounded-xl focus-visible:ring-2 focus-visible:ring-teal-600"
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
                class="form-control bg-gray-50 rounded-xl focus-visible:ring-2 focus-visible:ring-teal-600"
              />
              <InputError :message="errors.address" />
            </div>
            <div class="flex flex-col md:col-span-2">
              <Input
                id="address2"
                type="text"
                name="address2"
                placeholder="Complément d'adresse (facultatif)"
                class="form-control bg-gray-50 rounded-xl focus-visible:ring-2 focus-visible:ring-teal-600"
              />
              <InputError :message="errors.address2" />
            </div>
          </div>
          <div class="flex items-start gap-3 mt-6">
            <input type="checkbox" id="agreeTerms" name="agreeTerms" class="mt-1" required />
            <Label for="agreeTerms" class="text-sm text-gray-500">Se souvenir de moi </Label>
          </div>
          <div class="mt-8">
            <Button type="submit" class="w-full flex items-center justify-center gap-2 rounded-xl bg-teal-600 hover:bg-teal-700 text-white py-2.5">
              <LoaderCircle v-if="processing" class="h-4 w-4 animate-spin" />
              <span>Créer mon compte</span>
            </Button>
          </div>
          <div class="mt-6 text-center text-gray-600">
            Déjà un compte ?
            <TextLink :href="login.url()" class="text-teal-700 font-semibold hover:text-teal-800">Se connecter</TextLink>
          </div>
        </Form>
      </div>
    </div>
  </main>
</template>
