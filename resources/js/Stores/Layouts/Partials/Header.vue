<script setup>
    import LocationIcon from "@/Shared/Icons/LocationIcon.vue";
    import CallIcon from "@/Shared/Icons/CallIcon.vue";
    import SkypeIcon from "@/Shared/Icons/SkypeIcon.vue";
    import FacebookIcon from "@/Shared/Icons/FacebookIcon.vue";
    import TwitterIcon from "@/Shared/Icons/TwitterIcon.vue";
    import LinkedInIcon from "@/Shared/Icons/LinkedInIcon.vue";
    import { Link } from '@inertiajs/vue3';
    import usePlatform from "@/Shared/Hooks/usePlatform";
import { Bars2Icon } from "@heroicons/vue/24/solid";
import { onMounted, ref } from "vue";

    const { settings } = usePlatform()

    const show = ref(false)

    const el = ref()
    const btn = ref()

    const hide = (e) => {
        if(!btn.value?.contains(e.target) && !el.value?.contains(e.target)) {
            if(show.value) show.value = false
        }
    }

    onMounted(() => {
        document.addEventListener('click', hide)
    })
</script>

<template>
    <header>
        <div class="md:flex ">
            <div class="md:w-8/12 py-4 text-white md:space-x-10 space-y-3 md:space-y-0 flex flex-col md:flex-row items-center bg-secondary md:pl-[16%]">
                <div>
                    <p class="text-sm md:text-base">That’s right, we only sell 100% organic</p>
                </div>

                <div class="border-l-2 hidden md:block"></div>
                
                <div class="flex flex-end divide-x-2">
                    <div v-if="settings.contact_address" class="flex items-center px-3 space-x-2 md:space-x-3 text-sm">
                        <LocationIcon class="md:size-5 size-4 stroke-white" />
                        <span>{{settings.contact_address}}</span>
                    </div>
                    
                    <div v-if="settings.contact_phone" class="flex items-center px-3 space-x-2 md:space-x-3 text-sm">
                        <CallIcon class="md:size-5 size-4 fill-white" />
                        <span>{{settings.contact_phone}}</span>
                    </div>
                </div>
            </div>
            <div class="md:w-4/12 bg-primary flex space-x-7 justify-center md:justify-start items-center py-3 md:pl-[5%]">
                <a v-if="settings.skype_link" :href="settings.skype_link">
                    <SkypeIcon class="size-4 md:size-5 fill-white" />
                </a>
                <a v-if="settings.facebook_link" :href="settings.facebook_link">
                    <FacebookIcon class="size-4 md:size-5 fill-white" />
                </a>
                <a v-if="settings.twitter_link" :href="settings.twitter_link">
                    <TwitterIcon class="size-4 md:size-5 fill-white" />
                </a>
                <a v-if="settings.linkedin_link" :href="settings.linkedin_link" >
                    <LinkedInIcon class="size-4 md:size-5 fill-white" />
                </a>
            </div>
        </div>

        <div class="md:flex mx-auto px-4 py-5 md:max-w-[80%] relative justify-between items-center">
            <div class="flex space-x-5 justify-between md:justify-normal items-center">
                <Link :href="route('stores.home')">
                    <img src="/assets/stores/images/logo.png" class="h-8 md:h-[40px]" alt="">
                </Link>

                <div class="block md:hidden">
                    <button ref="btn"  v-on:click="show = !show" class="bg-primary p-2 active:scale-90 duration-500">
                        <Bars2Icon class="h-6 w-6 text-white" />
                    </button>

                    <ul v-if="show" ref="el" class="absolute z-50 border-y px-4 py-3 shadow-sm divide-y-[1px] top-[100%] left-0 right-0 bg-white">
                        <li>
                            <a class="py-4 block" :href="route('stores.home')">Home</a>
                        </li>
                        <li >
                            <a class="py-4 block" :href="route('stores.about')">About Us</a>
                        </li>
                        <li >
                            <a class="py-4 block" :href="route('stores.products')">Products</a>
                        </li>
                        <li >
                            <a class="py-4 block" href="">FAQs</a>
                        </li>
                        <li >
                            <a class="py-4 block" href="">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <ul class="hidden md:flex space-x-5 border-l-2 px-5 h-full items-center">
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('stores.home')">Home</Link>
                    </li>
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('stores.products')">Products</Link>
                    </li>
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('stores.about')">About Us</Link>
                    </li>
                </ul>
            </div>
            
            <div>
                <ul class="hidden md:flex space-x-5">
                    <li>
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('group.blog')">FAQs</Link>
                    </li>
                    <li>    
                        <Link class="hover:text-primary duration-500 font-medium" :href="route('stores.contact')">Contact Us</Link>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</template>