<?php

namespace App\Concerns\Platforms;

use App\Enums\Platforms;
use App\Models\Platform;

trait HasPlatform {

    function platform(){
        return $this->belongsTo(Platform::class, 'platform');
    }

    function initializeHasPlatform(){
        $this->fillable[] = 'platform_code';

        $this->mergeCasts([
            'platform_code' => Platforms::class
        ]);

        $this->mergeAttributes([
            'platform_code' => request()->platform()
        ]);
    }

}