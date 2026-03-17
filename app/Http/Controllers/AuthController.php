<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User as User;

class AuthController extends Controller
{
    public function login()
    {
        return view('feed');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $supabase = app('supabase');
        
        $response = $supabase->auth()->signInWithPassword([
            'email'=>$credentials('email'),
            'password'=>$credentials('password')
        ]);

        if($response->getError()){
            return back()->withErrors([
                'email' => 'Email not found.',
                'password' => 'Password is incorrect.'
            ])->onlyInput('email');
        }

        $supabaseUser = $response->getUser();
        $user = User::where('id', $supabaseUser->id)->first();

        if($user){
            Auth::login($user);
            $request->session()->regenerateToken();

            return redirect()->intended('feed');
        }

        return back()->withErrors([
            'email' => 'User not found.'
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('landingPage');
    }
}

