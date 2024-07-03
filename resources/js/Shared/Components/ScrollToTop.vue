<script setup>
import { ChevronUpIcon } from '@heroicons/vue/24/solid'
import { onMounted, ref } from 'vue';

    const show = ref(false)

    const toggle = () => window.scrollY > (window.innerHeight * 2) ? show.value = true : show.value = false;

    onMounted(() => {
        window.addEventListener('scroll', (e) => toggle())
        // return windows.removeEventListener('scroll', (e) => toggle());
    })

    function scrollUp(){
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        })
    }
</script>

<template>
    <button @click="scrollUp" v-if="show" class="btn ring-0 fixed bottom-3 right-3 rounded-full p-2 bg-primary hover:bg-primary-600 duration-500 text-white border border-white">
        <ChevronUpIcon class='w-6 h-6' />
    </button>
</template>