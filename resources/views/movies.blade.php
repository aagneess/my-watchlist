@extends('layout.main')

@section('content')

@include('errors')


<div class="">
    <div class="popular-movies">
        <h2 class="">Popular Movies</h2>
        <div class="">

            <x-movie-card :movie="$movie" />


        </div>
    </div> <!-- end pouplar-movies -->

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Movie title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


    @endsection