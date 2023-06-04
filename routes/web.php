<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PayPalController;

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

    Route::get('logout', [AuthController::class, 'logout'])->name('home.logout');

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('about', [HomeController::class, 'about'])->name('home.about');
    Route::get('hotel', [HomeController::class, 'hotel'])->name('home.hotel');
    Route::get('hotel/{hotel}/plan', [HomeController::class, 'plan'])->name('home.hotel.plan');
    Route::get('trip/{trip}/plan', [HomeController::class, 'tripPlan'])->name('home.trip.plan');
    Route::get('cart', [HomeController::class, 'cart'])->name('home.cart');
    Route::get('cart/{plan}/save', [HomeController::class, 'cartSave'])->name('home.cart.save');
    Route::get('cart/{plan}/delete', [HomeController::class, 'cartDelete'])->name('home.cart.delete');
    Route::get('programs', [HomeController::class, 'program'])->name('home.programs');
    Route::get('contact', [HomeController::class, 'contact'])->name('home.contact');
    Route::post('contact', [HomeController::class, 'contactStore'])->name('home.contact.store');
    Route::get('checkout', [HomeController::class, 'checkout'])->name('home.checkout');

    Route::get('paypal', [PayPalController::class, 'paypal'])->name('home.paypal');
    Route::get('paypal/success', [PayPalController::class, 'success'])->name('home.paypal.success');
    Route::get('paypal/cancel', [PayPalController::class, 'cancel'])->name('home.paypal.cancel');
});

Route::get('test', function () {
    return view('frontend.checkout');
});
