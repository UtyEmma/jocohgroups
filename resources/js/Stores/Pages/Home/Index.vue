<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Stores/Layouts/GuestLayout.vue';
import HeroSection from './Partials/HeroSection.vue';
import AboutSection from './Partials/AboutSection.vue';
import ShopAreaSection from './Partials/ShopAreaSection.vue';
import ProductSection from './Partials/ProductSection.vue';
import FaqSection from './Partials/FaqSection.vue';

defineProps({
    products: {type: []},
    faqs: {type: []}
});

</script>

<template>
    <Head title="Welcome" />
    <GuestLayout >
        <HeroSection />

        <AboutSection />

        <ShopAreaSection />

        <ProductSection :products="products" />

        <FaqSection :faqs="faqs" />
    </GuestLayout>
</template>
