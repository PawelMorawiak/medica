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


// druga próba 
// Route::GET('/createPost', [PostController::class , 'createPost']);


Route::get('/createPost', [PostController::class, 'create'])->name('posts.create');
Route::post('/createPost', [PostController::class, 'store'])->name('posts.store');

// funkcje odnosne dodawania wizyty lekarza 

Route::GET('/make-appointment', [AddVisitController::class , 'make-appointment']);


// obsługa linków a href z header 
Route::GET('/main-site', function () {
return view('main-site');
});

Route::GET('/see-profile', function () {
return view('see-profile');
});
Route::GET('/appointed-visits', function () {
return view('appointed-visits');
});

Route::GET('/appoint-new-visit', function () {
return view('appoint-new-visit');
});

Route::GET('/seek-contact', function () {
return view('seek-contact');
});

Route::GET('/logout-href', function () {
return view('logout-href');
});


