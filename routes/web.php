<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SearchController;

// Homepage
Route::get('/', function () {
    return view('index');
});

// Account related
Route::post('signup', SignupController::class);
Route::view('/signup', 'signup');

Route::get('login', function () {
    return view('login');
})->name('login')->middleware('guest');
Route::post('login', LoginController::class);
Route::get('logout', LogoutController::class);

// Search for movies
Route::get('search', SearchController::class)->middleware('auth');

// List
Route::get('movies', function () {
    return view('movies');
});
