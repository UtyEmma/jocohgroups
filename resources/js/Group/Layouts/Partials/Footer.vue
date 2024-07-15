<script setup >
import CallIcon from '@/Shared/Icons/CallIcon.vue';
import MailIcon from '@/Shared/Icons/MailIcon.vue';
import LocationIcon from '@/Shared/Icons/LocationIcon.vue';
import FacebookIcon from '@/Shared/Icons/FacebookIcon.vue';
import TwitterIcon from '@/Shared/Icons/TwitterIcon.vue';
import LinkedInIcon from '@/Shared/Icons/LinkedInIcon.vue';
import InstagramIcon from '@/Shared/Icons/InstagramIcon.vue';
import { usePage } from '@inertiajs/vue3';

const { props } = usePage();

</script>

<template>
    <section class="bg-primary md:py-20 pb-10">
        <div class="max-w-6xl mx-auto space-y-5 px-4 md:space-y-10">
            <div class="md:flex md:divide-x border-y text-white border-[#ffffff30] divide-[#ffffff30]">
                <div class="py-10 pe-20 space-y-5" >
                    <p class="text-xl " >Businesses</p>

                    <ul class="space-y-2 font-light text-[#C9D7D2]" >
                        <li>
                            <a :href="route('group.home')" class="hover:text-white duration-500" >Jocoh Group</a>
                        </li>
                        <li>
                            <a :href="route('farms.home')" class="hover:text-white duration-500" >Jocoh Farms</a>
                        </li>
                        <li>
                            <a :href="route('stores.home')" class="hover:text-white duration-500" >Jocoh Stores</a>
                        </li>
                    </ul>
                </div>

                <div class="md:py-10 md:pl-20 md:pr-32 space-y-5" >
                    <p class="text-xl" >Company</p>

                    <ul class="space-y-2 font-light text-[#C9D7D2]" >
                        <li>
                            <a :href="route('group.about')" class="hover:text-white duration-500" >About Us</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white duration-500" >Contact Us</a>
                        </li>
                        <li>
                            <a :href="route('group.blog')" class="hover:text-white duration-500" >Blogs</a>
                        </li>
                    </ul>
                </div>

                <div class="md:py-10 md:pl-16 md:pr-20 space-y-5" >
                    <p class="text-xl" >Contact Info.</p>

                    <ul class="space-y-3 font-light text-[#C9D7D2]" >
                        <li class="flex space-x-2 items-center" >
                            <div>
                                <CallIcon class="size-5 fill-white" />
                            </div>

                            <div>
                                <a :href="`tel:${props.platform.settings.contact_phone}`" class="hover:text-white duration-500" >{{props.platform.settings.contact_phone}}</a>
                            </div>
                        </li>
                        <li class="flex space-x-2 items-start">
                            <div>
                                <MailIcon class="size-5 mt-1 stroke-white" />
                            </div>

                            <div>
                                <a :href="`mailto:${props.platform.settings.site_email}`" class="hover:text-white duration-500 block" >{{props.platform.settings.site_email}}</a>
                                <!-- <a href="#" class="hover:text-white duration-500 block" >jocohgroup@gmail.com</a> -->
                            </div>
                        </li>
                        <li class="flex space-x-2 items-center">
                            <div>
                                <LocationIcon class="size-5 stroke-white" />
                            </div>

                            <div>
                                <a href="#" class="hover:text-white duration-500" >{{props.platform.settings.contact_address}}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="md:py-10 md:pl-10 space-y-5" >
                    <ul class="space-y-5 flex md:block items-center" >
                        <li v-if="props.platform.settings?.facebook_link">
                            <a :href="props.platform.settings.facebook_link" target="_blank" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <FacebookIcon class="fill-white size-4"/>
                            </a>
                        </li>
                        <li v-if="props.platform.settings?.twitter_link">
                            <a :href="props.platform.settings.twitter_link" target="_blank" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <TwitterIcon class="fill-white size-4"/>
                            </a>
                        </li>
                        <li v-if="props.platform.settings?.linkedin_link">
                            <a :href="props.platform.settings.linkedin_link" target="_blank" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <LinkedInIcon class="fill-white size-4"/>
                            </a>
                        </li>
                        <li v-if="props.platform.settings?.instagram_link">
                            <a :href="props.platform.settings?.instagram_link" target="_blank" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <InstagramIcon class="fill-white size-4"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="text-center md:pt-10 text-[#C9D7D2]">
                <p>© Copyright - <a href="" class="text-[#F2C200]" >Jocoh Group</a> | 2024</p>
            </div>
        </div>
    </section>
</template>