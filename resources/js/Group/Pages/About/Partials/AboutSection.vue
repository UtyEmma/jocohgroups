<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import Banner from '@/Group/Svgs/Banner.vue';

const { render } = usePlatform('about')

const title = render({
    default_value: 'Our goals.',
    key: 'about_section',
    value: 'title'
})

const caption = render({
    default_value: 'We strive to be the gold standard for high-quality, sustainably grown agricultural products. With a commitment to environmental stewardship and social responsibility, we work to deliver fresh, nutritious, and delicious food to our customers, while also creating jobs and economic opportunities for our employees and communities. By harnessing the power of technology, sustainable farming practices, and community partnerships, we hope to contribute to a more just and resilient food system for all.',
    key: 'about_section',
    value: 'description'
})

</script>

<template>
    <section class="md:pt-36 py-10 space-y-10">

        <div class="md:space-y-10 space-y-5 px-4 md:max-w-[80%] mx-auto " >
            <h1 class="text-4xl md:text-6xl" >{{ title }}</h1>
            <p class="md:text-lg text-muted font-medium" >{{ caption }}</p>
        </div>

        <div class="w-full overflow-hidden">
            <Banner class="ms-4 h-20"/>
        </div>
    </section>
</template>