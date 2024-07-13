<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Route;

class SelectRoute extends Select {

    protected function setUp() : void {
        parent::setUp();
        $menu = [
            'Jocoh Group' => [
                'group.home' => 'Home page',
                'group.about' => 'About Us',
                'group.blog' => 'Blog',
            ],
            'Jocoh Stores' => [
                'stores.home' => 'Home page',
                'stores.about' => 'About Us',
                'stores.products' => 'Products',
                'stores.contact' => 'Contact Us',
            ],
            'Jocoh Farms' => [
                'farms.home' => 'Home page'
            ],
            
        ];

        $this->options = $menu;
        // $this->native(false);
    }

}
