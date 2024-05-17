<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    
    }

    public function authenticate(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => ['required', 'regex:/[A-Z]/', 'regex:/[a-z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&]/'],
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please use a valid format (e.g., example@gmail.com',
            'email.exists' => 'No account found with this email address',
            'password.required' => 'The password field is required.',
            'password.regex' => 'Password Invalid',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home')->with('success', 'You are successfully logged in!');
        }
    
        return back()->withErrors([
            'loginError' => 'These credentials do not match our records.',
        ])->withInput();
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'You have successfully logged out!');
    }
}
