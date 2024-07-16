<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Field;
use Filament\Forms\Components\FileUpload;

class CustomFileUpload extends FileUpload {
    protected string $view = 'forms.components.custom-file-upload';
}
