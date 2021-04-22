<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'search' => 'required|string',
        ]);

        $search = $request->input('search');

        $searchMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/search/movie?query=' . $search)
            ->json()['results'];
        return view('/search', [
            'search' => $search,
            'searchMovies' => $searchMovies,
        ]);
    }
}
