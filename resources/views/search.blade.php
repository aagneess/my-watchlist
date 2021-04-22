@extends('layout.main')
@include('errors')
@section('content')

<div class="search-bar">
    <ul class="list-group list-group-flush">
        @foreach ($searchMovies as $movie)
        <a href="{{ route('movie', $movie['id']) }}">
            <li class="list-group-item list-group-item-action">
                @if ($movie['poster_path'])
                <img class="mr-4" style="height: 15rem;" src="{{ 'https://image.tmdb.org/t/p/w342'.$movie['poster_path'] }}" />
                @else
                <svg xmlns="http://www.w3.org/2000/svg" style="height: 15rem;" width="163" height="163" fill="currentColor" class="mr-4" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                </svg>
                @endif
                {{ $movie['title'] }}
            </li>
        </a>
        @endforeach
    </ul>
</div>

@endsection