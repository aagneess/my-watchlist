<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <livewire:styles>
</head>
@include('errors')

<body>
    <nav class="w-100">
        <div class="text-light bg-dark w-auto p-3">
            <div class="row">

                <div class="col">

                    <form class="form-inline" action="search" method="GET">
                        <input class="form-control  float-left mr-sm-2" type="search" placeholder="Look for movies" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>

                </div>

                <ul class="list-inline text-right">
                    <li class="list-inline-item"><a href="login">Login</a></li>
                    <li class="list-inline-item"><a href="logout">Logout</a></li>
                    <li class="list-inline-item"><a href="movies">Popular Movies</a></li>
                </ul>
            </div>


            <br>
            <br>

            <h1 class="display-2 justify-center"><a href="/">My Watchlist</a></h1>
    </nav>

    <main>

        @yield('content')

    </main>
</body>

</html>


@if($response ?? '')
@if($response['drinks'] === null )
@error('search')
<div class="">
    {{ $message }}
</div>
@enderror
@else

@foreach($response['drinks'] as $drink)
<div class="drink">
    <h2> {{ $drink['strDrink'] }} </h2>
    <img src=" {{ $drink['strDrinkThumb'] }}" />


    @if ($favorite = $user->favorites->firstWhere('name', $drink['strDrink']))
    <form action="delete" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $favorite->id }}" />
        <button type="submit">Unlike</button>
    </form>
    @else
    <form action="/favorites" method="POST">
        @csrf
        <input type="hidden" name="image" value=" {{ $drink['strDrinkThumb'] }}" />
        <input type="hidden" name="name" value=" {{ $drink['strDrink'] }}" />
        <button type="submit">Like</button>
    </form>
    @endif
</div>
@endforeach
@endif
@endif


@include('errors')