<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AddMovieController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'movie_id' => 'required|string',
            'title' => 'required|string',
            'poster_path' => 'required|string',
        ]);

        $addMovie = new Watchlist();
        $addMovie->movie_id = $request->input('movie_id');
        $addMovie->title = $request->input('title');
        $addMovie->poster_path = $request->input('poster_path');
        $addMovie->user_id = Auth::id();
        $addMovie->save();

        return back();
    }
}
