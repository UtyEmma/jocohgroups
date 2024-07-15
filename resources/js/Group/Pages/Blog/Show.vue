<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Group/Layouts/GuestLayout.vue';
import { ArrowLeftIcon, ArrowLongLeftIcon } from '@heroicons/vue/24/solid';

const props = defineProps({
    post: {type: {}}
})

</script>

<template>
    <GuestLayout>        
        <section class="md:py-20 md:max-w-[80%] mx-auto space-y-5 md:space-y-10 px-4 py-4">
            <div class="md:space-y-10 space-y-5">
                <Link :href="route('group.blog')" class="inline-flex space-x-2 md:space-x-3 rounded-l-full rounded-r-full shadow hover:text-primary-700  justify-center px-4 py-2 bg-white md:text-base text-sm text-primary font-medium">
                    <ArrowLeftIcon class="w-5" /> <span>Back to Blog</span>
                </Link>
    
                <div class="flex space-x-3 items-center" >
                    <span class="bg-[#FFE9DA] py-1 px-4 text-sm rounded-l-full rounded-r-full uppercase font-bold">{{post.category.name}}</span>
                    <span class="text-[#82808A] font-medium">{{post.month_and_day}}  &bull;  {{post.read_time}} read</span>
                </div>
            </div>


            <div class="md:space-y-10 space-y-5">
                <h1 class="text-4xl md:text-6xl font-semibold">{{post.title}}</h1>

                <div>
                    <img :src="post.image" class="aspect-video md:aspect-[16/7] w-full rounded-xl object-cover" alt="">
                </div>

                <div class="space-y-10 md:text-[18px] leading-relaxed prose max-w-full" v-html="post.content" >
                    
                </div>
            </div>
        </section>
    </GuestLayout>
</template>