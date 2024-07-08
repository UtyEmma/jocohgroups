<?php

namespace App\Concerns\Platforms;

use App\Enums\Platforms;
use App\Models\Platform;
use Illuminate\Database\Eloquent\Builder;

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

    protected static function bootHasPlatform(): void {
        static::addGlobalScope('onPlatform', function (Builder $builder, $platform = null) {
            $builder->where('platform_code', $platform ?? request()->platform());
        });
    }

    function setPlatforms() : void {
        $this->platforms;
    }

    function allowedByPlatform(Platforms $platform) {
        return in_array($platform, $this->platforms);
    }

}