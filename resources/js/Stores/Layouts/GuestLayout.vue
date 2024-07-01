<script setup>
import { Link } from '@inertiajs/vue3';
import Header from '@/Stores/Layouts/Partials/Header.vue';

</script>

<template>
    <div class="min-h-screen flex flex-col">
        <Header />

        <div class="flex-fill">
            <slot />
        </div>
        
        <!-- <Footer /> -->
    </div>
</template>
