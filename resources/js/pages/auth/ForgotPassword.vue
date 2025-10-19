<script setup lang="ts">
import PasswordResetLinkController from '@/actions/App/Http/Controllers/Auth/PasswordResetLinkController';
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthLayout from '@/layouts/AuthLayout.vue';
import { login } from '@/routes';
import { Form, Head } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

defineProps<{
    status?: string;
}>();
</script>

<template>
  <main class="flex items-center justify-center min-h-screen bg-gray-50 py-10 px-4">
    <div class="w-full max-w-xl bg-white border border-gray-200 rounded-2xl shadow-xl flex overflow-hidden animate-fade-in">
      <!-- Image & texte à gauche -->
      <div class="hidden md:flex flex-col justify-center items-start bg-gradient-to-br from-blue-500 to-blue-700 text-white px-10 py-10 w-2/5">
        <div class="logo-icon flex items-center justify-center w-16 h-16 rounded-xl bg-white/20 mb-6 backdrop-blur">
          <i class="fas fa-lock text-3xl"></i>
        </div>
        <h2 class="text-xl font-bold mb-2">Mot de passe oublié ?</h2>
        <p class="text-base opacity-90 max-w-xs">Recevez un lien de réinitialisation sur votre adresse e-mail.</p>
      </div>
      <!-- Formulaire à droite -->
      <div class="flex-1 px-8 py-10">
        <div class="mb-8">
          <h2 class="text-2xl font-bold mb-2">Réinitialiser le mot de passe</h2>
          <p class="text-gray-600">Entrez votre adresse e-mail pour recevoir le lien.</p>
        </div>
        <div v-if="status" class="alert alert-success mb-4 text-center text-sm font-medium text-green-600">{{ status }}</div>
        <Form v-bind="PasswordResetLinkController.store.form()" v-slot="{ errors, processing }" class="space-y-6">
          <div class="form-group mb-4">
            <Label for="email" class="font-semibold mb-1">Adresse e-mail</Label>
            <Input id="email" type="email" name="email" autocomplete="off" autofocus placeholder="email@example.com" class="form-control" />
            <InputError :message="errors.email" />
          </div>
          <div class="form-group mb-4">
            <Button type="submit" class="btn btn-primary w-full flex items-center justify-center gap-2">
              <LoaderCircle v-if="processing" class="h-4 w-4 animate-spin" />
              Envoyer le lien
            </Button>
          </div>
        </Form>
        <div class="bottom mt-8 text-center text-gray-600">
          <TextLink :href="login.url()" class="text-blue-600 font-semibold">Retour à la connexion</TextLink>
        </div>
      </div>
    </div>
  </main>
</template>
