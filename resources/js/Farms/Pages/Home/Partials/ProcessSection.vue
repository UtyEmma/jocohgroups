<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import PrimaryButton from '@/Farms/Components/Buttons/PrimaryButton.vue';
import { ArrowLeftIcon, ArrowRightIcon } from '@heroicons/vue/24/solid';
import ProcessSlider from './ProcessSection/ProcessSlider.vue';

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
    <div v-if="processes.length > 0" class="md:py-20 py-10 bg-secondary space-y-10 md:space-y-20 bg-[url(/assets/farms/images/ridges-transparent.png)]">
        <div class="mx-auto md:max-w-[80%] px-4">
            <div class="md:flex items-center space-y-5 md:space-y-0 mt-3">
                <div class="md:w-4/6">
                    <p class="uppercase text-[#4CAE47] mb-3">{{ title }}</p>
                    <h2 class="!font-inter text-2xl md:text-5xl font-semibold heading-title text-white md:w-4/5" v-html="heading"></h2>
                </div>

                <div class="md:w-2/6 space-y-4">
                    <p class="text-white text-sm font-light md:text-base" >{{caption}}</p>

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

        <ProcessSlider :processes="processes" />


    </div>
</template>