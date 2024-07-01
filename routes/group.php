<?php

use App\Http\Controllers\Group\PageController;
use Illuminate\Support\Facades\Route;

Route::domain(env('APP_DOMAIN'))
    ->name('group.')
    ->middleware('platform:group')
    ->group(function(){
        Route::get('', [PageController::class, 'index'])->name('home');
        Route::get('business', [PageController::class, 'about'])->name('about');
    });