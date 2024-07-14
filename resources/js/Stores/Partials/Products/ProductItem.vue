<script setup >

const props = defineProps({
    product: {type: {}}
})

</script>

<template>
    <div>
        <a :href="route('stores.products.show', {
            product: product.slug
        })" class="p-3 block bg-white rounded-lg md:rounded-2xl">

            <div class="border-2 border-gray-300 bg-gray-100 h-96 overflow-hidden md:rounded-xl rounded-md flex items-center justify-center">
                <img :src="product.image" class="w-full h-full object-cover" alt="">
            </div>

            <div class="pt-3 text-center">
                <p class="font-semibold">{{ product.title }}</p>
            </div>
        </a>
    </div>
</template>