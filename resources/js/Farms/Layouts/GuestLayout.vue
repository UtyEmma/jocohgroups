<script setup>
import { Link } from '@inertiajs/vue3';
import Header from '@/Farms/Layouts/Partials/Header.vue';
import Footer from '@/Farms/Layouts/Partials/Footer.vue';
import ScrollToTop from '@/Shared/Components/ScrollToTop.vue';

</script>

<template>
    <div class="min-h-screen flex flex-col">
        <Header />

        <div class="flex-fill">
            <slot />
        </div>
        
        <ScrollToTop />
        <Footer />

    </div>
</template>
