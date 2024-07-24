<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';

const { render, content } = usePlatform('home')

const title = render({
                default_value: 'We Are Leading the Charge for Sustainable Agriculture **Join us today.**', 
                classes: '',
                key: 'about_section',
                value: 'title',
                element: 'span'
            })

const caption = render({
                    default_value: 'Redefining food production with technology and collaboration to combat climate change, food insecurity, and environmental degradation.', 
                    classes: '',
                    key: 'about_section',
                    value: 'description',
                    element: 'span'
                })

const image_1 = render({
                    default_value: '/assets/group/images/banners/factory.jpeg', 
                    classes: '',
                    key: 'about_section', 
                    value: 'image_1', 
                    prepend: 'storage/'
                })

const image_2 = render({
                    default_value: '/assets/group/images/banners/harvesting.jpeg', 
                    classes: '',
                    key: 'about_section', 
                    value: 'image_2', 
                    prepend: 'storage/'
                })

</script>

<template>
    <div class="max-w-7xl mx-auto md:py-20 py-10 px-4 space-y-10 md:space-y-20">
        <div class="md:w-11/12 space-y-3">
            <h1 class="md:text-6xl text-3xl font-semibold about-title" v-html="title" ></h1>
            <p class="md:text-2xl md:w-9/12 text-muted" v-html="caption"></p>
        </div>

        <div class="grid grid-cols-2 gap-x-5 md:gap-x-10">
            <div class="w-full aspect-[4/3] bg-center bg-cover no-repeat"
                v-bind:style="{
                    backgroundImage: `url(${image_1})`
                }"
            ></div>

            <div class="w-full aspect-[4/3] bg-cover bg-center no-repeat"
                v-bind:style="{
                    backgroundImage: `url(${image_2})`
                }"
            ></div>
        </div>
    </div>
</template>