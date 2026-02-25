<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response\RedirectResponse;

class AuthController extends Controller
{
    public function login()
    {
        return view('landing');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required'] 
        ]);

        if(Auth::attempt($credentials)){
            $request -> session()->regenerate();

            return redirect()->intended('landing');
        }

        return back()->withErrors([
            'email' => 'Username not found.',
            'password' => 'Password is incorrect.'
        ])-> onlyInput('username');

    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
