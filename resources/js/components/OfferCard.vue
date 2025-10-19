<template>
    <div
        class="feature-card price-card animate-item fade-in-up"
        :class="customClass"
        style="min-width:320px; --animation-delay: 0.18s"
    >
        <div class="card-icon vercel-icon">
            <i :class="icon"></i>
        </div>
        <h3>
            <i :class="icon" :style="{ color: color, marginRight: '8px' }"></i>
            {{ title }}
        </h3>
        <div class="hero-badge" :class="badgeClass" style="margin-bottom:18px;">
            <i :class="badgeIcon"></i>
            <span>{{ badgeText }}</span>
        </div>
        <p class="text-secondary text-sm">
            <i :class="infoIcon" :style="{ color: color, marginRight: '4px' }"></i>
            {{ description }}
        </p>
        <a :href="ctaLink" :class="btnClass">{{ ctaText }} <i v-if="ctaIcon" :class="ctaIcon"></i></a>
    </div>
</template>

<script setup>
defineProps({
    title: String,
    icon: String,
    color: String,
    badgeText: String,
    badgeIcon: String,
    badgeClass: String,
    description: String,
    ctaText: String,
    ctaLink: String,
    ctaIcon: String,
    btnClass: { type: String, default: 'btn btn-primary' },
    customClass: String,
    infoIcon: { type: String, default: 'fas fa-info-circle' }
})
</script>
