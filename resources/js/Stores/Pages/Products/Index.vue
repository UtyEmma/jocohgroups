<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Stores/Layouts/GuestLayout.vue';
import ProductItem from '@/Stores/Partials/Products/ProductItem.vue';
import FaqItem from '@/Stores/Partials/Faqs/FaqItem.vue';

</script>

<template>
    <Head title="Welcome" />
    <GuestLayout>
        <section class="bg-primary ">
            <div class="w-full py-20 h-full bg-opacity-5 bg-contain"
                style="background-image: url('/assets/stores/images/banner/food-items-red.png');"
            >
                <div class="text-center space-y-3">
                    <h1 class="font-medium text-white italic leading-[78px] text-6xl">Our Products</h1>
                    <p class="text-white">Explore some of our best product selling fast in the markets.</p>
                </div>
            </div>
        </section>

        <div class="py-20 bg-primary-50">
            <div class="space-y-20 max-w-[80%] mx-auto">
                <div class="grid grid-cols-3 gap-20 w-11/12 mx-auto">
                    <ProductItem />
                    <ProductItem />
                    <ProductItem />
                    <ProductItem />
                    <ProductItem />
                    <ProductItem />
                </div>
            </div>
        </div>

        <div class="py-20 max-w-[80%] mx-auto space-y-20">
            <div class="space-y-4">
                <p class="text-4xl font-bold leading-tight">Frequently asked questions</p>
                <p class="mx-auto text-lg text-muted font-medium leading-[23.04px]">We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more </p>
            </div>

            <div class="space-y-10">
                <FaqItem question="Do you sell in wholesale and retails ?" answer="" />
                <FaqItem question="Do you accept payment in other currencies ?" answer="" />
                <FaqItem question="Are you open to partnerships for each products?" answer="" />
                <FaqItem question="Is there a merchant part of this where we can sell on your platform?" answer="" />
            </div>
        </div>
    </GuestLayout>
</template>