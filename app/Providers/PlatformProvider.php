<?php

namespace App\Providers;

use App\Enums\Platforms;
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
        Request::macro('platform', function(){
            return Platforms::platform(current(explode('.', request()->getHost())));
        });

        if(!app()->runningInConsole()) {
            View::share([
                'platforms' => Platforms::class
            ]);
        }
    }
}
