@extends('layout.main')
@include('errors')
@section('content')

<h1 class="display-4 d-flex justify-content-center">My Watchlist</h1>

<div class="row d-flex justify-content-center">
    @foreach ($user->watchlist as $toWatch)

    <div class="col-8 col-sm-6 col-md-5 col-lg-4 col-xl-3 p-2">
        <a href="{{ route('movie', $toWatch->movie_id) }}">
            <div class="card h-100 text-white bg-dark border-0">
                <img style="max-width: 25rem;" src="{{ 'https://image.tmdb.org/t/p/w780'.$toWatch->poster_path }}" alt="movie poster">
                <div class="card-body">
                    <h5 class="text-white">{{ $toWatch->title }}</h5>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <form action="delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $toWatch->id }}" />
                            <button type="submit" class="btn btn-danger">X</button>
                        </form>
                    </div>
                </div>
            </div>
        </a>
    </div>

    @endforeach
    @endsection