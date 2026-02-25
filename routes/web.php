<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('landing');
})->name('landingPage');

Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', function () { return view('register'); });
Route::post('/register', function () {
    return view('landing');
})->name('user.register');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/users', [UsersController::class, 'index'])->name('admin.users.index');

    Route::get('/users/{id}', [UsersController::class, 'detail'])->name('admin.users.detail');

    Route::get('/users/{id}/remove', [UsersController::class, 'remove'])->name('admin.users.remove');
    Route::post('/users/{id}', [UsersController::class, 'remove'])->name('admin.users.delete');
});

Route::get('/feed', function(){
    return view('feed');
})-> name('feed');