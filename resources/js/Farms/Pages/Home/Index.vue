<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Farms/Layouts/GuestLayout.vue';
import LeafIcon from '@/Shared/Icons/LeafIcon.vue';
import BadgeIcon from '@/Shared/Icons/BadgeIcon.vue';
import PrimaryButton from '@/Farms/Components/Buttons/PrimaryButton.vue';
import { ArrowLeftIcon, ArrowRightIcon, MinusIcon, PlusIcon, StarIcon } from '@heroicons/vue/24/solid';

defineProps({});

</script>

<template>
    <Head title="Welcome" />
    <GuestLayout>
        <section style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.5)), url('/assets/group/images/banners/tomato-harvesters.png');"
            class="h-[110vh] bg-[15%] bg-cover no-repeat" 
        >
            <div class="max-w-7xl mx-auto flex items-end  h-full pb-20">
                <div class="w-10/12 space-y-10">
                    <div class="space-y-3">
                        <p class="text-[74px] leading-[80px] font-semibold  text-white"><span class="font-playfair text-accent italic ">Organic</span> food products from the ground to your table.</p>
                        <p class="text-xl w-3/4 text-white">From precision farming to smart irrigation our platform offers a suite of tools designed to the enhance efficiency and increase yields</p>
                    </div>

                    <PrimaryButton class="pr-3 pl-7 py-3 group font-semibold bg-primary text-white">    
                        <span class="">Contact Us</span>
                        <span class="flex items-center justify-center text-white duration-300 group-hover:text-primary group-hover:bg-white  w-10 h-10 rounded-full bg-white/30">
                            <ArrowRightIcon class="w-5 h-auto" />
                        </span>
                    </PrimaryButton>
                </div>
            </div>
        </section>

        <div class="py-20 max-w-[80%] mx-auto space-y-10">
            <div class="text-center space-y-2">
                <img src="/assets/farms/images/icon.png" class="mx-auto" alt="">
                <p class="text-primary text-lg font-semibold">Jocoh Farms</p>
            </div>

            <div class="w-[65%] mx-auto space-y-5">
                <h2 class="!font-inter text-4xl text-center font-bold">The best producer of <span class="text-[#F9B132] font-playfair italic font-medium">organic</span> food imported and shipped across Africa</h2>

                <div class="w-3/4 mx-auto">
                    <img src="/assets/farms/images/african-network-map.png"  alt="">
                </div>
            </div>
        </div>

        <div class="py-20 mb-20 max-w-[80%] mx-auto space-y-10">
            <div>
                <p class="uppercase text-primary">who we are</p>

                <div class="flex justify-between items-center mt-3">
                    <div class="w-2/3">
                        <h2 class="!font-inter text-5xl font-semibold ">Africa’s leading provider of <br> <span class="text-[#F9B132] font-playfair italic font-medium">Agricultural</span>  products.</h2>
                    </div>

                    <div class="w-1/3">
                        <p class="text-muted">We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.</p>
                    </div>
                </div>
            </div>

            <div class="relative mb-10">
                <div class="w-2/3">
                    <img src="/assets/farms/images/tomato-fruit.png" alt="">
                </div>

                <div class="absolute w-1/2 end-0 -bottom-20">
                    <div class="grid grid-cols-2">
                        <div class="text-white bg-accent p-4 text-center">
                            <p>Our Mission</p>
                        </div>
                        <div class="text-white bg-secondary-600 p-4 text-center">
                            <p>Our Vision</p>
                        </div>
                    </div>
                    <div class="bg-secondary pt-10 px-10 pb-32 text-white bg-[url(/assets/farms/images/farm-transparent.png)]">
                        <h3 class="!font-inter font-bold text-3xl leading-relaxed">High-quality organic products for you and your family.</h3>
                        <p class="w-11/12">Explore comprehensive suite of innovative farming solution tailored to meet the unique challenges of modern agriculture.</p>

                        <div class="grid grid-cols-2 gap-5 mt-10">
                            <div class="flex items-center space-x-3">
                                <div class="inline-flex w-12 h-12 items-center justify-center rounded-full bg-primary">
                                    <LeafIcon class="w-8 h-8" />
                                </div>
                                <div>
                                    <p class="">100% Organic</p>
                                    <p class="text-sm text-[#C9D7D2]">Trusted agricultrual partners</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-3">
                                <div class="inline-flex w-12 h-12 items-center justify-center rounded-full bg-primary">
                                    <BadgeIcon class="w-8 h-8" />
                                </div>
                                <div>
                                    <p class="">Cruelty Free</p>
                                    <p class="text-sm text-[#C9D7D2]">Support local community</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-20 bg-[#FAF7F0]">
            <div class="max-w-[80%] mx-auto space-y-10">
                <div class="space-y-5 w-3/5 text-center mx-auto">
                    <p class="uppercase text-primary">our products</p>
                    <h2 class="!font-inter text-5xl font-semibold ">Explore our organic <span class="text-[#F9B132] font-playfair italic font-medium">Products</span></h2>
                    <p class="text-muted md:px-10">We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.</p>
                </div>

                <div class="flex justify-center gap-5">
                    <div class="px-6 py-2 bg-[#4CAE47] font-medium text-white">All</div>
                    <div class="px-6 py-2 bg-white font-medium text-muted">Dairy Products</div>
                    <div class="px-6 py-2 bg-white font-medium text-muted">Tomato Paste</div>
                    <div class="px-6 py-2 bg-white font-medium text-muted">Food Seasoning</div>
                    <div class="px-6 py-2 bg-white font-medium text-muted">Milk</div>
                    <div class="px-6 py-2 bg-white font-medium text-muted">Edible oil</div>
                </div>

                <div class="grid grid-cols-3 gap-20">
                    <div class="">
                        <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                            <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                            <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                                <p class="text-lg text-gray-100">Product Name</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                            <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                            <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                                <p class="text-lg text-gray-100">Product Name</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                            <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                            <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                                <p class="text-lg text-gray-100">Product Name</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                            <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                            <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                                <p class="text-lg text-gray-100">Product Name</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                            <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                            <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                                <p class="text-lg text-gray-100">Product Name</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="group p-4 bg-white w-full box-border aspect-[9/11] relative">
                            <img src="/assets/stores/images/products/vegetable-oil.png" alt="">
                            <div class="z-50 absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b h-full duration-300 ease-in-out from-gray-600/50 to-secondary items-end text-white p-7 opacity-0 group-hover:opacity-100 flex">
                                <p class="text-lg text-gray-100">Product Name</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-20 bg-secondary space-y-20 bg-[url(/assets/farms/images/ridges-transparent.png)]">
            <div class="mx-auto max-w-[80%]">
                <div class="flex items-center mt-3">
                    <div class="w-4/6">
                        <p class="uppercase text-[#4CAE47] mb-3">our Process</p>
                        <h2 class="!font-inter text-5xl font-semibold text-white w-4/5"><span class="text-[#F9B132] font-playfair italic font-medium">Discover</span> Fresh farm produce from Jocoh Farm.</h2>
                    </div>

                    <div class="w-2/6 space-y-4">
                        <p class="text-white">We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.</p>
                        <PrimaryButton class="pr-3 pl-7 py-2 group font-semibold bg-primary text-white">    
                            <span class="">Contact Us</span>
                            <span class="flex items-center justify-center text-white duration-300 group-hover:text-primary group-hover:bg-white  w-10 h-10 rounded-full bg-white/30">
                                <ArrowRightIcon class="w-5 h-auto" />
                            </span>
                        </PrimaryButton>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto scrollbar-none">
                <div class="pl-[10%]">
                    <div class="flex gap-10">
                        <div class="shrink-0 w-[344px]">
                            <div class="bg-white w-full box-border aspect-[9/11] relative">
                                <img src="/assets/farms/images/road-network.jpeg" class="h-full " alt="">
                                <div class="z-50 absolute top-0 bottom-0 left-0 right-0  h-full items-end text-white flex"
                                >
                                    <div class="space-y-3 py-10 h-[50%] flex flex-col justify-end px-5 bg-gradient-to-t from-primary to-transparent" >
                                        <p class="text-xl font-semibold">Quality Import </p>
                                        <p class="text-sm">We partner with trustworthy merchant across Africa & the globe to import quality & organic farm produce. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-[344px]">
                            <div class="bg-white w-full box-border aspect-[9/11] relative">
                                <img src="/assets/farms/images/road-network.jpeg" class="h-full " alt="">
                                <div class="z-50 absolute top-0 bottom-0 left-0 right-0  h-full items-end text-white flex"
                                >
                                    <div class="space-y-3 py-10 h-[50%] flex flex-col justify-end px-5 bg-gradient-to-t from-primary to-transparent" >
                                        <p class="text-xl font-semibold">Quality Import </p>
                                        <p class="text-sm">We partner with trustworthy merchant across Africa & the globe to import quality & organic farm produce. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-[344px]">
                            <div class="bg-white w-full box-border aspect-[9/11] relative">
                                <img src="/assets/farms/images/road-network.jpeg" class="h-full " alt="">
                                <div class="z-50 absolute top-0 bottom-0 left-0 right-0  h-full items-end text-white flex"
                                >
                                    <div class="space-y-3 py-10 h-[50%] flex flex-col justify-end px-5 bg-gradient-to-t from-primary to-transparent" >
                                        <p class="text-xl font-semibold">Quality Import </p>
                                        <p class="text-sm">We partner with trustworthy merchant across Africa & the globe to import quality & organic farm produce. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-[344px]">
                            <div class="bg-white w-full box-border aspect-[9/11] relative">
                                <img src="/assets/farms/images/road-network.jpeg" class="h-full " alt="">
                                <div class="z-50 absolute top-0 bottom-0 left-0 right-0  h-full items-end text-white flex"
                                >
                                    <div class="space-y-3 py-10 h-[50%] flex flex-col justify-end px-5 bg-gradient-to-t from-primary to-transparent" >
                                        <p class="text-xl font-semibold">Quality Import </p>
                                        <p class="text-sm">We partner with trustworthy merchant across Africa & the globe to import quality & organic farm produce. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-[344px]">
                            <div class="bg-white w-full box-border aspect-[9/11] relative">
                                <img src="/assets/farms/images/road-network.jpeg" class="h-full " alt="">
                                <div class="z-50 absolute top-0 bottom-0 left-0 right-0  h-full items-end text-white flex"
                                >
                                    <div class="space-y-3 py-10 h-[50%] flex flex-col justify-end px-5 bg-gradient-to-t from-primary to-transparent" >
                                        <p class="text-xl font-semibold">Quality Import </p>
                                        <p class="text-sm">We partner with trustworthy merchant across Africa & the globe to import quality & organic farm produce. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-[344px] mr-[10%]">
                            <div class="bg-white w-full box-border aspect-[9/11] relative">
                                <img src="/assets/farms/images/road-network.jpeg" class="h-full " alt="">
                                <div class="z-50 absolute top-0 bottom-0 left-0 right-0  h-full items-end text-white flex"
                                >
                                    <div class="space-y-3 py-10 h-[50%] flex flex-col justify-end px-5 bg-gradient-to-t from-primary to-transparent" >
                                        <p class="text-xl font-semibold">Quality Import </p>
                                        <p class="text-sm">We partner with trustworthy merchant across Africa & the globe to import quality & organic farm produce. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto max-w-[80%] flex space-x-7 ">
                <div>
                    <button class="size-14 border border-white/20 rounded-full flex justify-center items-center ">
                        <ArrowLeftIcon class="w-6 text-white/20" />
                    </button>
                </div>
                <div>
                    <button class="size-14 border border-white/20 rounded-full flex justify-center items-center ">
                        <ArrowLeftIcon class="w-6 text-white rotate-180" />
                    </button>
                </div>
            </div>
        </div>

        <div class="py-20 bg-[#FAF7F0]">
            <div class="mx-auto max-w-[80%] space-y-10">
                <div class="space-y-5 w-3/5 text-center mx-auto">
                    <p class="uppercase text-primary">trusted partners</p>
                    <h2 class="!font-inter text-5xl font-semibold ">Partnerships and <span class="text-[#F9B132] font-playfair italic font-medium">Collaborations.</span></h2>
                    <p class="text-muted md:px-10">Share experiences, exchange ideas, and collaborate on innovative projects that have the potential to revolutionise agriculture Together, we can build a resilient agricultural.</p>
                </div>

                <div class="border border-gray-200"></div>

                <div class="flex flex-wrap justify-center space-x-10">
                    <div class="w-[140px] h-[140px] bg-white flex items-center justify-center">
                        <img src="/assets/group/images/logo.png" class="w-3/4" alt="">
                    </div>
                    <div class="w-[140px] h-[140px] bg-white flex items-center justify-center">
                        <img src="/assets/stores/images/logo.png" class="w-3/4" alt="">
                    </div>
                    <div class="w-[140px] h-[140px] bg-white flex items-center justify-center">
                        <img src="/assets/farms/images/logo.png" class="w-3/4" alt="">
                    </div>
                    <div class="w-[140px] h-[140px] bg-white flex items-center justify-center">
                        <img src="/assets/farms/images/logo.png" class="w-3/4" alt="">
                    </div>
                    <div class="w-[140px] h-[140px] bg-white flex items-center justify-center">
                        <img src="/assets/farms/images/logo.png" class="w-3/4" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="py-20 max-w-[80%] mx-auto space-y-20">
            <div class="space-y-5 w-3/5 text-center mx-auto">
                <p class="uppercase text-primary">client’s testimonial</p>
                <h2 class="!font-inter text-5xl font-bold">What clients are saying about the Jocoh’s Products</h2>
                <p class="text-muted md:px-10">We believe in the transformative power of agriculture and its ability to
                    sustainable future. our platform is more than just a digital space.</p>
            </div>

            <div class="flex gap-10">
                <div class="w-3/5">
                    <div class="h-[500px] bg-[url(/assets/farms/images/farmer-in-a-farm.jpeg)] bg-cover bg-center p-5 flex items-end">
                        <div class="p-5 bg-white w-full space-y-5">
                            <div class="flex space-x-2 items-center">
                                <div class="flex text-accent">
                                    <StarIcon class="size-5" />
                                    <StarIcon class="size-5" />
                                    <StarIcon class="size-5" />
                                    <StarIcon class="size-5" />
                                    <StarIcon class="size-5" />
                                </div>

                                <p class="font-bold">4.5</p>
                            </div>

                            <div class="text-muted">
                                <p class="text-sm">“Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 bc, making it over 2000 years old. richard mcclintock, a latin professor at hampden-sydney college in virginia”</p>
                            </div>

                            <div>
                                <p class="font-medium">James Robertson</p>
                                <p class="text-sm text-muted font-medium">Kaduna Nigeria</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/5">
                    <div class="h-[500px] bg-[url(/assets/farms/images/cake-icing.jpeg)] bg-cover bg-center"></div>
                </div>
                <div class="w-1/5">
                    <div class="h-[500px] bg-[url(/assets/farms/images/black-ladies.jpeg)] bg-cover bg-center"></div>
                </div>
            </div>

            <div class="flex justify-center space-x-5">
                <div>
                    <button class="size-14 border border-gray-200 rounded-full flex justify-center items-center ">
                        <ArrowLeftIcon class="w-6 text-[#4CAE47]" />
                    </button>
                </div>
                <div>
                    <button class="size-14 border border-gray-200 rounded-full flex justify-center items-center ">
                        <ArrowLeftIcon class="w-6 text-gray-200 rotate-180" />
                    </button>
                </div>
            </div>
        </div>

        <div class="py-20 max-w-[80%] mx-auto space-y-20">
            <div class="space-y-5 w-3/5 text-center mx-auto">
                <p class="uppercase text-primary">frequently asked questions</p>
                <h2 class="!font-inter text-5xl font-bold">How can agri-entrepreneurs showcase their <span class="font-playfair italic text-accent">Innovations.</span></h2>
                <p class="text-muted md:px-10">Explore the all resources and initiatives aimed at promoting best eco-friendly farming methods and reducing of the environmental impact of agriculture.</p>
            </div>

            <div class="mx-auto md:w-4/5">
                <div class="grid grid-cols-2 gap-10">
                    <div>
                        <img src="/assets/farms/images/farm-machine-at-work.png" class="w-full h-full object-cover ">
                    </div>
                    <div>
                        <div class="space-y-5">
                            <div class="p-5 bg-[#4CAE47]">
                                <div role="button" class="flex space-x-5 items-center">
                                    <div class="flex-1 space-y-4">
                                        <p class="font-semibold text-white">1. Do you sell small quantity?</p>
                                    </div>
                                    <div class="w-8 shrink-0 flex justify-end">
                                        <div class="size-8 items-center flex justify-center border-2 border-accent-600/35 rounded-full bg-accent">
                                            <MinusIcon class="size-5 text-white" />
                                        </div>
                                    </div>
                                </div>
                                <div class="flex space-x-5 pt-3">
                                    <div class="flex-1">
                                        <p class="text-white text-sm">Discover reputable sources for the agricultural education, workshops, and online courses to enhance your knowledge and skills,keeping you informed.</p>
                                    </div>
                                    <div class="w-8 shrink-0"></div>
                                </div>
                            </div>


                            <div class="p-5 bg-[#FAF7F0]">
                                <div role="button" class="flex space-x-5 items-center">
                                    <div class="flex-1 space-y-4">
                                        <p class="font-semibold">2. How long does delivery take?</p>
                                    </div>
                                    <div class="w-8 shrink-0 flex justify-end">
                                        <div class="size-8 items-center flex justify-center border-2  rounded-full">
                                            <PlusIcon class="size-5 " />
                                        </div>
                                    </div>
                                </div>
                                <div class="space-x-5 hidden ">
                                    <div class="flex-1 ">
                                        <p class="text-white text-sm">Discover reputable sources for the agricultural education, workshops, and online courses to enhance your knowledge and skills,keeping you informed.</p>
                                    </div>
                                    <div class="w-8 shrink-0"></div>
                                </div>
                            </div>

                            <div class="p-5 bg-[#FAF7F0]">
                                <div role="button" class="flex space-x-5 items-center">
                                    <div class="flex-1 space-y-4">
                                        <p class="font-semibold">3. What is the timeline to get next orders out?</p>
                                    </div>
                                    <div class="w-8 shrink-0 flex justify-end">
                                        <div class="size-8 items-center flex justify-center border-2  rounded-full">
                                            <PlusIcon class="size-5 " />
                                        </div>
                                    </div>
                                </div>
                                <div class="space-x-5 hidden ">
                                    <div class="flex-1 ">
                                        <p class="text-white text-sm">Discover reputable sources for the agricultural education, workshops, and online courses to enhance your knowledge and skills,keeping you informed.</p>
                                    </div>
                                    <div class="w-8 shrink-0"></div>
                                </div>
                            </div>

                            <div class="p-5 bg-[#FAF7F0]">
                                <div role="button" class="flex space-x-5 items-center">
                                    <div class="flex-1 space-y-4">
                                        <p class="font-semibold">4. Is your product Nafdac approved?</p>
                                    </div>
                                    <div class="w-8 shrink-0 flex justify-end">
                                        <div class="size-8 items-center flex justify-center border-2  rounded-full">
                                            <PlusIcon class="size-5 " />
                                        </div>
                                    </div>
                                </div>
                                <div class="space-x-5 hidden ">
                                    <div class="flex-1 ">
                                        <p class="text-white text-sm">Discover reputable sources for the agricultural education, workshops, and online courses to enhance your knowledge and skills,keeping you informed.</p>
                                    </div>
                                    <div class="w-8 shrink-0"></div>
                                </div>
                            </div>

                            <div class="p-5 bg-[#FAF7F0]">
                                <div role="button" class="flex space-x-5 items-center">
                                    <div class="flex-1 space-y-4">
                                        <p class="font-semibold">5. What regulations do you have?</p>
                                    </div>
                                    <div class="w-8 shrink-0 flex justify-end">
                                        <div class="size-8 items-center flex justify-center border-2  rounded-full">
                                            <PlusIcon class="size-5 " />
                                        </div>
                                    </div>
                                </div>
                                <div class="space-x-5 hidden ">
                                    <div class="flex-1 ">
                                        <p class="text-white text-sm">Discover reputable sources for the agricultural education, workshops, and online courses to enhance your knowledge and skills,keeping you informed.</p>
                                    </div>
                                    <div class="w-8 shrink-0"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
