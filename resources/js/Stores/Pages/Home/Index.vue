<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Stores/Layouts/GuestLayout.vue';
import ProductItem from '@/Stores/Partials/Products/ProductItem.vue';
import FaqItem from '@/Stores/Partials/Faqs/FaqItem.vue';

defineProps({
    products: {type: []},
    faqs: {type: []}
});

</script>

<template>
    <Head title="Welcome" />
    <GuestLayout >
        <div class="pt-20 min-h-[75vh] bg-[#FFFBED] bg-contain bg-[100px] bg-[url('/assets/stores/images/banner/food-items.png')] bg-opacity-10" >
            <div class="max-w-[80%] mx-auto">
                <div class="w-10/12 mx-auto">
                    <h1 class="text-center italic font-medium text-primary leading-[78px] text-6xl">We are providing you with everyday fresh & organic Products.</h1>
                </div>

                <div class="w-7/12 mx-auto" >
                    <img src="/assets/stores/images/banner/food-stuffs.png" alt="">
                </div>
            </div>
        </div>

        <div class="py-20 space-y-10">
            <div class="w-7/12 mx-auto space-y-4">
                <p class="text-4xl font-bold text-center leading-tight">Looking to place a wholesale order with us? <br> Follow these simple steps to get started.</p>
                <p class="text-center w-3/4 mx-auto text-lg text-muted font-medium leading-[23.04px]">We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more than just a digital space.</p>
            </div>

            <div class="max-w-[80%] mx-auto md:px-20 px-4">
                <div class="grid grid-cols-2 gap-x-16 items-center">
                    <div>
                        <img src="/assets/stores/images/preview.png" alt="">
                    </div>

                    <div class="space-y-7">
                        <div class="space-y-2">
                            <div class="flex space-x-4 items-center">
                                <div>
                                    <span class="w-12 h-12 flex items-center justify-center font-semibold text-xl text-white bg-primary rounded-full">1</span>
                                </div>
    
                                <div class="text-xl font-bold">Visit the website</div>
                            </div>
                            
                            <div class="space-y-2">
                                <p class="text-muted">Log on to our website, Navigate to the product page of the item you're interested in purchasing in bulk.</p>
        
                                <div class="py-[3px] bg-gradient-to-r from-primary via-primary-100 to-primary-50"></div>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex space-x-5 items-center">
                                <div>
                                    <span class="w-12 h-12 flex items-center justify-center font-semibold text-xl text-white bg-primary rounded-full">2</span>
                                </div>
    
                                <div class="text-xl font-bold">Request on the contact page</div>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex space-x-5 items-center">
                                <div>
                                    <span class="w-12 h-12 flex items-center justify-center font-semibold text-xl text-white bg-primary rounded-full">3</span>
                                </div>
    
                                <div class="text-xl font-bold">Get your items delivered</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="py-20 space-y-10 max-w-[80%] mx-auto">
            <div class="space-y-4">
                <p class="text-4xl font-bold text-center leading-tight">Shop Wholesale & Retails</p>
                <p class="text-center w-3/4 mx-auto text-muted font-medium">You have the to shop both retail and wholesale we have product available across major stores in Nigeria.</p>
            </div>

            <div class="grid grid-cols-2 gap-x-10">
                <div>
                    <div class="w-full aspect-[4/3] bg-[url('/assets/stores/images/people-shopping.png')] bg-bottom bg-cover no-repeat"></div>
                </div>
                <div>
                    <div class="w-full aspect-[4/3] bg-[url('/assets/stores/images/bag-with-foodstuffs.png')] bg-[15%] bg-cover no-repeat"></div>
                </div>
            </div>

        </div>

        <div class="py-20 bg-primary-50">
            <div class="space-y-20 max-w-[80%] mx-auto">
                <div class="w-8/12 mx-auto space-y-4">
                    <p class="text-4xl font-bold text-center leading-tight">Organic farm produce, sourced and delivered at unbeatable wholesale prices.</p>
                    <p class="text-center w-10/12 mx-auto text-lg text-muted font-medium leading-[23.04px]">Your one-stop wholesale solution for top-quality organic farm produces, delivered at competitive prices.</p>
                </div>

                <div class="grid grid-cols-3 gap-20 w-11/12 mx-auto">
                    <ProductItem v-for="(product) in products" :product="product" />
                </div>
            </div>
        </div>

        <div class="py-20 max-w-[80%] mx-auto space-y-20">
            <div class="space-y-4">
                <p class="text-4xl font-bold leading-tight">Frequently asked questions</p>
                <p class="mx-auto text-lg text-muted font-medium leading-[23.04px]">We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more </p>
            </div>

            <div class="space-y-10">
                <FaqItem v-for="(faq) in faqs" :question="faq.question" :answer="faq.answer" />
            </div>
        </div>
    </GuestLayout>
</template>
