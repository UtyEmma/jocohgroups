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
    <div class="bg-primary-100 py-20 text-center">
        <div class="max-w-7xl mx-auto space-y-10">
            <h3 class="text-5xl" v-html="title" ></h3>

            <div class="grid grid-cols-3 gap-10 text-center">
                <div v-for="(impact, index) in impacts" >
                    <h1 class="text-[170px] leading-[180px] text-primary">{{index}}</h1>
                    <p class="text-xl text-muted font-medium">{{impact}}</p>
                </div>
            </div>
        </div>
    </div>
</template>