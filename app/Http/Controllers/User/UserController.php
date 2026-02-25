<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\RegisterUserRequest;
use Models\User;


class UsersController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $user = new User();
        
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->password_confirmation = $request->password_confirmation;
        $user->save();
        return true;
    }
}