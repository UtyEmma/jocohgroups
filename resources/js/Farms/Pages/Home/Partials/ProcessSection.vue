<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import PrimaryButton from '@/Farms/Components/Buttons/PrimaryButton.vue';
import { ArrowLeftIcon, ArrowRightIcon } from '@heroicons/vue/24/solid';

defineProps({
    processes: {}
})

const { render, format } = usePlatform('home')

const title = render({
    default_value: 'our Process',
    key: 'process_section',
    value: 'title'
})

const heading = render({
    default_value: "**Discover** Fresh farm produce from Jocoh Farm.",
    key: 'process_section',
    value: 'heading'
})

const caption = render({
    default_value: "We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.",
    key: 'process_section',
    value: 'caption'
})

const button_text = render({
    default_value: "Contact Us",
    key: 'process_section',
    value: 'button_text'
})

const button_link = render({
    default_value: 'farms.home',
    key: 'process_section',
    value: 'button_link'
})


</script>

<template>
    <div class="py-20 bg-secondary space-y-20 bg-[url(/assets/farms/images/ridges-transparent.png)]">
        <div class="mx-auto max-w-[80%]">
            <div class="flex items-center mt-3">
                <div class="w-4/6">
                    <p class="uppercase text-[#4CAE47] mb-3">{{ title }}</p>
                    <h2 class="!font-inter text-5xl font-semibold heading-title text-white w-4/5" v-html="heading"></h2>
                </div>

                <div class="w-2/6 space-y-4">
                    <p class="text-white" >{{caption}}</p>

                    <a :href="route(button_link)" class="block">
                        <PrimaryButton class="pr-3 pl-7 py-2 group font-semibold bg-primary text-white">    
                            <span class="">{{button_text}}</span>
                            <span class="flex items-center justify-center text-white duration-300 group-hover:text-primary group-hover:bg-white  w-10 h-10 rounded-full bg-white/30">
                                <ArrowRightIcon class="w-5 h-auto" />
                            </span>
                        </PrimaryButton>
                    </a>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto scrollbar-none">
            <div class="pl-[10%]">
                <div class="flex gap-10">
                    <div v-for="process in processes" class="shrink-0 w-[344px]">
                        <div class="bg-white w-full box-border aspect-[9/11] relative">
                            <img :src="process.image" class="h-full w-full object-cover" alt="">
                            <div class="z-50 absolute top-0 bottom-0 left-0 right-0  h-full items-end text-white flex"
                            >
                                <div class="space-y-3 py-10 h-[80%] flex flex-col justify-end px-5 bg-gradient-to-t from-primary-600 to-transparent" >
                                    <p class="text-xl font-semibold">{{process.title}} </p>
                                    <p class="text-sm">{{process.caption}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-[80%] flex space-x-7 ">
            <div>
                <button class="size-14 border border-white/20 rounded-full flex justify-center items-center ">
                    <ArrowLeftIcon class="w-6 text-white/20" />
                </button>
            </div>
            <div>
                <button class="size-14 border border-white/20 rounded-full flex justify-center items-center ">
                    <ArrowLeftIcon class="w-6 text-white rotate-180" />
                </button>
            </div>
        </div>
    </div>
</template>