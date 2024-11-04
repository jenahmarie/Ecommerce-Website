<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google.auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle'])->name('google.callback');

Route::get('/', [ShopController::class, 'showLandingpage'])->name('landing');
Route::get('/homepage', [ProductController::class, 'index'])->name('homepage');

Route::get('/homepage/products', [ProductController::class, 'index']);



Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
Route::post('/cart/add', [ShopController::class, 'addToCart'])->name('cart.add');;
Route::get('/checkout', [ShopController::class, 'checkout'])->name('checkout');
require __DIR__.'/auth.php';
