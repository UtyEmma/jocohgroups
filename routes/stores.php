<?php

use App\Http\Controllers\Stores\PageController;
use App\Http\Controllers\Stores\ProductController;
use Illuminate\Support\Facades\Route;

Route::domain(env('APP_STORES_DOMAIN'))
    ->name('stores.')
    ->middleware('platform:stores')
    ->group(function(){
        Route::get('', [PageController::class, 'index'])->name('home');
        Route::get('products', [ProductController::class, 'index'])->name('products');
        Route::fallback(fn() => abort(404));
    });