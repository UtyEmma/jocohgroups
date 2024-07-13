<?php

namespace App\Models;

use App\Concerns\HasStatus;
use App\Concerns\Platforms\HasPlatform;
use App\Enums\Platforms;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model {
    use HasFactory, HasPlatform, HasStatus, HasUuids;

    protected $fillable = ['name', 'image', 'website'];

    protected function image(): Attribute {
        return Attribute::make(
            get: function(string $value) {
                if(file_exists("storage/{$value}")) return asset("storage/{$value}");
                if(file_exists($value)) return asset($value);
                return $value;
            },
        );
    }

    function setPlatforms(): void {
        $this->platforms = [Platforms::FARMS];
    }
}
