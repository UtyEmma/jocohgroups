<script setup>
import { Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';


const props = defineProps({
    post: {type: {}}
})

</script>

<template>
    <div >
        <div class="aspect-video overflow-hidden rounded-t-xl">
            <img :src="post.image" alt="">
        </div>

        <div class="p-5 space-y-7 border-b-2 rounded-b-xl border-x-2">
            <div class="space-y-2">
                <Link :href="route('group.blog.details', {'post': post.slug})" class="text-2xl font-bold line-clamp-2 hover:text-primary duration-150">{{post.title}}</Link>
                <p class="line-clamp-3">{{post.excerpt}}</p>
            </div>

            <div class="flex space-x-3 items-center" >
                <span class="bg-[#FFE9DA] py-1 px-4 text-sm rounded-l-full rounded-r-full uppercase font-bold">{{post.category?.name}}</span>
                <span class="text-muted">{{post.month_and_day}}  &bull;  {{post.read_time}} read</span>
            </div>
        </div>
    </div>
</template>