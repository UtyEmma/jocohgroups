<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';

const { render, format } = usePlatform('home')

const title = render({
                default_value: 'Shop Wholesale & Retails',
                key: 'wholesale_retail',
                value: 'title'
            })

const caption = render({
                default_value: 'You have the to shop both retail and wholesale we have product available across major stores in Nigeria.',
                key: 'wholesale_retail',
                value: 'caption'
            })

const right_image = render({
                default_value: '/assets/stores/images/bag-with-foodstuffs.png',
                key: 'wholesale_retail',
                value: 'right_image',
                prepend: ''
            })

const left_image = render({
                default_value: '/assets/stores/images/people-shopping.png',
                key: 'wholesale_retail',
                value: 'left_image',
                prepend: ''
            })
</script>

<template>
    <div class="md:py-20 py-10 px-4 md:space-y-10 space-y-5 md:max-w-[80%] mx-auto">
        <div class="md:space-y-4 space-y-2">
            <p class="md:text-4xl text-2xl font-bold text-center leading-tight">{{ title }}</p>
            <p class="text-center md:w-3/4 mx-auto text-muted font-medium">{{ caption }}</p>
        </div>

        <div class="grid grid-cols-2 gap-2 md:gap-x-10">
            <div class="w-full aspect-[4/3] bg-center bg-cover no-repeat" >
                <img :src="left_image" class="w-full aspect-[4/3] object-cover" v-fallback="`/storage/${left_image}`" alt="">
            </div>

            <div class="w-full aspect-[4/3] bg-center bg-cover no-repeat" >
                <img :src="right_image" class="w-full aspect-[4/3] object-cover" v-fallback="`/storage/${right_image}`" alt="">
            </div>
        </div>
    </div>
</template>