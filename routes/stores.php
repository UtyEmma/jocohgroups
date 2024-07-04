<?php

use App\Http\Controllers\Stores\PageController;
use App\Http\Controllers\Stores\ProductController;
use Illuminate\Support\Facades\Route;

Route::domain(env('APP_STORES_DOMAIN'))
    ->name('stores.')
    ->middleware('platform:stores')
    ->group(function(){
        Route::get('', [PageController::class, 'index'])->name('home');
        Route::get('about', [PageController::class, 'about'])->name('about');
        Route::get('contact', [PageController::class, 'contact'])->name('contact');
        
        Route::prefix('products')->group(function(){
            Route::get('', [ProductController::class, 'index'])->name('products');
            Route::get('{product}', [ProductController::class, 'show'])->name('products.show');
        });

        Route::fallback(fn() => abort(404));
    });