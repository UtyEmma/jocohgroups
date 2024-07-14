<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import {ref, onMounted} from 'vue';

const { render, format } = usePlatform('about')

const title = render({
                default_value: 'ABOUT US',
                key: 'hero_section',
                value: 'title'
            })

const caption = render({
                default_value: 'An African food ingredient supplier company.',
                key: 'hero_section',
                value: 'caption'
            })

const image = render({
                default_value: '/assets/stores/images/banner/food-stuffs.png',
                key: 'hero_section',
                value: 'image',
                prepend: 'storage/'
            })
</script>

<template>
    <div class="md:pt-20 pt-10 bg-[#FFFBED]">
        <div class="md:max-w-[80%] px-4 mx-auto">
            <p class="text-muted md:text-base text-sm font-semibold">{{ caption }}</p>
            <h1 class="text-primary italic font-medium text-2xl md:text-7xl md:leading-[78.26px] md:w-4/5">{{ title }}</h1>

            <div class="md:ml-auto">
                <div class="md:w-7/12 md:ml-auto" >
                    <img :src="image" class="md:ml-20" alt="">
                </div>
            </div>
        </div>
    </div>
</template>