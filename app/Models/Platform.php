<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model {
    use HasFactory;

    protected $fillable = ['name', 'slug', 'logo', 'settings'];

    protected $casts = [
        'settings' => 'array'
    ];

    protected $attributes = [
        'settings' => []
    ];
}
