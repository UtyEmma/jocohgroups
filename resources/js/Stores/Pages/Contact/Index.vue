<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import GuestLayout from '@/Stores/Layouts/GuestLayout.vue';
    import PrimaryButton from '@/Stores/Components/Buttons/PrimaryButton.vue';
    import { ArrowRightIcon, ArrowLeftIcon } from '@heroicons/vue/24/solid';
    import FaqItem from '@/Stores/Partials/Faqs/FaqItem.vue';
    import ContactForm from '@/Stores/Partials/Contact/ContactForm.vue';

    const props = defineProps({
        faqs: {type: []}
    })

</script>

<template>
    <Head title="Contact Us" />

    <GuestLayout>

        <ContactForm />

        <div class="py-20 max-w-[80%] mx-auto space-y-20">
            <div class="space-y-4">
                <p class="text-4xl font-bold leading-tight">Frequently asked questions</p>
                <p class="mx-auto text-muted font-medium leading-[23.04px]">We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more </p>
            </div>

            <div class="space-y-10">
                <FaqItem v-for="(faq) in faqs" :question="faq.question" :answer="faq.answer" />
            </div>
        </div>
    </GuestLayout>
</template>