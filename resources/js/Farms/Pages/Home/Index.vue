<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Farms/Layouts/GuestLayout.vue';
import { ArrowLeftIcon, ArrowRightIcon, MinusIcon, PlusIcon, StarIcon } from '@heroicons/vue/24/solid';
import HeroSection from './Partials/HeroSection.vue';
import AboutSection from './Partials/AboutSection.vue';
import MissionSection from './Partials/MissionSection.vue';
import ProductSection from './Partials/ProductSection.vue';
import ProcessSection from './Partials/ProcessSection.vue';
import PartnersSection from './Partials/PartnersSection.vue';
import TestimonialSection from './Partials/TestimonialSection.vue';
import FaqSection from './Partials/FaqSection.vue';

defineProps({
    faqs: {},
    testimonials: {},
    partners: {},
    processes: {},
    categories: {},
    products: {}
});

</script>

<template>
    <Head title="Welcome" />
    <GuestLayout>
        <HeroSection />

        <AboutSection />

        <MissionSection />

        <ProductSection :products="products" :categories="categories" />

        <ProcessSection :processes="processes" />

        <PartnersSection :partners="partners" />

        <TestimonialSection :testimonials="testimonials" />

        <FaqSection :faqs="faqs" />
    </GuestLayout>
</template>
