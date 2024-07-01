<?php

use App\Http\Controllers\Farms\PageController;
use Illuminate\Support\Facades\Route;

Route::domain(env('APP_FARMS_DOMAIN'))
    ->name('farms.')
    ->middleware('platform:farms')
    ->group(function(){
        Route::get('', [PageController::class, 'index'])->name('home');
        Route::fallback(fn() => abort(404));
    });