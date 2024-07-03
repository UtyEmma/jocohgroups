<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Group/Layouts/GuestLayout.vue';
import { ArrowLeftIcon, ArrowLongLeftIcon } from '@heroicons/vue/24/solid';
import PrimaryButton from '@/Group/Components/Buttons/PrimaryButton.vue';
import LongBanner from '@/Group/Svgs/LongBanner.vue';
import Flower from '@/Group/Svgs/Flower.vue';
import PostItem from '@/Group/Partials/Blog/PostItem.vue';

</script>

<template>
    <GuestLayout>        
        <section class="py-20 max-w-[80%] mx-auto space-y-20 px-4">
            <div class="space-y-10">
                <a href="#" class="inline-flex space-x-3 rounded-l-full rounded-r-full shadow hover:text-primary-700  justify-center px-4 py-2 bg-white text-primary font-medium">
                    <ArrowLeftIcon class="w-5" /> <span>Back to Blogs</span>
                </a>
    
                <div class="flex space-x-3 items-center" >
                    <span class="bg-[#FFE9DA] py-1 px-4 text-sm rounded-l-full rounded-r-full uppercase font-bold">Blogs</span>
                    <span class="text-[#82808A] font-medium">Oct 3  &bull;  7 min read</span>
                </div>
            </div>


            <div class="space-y-10">
                <h1 class="text-6xl font-semibold">Building the finest soil for the African community.</h1>

                <div>
                    <img src="/assets/group/images/blog/fertile-soil.jpeg" class="aspect-[16/7] w-full rounded-xl object-cover" alt="">
                </div>

                <div class="space-y-10 text-[18px] leading-relaxed">
                    <p>Jocoh Group ensures that you have a comprehensive overview of your data on the property. This also applies to inquiries that are forwarded to suppliers. That is why we have developed Jocoh Group Supplier Portal.

                    As a user in Jocoh Group you get a complete overview of your suppliers. Which suppliers do you use? And which suppliers are associated with which properties? That and much more can now be accessed in Jocoh Group.

                    Communicate with your suppliers on a case and share case-related files with suppliers and tenants. With the Supplier Portal you do not have to forward inquiries by mail and SMS. All communication between the tenant, supplier and manager can be accessed in Jocoh Group. Draw statistics on the inquiries you send to your suppliers and see how many are waiting, in progress or completed. Access your ratings and gain insight into how satisfied your tenants are with the performance of the task. Have suppliers add their certificates and qualifications in Jocoh Group Supplier Portal and forward inquiries based on the criteria you find relevant to a supplier.

                    Jocoh Group Supplier Portal ensures you full supplier management from A-Z, saves time and makes it easy for both you and the supplier to get a complete overview of forwarded cases.</p>
                    <p>Jocoh Group ensures that you have a comprehensive overview of your data on the property. This also applies to inquiries that are forwarded to suppliers. That is why we have developed Jocoh Group Supplier Portal.

                    As a user in Jocoh Group you get a complete overview of your suppliers. Which suppliers do you use? And which suppliers are associated with which properties? That and much more can now be accessed in Jocoh Group.

                    Communicate with your suppliers on a case and share case-related files with suppliers and tenants. With the Supplier Portal you do not have to forward inquiries by mail and SMS. All communication between the tenant, supplier and manager can be accessed in Jocoh Group. Draw statistics on the inquiries you send to your suppliers and see how many are waiting, in progress or completed. Access your ratings and gain insight into how satisfied your tenants are with the performance of the task. Have suppliers add their certificates and qualifications in Jocoh Group Supplier Portal and forward inquiries based on the criteria you find relevant to a supplier.

                    Jocoh Group Supplier Portal ensures you full supplier management from A-Z, saves time and makes it easy for both you and the supplier to get a complete overview of forwarded cases.</p>
                    <p>Jocoh Group ensures that you have a comprehensive overview of your data on the property. This also applies to inquiries that are forwarded to suppliers. That is why we have developed Jocoh Group Supplier Portal.

                    As a user in Jocoh Group you get a complete overview of your suppliers. Which suppliers do you use? And which suppliers are associated with which properties? That and much more can now be accessed in Jocoh Group.

                    Communicate with your suppliers on a case and share case-related files with suppliers and tenants. With the Supplier Portal you do not have to forward inquiries by mail and SMS. All communication between the tenant, supplier and manager can be accessed in Jocoh Group. Draw statistics on the inquiries you send to your suppliers and see how many are waiting, in progress or completed. Access your ratings and gain insight into how satisfied your tenants are with the performance of the task. Have suppliers add their certificates and qualifications in Jocoh Group Supplier Portal and forward inquiries based on the criteria you find relevant to a supplier.

                    Jocoh Group Supplier Portal ensures you full supplier management from A-Z, saves time and makes it easy for both you and the supplier to get a complete overview of forwarded cases.</p>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>