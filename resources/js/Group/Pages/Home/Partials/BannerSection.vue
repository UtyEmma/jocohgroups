<script setup>
import 'vue3-carousel/dist/carousel.css'

import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
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
    prepend: 'storage/'
})

const caption = render({
    default_value: 'Founded on the belief that farming can be both profitable and environmentally responsible, we integrate innovation, technology, and community engagement to drive positive change in the agricultural sector.',
    key: 'hero_section',
    value: 'caption',
})



</script>

<template>
    <div  :class="`md:h-[110vh] h-[80vh] w-full bg-[15%]  bg-cover no-repeat`"
        :style="{
            backgroundImage: `linear-gradient(180deg, rgba(0, 0, 0, 0.2) 35.37%, rgba(0, 0, 0, 0.5) 61.22%), url('${image}')`
        }"
    >
        <div class="md:max-w-7xl px-4 mx-auto flex items-end  h-full py-10 md:py-20">
            <div class="md:w-9/12 space-y-3">
                <h1 class="md:text-[74px] text-3xl !text-left md:leading-[80px] hero-title text-white" v-html="title" ></h1>
                <p class="md:w-5/6 text-white text-sm md:text-base !text-left">{{ caption }}</p>
            </div>
        </div>
    </div>
</template>