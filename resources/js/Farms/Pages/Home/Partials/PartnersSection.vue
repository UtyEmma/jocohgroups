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
    <div class="py-20 bg-[#FAF7F0]">
        <div class="mx-auto max-w-[80%] space-y-10">
            <div class="space-y-5 w-3/5 text-center mx-auto">
                <p class="uppercase text-primary">{{title}}</p>
                <h2 class="!font-inter text-5xl font-semibold heading-title" v-html="heading"></h2>
                <p class="text-muted md:px-10">{{caption}}</p>
            </div>

            <div class="border border-gray-200"></div>

            <div class="flex flex-wrap justify-center space-x-10">
                <a :href="partner.website" v-for="partner in partners" target="_blank" class="block">
                    <div  class="w-[140px] h-[140px] bg-white flex items-center justify-center">
                        <img :src="partner.image" class="w-3/4" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>