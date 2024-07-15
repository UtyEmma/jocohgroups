<script setup>
import TeamItem from '@/Group/Partials/Team/TeamItem.vue';
import { ArrowRightIcon } from '@heroicons/vue/24/solid';
import { Link } from '@inertiajs/vue3';


defineProps({
    team: {}
})

</script>

<template>
    <section v-if="team.length > 0" class="bg-primary-100 md:py-20 py-10">
        <div class="mx-auto max-w-7xl px-4 space-y-10">
            <div class="md:flex justify-between space-y-5 md:space-y-0">
                <div>
                    <h3 class="md:text-5xl text-3xl font-semibold">Meet the team</h3>
                </div>

                <div>
                    <Link :href="route('group.about')" >
                        <button class="bg-primary hover:bg-primary-600 duration-500 inline-flex items-center  border-0 text-white py-2 ps-7 px-2 rounded-l-full rounded-r-full">
                            Explore careers
                            <span class="flex items-center justify-center w-10 h-10 rounded-full bg-white  ms-5">
                                <ArrowRightIcon class="w-5 h-auto text-primary" />
                            </span>
                        </button>
                    </Link>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-10">
                <TeamItem v-for="member in team" :member="member" />
            </div>
        </div>
    </section>
</template>