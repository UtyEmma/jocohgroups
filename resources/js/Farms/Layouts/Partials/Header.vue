<script setup>
    import LocationIcon from "@/Shared/Icons/LocationIcon.vue";
    import CallIcon from "@/Shared/Icons/CallIcon.vue";
    import SkypeIcon from "@/Shared/Icons/SkypeIcon.vue";
    import FacebookIcon from "@/Shared/Icons/FacebookIcon.vue";
    import TwitterIcon from "@/Shared/Icons/TwitterIcon.vue";
    import LinkedInIcon from "@/Shared/Icons/LinkedInIcon.vue";
    import { Link } from '@inertiajs/vue3';
import usePlatform from "@/Shared/Hooks/usePlatform";

    const { settings } = usePlatform()
</script>

<template>
    <header>
        <div class="flex">
            <div class="w-8/12 py-4 text-white space-x-10 flex bg-secondary pl-[16%]">
                <div>
                    <p>That’s right, we only sell 100% organic</p>
                </div>

                <div class="border-l-2"></div>
                
                <div class="flex items-center space-x-3">
                    <LocationIcon class="size-5 stroke-white" />
                    <span>{{settings.contact_address}}</span>
                </div>
                
                <div class="border-l-2"></div>
                
                <div class="flex items-center space-x-3">
                    <CallIcon class="size-5 fill-white" />
                    <span>{{settings.contact_phone}}</span>
                </div>
            </div>
            <div class="w-4/12 bg-primary flex space-x-7 items-center pl-[5%]">
                <a href="#">
                    <SkypeIcon class="size-5 fill-white" />
                </a>
                <a v-if="settings.facebook_link" :href="settings.facebook_link">
                    <FacebookIcon class="size-5 fill-white" />
                </a>
                <a v-if="settings.twitter_link" :href="settings.twitter_link">
                    <TwitterIcon class="size-5 fill-white" />
                </a>
                <a v-if="settings.linkedin_link" :href="settings.linkedin_link" >
                    <LinkedInIcon class="size-5 fill-white" />
                </a>
            </div>
        </div>

        <div class="flex mx-auto py-5 max-w-[80%] justify-between items-center">
            <div class="flex space-x-5 items-center">
                <Link :href="route('farms.home')">
                    <img src="/assets/farms/images/logo.png" class="h-[40px]" alt="">
                </Link>

                <ul class="flex space-x-5 border-l-2 px-5 h-full items-center">
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('stores.home')">Home</Link>
                    </li>
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('stores.products')">Products</Link>
                    </li>
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" href="#">About Us</Link>
                    </li>
                </ul>
            </div>
            
            <div>
                <ul class="flex space-x-5">
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('group.blog')">FAQs</Link>
                    </li>
                    <li>    
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('group.blog')">Contact Us</Link>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</template>