<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import GuestLayout from '@/Stores/Layouts/GuestLayout.vue';
    import ContactSection from './Partials/ContactSection.vue';
    import FaqSection from './Partials/FaqSection.vue';

    const props = defineProps({
        faqs: {type: []}
    })

</script>

<template>
    <Head title="Contact Us" />

    <GuestLayout>

        <ContactSection />
        <FaqSection :faqs="faqs" />
    </GuestLayout>
</template>