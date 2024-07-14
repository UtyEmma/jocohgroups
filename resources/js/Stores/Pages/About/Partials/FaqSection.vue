<script setup>
import FaqItem from '@/Stores/Partials/Faqs/FaqItem.vue';
import usePlatform from '@/Shared/Hooks/usePlatform';
import {ref, onMounted} from 'vue';

const { render, format } = usePlatform('about')

defineProps({
    faqs: {type: {}}
})

const title = render({
                default_value: 'Frequently asked questions',
                key: 'faq_section',
                value: 'title'
            })

const caption = render({
                default_value: 'We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more',
                key: 'faq_section',
                value: 'caption'
            })
    
</script>

<template>
    <div class="md:py-20 md:max-w-[80%] mx-auto py-10 px-4 space-y-10 md:space-y-20">
        <div class="space-y-2 md:space-y-4">
            <p class="text-2xl md:text-4xl font-bold leading-tight">{{ title }}</p>
            <p class="mx-auto text-muted font-medium text-sm md:leading-[23.04px]">{{ caption }}</p>
        </div>

        <div class="space-y-10">
            <FaqItem v-for="(faq) in faqs" :question="faq.question" :answer="faq.answer" />
        </div>
    </div>
</template>