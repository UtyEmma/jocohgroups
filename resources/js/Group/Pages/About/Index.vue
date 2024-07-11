<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Group/Layouts/GuestLayout.vue';
import ContactForm from '@/Group/Partials/Contact/ContactForm.vue';
import AboutSection from './Partials/AboutSection.vue';
import UniquenessSection from './Partials/UniquenessSection.vue';
import CareerSection from './Partials/CareerSection.vue';
import HeroSection from './Partials/HeroSection.vue';

const props = defineProps({
    jobs: {type: []}
})

</script>

<template>
    <Head title="About Us" />

    <GuestLayout >
        <HeroSection />

        <AboutSection />

        <UniquenessSection />

        <CareerSection :jobs="props.jobs" />

        <ContactForm />

    </GuestLayout>
</template>