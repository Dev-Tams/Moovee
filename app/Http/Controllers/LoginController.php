<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


/**
 * @Group Login 
 * 
 * endpoints to log in a user
 */
class LoginController extends Controller
{

    public function create()
    {
        return view('users.login');
    }

    /*
     * Logs in a user 
     * 
     * @response 200
     * 
     * @error invalid user email
     */
    public function authenticate(Request $request): RedirectResponse
    {


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $remember = $request->has('remember');
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Opps, user not found.',
        ])->withInput($request->only('email'));
    }

    /*
     * Logs out a user
     * 
     * @response 200
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully.');
    }
}
