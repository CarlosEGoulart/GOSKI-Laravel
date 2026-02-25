<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterUserRequest;
<<<<<<< HEAD
use App\Services\SupabaseAuthService;
=======
use App\Models\User;
use Illuminate\Support\Facades\Hash;
>>>>>>> f6475f0 (Relacionamentos 1xN NxN)

class UserController extends Controller
{
    public function register(RegisterUserRequest $request, SupabaseAuthService $supabase)
    {
<<<<<<< HEAD
        $response = $supabase->signUp(
            $request->email, 
            $request->password,
            $request->username
        );

        if (isset($response['error_description']) || isset($response['error'])) {
            return back()->withInput()->withErrors([
                'supabase' => $response['error_description'] ?? $response['error']['message']
            ]);
        }
       
        return redirect()->route('landingPage')->with('success', 'Conta criada!');
=======
        $user = new User();
        
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        
        return redirect('feed');
>>>>>>> f6475f0 (Relacionamentos 1xN NxN)
    }
}
