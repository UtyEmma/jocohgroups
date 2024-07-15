<script setup>
import { Head, Link, usePage } from '@inertiajs/vue3';
import GuestLayout from '@/Group/Layouts/GuestLayout.vue';
import TeamItem from '@/Group/Partials/Team/TeamItem.vue';
import PostItem from '@/Group/Partials/Blog/PostItem.vue';
import ContactForm from '@/Group/Partials/Contact/ContactForm.vue';
import { ArrowUpRightIcon, ArrowLongRightIcon, ArrowRightIcon } from '@heroicons/vue/24/solid'
import usePlatform from '@/Shared/Hooks/usePlatform';
import AboutSection from './Partials/AboutSection.vue'
import BannerSection from './Partials/BannerSection.vue'
import ImpactSection from './Partials/ImpactSection.vue'
import VenturesSection from './Partials/VenturesSection.vue'
import TeamSection from './Partials/TeamSection.vue'
import BlogSection from './Partials/BlogSection.vue'

defineProps({
    posts: {type: []},
    team: {type: []}
});

</script>

<template>
    <Head title="Welcome" />
    
    <GuestLayout >
        <BannerSection />
        
        <AboutSection />

        <ImpactSection />

        <VenturesSection />
        
        <TeamSection :team="team" />

        <BlogSection :posts="posts" />

        <ContactForm />
    </GuestLayout>
</template>
