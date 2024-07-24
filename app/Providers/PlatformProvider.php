<?php

namespace App\Providers;

use App\Enums\Platforms;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PlatformProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void {        
        if(!app()->runningInConsole()) {
            $domain = request()->getHost();
            $platform = Platforms::fromDomain($domain);
            Request::macro('platform', fn() => $platform);

            View::share([
                'platforms' => Platforms::class,
                'platform' => $platform->model()
            ]);
        }
    }
}
