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
import ImpactSection from './Partials/ImpactSection.vue'
import VenturesSection from './Partials/VenturesSection.vue'

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

        <ImpactSection />

        <VenturesSection />
        
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
