<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\CreateUserController;
use App\Http\Controllers\ViewController\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Views
Route::get('/login', [ViewController::class, 'loginPage'])->name('login.page');

//
Route::post('/login', AuthController::class)->name('login');


//  User
Route::post('/user/create', CreateUserController::class)->name('user.create');
