<?php

use App\Http\Controllers\Group\PageController;
use Illuminate\Support\Facades\Route;

Route::name('group.')
    ->middleware('platform:group')
    ->group(function(){
        Route::get('', [PageController::class, 'index'])->name('home');
    });