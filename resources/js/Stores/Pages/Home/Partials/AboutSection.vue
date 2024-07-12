<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import {ref, onMounted} from 'vue';

const { render, format } = usePlatform('home')

const title = render({
                default_value: 'Looking to place a wholesale order with us? Follow these simple steps to get started.',
                key: 'about_section',
                value: 'title'
            })

const caption = render({
                default_value: 'We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more than just a digital space.',
                key: 'about_section',
                value: 'caption'
            })

const steps = render({
                default_value: [
                    {
                        image: '/assets/stores/images/preview.png',
                        title: 'Visit the website',
                        caption: "Log on to our website, Navigate to the product page of the item you're interested in purchasing in bulk."
                    },
                    
                    {
                        image: '/assets/stores/images/preview.png',
                        title: 'Request on the contact page',
                        caption: "Scroll to the contact page on the website ensure that on the page you enter your name, email & the description of the product you choose to purchase"
                    },

                    {
                        image: '/assets/stores/images/preview.png',
                        title: 'Get your items delivered',
                        caption: "Log on to our website, Navigate to the product page of the item you're interested in purchasing in bulk."
                    },
                ],
                key: 'about_section',
                value: 'steps'
            })

const step = ref(0)

function handleNext () {
    step.value = ((step.value + 1) < steps.length) ? (step.value + 1) : 0;
    next()
}

function next(){
    setTimeout(() => handleNext(), 5000);
}

onMounted(() => {
    next()
})
</script>

<template>
    <div class="py-24 space-y-10">
        <div class="w-7/12 mx-auto space-y-4">
            <p class="text-4xl font-bold text-center leading-tight">{{ title }}</p>
            <p class="text-center w-3/4 mx-auto text-lg text-muted font-medium leading-[23.04px]">{{ caption }}</p>
        </div>

        <div class="max-w-[80%] mx-auto md:px-20 px-4">
            <div class="grid grid-cols-2 gap-x-16 items-center">
                <div>
                    <div v-for="(item, index) in steps">
                        <img  :src="format(item.image, {
                            prepend: 'storage/'
                        })" v-if="step == index" class="aspect-square overflow-hidden object-cover" alt="">
                    </div>
                </div>

                <div class="space-y-7">
                    <div v-for="(item, index) in steps" :key="`slider-${index}`" class="space-y-2">
                        <button @click="step = index" class="flex space-x-4 items-center">
                            <div>
                                <span class="w-12 h-12 flex items-center justify-center font-semibold text-xl text-white bg-primary rounded-full">{{index + 1}}</span>
                            </div>

                            <div class="text-xl font-bold">{{item.title}}</div>
                        </button>
                        
                        <div class="space-y-2 h-full" v-if="step == index">
                            <p class="text-muted">{{item.caption}}</p>
                            <div class="py-[3px] bg-gradient-to-r from-primary via-primary-100 to-primary-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>