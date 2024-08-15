<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

/**
 * @group User
 * 
 * APIs to book, manage, and view services
 */

class UserController extends Controller
{

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        //shows users form
        return view('users.signup');
    }

    /**
     * creates a new user.
     * @response 302 {
     *   "message": "please verify email address."
     * }
     */

    public function store(UserRequest $request)
    {

        $validatedData = $request->validate();

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'password' => bcrypt($validatedData['password']),
        ]);
        event(new Registered($user));


        auth()->login($user);

        return redirect('/')->with('success', 'User registered successfully.');
    }
}
