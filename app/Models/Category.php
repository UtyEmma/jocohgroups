<?php

namespace App\Models;

use App\Concerns\Platforms\HasPlatform;
use App\Enums\Platforms;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use HasFactory, HasUuids, HasPlatform;

    protected $fillable = ['name', 'slug', 'platform_code', 'status'];

    protected $casts = [
        'status' => Status::class
    ];

    protected $attributes = [
        'status' => Status::ACTIVE
    ];

    function setPlatforms(): void {
        $this->platforms = [Platforms::GROUP];
    }

    function posts(){
        return $this->hasMany(Post::class, 'category_id');
    }
}
