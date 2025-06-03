<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AddVisitController;

use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\VisitManagementController;

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
//Route::GET('/make-appointment', [AddVisitController::class , 'make-appointment']);
Route::post('/createAddVisit', [AddVisitController::class, 'AddVisit'])->name('visits.store');
//Route::get('/appointed-visits', [AddVisitController::class, 'appointedVisits'])->name('visits.appointed');
Route::get('/visits/{id}/edit', [AddVisitController::class, 'edit'])->name('visits.edit');
Route::put('/visits/{id}', [AddVisitController::class, 'update'])->name('visits.update');
Route::delete('/visits/{id}', [AddVisitController::class, 'destroy'])->name('visits.destroy');
Route::get('/appointed-visits', [AddVisitController::class, 'appointedVisits'])->name('visits.appointed');





// obsługa linków a href z header 
Route::GET('/main-site', function () {
return view('home');
});

Route::GET('/see-profile', function () {
return view('see-profile');
});
//Route::GET('/appointed-visits', function () {
//return view('appointed-visits');
//});

Route::GET('/appoint-new-visit', function () {
return view('appoint-new-visit');
});

Route::GET('/seek-contact', function () {
return view('seek-contact');
});

Route::GET('/logout-href', function () {
return view('logout-href');
});

// obsluga jezeyka   


Route::post('/set-locale', function (Request $request) {
    $locale = $request->input('locale');
    if (in_array($locale, ['en', 'pl'])) {
        Session::put('locale', $locale);
        App::setLocale($locale); // ← ważne!
    }
    return back();
})->name('set.locale');


// obsluga email

Route::get('/testroute', function() {
$name = "Fuccy Coder";

Mail::to('p.morawiak@wp.pl')->send(new MyTestEmail($name));

});

// obsluga api

use App\Http\Controllers\Api\PrescriptionController;

Route::apiResource('prescriptions', PrescriptionController::class);




Route::get('/manage-visits', [VisitManagementController::class, 'index'])->name('visits.manage');
Route::post('/visits/{id}/occupy', [VisitManagementController::class, 'markAsOccupied'])->name('visits.occupy');
