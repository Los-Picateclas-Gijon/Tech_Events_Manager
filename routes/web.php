<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('landing');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/events', [App\Http\Controllers\AdminController::class, 'index'])->name('events');
Route::post('/events', [App\Http\Controllers\AdminController::class, 'create'])->name('events.create');
Route::get('/events', [App\Http\Controllers\AdminController::class, 'store'])->name('events.store');
Route::get('/events/{id}', [App\Http\Controllers\AdminController::class, 'show'])->name('events.show');
Route::put('/events/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('events.edit');
Route::get('/events/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('events.destroy');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/users', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::delete('/users', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');

