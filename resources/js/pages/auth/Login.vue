<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { register } from '@/routes';
import { store } from '@/routes/login';
import { request } from '@/routes/password';
import { Form, Head } from '@inertiajs/vue3';
import { LoaderCircle, Mail, Lock, Eye, EyeOff } from 'lucide-vue-next';
import { ref } from 'vue';

const showPassword = ref(false);
defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();
</script>

<template>
  <main class="relative flex items-center justify-center min-h-screen bg-gray-50 py-10 px-4">
    <!-- Subtle background pattern -->
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-teal-50 via-transparent to-transparent"></div>
    <div class="relative w-full max-w-4xl bg-white border border-gray-100 rounded-3xl shadow-2xl flex overflow-hidden animate-fade-in">
      <!-- Image & texte à gauche -->
      <div class="hidden md:flex flex-col justify-center items-start bg-gradient-to-br from-teal-600 to-teal-800 text-white px-12 py-10 w-2/5">
        <div class="logo-icon flex items-center justify-center w-20 h-20 rounded-xl bg-white/20 mb-6 backdrop-blur">
          <i class="fas fa-lock text-4xl"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2">Bienvenue sur NAYE</h2>
        <p class="text-base opacity-90 max-w-xs">Connectez-vous pour accéder à un écosystème d'opportunités et de talents pour transformer l'Afrique.</p>
      </div>
      <!-- Formulaire à droite -->
      <div class="flex-1 px-8 py-10">
        <div class="mb-8">
          <h2 class="text-2xl font-bold mb-2 text-gray-500">Se connecter !</h2>
          <p class="text-gray-600">Accédez à votre espace personnel.</p>
        </div>
        <Form
          v-bind="store.form()"
          :reset-on-success="['password']"
          v-slot="{ errors, processing }"
          class="space-y-6"
        >
          <div v-if="status" class="mb-4 text-center text-sm font-medium text-teal-700 bg-teal-50 border border-teal-200 rounded-xl py-2 px-3">{{ status }}</div>
          <div v-if="errors.email || errors.password" class="mb-4 text-center text-sm font-medium text-red-700 bg-red-50 border border-red-200 rounded-xl py-2 px-3">{{ errors.email || errors.password }}</div>

          <div class="form-group mb-4">
            <Label for="email" class="font-semibold mb-1 text-blue-500 mb-5">Adresse e-mail</Label>
            <div class="relative">
              <Mail class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400" />
              <Input id="email" type="email" name="email" required autocomplete="email" autofocus class="pl-10 rounded-xl bg-gray-50 focus-visible:ring-2 focus-visible:ring-teal-600" />
            </div>
            <InputError :message="errors.email" />
          </div>
          <div class="form-group mb-4">
            <Label for="password" class="font-semibold mb-5 text-blue-500">Mot de passe</Label>
            <div class="relative">
              <Lock class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400" />
                <Input
                    id="password"
                    :type="showPassword ? 'text' : 'password'"
                    required
                    name="password"
                    placeholder="Mot de passe"
                    class="pl-10 pr-10 rounded-xl bg-gray-50 focus-visible:ring-2 focus-visible:ring-teal-600"
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
            <InputError :message="errors.password" />
          </div>
          <div class="form-group flex items-center justify-between mb-4 text-sm">
            <label class="inline-flex items-center gap-2 select-none">
              <Checkbox id="remember" name="remember" />
              <span class="text-gray-700">Se souvenir de moi</span>
            </label>
            <TextLink :href="request.url()" class="password-forget text-teal-700 font-semibold hover:text-teal-800">Mot de passe oublié ?</TextLink>
          </div>
          <div class="form-group mb-4">
            <Button type="submit" class="w-full flex items-center justify-center gap-2 rounded-xl bg-teal-600 hover:bg-teal-700 text-white py-2.5">
              <LoaderCircle v-if="processing" class="h-4 w-4 animate-spin" />
              <span>Connexion</span>
            </Button>
          </div>
        </Form>
        <div class="bottom mt-8 text-center text-gray-600">
          Vous n'avez pas de compte ?
          <TextLink :href="register.url()" class="text-teal-700 font-semibold hover:text-teal-800">Créer un compte</TextLink>
        </div>
      </div>
    </div>
  </main>
</template>
