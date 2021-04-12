{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div style ="margin-top: 10%" class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login</h1>
						 </div>
					</div>
                   <form action="login" method="post" name="login">
                    @csrf
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" style="background-color: #343a40">Login</button>
                           </div>
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="create" id="signup">Sign up here</a></p>
                           </div>
                        </form>
				</div>
			</div>
        @include('errors')
</body>
</html> --}}




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
                {{-- <input type="hidden" id="{{ $movie['id'] }}"></input> --}}
                <button>Add to your list!</button>

            </div>
        </div>
    </div>
    @endforeach
    @endsection

