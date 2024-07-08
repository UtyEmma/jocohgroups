<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Group/Layouts/GuestLayout.vue';
import { ArrowLeftIcon, ArrowLongLeftIcon } from '@heroicons/vue/24/solid';
import PrimaryButton from '@/Group/Components/Buttons/PrimaryButton.vue';
import LongBanner from '@/Group/Svgs/LongBanner.vue';
import Flower from '@/Group/Svgs/Flower.vue';

defineProps({
    job: {type: {}}
})

</script>

<template>
    <Head :title="job.role" />
    <GuestLayout>
        <section class="py-20 bg-primary-50 relative overflow-hidden">
            <div class="max-w-[80%] mx-auto space-y-20" >
                <Link :href="`${route('group.about')}#jobs`" class="inline-flex space-x-3 rounded-l-full rounded-r-full shadow hover:text-primary-700  justify-center px-4 py-2 bg-white text-primary font-medium">
                    <ArrowLeftIcon class="w-5" /> <span>Back to Careers</span>
                </Link>

                <div class="space-y-5">
                    <h1 class="text-6xl text-primary font-semibold">{{job.role}}</h1>
                    <p class="text-[18px]">{{job.workplace}} • {{job.location}}</p>

                    <div v-if="job.application_link">
                        <a href="{{ job.application_link }}" target="_blank">
                            <PrimaryButton >Apply for Role</PrimaryButton>
                        </a>
                    </div>
                </div>
            </div>

            <Flower class="absolute size-[34rem] -bottom-[30%] -right-[10%]" />
        </section>

        <div class="py-20 max-w-[80%] mx-auto space-y-4">
            <h1 class="text-3xl">Job description</h1>
            <div class="whitespace-pre-line prose prose-base min-w-full" v-html="job.description"></div>
        </div>

        <LongBanner class="w-full" />
    </GuestLayout>
</template>