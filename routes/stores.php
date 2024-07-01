<?php

use App\Http\Controllers\Stores\PageController;
use Illuminate\Support\Facades\Route;

Route::domain(env('APP_STORES_DOMAIN'))
    ->name('stores.')
    ->middleware('platform:stores')
    ->group(function(){
        Route::get('', [PageController::class, 'index'])->name('home');
    });