<?php

namespace App\Models;

use App\Concerns\Platforms\HasPlatform;
use App\Concerns\HasStatus;
use App\Enums\Platforms;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUuids, HasStatus, HasPlatform;

    protected $fillable = ['title', 'slug', 'image', 'excerpt', 'description', 'price', 'status'];

    function setPlatforms(): void {
        $this->platforms = [Platforms::STORES, Platforms::FARMS];
    }

    protected function image(): Attribute {
        return Attribute::make(
            get: function(string $value) {
                if(file_exists("storage/{$value}")) return asset("storage/{$value}");
                if(file_exists($value)) return asset($value);
                return $value;
            },
        );
    }
}
