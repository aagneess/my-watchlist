<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\ListController;
use App\Http\Controllers\MoviesController;

// Movies
Route::get('/', [MoviesController::class, 'index'])->name('index');
Route::get('movies/{id}', [MoviesController::class, 'show'])->name('movie');


Route::get('login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::post('login', LoginController::class);
Route::get('logout', LogoutController::class);


Route::get('/signup', [RegistrationController::class, 'index'])->name('signup');
Route::post('/signup', [RegistrationController::class, 'store']);



// Search for movies
// Route::get('search', SearchController::class)->middleware('auth');



// List
Route::get('your-list', ListController::class);
