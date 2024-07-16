<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import { ArrowLeftIcon, ArrowRightIcon, StarIcon } from '@heroicons/vue/24/solid';
import { ref } from 'vue';

defineProps({
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

</script>

<template>
    <div v-if="testimonials.length > 0" class="md:py-20 py-10 md:max-w-[80%] px-4 mx-auto space-y-10 md:space-y-20">
        <div class="space-y-5 md:w-3/5 text-center mx-auto">
            <p class="uppercase text-primary">{{title}}</p>
            <h2 class="!font-inter text-2xl md:text-5xl font-semibold heading-title" v-html="heading"></h2>
            <p class="text-muted md:px-10">{{caption}}</p>
        </div>

        <div class="md:flex space-y-5 md:space-y-10">
            <div class="md:w-3/5">
                <div v-for="(testimonial, index) in testimonials" class="h-[450px] md:h-[500px] bg-[url(/assets/farms/images/farmer-in-a-farm.jpeg)] bg-cover bg-center p-3 flex items-end">
                    <div class="p-3 bg-white w-full space-y-5">
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
                </div>
            </div>
            <div class="md:w-1/5 hidden">
                <div class="h-[500px] bg-[url(/assets/farms/images/cake-icing.jpeg)] bg-cover bg-center"></div>
            </div>
            <div class="md:w-1/5 hidden">
                <div class="h-[500px] bg-[url(/assets/farms/images/black-ladies.jpeg)] bg-cover bg-center"></div>
            </div>
        </div>

        <div class="flex justify-center space-x-5">
            <div>
                <button class="md:size-14 size-10 border group border-gray-200 rounded-full flex justify-center items-center ">
                    <ArrowLeftIcon class="w-6 text-gray-200 duration-500 group-hover:text-[#4CAE47]" />
                </button>
            </div>
            <div>
                <button class="md:size-14 size-10 border border-gray-200 group rounded-full flex justify-center items-center ">
                    <ArrowRightIcon class="w-6 text-gray-200 duration-500 group-hover:text-[#4CAE47]" />
                </button>
            </div>
        </div>
    </div>
</template>