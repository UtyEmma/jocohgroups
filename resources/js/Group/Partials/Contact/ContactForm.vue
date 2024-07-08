<script setup>
import FacebookIcon from '@/Shared/Icons/FacebookIcon.vue';
import InputError from '@/Shared/Components/Input/InputError.vue';
import Spinner from '@/Shared/Components/Spinner.vue';
import TwitterIcon from '@/Shared/Icons/TwitterIcon.vue';
import LinkedInIcon from '@/Shared/Icons/LinkedInIcon.vue';
import InstagramIcon from '@/Shared/Icons/InstagramIcon.vue';
import { useForm, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

const {props} = usePage()

const form = useForm({
    name: '',
    email: '',
    message: ''
})

const status = ref({
    status: false,
    message: ''
})

const loading = ref(false)

const send = () => {
    loading.value = true

    try {
        form.post(route('group.contact.message'), {
            preserveScroll: true,
            onSuccess(){
                status.value = {
                    status: true,
                    message: 'Your message has been sent successfully'
                }
            },
            onError(){
                loading.value = false
            },
    
            onFinish(){
                loading.value = false
            }
        })
    } catch (error) {
        console.error(error)
        loading.value = false
    }
}

</script>

<template>
    <section class="py-40 bg-[#3333331A] bg-[url('/assets/group/images/svgs/waves.svg')] bg-no-repeat" >
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-2 gap-20 items-center">
                <div class="space-y-4" >
                    <p class="font-black text-4xl">Contact Us</p>
                    <p class="w-3/4 text-[18px] text-[#79746F]">For inquires and complaint, drop a message for us and we would reach out to you, or visit our</p>

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
                    <form @submit.prevent="send" class="rounded-[16px] bg-white p-14 space-y-8">
                        <p class="font-black text-3xl">Contact Us</p>

                        <div class="space-y-5">
                            <div class="space-y-1">
                                <label class="text-muted font-medium">Your Name</label>
                                <input v-model="form.name" class="p-3 rounded-[8px] bg-[#F9F9F9] hover:bg-[#ededed] border border-[#F3F3F3] w-full" placeholder="Your Name" type="text">
                                <InputError :message="form.errors?.name" />
                            </div>

                            <div class="space-y-1">
                                <label class="text-muted font-medium">Email Address</label>
                                <input v-model="form.email" class="p-3 rounded-[8px] bg-[#F9F9F9] border border-[#F3F3F3] w-full" placeholder="Your Email Address" type="text">
                            </div>

                            <div class="space-y-1">
                                <label class="text-muted font-medium">Your Message</label>
                                <textarea v-model="form.message" rows="5"class="p-3 resize-none rounded-[8px] bg-[#F9F9F9] border border-[#F3F3F3] w-full" placeholder="Your Message"></textarea>
                            </div>

                            <button type="submit" class="w-full flex items-center justify-center text-center bg-[#333333] hover:bg-[#202020] duration-500 text-white py-3 rounded-[4px]">
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