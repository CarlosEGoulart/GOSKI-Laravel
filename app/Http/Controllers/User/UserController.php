<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $user = new User();
        
        $user->username = strtolower($request->username);
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        
        return redirect('feed');
    }
}
