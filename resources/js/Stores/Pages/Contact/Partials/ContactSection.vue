<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';
import FacebookIcon from '@/Shared/Icons/FacebookIcon.vue';
import TwitterIcon from '@/Shared/Icons/TwitterIcon.vue';
import LinkedInIcon from '@/Shared/Icons/LinkedInIcon.vue';
import InstagramIcon from '@/Shared/Icons/InstagramIcon.vue';
import { usePage } from '@inertiajs/vue3';
import useContactForm from '@/Shared/Hooks/useContactForm';
import Spinner from '@/Shared/Components/Spinner.vue';
import InputError from '@/Shared/Components/Input/InputError.vue';

const { render, format } = usePlatform('contact')
const {props} = usePage()

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

const {form, send, status} = useContactForm();

</script>

<template>
    <section class="md:py-40 py-10 px-4 bg-[rgb(255,251,237)] bg-[url('/assets/group/images/svgs/waves.svg')] bg-no-repeat" >
        <div class="mx-auto md:max-w-[80%] ">
            <div class="md:grid space-y-20 md:grid-cols-2 gap-10 md:gap-20 items-center">
                <div>
                    <div class="space-y-4 text-wrap" >
                        <p class="font-bold md:text-4xl text-2xl leading-relaxed text-primary">{{ title }}</p>
                        <p class="md:w-3/4 text-[18px] text-[#79746F]">{{ caption }}</p>
    
                        <div class="flex flex-wrap gap-5 items-center" >
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
                                <p class="text-xl font-medium">{{ badge }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="md:rounded-[16px] rounded-lg bg-white md:p-14 p-4 space-y-8">
                        <p class="font-bold text-primary text-3xl">Contact Us</p>

                        <form @submit.prevent="send" class="space-y-5">
                            <div class="space-y-1">
                                <label class="text-muted font-medium">Your Name</label>
                                <input v-model="form.name" class="p-3 rounded-[8px] bg-[#F9F9F9] hover:bg-[#ededed] border border-[#F3F3F3] w-full" type="text" placeholder="Your Name" />
                                <InputError :message="form.errors?.name" />
                            </div>

                            <div class="space-y-1">
                                <label class="text-muted font-medium">Your Email</label>
                                <input v-model="form.email" class="p-3 rounded-[8px] bg-[#F9F9F9] border border-[#F3F3F3] w-full" type="email" placeholder="Your Email Address">
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

                            <button :disabled="form.processing" type="submit" class="w-full flex items-center justify-center text-center bg-primary hover:bg-primary-900 duration-500 text-white py-3 rounded-[4px]">
                                <Spinner v-if="form.processing" /> 
                                <span>Send Message</span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</template>