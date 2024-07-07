<?php

namespace App\Concerns\Platforms;

use App\Enums\Platforms;
use App\Models\Platform;

trait HasPlatform {

    protected array $platforms = [];

    function platform(){
        return $this->belongsTo(Platform::class, 'platform');
    }

    function initializeHasPlatform(){
        $this->fillable[] = 'platform_code';

        $this->mergeCasts([
            'platform_code' => Platforms::class
        ]);

        $this->setAttribute('platform_code', request()->platform());

        $this->setPlatforms();
    }

    function setPlatforms() : void {
        $this->platforms;
    }

    function allowedByPlatform(Platforms $platform) {
        return in_array($platform, $this->platforms);
    }

}