<script setup>
import 'vue3-carousel/dist/carousel.css'

import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import usePlatform from '@/Shared/Hooks/usePlatform';
import { Link } from '@inertiajs/vue3';
import PrimaryButton from '@/Group/Components/Buttons/PrimaryButton.vue';

const { render, format, content } = usePlatform('about')

const items = render({
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

const slider = items[0]

</script>

<template>
    <section :style="{
        backgroundImage: `linear-gradient(180deg, rgba(0, 0, 0, 0.2) 35.37%, rgba(0, 0, 0, 0.5) 61.22%), url('storage/${slider.image}')`
    }"
        class="md:h-[110vh] h-[90vh] bg-[15%] w-full bg-cover no-repeat" >
        <div class="max-w-7xl mx-auto flex items-end px-4  h-full py-10 md:py-20">
            <div class="md:w-9/12 space-y-5 md:space-y-10 !text-left">
                <div class="space-y-3">
                    <h1 class="md:text-[74px] md:leading-[80px] text-4xl text-left text-white">{{slider.title}}</h1>
                    <p class="md:text-xl md:w-3/4 text-white text-left">{{slider.caption}}</p>
                </div>

                <div>
                    <Link :href="route(slider.button_link)">
                        <PrimaryButton >{{slider.button_text}}</PrimaryButton>
                    </Link>
                </div>
            </div>
        </div>
    </section>
</template>