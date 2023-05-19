<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'loginView'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.store');
    Route::get('register', [AuthController::class, 'registerView'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('about', [HomeController::class, 'about'])->name('home.about');
    Route::get('hotel', [HomeController::class, 'hotel'])->name('home.hotel');
    Route::get('cart', [HomeController::class, 'cart'])->name('home.cart');
    Route::get('program', [HomeController::class, 'program'])->name('home.program');
    Route::get('contact', [HomeController::class, 'contact'])->name('home.contact');
});
