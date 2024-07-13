<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';

const { render, format } = usePlatform('home')

const title = render({
    default_value: 'OUR PRODUCTS',
    key: 'products_section',
    value: 'title'
})

const heading = render({
    default_value: 'Explore our organic **Products**',
    key: 'products_section',
    value: 'heading'
})

const caption = render({
    default_value: 'We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.',
    key: 'products_section',
    value: 'caption'
})

</script>

<template>
    <div class="py-20 bg-[#FAF7F0]">
        <div class="max-w-[80%] mx-auto space-y-10">
            <div class="space-y-5 w-3/5 text-center mx-auto">
                <p class="uppercase text-primary">{{ title }}</p>
                <h2 class="!font-inter text-5xl font-semibold heading-title" v-html="heading"></h2>
                <p class="text-muted md:px-10">{{ caption }}</p>
            </div>

            <div class="flex justify-center gap-5">
                <div class="px-6 py-2 bg-[#4CAE47] font-medium text-white">All</div>
                <div class="px-6 py-2 bg-white font-medium text-muted">Dairy Products</div>
                <div class="px-6 py-2 bg-white font-medium text-muted">Tomato Paste</div>
                <div class="px-6 py-2 bg-white font-medium text-muted">Food Seasoning</div>
                <div class="px-6 py-2 bg-white font-medium text-muted">Milk</div>
                <div class="px-6 py-2 bg-white font-medium text-muted">Edible oil</div>
            </div>

            <div class="grid grid-cols-3 gap-20">
                <div class="">
                    <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                        <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                        <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                            <p class="text-lg text-gray-100">Product Name</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                        <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                        <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                            <p class="text-lg text-gray-100">Product Name</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                        <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                        <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                            <p class="text-lg text-gray-100">Product Name</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                        <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                        <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                            <p class="text-lg text-gray-100">Product Name</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                        <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                        <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                            <p class="text-lg text-gray-100">Product Name</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                        <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                        <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                            <p class="text-lg text-gray-100">Product Name</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>