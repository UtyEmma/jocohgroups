<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';

const { render, format, content } = usePlatform('home')

const title = render({
    default_value: 'Facilitating  the production and delivery of **agricultural** produce across Africa',
    key: 'hero_section',
    value: 'title',
})

const image = render({
    default_value: '/assets/group/images/banners/farmers-in-the-field.jpeg',
    key: 'hero_section',
    value: 'image',
    // prepend: 'storage/'
})

const caption = render({
    default_value: 'Founded on the belief that farming can be both profitable and environmentally responsible, we integrate innovation, technology, and community engagement to drive positive change in the agricultural sector.',
    key: 'hero_section',
    value: 'caption',
})
</script>

<template>
    <div  :class="`md:h-[110vh] h-[80vh] w-full bg-[15%]  bg-cover no-repeat relative`">       
        <div class="absolute top-0 bottom-0 right-0 left-0 z-0" >
            <img :src="image" class="w-full h-full" v-fallback="`/storage/${image}`" alt="">
        </div>
        <div class="md:max-w-7xl px-4 mx-auto flex items-end  h-full py-10 md:py-20">
            <div class="md:w-9/12 space-y-3">
                <h1 class="md:text-[74px] text-3xl !text-left md:leading-[80px] hero-title text-white" v-html="title" ></h1>
                <p class="md:w-5/6 text-white text-sm md:text-base !text-left">{{ caption }}</p>
            </div>
        </div>
    </div>
</template>