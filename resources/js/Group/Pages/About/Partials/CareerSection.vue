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
    <section v-if="jobs.length > 0" class="md:py-32 py-10 md:max-w-[80%] px-4 mx-auto space-y-10 md:space-y-20">
        <h1 class="text-4xl font-medium md:text-6xl text-center" >{{ title }}</h1>

        <div class="md:space-y-10 space-y-5" >
            <JobItem v-for="job in props.jobs" :job="job" />
        </div>
    </section>
</template>