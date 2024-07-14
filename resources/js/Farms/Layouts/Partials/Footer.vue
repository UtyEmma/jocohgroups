<script setup >
import CallIcon from '@/Shared/Icons/CallIcon.vue';
import MailIcon from '@/Shared/Icons/MailIcon.vue';
import LocationIcon from '@/Shared/Icons/LocationIcon.vue';
import FacebookIcon from '@/Shared/Icons/FacebookIcon.vue';
import TwitterIcon from '@/Shared/Icons/TwitterIcon.vue';
import LinkedInIcon from '@/Shared/Icons/LinkedInIcon.vue';
import InstagramIcon from '@/Shared/Icons/InstagramIcon.vue';
import usePlatform from '@/Shared/Hooks/usePlatform';

const {settings} = usePlatform()

const date = new Date();
</script>

<template>
    <section class="bg-secondary md:py-20 py-10 bg-[url(/assets/farms/images/windmill.png)] bg-cover bg-bottom">
        <div class="max-w-6xl mx-auto space-y-10">

            <div class="md:flex px-4 space-y-5 md:space-y-0 justify-between items-center mb-10">
                <div class="md:w-1/3 text-[#C9D7D2] space-y-5">
                    <img src="/assets/farms/images/logo.png" class="w-32" alt="">
                    <div>
                        <p>{{settings.site_description}}</p>
                    </div>
                </div>

                <div>
                    <ul class="flex space-x-3 items-center" >
                        <li v-if="settings.facebook_link" >
                            <a :href="settings.facebook_link" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <FacebookIcon class="fill-white size-4"/>
                            </a>
                        </li>
                        <li v-if="settings.twitter_link">
                            <a :href="settings.twitter_link" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <TwitterIcon class="fill-white size-4"/>
                            </a>
                        </li>
                        <li v-if="settings.linkedin_link">
                            <a :href="settings.linkedin_link" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <LinkedInIcon class="fill-white size-4"/>
                            </a>
                        </li>
                        <li v-if="settings.instagram_link">
                            <a :href="settings.instagram_link" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <InstagramIcon class="fill-white size-4"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="md:flex px-4 md:divide-x space-y-10 py-10 md:py-0 md:space-y-0 border-y text-white border-[#ffffff30] divide-[#ffffff30]">
                <div class="md:py-10 md:pe-20 space-y-5" >
                    <p class="text-xl " >Businesses</p>

                    <ul class="space-y-2 font-light text-[#C9D7D2]" >
                        <li>
                            <a :href="route('group.home')" target="_blank" class="hover:text-white duration-500" >Jocoh Group</a>
                        </li>
                        <li>
                            <a :href="route('farms.home')" target="_blank" class="hover:text-white duration-500" >Jocoh Farms</a>
                        </li>
                        <li>
                            <a :href="route('stores.home')" target="_blank" class="hover:text-white duration-500" >Jocoh Stores</a>
                        </li>
                    </ul>
                </div>

                <div class="md:py-10 md:pl-20 md:pr-32 space-y-5" >
                    <p class="text-xl" >Company</p>

                    <ul class="space-y-2 font-light text-[#C9D7D2]" >
                        <li>
                            <a href="#" class="hover:text-white duration-500" >About Us</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white duration-500" >Contact Us</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white duration-500" >Blogs</a>
                        </li>
                    </ul>
                </div>

                <div class="md:py-10 md:pl-16 md:pr-20 space-y-5" >
                    <p class="text-xl" >Contact Info.</p>

                    <ul class="space-y-3 font-light text-[#C9D7D2]" >
                        <li class="flex space-x-2 items-center" >
                            <div>
                                <CallIcon class="size-5 fill-primary" />
                            </div>

                            <div>
                                <a href="#" class="hover:text-white duration-500" >{{settings.contact_phone}}</a>
                            </div>
                        </li>
                        <li class="flex space-x-2 items-start">
                            <div>
                                <MailIcon class="size-5 stroke-primary mt-1" />
                            </div>

                            <div>
                                <a href="#" class="hover:text-white duration-500 block" >{{settings.site_email}}</a>
                            </div>
                        </li>
                        <li class="flex space-x-2 items-center">
                            <div>
                                <LocationIcon class="size-5 stroke-primary" />
                            </div>

                            <div>
                                <a href="#" class="hover:text-white duration-500" >{{settings.contact_address}}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="hidden md:block py-10 pl-10 space-y-5" >
                    
                </div>
            </div>

            <div class="text-center md:pt-10 text-sm md:text-base pb-20 md:pb-0 text-[#C9D7D2]">
                <p>© Copyright - <a :href="route('farms.home')" class="text-[#F2C200]" >{{settings.company_name}}</a> | {{date.getFullYear()}}</p>
            </div>
        </div>
    </section>
</template>