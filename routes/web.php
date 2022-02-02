<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('events');
Route::post('/events', [App\Http\Controllers\EventController::class, 'create'])->name('events.create');
Route::get('/events', [App\Http\Controllers\EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}', [App\Http\Controllers\EventController::class, 'show'])->name('events.show');
Route::put('/events/{id}', [App\Http\Controllers\EventController::class, 'edit'])->name('events.edit');
Route::get('/events/{id}', [App\Http\Controllers\EventController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [App\Http\Controllers\EventController::class, 'destroy'])->name('events.destroy');

Route::get('/locations', [App\Http\Controllers\LocationController::class, 'index'])->name('locations');
Route::get('/locations', [App\Http\Controllers\LocationController::class, 'store'])->name('locations.store');
Route::get('/locations/{id}', [App\Http\Controllers\LocationController::class, 'show'])->name('locations.show');
Route::put('/locations/{id}', [App\Http\Controllers\LocationController::class, 'edit'])->name('locations.edit');
Route::get('/locations/{id}', [App\Http\Controllers\LocationController::class, 'update'])->name('locations.update');
Route::delete('/locations/{id}', [App\Http\Controllers\LocationController::class, 'destroy'])->name('locations.destroy');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

