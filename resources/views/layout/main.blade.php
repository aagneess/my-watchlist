<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <livewire:styles> --}}
</head>
@include('errors')

<body>
    <nav class="w-100">
        <div class="flex text-light bg-dark w-auto p-3">
            <div class="row">
                <livewire:search>

                    <ul class="list-inline text-right">
                        <li class="list-inline-item"><a href="/">Home</a></li>
                        @if (Auth::check())
                        <li class="list-inline-item"><a href="logout">Logout</a></li>
                        @else
                        <li class="list-inline-item"><a href="login">Login</a></li>
                        @endif
                        @if (Auth::check())
                        <li class="list-inline-item"><a href="your-list">Your List</a></li>
                        @endif
                    </ul>

            </div>
            <br>
            <br>
    </nav>

    <main class="p-5">

        @yield('content')

    </main>

    <livewire:scripts>
</body>

</html>