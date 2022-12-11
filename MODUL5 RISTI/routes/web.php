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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addCar', [App\Http\Controllers\CarController::class, 'create'])->name('addCar');
Route::post('/storeCar', [App\Http\Controllers\CarController::class, 'store'])->name('storeCar');
Route::get('/myCar', [App\Http\Controllers\CarController::class, 'index'])->name('myCar');
Route::get('/myCar/details/{id}', [App\Http\Controllers\CarController::class, 'show'])->name('carDetail');
Route::get('/myCar/update/{id}', [App\Http\Controllers\CarController::class, 'edit'])->name('carEdit');
Route::put('/myCar/edit/{id}', [App\Http\Controllers\CarController::class, 'update'])->name('carUpdate');
Route::get('/myCar/delete/{id}', [App\Http\Controllers\CarController::class, 'destroy'])->name('carDelete');

Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('profile');
Route::put('/profile/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('updateProfile');

