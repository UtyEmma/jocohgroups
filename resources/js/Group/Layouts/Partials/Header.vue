<script setup>
import { Bars2Icon } from '@heroicons/vue/24/solid';
import { Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';

const show = ref(false)
const el = ref()
const btn = ref()

const hide = (e) => {
    if(!btn.value?.contains(e.target) && !el.value?.contains(e.target)) {
        show.value = false
    }
}

onMounted(() => {
    document.addEventListener('click', hide)
})
</script>

<template>
    <div class="">
        <div class="flex mx-auto py-5 md:max-w-[80%] px-4 relative justify-between items-center">
            <div class="flex space-x-5 justify-between w-full md:justify-normal items-center">
                <Link :href="route('group.home')">
                    <img src="/assets/group/images/logo.png" class="h-[40px]" alt="">
                </Link>

                <div class="block md:hidden">
                    <button ref="btn" v-on:click="show = !show" class="bg-primary p-2 active:scale-90 duration-500">
                        <Bars2Icon class="h-6 w-6 text-white" />
                    </button>

                    <ul v-if="show" ref="el" class="absolute z-50 border-y px-4 py-3 shadow-sm divide-y-[1px] top-[100%] left-0 right-0 bg-white">
                        <li>
                            <Link class="py-4 block" :href="route('group.home')">Home</Link>
                        </li>
                        <li >
                            <Link class="py-4 block" :href="route('group.about')">About Us</Link>
                        </li>
                        <li >
                            <Link class="py-4 block" :href="route('group.blog')">Our Blog</Link>
                        </li>
                        <li >
                            <a class="py-4 block" href="">FAQs</a>
                        </li>
                        <li >
                            <a class="py-4 block" href="">Contact Us</a>
                        </li>
                    </ul>
                </div>


                <ul class="md:flex hidden space-x-5 border-l-2 px-5 h-full items-center">
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('group.home')">Home</Link>
                    </li>
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('group.about')">Business</Link>
                    </li>
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" href="#">Careers</Link>
                    </li>
                </ul>
            </div>
        
            <ul class="md:flex shrink-0 hidden space-x-5">
                <li>
                    <Link class="hover:text-primary duration-500 font-medium" :href="route('group.blog')">Blog</Link>
                </li>
                <li>    
                    <Link class="hover:text-primary duration-500 font-medium" :href="route('group.blog')">Contact Us</Link>
                </li>
            </ul>
        </div>
    </div>
</template>