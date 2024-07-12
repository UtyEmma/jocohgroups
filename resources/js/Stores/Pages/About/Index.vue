<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import GuestLayout from '@/Stores/Layouts/GuestLayout.vue';
    import FaqItem from '@/Stores/Partials/Faqs/FaqItem.vue';

    defineProps({
        faqs: {type: []}
    })
</script>

<template>
    <Head title="Welcome" />
    <GuestLayout>
        <div class="pt-20 bg-[#FFFBED]">
            <div class="max-w-[80%] mx-auto">
                <p class="text-muted font-semibold">ABOUT US</p>
                <h1 class="text-primary italic font-medium text-7xl md:leading-[78.26px] md:w-4/5">An African food ingredient supplier company.</h1>

                <div class="ml-auto">
                    <div class="w-7/12 ml-auto" >
                        <img src="/assets/stores/images/banner/food-stuffs.png" class="md:ml-20" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="py-20 mb-20 max-w-[80%] mx-auto space-y-28">
            <div>
                <p class="text-center bg-gradient-to-b from-black to-primary bg-clip-text text-transparent text-4xl font-bold" >Our Journey so far</p>
            </div>

            <div>

                <div class="grid grid-cols-4 mb-5">
                    <div >
                        <div class="bg-gray-100 p-4 h-80 mb-3">
                        </div>
                        <p class="font-semibold">Operation Started.</p>
                    </div>
                    <div >
                        <!-- <div class="bg-gray-100 p-4 h-80 mb-3">
                        </div>
                        <p class="font-semibold">Delivered over 10m products</p> -->
                    </div>
                    <div >
                        <!-- <div class="bg-gray-100 p-4 h-80 mb-3">
                        </div>
                        <p class="font-semibold">Partnered with Jocoh Farm</p> -->
                    </div>
                    <div >
                        <!-- <div class="bg-gray-100 p-4 h-80 mb-3">
                        </div>
                        <p class="font-semibold">We raised $56m</p> -->
                    </div>
                </div>

                <div class=" grid grid-cols-4 mb-3">
                    <div class="space-y-2">
                        <div class="h-[4px] bg-gray-200 w-full">
                            <div class="h-full bg-black w-10"></div>
                        </div>
                        <p>2020</p>
                    </div>
                    <div class="space-y-2">
                        <div class="h-[4px] bg-gray-200 w-full">
                            <div class="h-full bg-black w-10"></div>
                        </div>
                        <p>2021</p>
                    </div>
                    <div class="space-y-2">
                        <div class="h-[4px] bg-gray-200 w-full">
                            <div class="h-full bg-black w-10"></div>
                        </div>
                        <p>2023</p>
                    </div>
                    <div class="space-y-2 ">
                        <div class="h-[4px]  bg-gray-200 w-full">
                            <div class="h-full bg-black w-10"></div>
                        </div>
                        <p>2024</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative bg-no-repeat bg-cover min-h-[120vh]">
            <img src="/assets/stores/images/banner/world-map.png" class="absolute z-0" alt="">

            <div class="py-20 max-w-[80%] mx-auto z-50 relative">
                <div class="w-3/4 mx-auto text-center space-y-5">
                    <p class="text-center text-4xl font-bold " >
                        Being the catalyst for nutritious and sustainable <span class="bg-gradient-to-b from-black to-primary bg-clip-text text-transparent">food and a brighter future for all</span>
                    </p>
    
                    <p class="text-muted font-medium">By providing quality cooking oils and ingredients, we hope to make a positive impact on people's health and well-being, as well as the planet's future.</p>
                </div>
            </div>
        </div>


        <div class="py-20 max-w-[80%] mx-auto space-y-20">
            <div class="space-y-4">
                <p class="text-4xl font-bold leading-tight">Frequently asked questions</p>
                <p class="mx-auto text-muted font-medium leading-[23.04px]">We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more </p>
            </div>

            <div class="space-y-10">
                <FaqItem v-for="(faq) in faqs" :question="faq.question" :answer="faq.answer" />
            </div>
        </div>
    </GuestLayout>
</template>