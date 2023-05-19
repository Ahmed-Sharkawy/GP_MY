<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\User\UserController;
use App\Http\Controllers\Dashboard\Auth\LoginController;
use App\Http\Controllers\Dashboard\HotelController;

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

Route::get('login', [LoginController::class, 'create'])->name('login')->middleware('guest:admin')->withoutMiddleware('auth:admin');
Route::post('login', [LoginController::class, 'store'])->name('login.store')->middleware('guest:admin')->withoutMiddleware('auth:admin');

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users/store', [UserController::class, 'store'])->name('users.store');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::get('users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('hotels/create', [HotelController::class, 'create'])->name('hotels.create');
Route::post('hotels/store', [HotelController::class, 'store'])->name('hotels.store');
Route::get('hotels/{hotel}/edit', [HotelController::class, 'edit'])->name('hotels.edit');
Route::put('hotels/{hotel}/update', [HotelController::class, 'update'])->name('hotels.update');
Route::get('hotels/{hotel}/destroy', [HotelController::class, 'destroy'])->name('hotels.destroy');