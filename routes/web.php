<?php

use App\Http\Controllers\ProductController;
use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Support\Facades\Route;

require __DIR__.'/stores.php';
require __DIR__.'/farms.php';
require __DIR__.'/group.php';

Route::prefix('base')->name('base.')->withoutMiddleware(HandleInertiaRequests::class)->group(function(){
    Route::prefix('products')->group(function(){
        Route::get('{?category:slug}', [ProductController::class, 'index'])->name('products');
    });
});
