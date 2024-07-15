<script setup >
import usePlatform from '@/Shared/Hooks/usePlatform';


const { render } = usePlatform('home')

const impacts = render({
                    default_value: {
                        '45': 'Products Produced Organically',
                        '5+': 'Years in production',
                        '80+': 'Global Partners',
                    },
                    value: 'impact',
                    key: 'impact_section'
                })

const title = render({
                default_value: 'Our Impact over the years',
                value: 'title',
                key: 'impact_section'
            })
</script>

<template>
    <div class="bg-primary-100 py-10 md:py-20 text-center">
        <div class="max-w-7xl mx-auto px-4 space-y-5 md:space-y-10">
            <h3 class="md:text-5xl text-2xl" v-html="title" ></h3>

            <div class="grid md:grid-cols-3 gap-5 md:gap-10 text-center">
                <div v-for="(impact, index) in impacts" >
                    <h1 class="text-7xl md:text-[170px] md:leading-[180px] leading-normal font-semibold text-primary">{{index}}</h1>
                    <p class="md:text-xl text-lg text-muted font-medium">{{impact}}</p>
                </div>
            </div>
        </div>
    </div>
</template>