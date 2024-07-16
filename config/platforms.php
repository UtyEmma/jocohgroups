<?php

use App\Enums\Platforms;

return [

    Platforms::GROUP->value => [
        'name' => Platforms::GROUP->label(),
        'slug' => Platforms::GROUP->value,
        'logo' => 'assets/group/images/logo.png',
        'settings' => [
            'site_title' => 'Jocoh Group',
            'company_name' => 'Jocoh Group',
            'site_name' => 'Jocoh Group',
            'site_email' => 'info@jocohgroup.com',
            'site_description' => '',
            'contact_address' => 'Lagos, Nigeria',

            'contact_phone' => '',

            'seo_description' => "",

            'seo_tags' => '',

            'twitter_link' => "",

            'instagram_link' => "",

            'linkedin_link' => "",

            'facebook_link' => "",

            'header_scripts' => "",

            'footer_scripts' => ""
        ],
        'content' => []
    ],

    Platforms::FARMS->value => [
        'name' => Platforms::FARMS->label(),
        'slug' => Platforms::FARMS->value,
        'logo' => 'assets/farms/images/logo.png',
        'settings' => [
            'site_title' => 'Jocoh Farms',
            'company_name' => 'Jocoh Farms',
            'site_name' => 'Jocoh Farms',
            'site_email' => 'info@jocohgroup.com',
            'site_description' => '',
            'contact_address' => 'Lagos, Nigeria',

            'contact_phone' => '',

            'seo_description' => "",

            'seo_tags' => '',

            'twitter_link' => "",

            'instagram_link' => "",

            'linkedin_link' => "",

            'facebook_link' => "",

            'header_scripts' => "",

            'footer_scripts' => ""
        ],
        'content' => []
    ],

    Platforms::STORES->value => [
        'name' => Platforms::STORES->label(),
        'slug' => Platforms::STORES->value,
        'logo' => 'assets/stores/images/logo.png',
        'settings' => [
            'site_title' => 'Jocoh Stores',
            'company_name' => 'Jocoh Stores',
            'site_name' => 'Jocoh Stores',
            'site_email' => 'info@jocohstores.com',
            'site_description' => '',
            'contact_address' => 'Lagos, Nigeria',

            'contact_phone' => '',

            'seo_description' => "",

            'seo_tags' => '',

            'twitter_link' => "",

            'instagram_link' => "",

            'linkedin_link' => "",

            'facebook_link' => "",

            'header_scripts' => "",

            'footer_scripts' => ""
        ],
        'content' => []
    ],

];