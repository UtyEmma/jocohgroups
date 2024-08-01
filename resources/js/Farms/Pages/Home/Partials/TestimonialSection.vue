<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import { ArrowLeftIcon, ArrowRightIcon, StarIcon } from '@heroicons/vue/24/solid';
import { ref } from 'vue';

const { testimonials } = defineProps({
    testimonials: {}
})

const { render, format } = usePlatform('home')

const title = render({
    default_value: 'CLIENT’S TESTIMONIAL',
    key: 'client_section',
    value: 'title'
})

const heading = render({
    default_value: "What clients are saying about the Jocoh’s Products",
    key: 'client_section',
    value: 'heading'
})

const caption = render({
    default_value: "We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more than just a digital space.",
    key: 'client_section',
    value: 'caption'
})


const active = ref(0)

const next = () => {
    const pos = 1;
    active.value = active.value == (testimonials.length - 1) ? 0 : active.value + pos;
    console.log(active, active.value)
}

const prev = () => {
    const pos = 1;
    active.value = active.value == 0 ? (testimonials.length - 1) : active.value - pos;
    console.log(active, active.value)
}

</script>

<template>
    <div v-if="testimonials.length > 0" class="md:py-20 py-10 md:max-w-[80%] px-4 mx-auto space-y-10 md:space-y-20">
        <div class="space-y-5 md:w-3/5 text-center mx-auto">
            <p class="uppercase text-primary">{{title}}</p>
            <h2 class="!font-inter text-2xl md:text-5xl font-semibold heading-title" v-html="heading"></h2>
            <p class="text-muted md:px-10">{{caption}}</p>
        </div>

        <div class="md:grid grid-cols-5 gap-5">
            <div class="md:col-span-3 col-span-full group overflow-hidden">
                <div  class="h-[450px] md:h-[500px] w-full bg-[url(/assets/farms/images/farmer-in-a-farm.jpeg)] bg-cover bg-center bg-no-repeat p-3 flex items-end duration-500 group-hover:bg-[length:110%_110%]">
                    <template v-for="(testimonial, index) in testimonials" :key="testimonial.id" >
                        <div v-if="index == active" class="p-3 bg-white w-full space-y-5">
                            <div class="flex space-x-2 items-center">
                                <div class="flex text-accent">
                                    <StarIcon class="size-5" />
                                    <StarIcon class="size-5" />
                                    <StarIcon class="size-5" />
                                    <StarIcon class="size-5" />
                                    <StarIcon class="size-5" />
                                </div>
    
                                <p class="font-bold">5.0</p>
                            </div>
    
                            <div class="text-muted">
                                <p class="text-sm">“{{testimonial.message}}”</p>
                            </div>
    
                            <div>
                                <p class="font-medium">{{testimonial.name}}</p>
                                <p class="text-sm text-muted font-medium">{{testimonial.company}}</p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
            <div class="col-span-1 hidden md:block group overflow-hidden">
                <div class="h-[500px] bg-[url(/assets/farms/images/cake-icing.jpeg)] bg-cover bg-center group-hover:scale-110 duration-500"></div>
            </div>
            <div class="col-span-1 hidden md:block group overflow-hidden">
                <div class="h-[500px] bg-[url(/assets/farms/images/black-ladies.jpeg)] bg-cover bg-center group-hover:scale-110 duration-500"></div>
            </div>
        </div>

        <div class="flex justify-center space-x-5">
            <div>
                <button v-on:click="prev" class="md:size-14 size-10 border group border-gray-200 rounded-full flex justify-center items-center ">
                    <ArrowLeftIcon class="w-6 text-gray-200 duration-500 group-hover:text-[#4CAE47]" />
                </button>
            </div>
            <div>
                <button v-on:click="next" class="md:size-14 size-10 border border-gray-200 group rounded-full flex justify-center items-center ">
                    <ArrowRightIcon class="w-6 text-gray-200 duration-500 group-hover:text-[#4CAE47]" />
                </button>
            </div>
        </div>
    </div>
</template>