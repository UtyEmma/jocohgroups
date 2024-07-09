<script setup>
    defineProps({
        message: {type: ''}
    })
</script>

<template>
    <p class="text-red-600" v-if="message" >{{ message }}</p>
</template>