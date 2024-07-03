<script setup >
import CallIcon from '@/Shared/Icons/CallIcon.vue';
import MailIcon from '@/Shared/Icons/MailIcon.vue';
import LocationIcon from '@/Shared/Icons/LocationIcon.vue';
import FacebookIcon from '@/Shared/Icons/FacebookIcon.vue';
import TwitterIcon from '@/Shared/Icons/TwitterIcon.vue';
import LinkedInIcon from '@/Shared/Icons/LinkedInIcon.vue';
import InstagramIcon from '@/Shared/Icons/InstagramIcon.vue';

</script>

<template>
    <section class="bg-secondary py-20">
        <div class="max-w-6xl mx-auto space-y-10">
            <div class="flex divide-x border-y text-white border-[#ffffff30] divide-[#ffffff30]">
                <div class="py-10 pe-20 space-y-5" >
                    <p class="text-xl " >Businesses</p>

                    <ul class="space-y-2 font-light text-[#C9D7D2]" >
                        <li>
                            <a href="#" class="hover:text-white duration-500" >Jocoh Group</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white duration-500" >Jocoh Farms</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white duration-500" >Jocoh Stores</a>
                        </li>
                    </ul>
                </div>

                <div class="py-10 pl-20 pr-32 space-y-5" >
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

                <div class="py-10 pl-16 pr-20 space-y-5" >
                    <p class="text-xl" >Contact Info.</p>

                    <ul class="space-y-3 font-light text-[#C9D7D2]" >
                        <li class="flex space-x-2 items-center" >
                            <div>
                                <CallIcon class="size-5 fill-primary" />
                            </div>

                            <div>
                                <a href="#" class="hover:text-white duration-500" >+234 818 329 5257</a>
                            </div>
                        </li>
                        <li class="flex space-x-2 items-start">
                            <div>
                                <MailIcon class="size-5 stroke-primary mt-1" />
                            </div>

                            <div>
                                <a href="#" class="hover:text-white duration-500 block" >info@jocohgroup.com</a>
                                <a href="#" class="hover:text-white duration-500 block" >jocohgroup@gmail.com</a>
                            </div>
                        </li>
                        <li class="flex space-x-2 items-center">
                            <div>
                                <LocationIcon class="size-5 stroke-primary" />
                            </div>

                            <div>
                                <a href="#" class="hover:text-white duration-500" >Old park ogbete, Enugu State Nigeria</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="py-10 pl-10 space-y-5" >
                    <ul class="space-y-5 items-center" >
                        <li>
                            <a href="#" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <FacebookIcon class="fill-white size-4"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <TwitterIcon class="fill-white size-4"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <LinkedInIcon class="fill-white size-4"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="size-10 rounded-full border-[#ffffff30] group border flex items-center justify-center">
                                <InstagramIcon class="fill-white size-4"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="text-center pt-10 text-[#C9D7D2]">
                <p>© Copyright - <a href="" class="text-[#F2C200]" >Jocoh Group</a> | 2024</p>
            </div>
        </div>
    </section>
</template>