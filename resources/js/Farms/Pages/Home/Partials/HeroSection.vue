<script setup>
import PrimaryButton from '@/Farms/Components/Buttons/PrimaryButton.vue';
import usePlatform from '@/Shared/Hooks/usePlatform';
import { ArrowRightIcon } from '@heroicons/vue/24/solid';
import 'vue3-carousel/dist/carousel.css'

import { Carousel, Slide } from 'vue3-carousel'

const { render, format } = usePlatform('home')

const sliders = render({
    default_value: [
        {
            image: '/assets/group/images/banners/tomato-harvesters.png',
            title: "**Organic** food products from the ground to your table.",
            caption: "From precision farming to smart irrigation our platform offers a suite of tools designed to the enhance efficiency and increase yields",
            button_text: "Contact Us",
            button_link: route('stores.contact'),
        }   
    ],
    key: 'hero_section',
    value: 'sliders'
})

</script>

<template>
    <section>
        <div >
            <Carousel  >
                <Slide v-for="(slider, index) in sliders" :key="`slide-${index}`"   >
                    <div :style="{
                            backgroundImage: `linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.5)), url('${format(slider.image, {
                                prepend: 'storage/'
                            })}')`
                        }"
                        class="md:h-[110vh] h-[70vh] w-full bg-[15%] bg-cover no-repeat" 
                    >
                        <div class="md:max-w-7xl px-4 mx-auto flex flex-col md:flex-row justify-end space-y-4 items-end  h-full pb-10 md:pb-20 text-left">
                            <div class="md:w-9/12 space-y-6">
                                <div class="space-y-3">
                                    <p class="text-2xl md:text-[69px] md:leading-[80px] font-semibold hero-title text-white" v-html="format(slider.title)"></p>
                                    <p class="md:text-xl md:w-3/4 text-sm text-white">{{ slider.caption }}</p>
                                </div>
                                
                                <div class="">
                                    <a :href="route(slider.button_link)"  >
                                        <PrimaryButton class="md:pr-3 pr-1 md:pl-7 pl-3 md:py-3 py-1 group text-sm md:text-base bg-primary text-white">    
                                            <span class="">{{slider.button_text}}</span>
                                            <span class="flex items-center justify-center text-white duration-300 group-hover:text-primary group-hover:bg-white  w-10 h-10 rounded-full bg-white/30">
                                                <ArrowRightIcon class="w-5 h-auto" />
                                            </span>
                                        </PrimaryButton>
                                    </a>
                                </div>
                            </div>
            
                            <div class="md:w-3/12 hidden md:flex items-center md:justify-end space-x-3">
                                <svg class="md:size-12 size-8"  viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-white/50" stroke-width="3"></circle>
                                    <g class="origin-center -rotate-90 transform">
                                    <circle cx="18" cy="18" r="16" fill="none" class="stroke-current duration-1000 transition-all text-white" stroke-width="3" stroke-dasharray="100" :stroke-dashoffset="100 - ((100 / 4) * (index + 1))"></circle>
                                    </g>
                                </svg>
            
                                <p class="text-white/50 font-semibold text-xl md:text-3xl tracking-widest">
                                    <span class="text-white">{{index + 1}}</span>/{{sliders.length}}
                                </p>
                            </div>
                        </div>
                    </div>
                </Slide>
            </Carousel>
        </div>
    </section>
</template> 