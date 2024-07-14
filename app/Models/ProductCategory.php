<?php

namespace App\Models;

use App\Concerns\HasStatus;
use App\Concerns\Platforms\HasPlatform;
use App\Enums\Platforms;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model {
    use HasFactory, HasUuids, HasStatus;

    protected $fillable = ['name', 'slug','status'];

    protected array $platforms = [Platforms::FARMS, Platforms::STORES];

    function allowedByPlatform(Platforms $platform) {
        return in_array($platform, $this->platforms);
    }

    function products(){
        return $this->hasMany(Product::class, 'category_id');
    }

}
