<?php

use App\Models\Service;
use Illuminate\Support\Facades\Route;
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


//using the --invoke method, simply dedicates a single action to a controller


//static pages 
Route::get('/', [StaticController::class, 'index']);
Route::get('/contact',  [StaticController::class, 'contact']);
Route::get('/about',  [StaticController::class, 'about']);
Route::get('/testify',  [StaticController::class, 'testimonials']);



Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('service/book', [ServiceController::class, 'create'])->name('service.create');
Route::post('service/book', [ServiceController::class, 'store'])->name('service.store');





//comment routes
Route::get('/comment', [App\Http\Controllers\CommentController::class, 'index'])->name('comment.index');
Route::post('/comment', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');