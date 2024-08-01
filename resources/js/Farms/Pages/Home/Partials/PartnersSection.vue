<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';


defineProps({
    partners: {}
})

const { render, format } = usePlatform('home')

const title = render({
    default_value: 'TRUSTED PARTNERS',
    key: 'partners_section',
    value: 'title'
})

const heading = render({
    default_value: "Partnerships and **Collaborations.**",
    key: 'partners_section',
    value: 'heading'
})

const caption = render({
    default_value: "Share experiences, exchange ideas, and collaborate on innovative projects that have the potential to revolutionize agriculture Together, we can build a resilient agricultural.",
    key: 'partners_section',
    value: 'caption'
})

</script>

<template>
    <div v-if="partners.length > 0" class="md:py-20 py-10 bg-[#FAF7F0]">
        <div class="mx-auto md:max-w-[80%] px-4 space-y-5 md:space-y-10">
            <div class="space-y-2 md:space-y-5 md:w-3/5 text-center mx-auto">
                <p class="uppercase text-primary">{{title}}</p>
                <h2 class="!font-inter text-2xl md:text-5xl font-semibold heading-title" v-html="heading"></h2>
                <p class="text-muted text-sm md:px-10">{{caption}}</p>
            </div>

            <div class="border-[1px] border-gray-200"></div>

            <div class="flex flex-wrap justify-center mx-auto">
                <a :href="partner.website" v-for="partner in partners" target="_blank" class="group block w-1/3 md:w-1/6 p-2">
                    <div  class=" bg-white flex items-center w-full aspect-square justify-center">
                        <img :src="partner.image" class="w-4/5 group-hover:scale-105 duration-300 object-contain" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>