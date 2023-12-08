<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DriverController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('admin', [HomeController::class, 'index'])->name('admin');
    Route::resource('car', CarController::class);
    Route::resource('driver', DriverController::class);
});


Route::get('user', [HomeController::class, 'indexuser'])->name('user');
Route::get('allcar', [CarController::class, 'index3']);
Route::get('dr', [DriverController::class, 'index2']);
Route::get('/log', [CarController::class, 'index4'])->name('car_user_home');
Route::get('/', [CarController::class, 'index5'])->name('public');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
