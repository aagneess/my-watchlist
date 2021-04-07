<<<<<<< HEAD
<p>Hello, {{ $user->name }}! Do you want to <a href="logout">logout</a>?
</p>


=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body w-100>
    <div class="text-light bg-dark w-auto p-3">
        <div class="row">
            <div class="col">
                <form class="form-inline">
                    <input class="form-control  float-left mr-sm-2" type="search" placeholder="Look for movies" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <span class="col text-right">
                Hello, {{ $user->name }}!
                <a href="logout">Do you want to logout?</a>
            </span>
        </div>


        <br>
        <br>

        <h1 class="display-2 justify-center">My Watchlist</h1>

        @include('errors')

</body>

</html>
>>>>>>> 98e5188cb0183aa41c91ad25bd6c8f3f54318502
