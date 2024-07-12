<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import {ref, onMounted} from 'vue';

const { render, format } = usePlatform('about')

const title = render({
                default_value: 'Our Journey so far',
                key: 'journey_section',
                value: 'title'
            })

const steps = render({
                default_value: [],
                key: 'journey_section',
                value: 'journey'
            })

const step = ref(0)

function handleNext () {
    step.value = ((step.value + 1) < steps.length) ? (step.value + 1) : 0;
    next()
}

function next(){
    setTimeout(() => handleNext(), 3000);
}

onMounted(() => {
    next()
})

</script>

<template>
    <div class="py-20 mb-20 max-w-[80%] mx-auto space-y-28">
        <div>
            <p class="text-center bg-gradient-to-b from-black to-primary bg-clip-text text-transparent text-4xl font-bold" >{{ title }}</p>
        </div>

        <div>
            <div class="grid grid-cols-4 mb-5">
                <div v-for="(journey, index) in steps" class="pe-5" >
                    <div v-if="index == step">
                        <div class="bg-gray-100 p-4 h-80 mb-3 bg-cover bg-center" 
                            :style="{
                                backgroundImage: `url(${format(journey.image, {prepend: 'storage/'})})`
                            }"
                        ></div>
                        <p class="font-semibold">{{journey.title}}</p>
                    </div>
                </div>
            </div>

            <div class=" grid grid-cols-4 mb-3">
                <div  v-for="(journey, index) in steps" class="space-y-2">
                    <div class="h-[4px] bg-gray-200 w-full">
                        <div class="h-full bg-black w-10"></div>
                    </div>
                    <p>{{ journey.date }}</p>
                </div>
            </div>
        </div>
    </div>
</template>