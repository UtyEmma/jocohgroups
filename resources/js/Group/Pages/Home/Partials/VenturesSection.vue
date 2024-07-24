<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import { ArrowUpRightIcon } from '@heroicons/vue/24/solid';
import TeamSection from './TeamSection.vue';

const { render, content } = usePlatform('home')

const ventures = render({
                    default_value: [
                        {
                            caption: 'We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.',
                            image: '/group/images/banners/supermarket-shoppers.jpeg',
                            link: route('stores.home'),
                            logo: '/stores/images/logo.png',
                            title: 'Jocoh Stores'
                        },
                        {
                            caption: 'We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.',
                            image: '/group/images/banners/tomato-harvesters.png',
                            link: route('farms.home'),
                            logo: '/farms/images/logo.png',
                            title: 'Jocoh Farms'
                        },
                    ], 
                    classes: '',
                    key: 'ventures_section',
                    value: 'ventures',
                })

</script>

<template>
    <section class="md:max-w-7xl px-4 mx-auto py-10 md:py-20 space-y-5 md:space-y-10">
        <h1 class="md:text-[56px] text-4xl md:leading-[80px]">Our <span class="text-[#828181]">Ventures</span></h1>

        <div class="divide-y">
            <div v-for="venture in ventures" class="md:py-10 py-5">
                <a :href="venture.link" target="_blank" class="flex md:gap-x-10 flex-col md:flex-row gap-y-6 hover:bg-primary-50 group relative overflow-hidden duration-500">
                    <div class="md:w-1/4 shrink-0">
                        <div class="md:aspect-square aspect-video bg-bottom bg-cover no-repeat" >
                            <img :src="venture.image" v-fallback="`/storage/${venture.image}`" class="w-full h-full object-cover" alt="">
                        </div>
                    </div>

                    <div class="flex-fill flex flex-col justify-center space-y-3">
                        <div>
                            <img :src="`${venture.logo}`"  v-fallback="`storage/${venture.logo}`" class="h-10" alt="">
                        </div>
                        <h3 class="md:text-4xl text-3xl font-bold !font-sans">{{venture.title}}</h3>
                        <p class="md:text-lg text-muted md:w-3/5 font-medium">{{venture.caption}}</p>
                    </div>

                    <div class="w-20 h-20 absolute top-0 right-0 rounded-bl-[50px] items-center justify-center m-0 p-0 hidden group-hover:flex duration-500  bg-primary bg-opacity-30">
                        <ArrowUpRightIcon class="size-6 text-primary"  />
                    </div>
                </a>
            </div>
        </div>
    </section>
</template>