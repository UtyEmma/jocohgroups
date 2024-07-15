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

const images = render({
                    default_value: ['/assets/group/images/banners/factory.jpeg', '/assets/group/images/banners/harvesting.jpeg' ], 
                    classes: '',
                    key: 'about_section', 
                    value: 'images' 
                })

</script>

<template>
    <div class="max-w-7xl mx-auto md:py-20 py-10 px-4 space-y-10 md:space-y-20">
        <div class="md:w-11/12 space-y-3">
            <h1 class="md:text-6xl text-xl font-semibold about-title" v-html="title" ></h1>
            <p class="md:text-2xl md:w-9/12 text-muted" v-html="caption"></p>
        </div>

        <div class="grid grid-cols-2 gap-x-5 md:gap-x-10">
            <div v-for="image in images">
                <div class="w-full aspect-[4/3] bg-bottom bg-cover no-repeat" :class="image"
                    v-bind:style="{
                        backgroundImage: `url(storage/${image})`
                    }"
                ></div>
            </div>
        </div>
    </div>
</template>