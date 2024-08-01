<script setup>
import FacebookIcon from '@/Shared/Icons/FacebookIcon.vue';
import InputError from '@/Shared/Components/Input/InputError.vue';
import Spinner from '@/Shared/Components/Spinner.vue';
import TwitterIcon from '@/Shared/Icons/TwitterIcon.vue';
import LinkedInIcon from '@/Shared/Icons/LinkedInIcon.vue';
import InstagramIcon from '@/Shared/Icons/InstagramIcon.vue';
import { usePage } from '@inertiajs/vue3';
import useContactForm from '@/Shared/Hooks/useContactForm';

const {props} = usePage()

const {form, loading, send, status} = useContactForm()

</script>

<template>
    <section class="md:py-40 py-10 bg-[#3333331A] bg-[url('/assets/group/images/svgs/waves.svg')] bg-no-repeat" >
        <div class="mx-auto max-w-7xl px-4">
            <div class="grid md:grid-cols-2 md:gap-20 gap-10 items-center">
                <div class="space-y-4" >
                    <p class="font-bold text-3xl md:text-4xl">Contact Us</p>
                    <p class="md:w-3/4 text-[18px] text-[#79746F]">For inquires and complaint, drop a message for us and we would reach out to you, or visit our</p>

                    <div class="flex space-x-5 items-center" >
                        <div v-if="props.platform.settings.facebook_link">
                            <a :href="props.platform.settings.facebook_link" class="size-12 rounded-full border-[#3333334D] group border hover:bg-[#33333390] flex items-center justify-center">
                                <FacebookIcon class="fill-[#333333] group-hover:fill-white size-5"/>
                            </a>
                        </div>
                        <div v-if="props.platform.settings.twitter_link">
                            <a :href="props.platform.settings.twitter_link" class="size-12 rounded-full border-[#3333334D] group border hover:bg-[#33333390] flex items-center justify-center">
                                <TwitterIcon class="fill-[#333333] group-hover:fill-white size-5"/>
                            </a>
                        </div>
                        <div v-if="props.platform.settings.linkedin_link">
                            <a :href="props.platform.settings.linkedin_link" class="size-12 rounded-full border-[#3333334D] group border hover:bg-[#33333390] flex items-center justify-center">
                                <LinkedInIcon class="fill-[#333333] group-hover:fill-white size-5"/>
                            </a>
                        </div>
                        <div v-if="props.platform.settings.instagram_link" >
                            <a :href="props.platform.settings.instagram_link" class="size-12 rounded-full border-[#3333334D] group border hover:bg-[#33333390] flex items-center justify-center">
                                <InstagramIcon class="fill-[#333333] group-hover:fill-white size-5"/>
                            </a>
                        </div>
                        <div>
                            <p class="text-xl font-semibold">@JocohStores</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <form @submit.prevent="send" class="rounded-lg md:rounded-[16px] bg-white md:p-14 p-5 md:space-y-10 space-y-5">
                        <p class="font-bold text-2xl md:text-3xl">Contact Us</p>

                        <div class="md:space-y-5 space-y-3">
                            <div class="space-y-1">
                                <label class="text-muted font-medium">Your Name</label>
                                <input v-model="form.name" class="p-3 rounded-[8px] bg-[#F9F9F9] hover:bg-[#ededed] border border-[#F3F3F3] w-full" placeholder="Your Name" type="text">
                                <InputError :message="form.errors?.name" />
                            </div>
                            
                            <div class="space-y-1">
                                <label class="text-muted font-medium">Email Address</label>
                                <input v-model="form.email" class="p-3 rounded-[8px] bg-[#F9F9F9] border border-[#F3F3F3] w-full" placeholder="Your Email Address" type="email">
                                <InputError :message="form.errors?.email" />
                            </div>
                            
                            <div class="space-y-1">
                                <label class="text-muted font-medium">Your Message</label>
                                <textarea v-model="form.message" rows="5"class="p-3 resize-none rounded-[8px] bg-[#F9F9F9] border border-[#F3F3F3] w-full" placeholder="Your Message"></textarea>
                                <InputError :message="form.errors?.message" />
                            </div>

                            <div v-if="status.message">
                                <p v-bind:class="{
                                    'text-green-700' : status.status,
                                    'text-red-700' : !status.status,
                                }" >{{ status.message }}</p>
                            </div>

                            <button :disabled="loading" type="submit" class="w-full flex items-center justify-center text-center bg-[#333333] hover:bg-[#202020] duration-500 text-white py-3 rounded-[4px]">
                                <Spinner v-if="loading == true" /> 
                                <span>Send Message</span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</template>