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
import { LoaderCircle } from 'lucide-vue-next';

defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();
</script>

<template>
  <main class="flex items-center justify-center min-h-screen bg-gray-50 py-10 px-4">
    <div class="w-full max-w-4xl bg-white border border-gray-200 rounded-2xl shadow-xl flex overflow-hidden animate-fade-in">
      <!-- Image & texte à gauche -->
      <div class="hidden md:flex flex-col justify-center items-start bg-gradient-to-br from-blue-500 to-blue-700 text-white px-12 py-10 w-2/5">
        <div class="logo-icon flex items-center justify-center w-20 h-20 rounded-xl bg-white/20 mb-6 backdrop-blur">
          <i class="fas fa-lock text-4xl"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2">Bienvenue sur NAYE</h2>
        <p class="text-base opacity-90 max-w-xs">Connectez-vous pour accéder à un écosystème d'opportunités et de talents pour transformer l'Afrique.</p>
      </div>
      <!-- Formulaire à droite -->
      <div class="flex-1 px-8 py-10">
        <div class="mb-8">
          <h2 class="text-2xl font-bold mb-2">Authentification</h2>
          <p class="text-gray-600">Accédez à votre espace personnel.</p>
        </div>
        <Form
          v-bind="store.form()"
          :reset-on-success="['password']"
          v-slot="{ errors, processing }"
          class="space-y-6"
        >
          <div v-if="status" class="alert alert-success mb-4 text-center text-sm font-medium text-green-600">{{ status }}</div>
          <div v-if="errors.email || errors.password" class="alert alert-danger mb-4">{{ errors.email || errors.password }}</div>
          <div class="form-group mb-4">
            <Label for="email" class="font-semibold mb-1">Adresse e-mail</Label>
            <Input id="email" type="email" name="email" required autocomplete="email" autofocus class="form-control" />
            <InputError :message="errors.email" />
          </div>
          <div class="form-group mb-4">
            <Label for="password" class="font-semibold mb-1">Mot de passe</Label>
            <Input id="password" type="password" name="password" required autocomplete="current-password" class="form-control" />
            <InputError :message="errors.password" />
          </div>
          <div class="form-group flex justify-end mb-4">
            <TextLink :href="request.url()" class="password-forget text-blue-600 font-semibold">Mot de passe oublié ?</TextLink>
          </div>
          <div class="form-group mb-4">
            <Button type="submit" class="btn btn-primary w-full flex items-center justify-center gap-2">
              Connexion
            </Button>
          </div>
        </Form>
        <div class="bottom mt-8 text-center text-gray-600">
          Vous n'avez pas de compte ?
          <TextLink :href="register.url()" class="text-blue-600 font-semibold">Créer un compte</TextLink>
        </div>
      </div>
    </div>
  </main>
</template>
