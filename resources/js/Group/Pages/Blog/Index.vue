<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Group/Layouts/GuestLayout.vue';
import { ArrowLeftIcon, ArrowLongLeftIcon } from '@heroicons/vue/24/solid';
import PrimaryButton from '@/Group/Components/Buttons/PrimaryButton.vue';
import LongBanner from '@/Group/Svgs/LongBanner.vue';
import Flower from '@/Group/Svgs/Flower.vue';
import PostItem from '@/Group/Partials/Blog/PostItem.vue';

const props = defineProps({
    posts: {type: []}
})

</script>

<template>
    <GuestLayout>
        <section class="pt-32 pb-10 bg-primary-50 relative overflow-hidden">
            <div class="md:max-w-[80%] px-4 mx-auto" >
                <div class="space-y-5">
                    <h1 class="text-6xl text-primary font-semibold">Blog</h1>
                    <p class="text-[18px] font-medium">Explore the latest news from Jocoh Group.</p>
                </div>
            </div>

            <Flower class="absolute size-[30rem] -bottom-[90%] -right-[10%]" />
        </section>

        <div class="py-20 px-4 md:max-w-[80%] mx-auto space-y-4">
            <div v-if="posts.length > 0" class="grid md:grid-cols-3 gap-10">
                <PostItem v-for="post of posts" :post="post" />
            </div>
        </div>
    </GuestLayout>
</template>