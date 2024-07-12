<script setup>
import usePlatform from '@/Shared/Hooks/usePlatform';

const { render, format } = usePlatform('home')

const title = render({
                default_value: 'Shop Wholesale & Retails',
                key: 'wholesale_retail',
                value: 'title'
            })

const caption = render({
                default_value: 'You have the to shop both retail and wholesale we have product available across major stores in Nigeria.',
                key: 'wholesale_retail',
                value: 'caption'
            })

const right_image = render({
                default_value: '/assets/stores/images/bag-with-foodstuffs.png',
                key: 'wholesale_retail',
                value: 'right_image',
                prepend: 'storage/'
            })

const left_image = render({
                default_value: '/assets/stores/images/people-shopping.png',
                key: 'wholesale_retail',
                value: 'left_image',
                prepend: 'storage/'
            })
</script>

<template>
    <div class="py-20 space-y-10 max-w-[80%] mx-auto">
        <div class="space-y-4">
            <p class="text-4xl font-bold text-center leading-tight">{{ title }}</p>
            <p class="text-center w-3/4 mx-auto text-muted font-medium">{{ caption }}</p>
        </div>

        <div class="grid grid-cols-2 gap-x-10">
            <div>
                <div 
                    class="w-full aspect-[4/3] bg-bottom bg-cover no-repeat" 
                    :style="{ backgroundImage: `url(${left_image})` }"
                ></div>
            </div>
            
            <div>
                <div 
                    class="w-full aspect-[4/3] bg-[15%] bg-cover no-repeat"
                    :style="{ backgroundImage: `url(${right_image})` }"
                ></div>
            </div>
        </div>
    </div>
</template>