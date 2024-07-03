<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Group/Layouts/GuestLayout.vue';
import { ArrowLeftIcon, ArrowLongLeftIcon } from '@heroicons/vue/24/solid';
import PrimaryButton from '@/Group/Components/Buttons/PrimaryButton.vue';
import LongBanner from '@/Group/Svgs/LongBanner.vue';
import Flower from '@/Group/Svgs/Flower.vue';

</script>

<template>
    <GuestLayout>
        <section class="py-20 bg-primary-50 relative overflow-hidden">
            <div class="max-w-[80%] mx-auto space-y-20" >
                <a href="#" class="inline-flex space-x-3 rounded-l-full rounded-r-full shadow hover:text-primary-700  justify-center px-4 py-2 bg-white text-primary font-medium">
                    <ArrowLeftIcon class="w-5" /> <span>Back to Careers</span>
                </a>

                <div class="space-y-5">
                    <h1 class="text-6xl text-primary font-semibold">Sales Specialist</h1>
                    <p class="text-[18px]">Full Time • Enugu Nigeria</p>

                    <div>
                        <PrimaryButton >Apply for Role</PrimaryButton>
                    </div>
                </div>
            </div>

            <Flower class="absolute size-[34rem] -bottom-[30%] -right-[10%]" />
        </section>

        <div class="py-20 max-w-[80%] mx-auto space-y-4">
            <h1 class="text-3xl">Job description</h1>
            <div class="whitespace-pre-line">
                Jocoh Group is a funded and fully licensed payment-led digital bank on a mission to disrupt cash and drive financial inclusion one mobile device at a time. We are dedicated to leveraging innovative technology to disrupt traditional banking and payment systems.

                About the Role
                Jocoh Group is looking for a Product Lead who will drive and execute product strategy for our Banking products.

                Job Description
                • Lead the development and growth of Aku’s core infrastructure products 

                • Work closely with teams across Aku to build the services that ensures delivery of reliable and stable products. 

                • Be responsible for delivering the solutions that are essential to Aku scaling to meet its ever growing customer base 

                • Translate customer feedback and insights into actionable product improvements and features. 

                • Develop and maintain a clear product roadmap, outlining key milestones and deliverables. 

                • Maintain an intricate understanding of evolving industry regulations, ensuring our fintech products remain compliant and resilient to changes in the regulatory landscape. 

                • Driving adoption of existing product capabilities and client acquisition. 

                • Define meticulously detailed product requirements, including user stories, functional specifications, and acceptance criteria, always with an eye for delivering superior customer experiences. 

                • Continuously monitor and analyze the dynamic fintech landscape, identifying emerging trends, competitive threats, and opportunities for differentiation. 

                • Take the helm of product releases, from planning through beta testing to post-launch performance monitoring, ensuring seamless product delivery. 

                Requirements
                • Proven track record as a Technical Product Manager in the fintech or banking sector.

                • Experience working with microservices in a cloud environment.

                • Have technical product management experience in a Product-first, B2B company.

                • Have experience working with a digital product used by a technical user base such as PaaS - this could also include APIs, SaaS.

                • Experience working with a product integrated with multiple endpoints - e.g., communications APIs, financial data APIs.

                • Deep comprehension of banking products, financial services, and fintech trends.

                • Exceptional analytical acumen, adept at navigating complex challenges.

                • Superb communication and leadership skills, capable of inspiring and mobilizing teams.


                To apply send your CV to hr@jocohgroup.com            
            </div>
        </div>

        <LongBanner class="w-full" />
    </GuestLayout>
</template>