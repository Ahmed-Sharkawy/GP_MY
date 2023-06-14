<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\TripController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\User\UserController;
use App\Http\Controllers\Dashboard\Auth\LoginController;
use App\Http\Controllers\Dashboard\Admin\AdminController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\PlanController;
use App\Http\Controllers\Dashboard\TeamController;

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
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('admins', [AdminController::class, 'index'])->name('admins.index');
Route::get('admins/create', [AdminController::class, 'create'])->name('admins.create');
Route::post('admins/store', [AdminController::class, 'store'])->name('admins.store');
Route::get('admins/{admin}/edit', [AdminController::class, 'edit'])->name('admins.edit');
Route::put('admins/{admin}/update', [AdminController::class, 'update'])->name('admins.update');
Route::get('admins/{admin}/destroy', [AdminController::class, 'destroy'])->name('admins.destroy');

Route::get('trips', [TripController::class, 'index'])->name('trips.index');
Route::get('trips/create', [TripController::class, 'create'])->name('trips.create');
Route::post('trips/store', [TripController::class, 'store'])->name('trips.store');
Route::get('trips/{trip}/edit', [TripController::class, 'edit'])->name('trips.edit');
Route::put('trips/{trip}/update', [TripController::class, 'update'])->name('trips.update');
Route::get('trips/{trip}/destroy', [TripController::class, 'destroy'])->name('trips.destroy');

///////////
Route::get('trips/{trip}/plan', [PlanController::class, 'index'])->name('trips.plan.index');
Route::get('trips/{trip}/plan/create', [PlanController::class, 'create'])->name('trips.plan.create');
Route::post('trips/{trip}/plan/store', [PlanController::class, 'store'])->name('trips.plan.store');
Route::get('trips/{plan}/plan/edit', [PlanController::class, 'edit'])->name('trips.plan.edit');
Route::put('trips/{plan}/plan/update', [PlanController::class, 'update'])->name('trips.plan.update');
Route::get('trips/{plan}/plan/destroy', [PlanController::class, 'destroy'])->name('trips.plan.destroy');

Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('contacts/{hotel}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('contacts/{hotel}/update', [ContactController::class, 'update'])->name('contacts.update');
Route::get('contacts/{hotel}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');

Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('orders/store', [OrderController::class, 'store'])->name('orders.store');
Route::get('orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('orders/{order}/update', [OrderController::class, 'update'])->name('orders.update');
Route::get('orders/{order}/destroy', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::get('teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('teams/create', [TeamController::class, 'create'])->name('teams.create');
Route::post('teams/store', [TeamController::class, 'store'])->name('teams.store');
Route::get('teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');
Route::put('teams/{team}/update', [TeamController::class, 'update'])->name('teams.update');
Route::get('teams/{team}/destroy', [TeamController::class, 'destroy'])->name('teams.destroy');
