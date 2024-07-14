<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';

const { render, content } = usePlatform('home')

const title = render({
                default_value: 'We are providing you with everyday fresh & organic Products.',
                key: 'hero_section',
                value: 'title'
            })

const image = render({
                default_value: '/assets/stores/images/banner/food-stuffs.png',
                key: 'hero_section',
                value: 'image',
                prepend: 'storage/',
            })
</script>

<template>
    <div class="pt-20 md:min-h-[75vh] bg-[#FFFBED] bg-contain bg-[100px] bg-[url('/assets/stores/images/banner/food-items.png')] bg-opacity-10" >
        <div class="md:max-w-[80%] px-4 mx-auto">
            <div class="md:w-10/12 mx-auto">
                <h1 class="text-center italic font-medium text-primary text-3xl md:leading-[78px] md:text-6xl">{{ title }}</h1>
            </div>

            <div class="md:w-7/12 mx-auto" >
                <img :src="image" alt="">
            </div>
        </div>
    </div>
</template>