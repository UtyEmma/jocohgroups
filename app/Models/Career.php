<?php

namespace App\Models;

use App\Concerns\Platforms\HasPlatform;
use App\Enums\Platforms;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model {
    use HasFactory, HasUuids, HasPlatform;

    protected $fillable = ['role', 'type', 'workplace', 'location', 'salary', 'deadline', 'description', 'application_link', 'platform_code', 'status'];

    protected $casts = [
        'status' => Status::class
    ];

    protected $attributes = [
        'status' => Status::ACTIVE
    ];

    function setPlatforms() {
        $this->platforms = [ Platforms::GROUP ];
    }

}
