@extends('layout.main')
@include('errors')
@section('content')

<h1 class="display-3 justify-center">My Watchlist</h1>

<div class="flex row">
    <div class="card mb-3 text-white bg-dark mb-3 g-3">
        @foreach ($user->watchlist as $toWatch)
        <div class="col-md-8">
            <img style="width: 18rem;" src="{{ 'https://image.tmdb.org/t/p/w780'.$toWatch->poster_path }}" alt="movie poster">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <a href="{{ route('movie', $toWatch->movie_id) }}">{{ $toWatch->title }}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection