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
    <div class="py-20 bg-primary-50">
        <div class="space-y-20 max-w-[80%] mx-auto">
            <div class="w-8/12 mx-auto space-y-4">
                <p class="text-4xl font-bold text-center leading-tight">{{ title }}</p>
                <p class="text-center w-10/12 mx-auto text-lg text-muted font-medium leading-[23.04px]">{{ caption }}</p>
            </div>

            <div class="grid grid-cols-3 gap-20 w-11/12 mx-auto">
                <ProductItem v-for="(product) in products" :product="product" />
            </div>
        </div>
    </div>
</template>