<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import { ArrowUpRightIcon } from '@heroicons/vue/24/solid';

const { render } = usePlatform('home')

const ventures = render({
                    default_value: [
                        {
                            caption: 'We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.',
                            image: '/assets/group/images/banners/supermarket-shoppers.jpeg',
                            link: route('stores.home'),
                            logo: '/assets/stores/images/logo.png',
                            title: 'Jocoh Stores'
                        },
                        {
                            caption: 'We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.',
                            image: '/assets/group/images/banners/tomato-harvesters.png',
                            link: route('farms.home'),
                            logo: '/assets/farms/images/logo.png',
                            title: 'Jocoh Farms'
                        },
                    ], 
                    classes: '',
                    key: 'ventures_section',
                    value: 'ventures',
                })
</script>

<template>
    <section class="max-w-7xl mx-auto py-20 space-y-10">
        <h1 class="text-[56px] leading-[80px]">Our <span class="text-[#828181]">Ventures</span></h1>

        <div class="divide-y">
            <div v-for="venture in ventures" class="py-10">
                <a :href="venture.link" target="_blank" class="flex space-x-10 hover:bg-primary-50 group relative overflow-hidden duration-500">
                    <div class="w-1/4 shrink-0">
                        <div class="aspect-square bg-bottom bg-cover no-repeat" :style="{backgroundImage: `url(storage/${venture.image})`}" ></div>
                    </div>

                    <div class="flex-fill flex flex-col justify-center space-y-3">
                        <div>
                            <img :src="`storage/${venture.logo}`" class="h-10" alt="">
                        </div>
                        <h3 class="text-4xl font-bold !font-sans">{{venture.title}}</h3>
                        <p class="text-lg text-muted md:w-3/5 font-medium">{{venture.caption}}</p>
                    </div>

                    <div class="w-20 h-20 absolute top-0 right-0 rounded-bl-[50px] items-center justify-center p-0 hidden group-hover:flex duration-500  bg-primary bg-opacity-30">
                        <ArrowUpRightIcon class="size-6 text-primary"  />
                    </div>
                </a>
            </div>

            <!-- <div class="py-10">
                <a href=""class="flex space-x-10 hover:bg-primary-50 group relative overflow-hidden duration-500">
                    <div class="w-1/4 shrink-0">
                        <div class="aspect-square bg-[url('/assets/group/images/banners/tomato-harvesters.png')] bg-bottom bg-cover no-repeat"></div>
                    </div>

                    <div class="flex-fill flex flex-col justify-center space-y-3">
                        <div>
                            <img src="/assets/farms/images/logo.png" class="h-10" alt="">
                        </div>
                        <h3 class="text-4xl font-bold !font-sans">Jocoh Farms</h3>
                        <p class="text-lg text-muted md:w-3/5 font-medium">We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.</p>
                    </div>

                    <div class="w-20 h-20 absolute top-0 right-0 rounded-bl-[50px] items-center justify-center p-0 hidden group-hover:flex duration-500  bg-primary bg-opacity-30">
                        <ArrowUpRightIcon class="size-6 text-primary"  />
                    </div>
                </a>
            </div> -->
        </div>
    </section>
</template>