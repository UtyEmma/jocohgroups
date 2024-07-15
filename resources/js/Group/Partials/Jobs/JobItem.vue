<script setup>
import PrimaryButton from '@/Group/Components/Buttons/PrimaryButton.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    job: {type: {}}
})
</script>

<template>
    <div class="md:p-5 p-6 rounded-[16px] md:flex items-center md:space-x-10" style="box-shadow: 0px 0px 20px 0px #0000000D;">
        <div class="md:size-32 size-20 bg-primary-50 rounded-[8px] flex items-center justify-center p-2">
            <img src="/assets/group/images/logo.png" alt="">
        </div>

        <div class="flex-1 py-3 md:py-2 h-full">
            <div class=" md:flex flex-col h-full justify-between space-y-3 md:space-y-5">
                <p class="text-xl md:text-2xl text-primary font-bold">{{job.role}}</p>
                <div class="md:flex md:space-x-5 space-y-1 bottom-0">
                    <p v-if="job.location"><span>Location:</span> {{job.location}}</p>
                    <p v-if="job.salary"><span>Salary: ₦</span> {{job.salary.toLocaleString()}}</p>
                    <p v-if="job.deadline"><span>Deadline:</span> {{job.deadline}}</p>
                    <p v-if="job.type"><span>Type:</span> {{job.type}}</p>
                </div>
            </div>
        </div>

        <div class="shrink-0 " >
            <Link :href="route('group.career.show', {'id': job.id})">
                <PrimaryButton>Details</PrimaryButton>
            </Link>
        </div>
    </div>
</template>