<script setup>
import LeafIcon from '@/Shared/Icons/LeafIcon.vue';
import BadgeIcon from '@/Shared/Icons/BadgeIcon.vue';
import usePlatform from '@/Shared/Hooks/usePlatform';
import { ref } from 'vue';

const { render, format } = usePlatform('home')

const title = render({
    default_value: 'WHO WE ARE',
    key: 'mission_section',
    value: 'title'
})

const heading = render({
    default_value: "Africa’s leading provider of <br> **Agricultural**  products.",
    key: 'mission_section',
    value: 'heading'
})

const image = render({
    default_value: "/assets/farms/images/tomato-fruit.png",
    key: 'mission_section',
    value: 'image',
    prepend: 'storage/'
})

const caption = render({
    default_value: "We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.",
    key: 'mission_section',
    value: 'caption'
})

const mission = render({
    default_value: {
        mission_title: "High-quality organic products for you and your family.",
        mission_caption: "Explore comprehensive suite of innovative farming solution tailored to meet the unique challenges of modern agriculture."
    },
    key: 'mission_section',
    value: 'mission'
})

const vision = render({
    default_value: {
        vision_title: "High-quality organic products for you and your family.",
        vision_caption: "Explore comprehensive suite of innovative farming solution tailored to meet the unique challenges of modern agriculture."
    },
    key: 'mission_section',
    value: 'vision'
})



const show = ref('mission') //vision | mission

</script>

<template>
    <div class="py-20 md:mb-20 md:max-w-[80%] px-4 mx-auto space-y-10">
        <div>
            <p class="uppercase text-primary">{{title}}</p>

            <div class="md:flex space-y-5 md:space-y-0 justify-between items-center mt-3">
                <div class="md:w-2/3">
                    <h2 class="!font-inter text-2xl md:text-5xl font-semibold heading-title" v-html="heading"></h2>
                </div>

                <div class="md:w-1/3">
                    <p class="text-muted">{{ caption }}</p>
                </div>
            </div>
        </div>

        <div class="relative md:mb-10 space-y-5 md:space-y-0">
            <div class="md:w-2/3">
                <img :src="image" class="w-full aspect-[6/4] object-cover" alt="">
            </div>

            <div class="md:absolute md:w-1/2 end-0 -bottom-10">
                <div class="grid grid-cols-2">
                    <div role="button" v-on:click="show = 'mission'" class="text-white p-4 text-center duration-500" :class="show == 'mission' ? 'bg-accent' : 'bg-secondary-600'" >
                        <p>Our Mission</p>
                    </div>
                    <div role="button" v-on:click="show = 'vision'" class="text-white p-4 text-center duration-500" :class="show == 'vision' ? 'bg-accent' : 'bg-secondary-600'" >
                        <p>Our Vision</p>
                    </div>
                </div>
                <div v-if="show == 'mission'" class="bg-secondary pt-10 px-5 md:px-10 md:pb-32 pb-10 space-y-5 transition-all with-transitions text-white bg-[url(/assets/farms/images/farm-transparent.png)]">
                    <h3 class="!font-inter font-bold text-2xl md:text-3xl md:leading-relaxed">{{mission.mission_title}}</h3>
                    <p class="md:w-11/12 text-sm md:text-base">{{mission.mission_caption}}</p>

                    <div class="grid md:grid-cols-2 gap-5 mt-10">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-12 h-12 items-center justify-center rounded-full bg-primary">
                                <LeafIcon class="w-8 h-8" />
                            </div>
                            <div>
                                <p class="">100% Organic</p>
                                <p class="text-sm text-[#C9D7D2]">Trusted agricultrual partners</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-12 h-12 items-center justify-center rounded-full bg-primary">
                                <BadgeIcon class="w-8 h-8" />
                            </div>
                            <div>
                                <p class="">Cruelty Free</p>
                                <p class="text-sm text-[#C9D7D2]">Support local community</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="show == 'vision'" class="bg-secondary pt-10 px-5 md:px-10 md:pb-32 pb-10 space-y-5 transition-all with-transitions text-white bg-[url(/assets/farms/images/farm-transparent.png)]">
                    <h3 class="!font-inter font-bold text-2xl md:text-3xl md:leading-relaxed">{{vision.vision_title}}</h3>
                    <p class="w-11/12 text-sm md:text-base">{{vision.vision_caption}}</p>

                    <div class="grid md:grid-cols-2 gap-5 mt-10">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-12 h-12 items-center justify-center rounded-full bg-primary">
                                <LeafIcon class="w-8 h-8" />
                            </div>
                            <div>
                                <p class="">100% Organic</p>
                                <p class="text-sm text-[#C9D7D2]">Trusted agricultrual partners</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-12 h-12 items-center justify-center rounded-full bg-primary">
                                <BadgeIcon class="w-8 h-8" />
                            </div>
                            <div>
                                <p class="">Cruelty Free</p>
                                <p class="text-sm text-[#C9D7D2]">Support local community</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>