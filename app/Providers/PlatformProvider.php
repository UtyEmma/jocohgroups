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
        $domain = current(explode('.', request()->getHost()));
        $platform = Platforms::platform($domain);
        Request::macro('platform', fn() => $platform);

        if(!app()->runningInConsole()) {
            View::share([
                'platforms' => Platforms::class,
                'platform' => $platform->model()
            ]);
        }
    }
}
