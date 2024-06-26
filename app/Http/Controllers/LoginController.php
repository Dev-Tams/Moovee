<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    /*
     * Show the login form.
     */
    public function create()
    {
        return view('users.login');
    }

    /*
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {

        //parse credentials
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //remeber me option
        $remember = $request->has('remember');

        //authenticated
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Opps, user not found.',
        ])->withInput($request->only('email'));
    }

    /*
     * Log the user out of the application.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully.');
    }
}


