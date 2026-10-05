<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', function () {
    return view('about');
});

Route::get('/signup', [SignupController::class, 'create']);

// Route::resource('products', ProductController::class);

// Route::apiResources([
//     'products' => ProductController::class,
//     'cars' => CarController::class
// ]);
