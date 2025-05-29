<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AddVisitController;
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

//funkcje odnośnie rejestracji i logowania

Route::GET('/register', [UserController::class, 'register']);

Route::GET('/logout', [UserController::class, 'logout']);

Route::GET('/login', [UserController::class, 'login']);

// funkcje odnośne dodawanie postu

Route::GET('/create-post', [PostController::class , 'create-post']);

// funkcje odnosne dodawania wizyty lekarza 

Route::GET('/make-appointment', [AddVisitController::class , 'make-appointment']);


// obsługa linków a href

Route::GET('/appointed-visits', function () {
return view('appointed-visits');
});

Route::GET('/appoint-new-visit', function () {
return view('appoint-new-visit');
});