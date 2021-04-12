@extends('layout.main')

@section('content')

<h1 class="display-3 justify-center">Popular Movies</h1>

<div class="row">
    <div class="col">
        @foreach ($popularMovies as $movie)
        <div class="card w-100 text-white bg-dark mb-3">
            <img width="200px" src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $movie['title'] }}</h5>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                </span>
                <span>{{ $movie['vote_average'] }}</span>
                <span> | </span>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M, d, Y') }}</span>
                <br>
                <br>
                <p class="card-text">{{ $movie['overview'] }}</p>
                <br>
                <input type="hidden" id="{{ $movie['id'] }}"></input>
                <button>Add to your list!</button>

            </div>
        </div>
    </div>
    @endforeach
    @endsection