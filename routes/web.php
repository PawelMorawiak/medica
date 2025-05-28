<?php

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


Route::get('/register', function() {
return 'dziekuje za rejestracje';

});