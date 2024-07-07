<?php

namespace App\Concerns\Platforms;

use App\Enums\Platforms;
use Illuminate\Database\Eloquent\Casts\AsEnumArrayObject;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;

trait InteractsWithPlatform {

    function initializeHasPlatform(){
        $this->fillable[] = 'platforms';

        $this->mergeCasts([
            'platforms' => AsEnumCollection::of(Platforms::class)
        ]);
    }

    function hasPlatform($platform){
        return $this->platforms->where(fn($item) => $item == $platform)->first();
    }

}