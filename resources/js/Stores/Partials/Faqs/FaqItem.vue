<script setup>
    import {PlusIcon} from '@heroicons/vue/24/solid';

    defineProps({
        question: {},
        answer: {}
    })
</script>

<template>
    <div class="flex items-center space-x-4">
        <div>
            <PlusIcon class="size-5 text-primary" />
        </div>
        <div>
            <p class="font-bold underline decoration-gray-200 underline-offset-[10px]">{{question}}</p>
        </div>
    </div>
</template>