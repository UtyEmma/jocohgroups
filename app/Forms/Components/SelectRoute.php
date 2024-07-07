<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Route;

class SelectRoute extends Select {

    protected function setUp() : void {
        parent::setUp();
        $menu = [
            'home' => 'Home page',
            'about' => 'About Us',
            'services' => 'What We do',
            'faqs' => 'Frequently Asked Questions',
            'posts' => "Blog",
            'contact' => 'Contact Us',
        ];

        $this->options = $menu;
    }

}
