<?php

namespace App\Models;

use App\Concerns\Platforms\HasPlatform;
use App\Concerns\HasStatus;
use App\Enums\Platforms;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUuids, HasStatus, HasPlatform;

    function setPlatforms(): void {
        $this->platforms = [Platforms::STORES];
    }
}
