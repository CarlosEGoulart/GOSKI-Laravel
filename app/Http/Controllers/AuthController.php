<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('landing');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'] 
        ]);

        if(Auth::attempt($credentials)){
            $request -> sessions()->regenerate();

            return redirect()->intended('landing');
        }

        return back()->withErrors([
            'username' => 'Username not found.',
            'password' => 'Password is incorrect.'
        ])-> onlyInput('username');

    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidade();
        
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
