<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';

const { render, format } = usePlatform('home')

const title = render({
    default_value: 'Jocoh Farm',
    key: 'about_section',
    value: 'caption'
})

const heading = render({
    default_value: "The best producer of **organic** food imported and shipped across Africa",
    key: 'about_section',
    value: 'title'
})


</script>

<template>
    <div class="md:py-20 py-10 md:max-w-[80%] px-4 mx-auto space-y-5 md:space-y-10">
        <div class="text-center space-y-2">
            <img src="/assets/farms/images/icon.png" class="w-10 mx-auto" alt="">
            <p class="text-primary md:text-lg uppercase font-semibold">{{title}}</p>
        </div>

        <div class="md:w-[65%] mx-auto space-y-5">
            <h2 class="!font-inter text-xl md:text-4xl text-center font-bold heading-title " v-html="heading"></h2>

            <div class="md:w-3/4 mx-auto">
                <img src="/assets/farms/images/african-network-map.png"  alt="">
            </div>
        </div>
    </div>
</template>