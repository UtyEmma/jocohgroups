<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import { ref } from 'vue';

defineProps({
    categories: {},
    products: {}
})

const { render, format } = usePlatform('home')

const title = render({
    default_value: 'OUR PRODUCTS',
    key: 'products_section',
    value: 'title'
})

const heading = render({
    default_value: 'Explore our organic **Products**',
    key: 'products_section',
    value: 'heading'
})

const caption = render({
    default_value: 'We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.',
    key: 'products_section',
    value: 'caption'
})

const active = ref('')


</script>

<template>
    <div class="py-20 bg-[#FAF7F0]">
        <div class="md:max-w-[80%] px-4 mx-auto space-y-10">
            <div class="md:space-y-5 md:w-3/5 text-center mx-auto">
                <p class="uppercase text-primary">{{ title }}</p>
                <h2 class="!font-inter text-2xl md:text-5xl font-semibold heading-title" v-html="heading"></h2>
                <p class="text-muted text-sm md:text-base md:px-10">{{ caption }}</p>
            </div>

            <div class="flex justify-center gap-2 md:gap-5">
                <div>
                    <button v-on:click="active = ''" class="md:px-6 px-4 md:py-2 py-1 text-sm md:text-base duration-500 hover:bg-[#4CAE47] hover:text-white font-medium text-muted" :class="active == '' ? 'bg-[#4CAE47] text-white' : 'bg-white'">All</button>
                </div>
                
                <div v-for="category in categories">
                    <button  v-on:click="active = category.slug" class="md:px-6 px-4 md:py-2 py-1 text-sm md:text-base  duration-500 hover:bg-[#4CAE47] hover:text-white font-medium text-muted" :class="category.slug == active ? 'text-white bg-[#4CAE47]' : 'bg-white'">{{category.name}}</button>
                </div>
            </div>

            <div v-if="active == ''" class="grid md:grid-cols-3 gap-10 md:gap-20">
                <div v-for="product in products">
                    <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                        <img :src="product.image" :alt="product.title" >
                        <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-500/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                            <p class="text-lg text-gray-100">{{product.title}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div v-for="category in categories" >
                <div v-if="category.slug == active" class="grid grid-cols-3 gap-20">
                    <div v-for="product in category.products">
                        <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                            <img :src="product.image" :alt="product.title" >
                            <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-500/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                                <p class="text-lg text-gray-100">{{product.title}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>