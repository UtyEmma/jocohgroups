<?php

use App\Http\Controllers\Farms\PageController;
use App\Http\Middleware\SetActivePlatformMiddleware;
use Illuminate\Support\Facades\Route;

Route::domain(env('APP_FARMS_DOMAIN'))
    ->name('farms.')
    ->middleware(SetActivePlatformMiddleware::class)
    ->group(function(){
        Route::get('', [PageController::class, 'index'])->name('home');
        Route::fallback(fn() => abort(404));
    });