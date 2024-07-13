<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import FacebookIcon from '@/Shared/Icons/FacebookIcon.vue';
import TwitterIcon from '@/Shared/Icons/TwitterIcon.vue';
import LinkedInIcon from '@/Shared/Icons/LinkedInIcon.vue';
import InstagramIcon from '@/Shared/Icons/InstagramIcon.vue';

const { render, format } = usePlatform('contact')

const title = render({
                default_value: "Need assistance with your order or have questions about our products? We’re here to help.",
                key: 'contact_section',
                value: 'title'
            })

const caption = render({
                default_value: "For inquires and complaint, drop a message for us and we would reach out to you, or visit our",
                key: 'contact_section',
                value: 'caption'
            })

const badge = render({
                default_value: "@JocohStores",
                key: 'contact_section',
                value: 'badge'
            })


</script>

<template>
    <section class="py-40 bg-[#FFFBED] bg-[url('/assets/group/images/svgs/waves.svg')] bg-no-repeat" >
        <div class="mx-auto max-w-[80%]">
            <div class="grid grid-cols-2 gap-20 items-center">
                <div class="space-y-4" >
                    <p class="font-bold text-4xl leading-relaxed text-primary">{{ title }}</p>
                    <p class="w-3/4 text-[18px] text-[#79746F]">{{ caption }}</p>

                    <div class="flex space-x-5 items-center" >
                        <div>
                            <a href="#" class="size-12 rounded-full border-primary group border hover:bg-primary flex items-center justify-center">
                                <FacebookIcon class="fill-primary group-hover:fill-white size-5"/>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="size-12 rounded-full border-primary group border hover:bg-primary flex items-center justify-center">
                                <TwitterIcon class="fill-primary group-hover:fill-white size-5"/>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="size-12 rounded-full border-primary group border hover:bg-primary flex items-center justify-center">
                                <LinkedInIcon class="fill-primary group-hover:fill-white size-5"/>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="size-12 rounded-full border-primary group border hover:bg-primary flex items-center justify-center">
                                <InstagramIcon class="fill-primary group-hover:fill-white size-5"/>
                            </a>
                        </div>
                        <div>
                            <p class="text-xl font-medium">{{ badge }}</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="rounded-[16px] bg-white p-14 space-y-8">
                        <p class="font-bold text-primary text-3xl">Contact Us</p>

                        <div class="space-y-5">
                            <div class="space-y-1">
                                <label class="text-muted font-medium">Your Name</label>
                                <input class="p-3 rounded-[8px] bg-[#F9F9F9] hover:bg-[#ededed] border border-[#F3F3F3] w-full" type="text">
                            </div>

                            <div class="space-y-1">
                                <label class="text-muted font-medium">Email</label>
                                <input class="p-3 rounded-[8px] bg-[#F9F9F9] border border-[#F3F3F3] w-full" type="text">
                            </div>

                            <div class="space-y-1">
                                <label class="text-muted font-medium">Your Name</label>
                                <textarea rows="5"class="p-3 resize-none rounded-[8px] bg-[#F9F9F9] border border-[#F3F3F3] w-full" type="text"></textarea>
                            </div>

                            <button class="w-full text-center bg-primary hover:bg-primary-900 duration-500 text-white py-3 rounded-[4px]">Send Message</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</template>