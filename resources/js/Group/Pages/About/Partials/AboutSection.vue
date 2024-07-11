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
    <section class="pt-36 space-y-10">

        <div class="space-y-10 max-w-[80%] mx-auto " >
            <h1 class="text-6xl" >{{ title }}</h1>
            <p class="text-lg text-muted font-medium" >{{ caption }}</p>
        </div>


        <Banner class="ms-[10%]"/>
    </section>
</template>