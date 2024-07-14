<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import ProductItem from '@/Stores/Partials/Products/ProductItem.vue';

defineProps({
    products: {type: {}}
})

const { render, format } = usePlatform('home')

const title = render({
                default_value: 'Organic farm produce, sourced and delivered at unbeatable wholesale prices.',
                key: 'product_sections',
                value: 'title'
            })

const caption = render({
                default_value: 'Your one-stop wholesale solution for top-quality organic farm produces, delivered at competitive prices.',
                key: 'product_sections',
                value: 'caption'
            })
</script>

<template>
    <div class="md:py-20 py-10 bg-primary-50">
        <div class="md:space-y-20 space-y-10 md:max-w-[80%] px-2 mx-auto">
            <div class="md:w-8/12 mx-auto space-y-4">
                <p class="md:text-4xl text-2xl font-bold text-center leading-tight">{{ title }}</p>
                <p class="text-center md:w-10/12 mx-auto md:text-lg text-muted font-medium leading-[23.04px]">{{ caption }}</p>
            </div>

            <div class="grid md:grid-cols-3 md:gap-20 md:w-11/12 mx-auto">
                <ProductItem v-for="(product) in products" :product="product" />
            </div>
        </div>
    </div>
</template>