<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\ShopController;

Route::get('/', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard.index');
Route::post('/leaderboard/search', [LeaderboardController::class, 'search'])->name('leaderboard.search');

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::post('/cart/add', [ShopController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [ShopController::class, 'removeFromCart'])->name('cart.remove');

