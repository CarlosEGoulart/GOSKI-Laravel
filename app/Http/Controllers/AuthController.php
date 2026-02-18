<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('landing');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request validate([
            'username' => ['required', 'username'],
            'password' => ['required'] 
        ]);

        if(Auth::attempt($credentials))(
            $request -> sessions()->regenerate();

            return redirect()->intended('landing');
        )

        return back()->withErrors([
            'username' => 'Username not found.'
        ])-> onlyInput('username');
    }
}
