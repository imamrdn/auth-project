<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function index() {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => ['required', 'min:4', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255', 'regex:/[A-Z]/', 'regex:/[a-z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&]/'],
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);
        Auth::login($user);
        
        return redirect()->route('home')->with('success', 'Registration successful! You are now logged in.');
    }
}
