<script setup>

const props = defineProps({
    member: {type: {}}
})
</script>

<template>
    <div class="w-full overflow-hidden group relative aspect-[3/4] md:aspect-[2/3] rounded-lg">
        <img :src="member.image" class="group-hover:scale-105 duration-500" alt="">
        <div class="absolute left-0 top-0 right-0 bottom-0 bg-[#00000060] md:p-8 p-5 flex items-end">
            <div class=" text-white">
                <h4 class="text-xl">{{member.name}}</h4>
                <p class="text-light">{{member.role}}</p>
            </div>
        </div>
    </div>
</template>