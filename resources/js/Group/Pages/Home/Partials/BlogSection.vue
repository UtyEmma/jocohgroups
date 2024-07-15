<script setup>
import PostItem from '@/Group/Partials/Blog/PostItem.vue';
import { ArrowLongRightIcon } from '@heroicons/vue/24/solid';
import { Link } from '@inertiajs/vue3';

defineProps({
    posts: {}
})

</script>

<template>
    <section v-if="posts.length > 0" class="max-w-7xl py-10 md:py-20 px-4 mx-auto space-y-10 md:space-y-20">
        <div class="text-center">
            <h2 class="md:text-5xl text-3xl font-bold !font-sans">Blogs & News</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-5 md:gap-10">                
            <PostItem v-for="post in posts" :post="post" />
        </div>

        <div class="text-center">
            <Link :href="route('group.blog')" class="flex items-center justify-center text-primary hover:text-primary-600 duration-500 font-medium">View more articles <ArrowLongRightIcon class="ms-1 w-6" /></Link>
        </div>
    </section>
</template>