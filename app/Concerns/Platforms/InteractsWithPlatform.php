<?php

namespace App\Concerns\Platforms;

use App\Enums\Platforms;
use Illuminate\Database\Eloquent\Casts\AsEnumArrayObject;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;

trait InteractsWithPlatform {

    function initializeHasPlatform(){
        $this->fillable[] = 'platforms';

        // $this->mergeCasts([
        //     'platforms' => AsEnumArrayObject::of(Platforms::class)
        // ]);
    }

    function hasPlatform($platform){
        return (bool) $this->platforms?->where(fn($item) => $item == $platform)->first();
    }

    function allowedOnPlatform($platform){
        return (bool) $this->platforms?->where(fn($item) => $item == $platform)->first();
    }

}