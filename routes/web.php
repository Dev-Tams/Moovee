<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ServicesController;


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


//using the --invoke method, simply dedicates a single action to a controller


//static pages 
Route::get('/', function () {
    return view('index');
});
Route::get('/contact',  [StaticController::class, 'contact']);
Route::get('/about',  [StaticController::class, 'about']);
Route::get('/testify',  [StaticController::class, 'testimonials']);
Route::get('test', [TestController::class, 'test']);


//routes for Transportation services
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/services/book', [ServicesController::class, 'show']);