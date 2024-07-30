<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Group/Layouts/GuestLayout.vue';
import { ArrowLeftIcon, ArrowLongLeftIcon } from '@heroicons/vue/24/solid';
import PrimaryButton from '@/Group/Components/Buttons/PrimaryButton.vue';
import LongBanner from '@/Group/Svgs/LongBanner.vue';
import Flower from '@/Group/Svgs/Flower.vue';

const props = defineProps({
    job: {type: {}}
})

const scrollTo = () => {
    window.scrollTo({
        behavior: 'smooth',
        top: document.getElementById('application-email').offsetTop
    })
}
</script>

<template>
    <Head :title="job.role" />
    <GuestLayout>
        <section class="pt-20 pb-10 md:pb-20 bg-primary-50 relative overflow-hidden">
            <Flower class="absolute size-[34rem] z-0 -bottom-[30%] -right-[10%]" />

            <div class="md:max-w-[80%] px-4 mx-auto space-y-10 md:space-y-20 z-50 relative" >
                <Link :href="`${route('group.about')}#jobs`">
                    <button class="inline-flex space-x-3 rounded-l-full rounded-r-full shadow hover:text-primary-700  justify-center px-4 py-2 bg-white text-primary font-medium">
                        <ArrowLeftIcon class="w-5" /> <span>Back to Careers</span>
                    </button>
                </Link>

                <div class="space-y-5">
                    <h1 class="md:text-6xl text-4xl text-primary font-semibold">{{job.role}}</h1>
                    <p class="text-[18px]">{{job.workplace}} • {{job.location}}</p>

                    <div v-if="job.application_email">
                        <PrimaryButton v-on:click="scrollTo" >Apply for Role</PrimaryButton>
                    </div>

                    <div v-if="job.application_link && !job.application_email">
                        <a href="{{ job.application_link }}" target="_blank">
                            <PrimaryButton >Apply for Role</PrimaryButton>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="md:py-20 py-10 md:max-w-[80%] px-4 mx-auto space-y-4">
            <h1 class="text-3xl font-semibold">Job description</h1>
            <div class="whitespace-pre-line prose prose-base min-w-full" v-html="job.description"></div>
            <div v-if="job.application_email" id="application-email" class="whitespace-pre-line prose prose-base min-w-full font-semibold">
                To apply send your CV to <a class="text-primary" :href="`mailto:${job.application_email}`">{{job.application_email}}</a>
            </div>
        </div>

        <LongBanner class="w-full" />
    </GuestLayout>
</template>