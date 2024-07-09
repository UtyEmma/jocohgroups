<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';

const { render, content } = usePlatform()

</script>

<template>
    <div class="h-[110vh] bg-[url('/assets/group/images/banners/farmers-in-the-field.jpeg')] bg-[15%] bg-cover no-repeat" >
        <div class="max-w-7xl mx-auto flex items-end  h-full py-20">
            <div class="w-9/12 space-y-3">
                <h1 class="text-[74px] leading-[80px] text-white">Facilitating  the production and delivery of <span class="bg-primary inline-block p-2"> agricultural </span> produce across Africa</h1>
                <p class="text-2xl w-4/5 text-white"> Founded on the belief that farming can be both profitable and environmentally responsible, we integrate innovation, technology, and community engagement to drive positive change in the agricultural sector.</p>
            </div>
        </div>
    </div>
</template>