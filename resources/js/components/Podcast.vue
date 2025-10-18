<template>
    <section class="bg-[#0B2A35] py-10">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-6">

            <!-- Texte -->
            <h3 class="text-[#00CDB0] font-bold text-2xl md:text-3xl text-left leading-snug">
                Découvrez nous via le podcast <br class="hidden sm:block" />
                <span class="italic text-white">Naye Innove</span>
            </h3>

            <!-- Audio player -->
            <div class="w-full md:w-auto flex justify-center md:justify-end">
                <audio
                    controls
                    class="w-full md:w-[320px] rounded-lg shadow-md focus:outline-none"
                >
                    <source src="/podcast/interview4.mp3" type="audio/mp3" />
                    Votre navigateur ne supporte pas la lecture audio.
                </audio>
            </div>

        </div>
    </section>
</template>

<script setup>
// Aucun script nécessaire ici
</script>
