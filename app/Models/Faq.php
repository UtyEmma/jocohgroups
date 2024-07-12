<?php

namespace App\Models;

use App\Concerns\HasStatus;
use App\Concerns\Platforms\HasPlatform;
use App\Enums\Platforms;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory, HasUuids, HasStatus, HasPlatform;

    protected $fillable = ['question', 'answer'];

    function setPlatforms(): void
    {
        $this->platforms = [Platforms::STORES, Platforms::FARMS];
    }

}
