<script setup>
import PrimaryButton from '@/Group/Components/Buttons/PrimaryButton.vue';
</script>

<template>
    <div class="p-5 rounded-[16px] flex items-center space-x-10" style="box-shadow: 0px 0px 20px 0px #0000000D;">
        <div class="size-32 bg-primary-50 rounded-[8px] flex items-center justify-center p-2">
            <img src="/assets/group/images/logo.png" alt="">
        </div>

        <div class="flex-1 py-2 h-full">
            <div class="flex flex-col h-full justify-between">
                <p class="text-2xl text-primary font-bold mb-6">Sale Specialist</p>
                <div class="flex space-x-5 bottom-0">
                    <p>Location: Lagos</p>
                    <p>Salary: 300K</p>
                    <p>Deadline: 2 Feb 2025</p>
                    <p>Type: Remote</p>
                </div>
            </div>
        </div>

        <div class="shrink-0" >
            <PrimaryButton>Details</PrimaryButton>
        </div>
    </div>
</template>