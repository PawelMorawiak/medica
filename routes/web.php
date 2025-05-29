<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/hello', function () {
    return "Hello";
});

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::GET('/register', [UserController::class, 'register']);

Route::GET('/logout', [UserController::class, 'logout']);

Route::GET('/login', [UserController::class, 'login']);