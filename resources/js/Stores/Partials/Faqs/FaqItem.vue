<script setup>
    import {PlusIcon, MinusIcon} from '@heroicons/vue/24/solid';
    import { ref } from 'vue';

    defineProps({
        question: {},
        answer: {}
    })

    const show = ref(false)

    const open = () => show.value = true;
    const close = () => show.value = false;

    const toggle = () => show.value = !show.value;
</script>

<template>
    <div class="flex space-x-4 md:w-7/12">
        <div class="mt-1">
            <MinusIcon v-show="show" class="size-5 text-primary " />
            <PlusIcon v-show="!show" class="size-5 text-primary " />
        </div>
        <div class="space-y-5">
            <div role="button" v-on:click="toggle" class="font-bold underline decoration-gray-200 underline-offset-[10px]">{{question}}</div>
            
            <Transition>
                <div v-if="show" >
                    {{ answer }}
                </div>
            </Transition>
        </div>
    </div>
</template>