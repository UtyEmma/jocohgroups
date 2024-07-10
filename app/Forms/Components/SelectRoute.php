<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Route;

class SelectRoute extends Select {

    protected function setUp() : void {
        parent::setUp();
        $menu = [
            'group.home' => 'Home page',
            'group.about' => 'About Us',
            'group.blog' => 'Blog',
        ];

        $this->options = $menu;
    }

}
