<script setup>
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div class="">
        <div class="flex mx-auto py-5 max-w-[80%] justify-between items-center">
            <div class="flex space-x-5 items-center">
                <Link :href="route('group.home')">
                    <img src="/assets/group/images/logo.png" class="h-[40px]" alt="">
                </Link>

                <ul class="flex space-x-5 border-l-2 px-5 h-full items-center">
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
            
            <div>
                <ul class="flex space-x-5">
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('group.blog')">Blog</Link>
                    </li>
                    <li>    
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('group.blog')">Contact Us</Link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>