<?php

use App\Http\Controllers\Group\BlogController;
use App\Http\Controllers\Group\CareerController;
use App\Http\Controllers\Group\PageController;
use App\Http\Middleware\SetActivePlatformMiddleware;
use Illuminate\Support\Facades\Route;

Route::domain(env('APP_DOMAIN'))
    ->name('group.')
    ->middleware(SetActivePlatformMiddleware::class)
    ->group(function(){
        Route::get('', [PageController::class, 'index'])->name('home');
        Route::get('business', [PageController::class, 'about'])->name('about');
        
        Route::prefix('jobs')->group(function(){
            Route::get('{career}', [CareerController::class, 'index'])->name('career.show');
        });
        
        Route::prefix('blog')->group(function(){
            Route::get('', [BlogController::class, 'index'])->name('blog');
            Route::get('{blog}', [BlogController::class, 'show'])->name('blog.details');
        });
    });