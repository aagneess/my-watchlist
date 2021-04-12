<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\ListController;
use App\Http\Controllers\MoviesController;

// Movies
Route::get('/', [MoviesController::class, 'index'])->name('index');
Route::post('movies/{id}', [MoviesController::class, 'show'])->name('index');

//Search function
Route::get('movies/{id}', 'MoviesController@show')->name('movies.show');
//Route::get('/', 'MoviesController@index')->name('movies.index');



// Homepage
// Route::get('/', function () {
//     return view('index');
// });

// Account related
// Route::post('signup', SignupController::class);
// Route::view('/signup', 'signup');


Route::get('login', function () {
    return view('login');
})->name('login')->middleware('guest');
Route::post('login', LoginController::class);
Route::get('logout', LogoutController::class);


Route::get('/signup', [RegistrationController::class, 'index'])->name('signup');
Route::post('/signup', [RegistrationController::class, 'store']);



// Search for movies
Route::get('search', SearchController::class)->middleware('auth');



// List
Route::get('your-list', ListController::class);
