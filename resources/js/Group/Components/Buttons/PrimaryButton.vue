<script setup>
    import { ArrowRightIcon } from '@heroicons/vue/24/solid'
</script>

<template>
    <button class="bg-primary hover:bg-primary-600 duration-500 inline-flex items-center  border-0 text-white py-1 ps-5 px-1 rounded-l-full rounded-r-full">
        <slot />
        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-white  ms-5">
            <ArrowRightIcon class="w-5 h-auto text-primary" />
        </span>
    </button>
</template>