<?php

use App\Enums\Platforms;

return [

    Platforms::GROUP->value => [
        'name' => Platforms::GROUP->label(),
        'slug' => Platforms::GROUP->value,
        'logo' => 'assets/group/images/logo.png',
        'settings' => [
            'site_title' => 'Jocoh Groups',
            'social_media'
        ]
    ],

    Platforms::FARMS->value => [
        'name' => Platforms::FARMS->label(),
        'slug' => Platforms::FARMS->value,
        'logo' => 'assets/farms/images/logo.png',
        'settings' => [

        ]
    ],

    Platforms::STORES->value => [
        'name' => Platforms::STORES->label(),
        'slug' => Platforms::STORES->value,
        'logo' => 'assets/stores/images/logo.png',
        'settings' => [

        ]
    ],

];