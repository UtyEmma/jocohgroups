<script setup>
import { Link } from '@inertiajs/vue3';
import Header from '@/Group/Layouts/Partials/Header.vue';
import Footer from '@/Group/Layouts/Partials/Footer.vue';
import ScrollToTop from '@/Group/Layouts/Partials/ScrollToTop.vue';

</script>

<template>
    <div class="min-h-screen flex flex-col">
        <Header />

        <div class="flex-fill">
            <slot />
        </div>
        
        <Footer />

        <ScrollToTop />
    </div>
</template>
