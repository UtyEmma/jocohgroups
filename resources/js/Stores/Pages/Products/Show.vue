<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import GuestLayout from '@/Stores/Layouts/GuestLayout.vue';
    import PrimaryButton from '@/Stores/Components/Buttons/PrimaryButton.vue';
    import { ArrowRightIcon, ArrowLeftIcon } from '@heroicons/vue/24/solid';
    import FaqItem from '@/Stores/Partials/Faqs/FaqItem.vue';


</script>

<template>
    <Head title="Welcome" />
    <GuestLayout>
        <section class="py-20 bg-primary-50">
            <div class="max-w-[80%] mx-auto space-y-10">
                <div >
                    <PrimaryButton class="pl-1 pr-3 py-1 font-semibold">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary">
                            <ArrowLeftIcon class="w-5 h-auto text-white" />
                        </span>
    
                        <span class="">Back</span>
                    </PrimaryButton>
                </div>

                <div class="flex gap-20">
                    <div class="w-2/6">
                        <div class="p-3 bg-white rounded-2xl">
                            <div class="border-2 border-gray-300 bg-gray-100 h-96 overflow-hidden rounded-xl flex items-center justify-center">
                                <img src="/assets/stores/images/products/condensed-milk.png" class="w-2/3" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="w-4/6 space-y-8">
                        <p class="font-bold text-2xl text-secondary">Pur Vegetable Oil</p>

                        <div class="leading-loose">
                            Pur Vegetable Oil is a premium cooking oil made from a blend of healthy, nutritious oils like sunflower, soybean, and palm oil. Pur Oil is a great choice for everyday cooking, as it has a high smoke point, making it ideal for frying, baking, and sautéing.
                            Pur Vegetable Oil offers numerous benefits, including:
                            Versatility: Pur Oil is suitable for a wide range of cooking methods, from deep-frying to salad dressing.
                            Nutritious: Pur Oil is a great source of healthy fats and vitamins, which support heart health and overall well-being.

                            Refining Process: Pur Oil undergoes a process called "hydrogenation," which increases its shelf life and stability, making it suitable for long-term storage.
                            Flavors: Pur Vegetable Oil is available in different flavors, including garlic-flavored, chili-flavored, and coconut-flavored, to add variety and interest to your meals.
                            Packaging: Pur Oil is available in different packaging options, including bottles, boxes, and pouches, to suit your needs and preferences.
                            Nutritional Benefits: Pur Oil is rich in monounsaturated fats, which are believed to lower cholesterol levels and promote heart health.
                            Quality Assurance: Pur Vegetable Oil undergoes rigorous quality control procedures, including testing for purity and freshness, to ensure that the product meets the highest standards.
                            Environmentally-Friendly: Pur Oil is made from renewable resources, and the company has implemented eco-friendly production practices to reduce its impact on the environment.
                        </div>

                        <div>
                            <PrimaryButton class="pr-2 pl-5 py-2 font-semibold shadow">
                                <span class="text-primary text-[16px]">Contact Us</span>
                                <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary">
                                    <ArrowRightIcon class="w-5 h-auto text-white" />
                                </span>
                            </PrimaryButton>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="py-20 max-w-[80%] mx-auto space-y-20">
            <div class="space-y-4">
                <p class="text-4xl font-bold leading-tight">Frequently asked questions</p>
                <p class="mx-auto text-muted font-medium leading-[23.04px]">We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more </p>
            </div>

            <div class="space-y-10">
                <FaqItem question="Do you sell in wholesale and retails ?" answer="" />
                <FaqItem question="Do you accept payment in other currencies ?" answer="" />
                <FaqItem question="Are you open to partnerships for each products?" answer="" />
                <FaqItem question="Is there a merchant part of this where we can sell on your platform?" answer="" />
            </div>
        </div>
    </GuestLayout>
</template>