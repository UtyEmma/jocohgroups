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
                default_value: [
                    {
                        image: '/assets/stores/images/cac-document.png',
                        title: 'Operation Started.',
                        date: '2020'
                    },
                    {
                        image: '/assets/stores/images/delivery-trucks.png',
                        title: 'Delivered over 10m products',
                        date: '2021'
                    },
                    {
                        image: '/assets/stores/images/handshakes.png',
                        title: 'Partnered with Jocoh Farm',
                        date: '2023'
                    },
                    {
                        image: '/assets/stores/images/funds-raise.png',
                        title: 'We raised $56m',
                        date: '2024'
                    },
                ],
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
    <div class="md:py-20 py-10 mb-20 px-4 md:max-w-[80%] mx-auto space-y-10 md:space-y-28">
        <div>
            <p class="text-center bg-gradient-to-b from-black to-primary bg-clip-text text-transparent text-xl md:text-4xl font-bold" >{{ title }}</p>
        </div>

        <div>
            <div class="flex md:grid md:grid-cols-4 mb-5 overflow-hidden">
                <div v-for="(journey, index) in steps" class="" >
                    <Transition
                        class="duration-1000 "
                        name="custom-classes"
                        enter-from-class="-translate-x-full opacity-0"
                        enter-to-class="translate-x-0 opacity-full"
                        leave-from-class="translate-x-0 opacity-full"
                        leave-to-class="translate-x-full"
                        leave-active-class="opacity-[300]"
                    >
                        <div v-if="index == step">
                            <div class="mb-3 w-10/12 aspect-square bg-cover bg-center">
                                <img :src="journey.image" class="w-full h-full object-cover" v-fallback="`/storage/${journey.image}`" alt="">
                            </div>
                        </div>
                    </Transition>

                    <p  v-if="index == step" class="font-semibold">{{journey.title}}</p>

                </div>
            </div>

            <div class=" grid grid-cols-4 mb-3">
                <div  v-for="(journey, index) in steps" class="space-y-2">
                    <div class="h-[4px] bg-gray-200 w-full">
                        <div :class="`h-full transition-all duration-500 bg-black ${index <= step ? 'w-16' : 'w-6'}`"></div>
                    </div>
                    <p>{{ journey.date }}</p>
                </div>
            </div>
        </div>
    </div>
</template>