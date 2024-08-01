<script setup>
import { ref } from 'vue';
import { Splide, SplideSlide, SplideTrack } from '@splidejs/vue-splide';
import '@splidejs/vue-splide/css/core';
import { ArrowRightIcon, ArrowLeftIcon } from '@heroicons/vue/24/solid';


const props = defineProps({
    processes: {}
})

const options = {
    type: 'loop',
    perPage: 4,
    perMove: 1,
    gap: '10px',
    autoplay: true,
    pagination: false,
    breakpoints: {
        640: {
			perPage: 1,
		},
        900: {
			perPage: 2,
		},
        1300: {
			perPage: 3,
		},
    }
}

</script>

<template>
    <div class="overflow-x-auto scrollbar-none">
        <div class="px -4 md:pl-[11.5%] ">
            <div class="flex gap-5 md:gap-0">
                <Splide :has-track="false"  :options="options" >
                    <SplideTrack>
                        <SplideSlide v-for="process in processes" class="shrink-0 w-full md:w-[344px]">
                            <div class="bg-white w-full box-border aspect-[9/11] relative">
                                <img :src="process.image" class="h-full w-full object-cover" alt="">
                                <div class="z-50 absolute top-0 bottom-0 left-0 right-0  h-full items-end text-white flex"
                                >
                                    <div class="space-y-3 py-10 h-[80%] flex flex-col justify-end px-5 bg-gradient-to-t from-primary-600 to-transparent" >
                                        <p class="text-xl font-semibold">{{process.title}} </p>
                                        <p class="text-sm">{{process.caption}}</p>
                                    </div>
                                </div>
                            </div>
                        </SplideSlide>
                    </SplideTrack>

                    <div class="splide__arrows flex space-x-10 mt-10">
                        <button class="md:size-14 splide__arrow--prev size-12 border border-white/20 group hover:border-white rounded-full flex justify-center items-center ">
                            <ArrowLeftIcon class="w-6 group-hover:text-white text-white/20" />
                        </button>
                        <button class="md:size-14 size-12 splide__arrow--next border border-white/20 group hover:border-white rounded-full flex justify-center items-center ">
                            <ArrowRightIcon class="w-6 group-hover:text-white text-white/20" />
                        </button>
                    </div>
                </Splide>
            </div>
        </div>
    </div>
</template>