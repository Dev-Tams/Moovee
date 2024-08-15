<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ServiceController;

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


Route::controller(StaticController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/contact', 'contact');
    Route::get('/about', 'about');
    Route::get('/terms', 'terms');
    Route::post('/contact', 'store');
});



Route::controller(ServiceController::class)->group(function () {
    Route::get('quote', 'quote');
    Route::get('/services', 'index')->name('services.info');
    Route::get('services/book', 'create')->middleware('auth');
    Route::post('services/book', 'store')->name('service.store')->middleware('auth');
    Route::get('services/orders', 'show')->name('services.orders')->middleware('auth');
    Route::get('services/{services}', 'manage')->middleware('auth');
    Route::get('services/{services}/edit', 'edit')->middleware('auth');
    Route::put('services/{services}', 'update')->name('services.update')->middleware('auth');
    Route::delete('services/{services}', 'destroy')->middleware('auth');
});



Route::controller(UserController::class)->group(function () {
    Route::get('/register', 'create')->name('register.storee');
    Route::post('/register', 'store')->name('register.stree');
})->middleware('guest');



Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'create')->middleware('guest')->name('login');
    Route::post('/login', 'authenticate')->middleware('guest');
    Route::post('/logout', 'logout')->middleware('auth');
});


Route::get('/confirm-password', function () {
    return view('users.confirm-password');
})->middleware('auth')->name('password.confirm');
