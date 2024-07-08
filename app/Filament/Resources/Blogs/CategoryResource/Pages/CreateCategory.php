<?php

namespace App\Filament\Resources\Blogs\CategoryResource\Pages;

use App\Filament\Resources\Blogs\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
