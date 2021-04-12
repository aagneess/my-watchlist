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

Route::get('login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::post('login', LoginController::class);
Route::get('logout', LogoutController::class);

// List
Route::get('your-list', ListController::class);
