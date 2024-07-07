<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['title', 'role', 'type', 'workplace', 'location', 'salary', 'deadline', 'description', 'application_link', 'platform_code', 'status'];

    protected $casts = [
        'status' => Status::class
    ];

    protected $attributes = [
        'status' => Status::ACTIVE
    ];
}
