<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterUserRequest;

class UserController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $supabase = app('supabase');

        $response = $supabase->auth()->signUp([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->getError()) {
            return back()->withErrors(['message' => 'Registration failed']);
        }

        return redirect('feed');
    }
}
