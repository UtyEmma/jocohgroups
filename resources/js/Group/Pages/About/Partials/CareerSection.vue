<script setup >
import JobItem from '@/Group/Partials/Jobs/JobItem.vue';
import usePlatform from '@/Shared/Hooks/usePlatform';

const props = defineProps({
    jobs: {type: []}
})

const { render } = usePlatform('about')

const title = render({
    default_value: 'Our Openings',
    key: 'career_section',
    value: 'title'
})

console.log(props.jobs);
</script>

<template>
    <section v-if="jobs.length > 0" class="py-32 max-w-[80%] mx-auto space-y-20">
        <h1 class="text-6xl text-center" >{{ title }}</h1>

        <div class="space-y-10" >
            <JobItem v-for="job in props.jobs" :job="job" />
        </div>
    </section>
</template>