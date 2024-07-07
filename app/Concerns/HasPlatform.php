<?php

namespace App\Concerns;

use App\Enums\Platforms;
use App\Models\Platform;

trait HasPlatform {

    function platform(){
        return $this->belongsTo(Platform::class, 'platform');
    }

    function initializeHasPlatform(){
        $this->mergeCasts([
            'platform_code' => Platforms::class
        ]);

        $this->mergeFillable([ 'platform_code' ]);
    }

}