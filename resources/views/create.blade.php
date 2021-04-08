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
							<h1>Join us</h1>
						 </div>
					</div>
                   <form action="create" method="post" name="create">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name"  class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
                        </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" style="background-color: #343a40">Create an account</button>
                           </div>
                    </form>
				</div>
			</div>
        @include('errors')
</body>
</html>
