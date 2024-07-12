<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import GuestLayout from '@/Stores/Layouts/GuestLayout.vue';
    import HeroSection from '@/Stores/Pages/About/Partials/HeroSection.vue';
    import JourneySection from '@/Stores/Pages/About/Partials/JourneySection.vue';
    import MapSection from '@/Stores/Pages/About/Partials/MapSection.vue';
    import FaqSection from '@/Stores/Pages/About/Partials/FaqSection.vue';

    defineProps({
        faqs: {type: []}
    })
</script>

<template>
    <Head title="Welcome" />
    <GuestLayout>
        
        <HeroSection />

        <JourneySection />

        <MapSection />

        <FaqSection :faqs="faqs" />
    </GuestLayout>
</template>