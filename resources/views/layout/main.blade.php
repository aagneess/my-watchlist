<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
@include('errors')

<body>
    <nav class="w-100">
        <div class="nav-bar d-flex align-items-center text-light bg-dark w-auto p-3">

            <div class="flex-fill">
                <form class="row search" action="/search" method="get">
                    @csrf
                    <div class="col-auto ml-3 search-bar">
                        <input class="form-control" name="search" id="search" type="text" placeholder="Look for movies" />
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-outline-light">Search</button>
                    </div>
                </form>
            </div>

            <h1 class="flex-fill">My Watchlist App</h1>

            <div class="flex-fill">
                <ul class="list-inline text-right mt-3 mr-2">
                    <li class="list-inline-item"><a class="text-white" href="/">Home</a></li>
                    @if (Auth::check())
                    <li class="list-inline-item"><a class="text-white" href="logout">Logout</a></li>
                    @else
                    <li class="list-inline-item"><a class="text-white" href="login">Login</a></li>
                    @endif
                    @if (Auth::check())
                    <li class="list-inline-item"><a class="text-white" href="/your-list">Your List</a></li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>

    <main class="p-4">

        @yield('content')

    </main>

</body>

</html>