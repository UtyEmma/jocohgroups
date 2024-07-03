<script setup>
import { Link } from '@inertiajs/vue3';
import Header from '@/Stores/Layouts/Partials/Header.vue';
import Footer from '@/Stores/Layouts/Partials/Footer.vue';
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
