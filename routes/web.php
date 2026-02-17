<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;


Route::get('/', function () {
    return view('landing');
});

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', function () {
    return view('landing');
})->name('user.register');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/users', [UsersController::class, 'index'])->name('admin.users.index');

    Route::get('/users/{id}', [UsersController::class, 'detail'])->name('admin.users.detail');

    Route::get('/users/{id}/remove', [UsersController::class, 'remove'])->name('admin.users.remove');
    Route::post('/users/{id}', [UsersController::class, 'remove'])->name('admin.users.delete');
});
