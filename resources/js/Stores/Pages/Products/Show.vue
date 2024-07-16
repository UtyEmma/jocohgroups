<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import GuestLayout from '@/Stores/Layouts/GuestLayout.vue';
    import PrimaryButton from '@/Stores/Components/Buttons/PrimaryButton.vue';
    import { ArrowRightIcon, ArrowLeftIcon } from '@heroicons/vue/24/solid';
    import FaqItem from '@/Stores/Partials/Faqs/FaqItem.vue';

    defineProps({
        product: {type: {}},
        faqs: {type: {}}
    })

</script>

<template>
    <Head :title="product.title" />
    
    <GuestLayout>
        <section class="md:py-20 py-10 bg-primary-50">
            <div class="md:max-w-[80%] px-4 mx-auto space-y-10">
                <div >
                    <Link :href="route('stores.products')" >
                        <PrimaryButton class="pl-1 pr-3 py-1 font-semibold">
                            <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary">
                                <ArrowLeftIcon class="w-5 h-auto text-white" />
                            </span>
        
                            <span class="">Back</span>
                        </PrimaryButton>
                    </Link>
                </div>

                <div class="flex flex-col md:flex-row gap-10 md:gap-20">
                    <div class="md:w-2/6">
                        <div class="p-3 bg-white rounded-2xl">
                            <div class="border-2 border-gray-300 bg-gray-100 h-[400px] overflow-hidden rounded-xl flex items-center justify-center">
                                <img :src="product.image" class="w-full h-full object-cover" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="md:w-4/6 space-y-8">
                        <p class="font-bold text-2xl text-secondary">{{product.title}}</p>

                        <div class="prose whitespace-pre-line min-w-full" v-html="product.description"></div>

                        <div>
                            <Link :href="route('stores.contact')" >
                                <PrimaryButton class="pr-2 pl-5 py-2 font-semibold shadow">
                                    <span class="text-primary text-[16px]">Contact Us</span>
                                    <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary">
                                        <ArrowRightIcon class="w-5 h-auto text-white" />
                                    </span>
                                </PrimaryButton>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="md:py-20 py-10 md:max-w-[80%] px-4 mx-auto space-y-10 md:space-y-20">
            <div class="space-y-3 md:space-y-4">
                <p class="md:text-4xl text-2xl font-bold leading-tight">Frequently asked questions</p>
                <p class="mx-auto text-muted font-medium leading-[23.04px]">We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more </p>
            </div>

            <div class="space-y-10">
                <FaqItem v-for="faq in faqs" :question="faq.question" :answer="faq.answer" />
            </div>
        </div>
    </GuestLayout>
</template>