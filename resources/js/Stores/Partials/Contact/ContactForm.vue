<script setup>
import FacebookIcon from '@/Shared/Icons/FacebookIcon.vue';
import TwitterIcon from '@/Shared/Icons/TwitterIcon.vue';
import LinkedInIcon from '@/Shared/Icons/LinkedInIcon.vue';
import InstagramIcon from '@/Shared/Icons/InstagramIcon.vue';
import useContactForm from '@/Shared/Hooks/useContactForm';

const {form, send, status} = useContactForm()


</script>

<template>
    <section class="py-40 bg-[#FFFBED] bg-[url('/assets/group/images/svgs/waves.svg')] bg-no-repeat" >
        <div class="mx-auto max-w-[80%]">
            <div class="grid grid-cols-2 gap-20 items-center">
                <div class="space-y-4" >
                    <p class="font-bold text-4xl leading-relaxed text-primary">Need assistance with your order or have questions about our products? 
                        We’re here to help.</p>
                    <p class="w-3/4 text-[18px] text-[#79746F]">For inquires and complaint, drop a message for us and we would reach out to you, or visit our</p>

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
                            <p class="text-xl font-medium">@JocohStores</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="rounded-[16px] bg-white p-14 space-y-8">
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