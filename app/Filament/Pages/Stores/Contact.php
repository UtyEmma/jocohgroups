<?php

namespace App\Filament\Pages\Stores;

use Filament\Pages\Page;

class Contact extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationLabel = 'Contact Page';
    protected static ?string $navigationGroup = 'Pages';
    protected static string $view = 'filament.pages.stores.contact';
}
