<?php

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ServiceController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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



//|--------------------------------------------------------------------------
//| Static Pages
//|--------------------------------------------------------------------------
Route::get('/', [StaticController::class, 'index']);
Route::get('/contact',  [StaticController::class, 'contact']);
Route::get('/about',  [StaticController::class, 'about']);
Route::view('/terms', 'terms');



//|--------------------------------------------------------------------------
//| Service routes
//|--------------------------------------------------------------------------
Route::get('quote', [ServiceController::class, 'quote']);
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('service/book', [ServiceController::class, 'create'])->middleware('auth')->name('service.create');
Route::post('service/book', [ServiceController::class, 'store'])->middleware('auth')->name('service.store');
//confirm booked service by mail
Route::view('/mail',  'serviceConfirmed');

//|--------------------------------------------------------------------------
//| Order routes
//|--------------------------------------------------------------------------
//User without ordersRoute::get('/orders', [ServiceController::class, 'show'])->middleware('auth');
Route::get('/orders', [ServiceController::class, 'show'])->middleware('auth');



//testing the tailwind css class
Route::view('/app', 'app');



//|--------------------------------------------------------------------------
//| User registration
//|--------------------------------------------------------------------------
//Handles a new user registration 
Route::get('/register', [UserController::class, 'create'])->middleware('guest')->name('register.store');

// get request to verify email
Route::get('/email/verify', function () {
    return view('users.verify-email');
})->middleware('auth')->name('verification.notice');

//clickable verifiable link
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

//re-request email verify link, either broken or deleted
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
//login user, if mail is verified
Route::post('/register', [UserController::class, 'store'])->middleware('guest')->name('register.store');





//|--------------------------------------------------------------------------
//| AUthenticate existing users
//|--------------------------------------------------------------------------
//Handles auth users 
Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


//|--------------------------------------------------------------------------
//| Route for important changes (requires password)
//|--------------------------------------------------------------------------
Route::get('/confirm-password', function () {
    return view('users.confirm-password');
})->middleware('auth')->name('password.confirm');
// Checking passowrds (Post)
// Route::post('/confirm-password', function (Request $request) {
//     if (!Hash::check($request->password, $request->user()->password)) {
//         return back()->withErrors([
//             'password' => ['The provided password does not match our records.']
//         ]);
//     }

//     $request->session()->passwordConfirmed();

//     return redirect()->intended();
// })->middleware(['auth', 'throttle:6,1']);

