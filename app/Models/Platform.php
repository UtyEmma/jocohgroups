<?php

namespace App\Models;

use App\Enums\Platforms;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model {
    use HasFactory, HasUuids;

    protected $fillable = ['name', 'slug', 'logo', 'settings', 'content'];

    protected $casts = [
        'settings' => 'array',
        'content' => 'array',
        'slug' => Platforms::class
    ];

}
