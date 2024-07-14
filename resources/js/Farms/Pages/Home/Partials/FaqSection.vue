<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import { ref } from 'vue';

defineProps({
    faqs: {}
})

const { render, format } = usePlatform('home')

const title = render({
    default_value: 'FREQUENTLY ASKED QUESTIONS',
    key: 'faq_section',
    value: 'title'
})

const heading = render({
    default_value: "How can agri-entrepreneurs showcase their **Innovations.**",
    key: 'faq_section',
    value: 'heading'
})

const caption = render({
    default_value: "Explore the all resources and initiatives aimed at promoting best eco-friendly farming methods and reducing of the environmental impact of agriculture.",
    key: 'faq_section',
    value: 'caption'
})

const image = render({
    default_value: "/assets/farms/images/farm-machine-at-work.png",
    key: 'faq_section',
    value: 'image'
})

const active  = ref(0)


</script>

<template>
    <div class="md:py-20 py-10 md:max-w-[80%] px-4 mx-auto space-y-10 md:space-y-20">
        <div class="space-y-5 md:w-3/5 text-center mx-auto">
            <p class="uppercase text-primary">{{title}}</p>
            <h2 class="!font-inter text-2xl md:text-5xl font-semibold heading-title" v-html="heading"></h2>
            <p class="text-muted text-sm md:text-base md:px-10">{{caption}}</p>
        </div>

        <div class="mx-auto md:w-4/5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10">
                <div>
                    <img :src="image" class="w-full h-full aspect-square md:aspect-auto object-cover ">
                </div>
                <div>
                    <div class="space-y-5">

                        <div v-for="(faq, index) in faqs" v-on:click="active = index" class="p-5" :class="index == active ? 'bg-[#4CAE47] text-white' : 'bg-[#FAF7F0]'">
                            <div role="button" class="flex space-x-5 items-center">
                                <div class="flex-1 space-y-4">
                                    <p class="font-semibold ">{{faq.question}}</p>
                                </div>
                                <div class="w-8 shrink-0 flex justify-end">
                                    <div class="size-8 items-center flex justify-center border-2 rounded-full " :class="index == active ? 'bg-accent border-accent-600/35' : ''">
                                        <MinusIcon class="size-5 " />
                                    </div>
                                </div>
                            </div>
                            <div v-if="index == active" class="flex space-x-5 pt-3">
                                <div class="flex-1">
                                    <p class=" text-sm">{{faq.answer}}</p>
                                </div>
                                <div class="w-8 shrink-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>