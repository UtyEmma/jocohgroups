<?php

namespace App\Models;

use App\Concerns\Platforms\HasPlatform;
use App\Enums\Platforms;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, HasUuids, SoftDeletes, HasPlatform;

    protected $fillable = ['name', 'role', 'bio', 'image', 'instagram', 'facebook', 'linkedin', 'twitter', 'status'];

    protected $casts = [
        'status' => Status::class
    ];

    protected $attributes = [
        'status' => Status::ACTIVE
    ];

    function setPlatforms(): void
    {
        $this->platforms = [Platforms::GROUP];
    }
}
