<script setup>
import FaqItem from '@/Stores/Partials/Faqs/FaqItem.vue';
import usePlatform from '@/Shared/Hooks/usePlatform';

const { render, format } = usePlatform('contact')

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

defineProps({
    faqs: {type: {}}
})

</script>

<template>
    <div class="py-20 max-w-[80%] mx-auto space-y-20">
        <div class="space-y-4">
            <p class="text-4xl font-bold leading-tight">{{ title }}</p>
            <p class="mx-auto text-lg text-muted font-medium leading-[23.04px]">{{ caption }}</p>
        </div>

        <div class="space-y-10">
            <FaqItem v-for="(faq) in faqs" :question="faq.question" :answer="faq.answer" />
        </div>
    </div>
</template>