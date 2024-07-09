<script setup>
import { Head, Link, usePage } from '@inertiajs/vue3';
import GuestLayout from '@/Group/Layouts/GuestLayout.vue';
import TeamItem from '@/Group/Partials/Team/TeamItem.vue';
import PostItem from '@/Group/Partials/Blog/PostItem.vue';
import ContactForm from '@/Group/Partials/Contact/ContactForm.vue';
import { ArrowUpRightIcon, ArrowLongRightIcon, ArrowRightIcon } from '@heroicons/vue/24/solid'
import usePlatform from '@/Shared/Hooks/usePlatform';
import AboutSection from './Partials/AboutSection.vue'
import BannerSection from './Partials/BannerSection.vue'

defineProps({
    posts: {type: []},
    team: {type: []}
});



</script>

<template>
    <Head title="Welcome" />
    
    <GuestLayout >
        <BannerSection />
        
        <AboutSection />

        <div class="bg-primary-100 py-20 text-center">
            <div class="max-w-7xl mx-auto space-y-10">
                <h3 class="text-5xl">Our Impact over the years</h3>

                <div class="grid grid-cols-3 gap-10 text-center">
                    <div>
                        <h1 class="text-[170px] leading-[180px] text-primary">45</h1>
                        <p class="text-xl text-muted font-medium">Products Produced Organically</p>
                    </div>
                    <div>
                        <h1 class="text-[170px] leading-[180px] text-primary">5+</h1>
                        <p class="text-xl text-muted font-medium">Years in production</p>
                    </div>
                    <div>
                        <h1 class="text-[170px] leading-[180px] text-primary">80+</h1>
                        <p class="text-xl text-muted font-medium">Global Partners</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="max-w-7xl mx-auto py-20 space-y-10">
            <h1 class="text-[56px] leading-[80px]">Our <span class="text-[#828181]">Ventures</span></h1>

            <div class="divide-y">
                <div class="py-10">
                    <a href=""class="flex space-x-10 hover:bg-primary-50 group relative overflow-hidden duration-500">
                        <div class="w-1/4 shrink-0">
                            <div class="aspect-square bg-[url('/assets/group/images/banners/supermarket-shoppers.jpeg')] bg-bottom bg-cover no-repeat"></div>
                        </div>
    
                        <div class="flex-fill flex flex-col justify-center space-y-3">
                            <div>
                                <img src="/assets/stores/images/logo.png" class="h-10" alt="">
                            </div>
                            <h3 class="text-4xl font-bold !font-sans">Jocoh Stores</h3>
                            <p class="text-lg text-muted md:w-3/5 font-medium">We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.</p>
                        </div>

                        <div class="w-20 h-20 absolute top-0 right-0 rounded-bl-[50px] items-center justify-center p-0 hidden group-hover:flex duration-500  bg-primary bg-opacity-30">
                            <ArrowUpRightIcon class="size-6 text-primary"  />
                        </div>
                    </a>
                </div>

                <div class="py-10">
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
                </div>
            </div>
        </section>

        <section v-if="team.length > 0" class="bg-primary-100 py-20">
            <div class="mx-auto max-w-7xl space-y-10">
                <div class="flex justify-between">
                    <div>
                        <h3 class="text-5xl font-semibold">Meet the team</h3>
                    </div>

                    <div>
                        <Link :href="route('group.about')" >
                            <button class="bg-primary hover:bg-primary-600 duration-500 inline-flex items-center  border-0 text-white py-2 ps-7 px-2 rounded-l-full rounded-r-full">
                                Explore careers
                                <span class="flex items-center justify-center w-10 h-10 rounded-full bg-white  ms-5">
                                    <ArrowRightIcon class="w-5 h-auto text-primary" />
                                </span>
                            </button>
                        </Link>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-10">
                    <TeamItem v-for="member in team" :member="member" />
                </div>
            </div>
        </section>

        <section v-if="posts.length > 0" class="max-w-7xl py-32 mx-auto space-y-20">
            <div class="text-center">
                <h2 class="text-5xl font-extrabold !font-sans">Blogs & News</h2>
            </div>

            <div class="grid grid-cols-3 gap-10">                
                <PostItem v-for="post in posts" :post="post" />
            </div>

            <div class="text-center">
                <Link :href="route('group.blog')" class="flex items-center justify-center text-primary hover:text-primary-600 duration-500 font-medium">View more articles <ArrowLongRightIcon class="ms-1 w-6" /></Link>
            </div>
        </section>

        <ContactForm />
    </GuestLayout>
</template>
