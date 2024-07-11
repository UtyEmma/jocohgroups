<script setup>
import 'vue3-carousel/dist/carousel.css'

import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import usePlatform from '@/Shared/Hooks/usePlatform';
import { Link } from '@inertiajs/vue3';
import PrimaryButton from '@/Group/Components/Buttons/PrimaryButton.vue';

const { render, format, content } = usePlatform('about')

const sliders = render({
    default_value: [
        {
            image: '/assets/group/images/banners/farmers-in-the-field.jpeg',
            title: 'Facilitating  the production and delivery of **agricultural** produce across Africa',
            caption: 'Founded on the belief that farming can be both profitable and environmentally responsible, we integrate innovation, technology, and community engagement to drive positive change in the agricultural sector.',
            button_link: route('group.about'),
            button_text: 'Explore Careers'
        }
    ],
    key: 'banner_section',
    value: 'sliders'
})



</script>

<template>
    <Carousel :items-to-show="1">
        <Slide v-for="(slide, index) in sliders" :key="`slide-${index}`">
            <section :style="{
                backgroundImage: `linear-gradient(180deg, rgba(0, 0, 0, 0.2) 35.37%, rgba(0, 0, 0, 0.5) 61.22%), url('storage/${slide.image}')`
            }"
                class="h-[110vh] bg-[15%] w-full bg-cover no-repeat" >
                <div class="max-w-7xl mx-auto flex items-end  h-full pb-20">
                    <div class="w-9/12 space-y-10 !text-left">
                        <div class="space-y-3">
                            <h1 class="text-[74px] leading-[80px] text-left text-white">{{slide.title}}</h1>
                            <p class="text-xl w-3/4 text-white text-left">{{slide.caption}}</p>
                        </div>

                        <div>
                            <Link :href="route(slide.button_link)">
                                <PrimaryButton >{{slide.button_text}}</PrimaryButton>
                            </Link>
                        </div>
                    </div>
                </div>
            </section>
        </Slide>
    </Carousel>
</template>