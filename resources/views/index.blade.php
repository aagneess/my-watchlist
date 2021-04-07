{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
@include('errors')
<p> Register for free! </p>
<a href="create">Create an account</a>

__OR__

<p>Log in :</p>
<form method="post" action="login">
    @csrf
    <div>
        <label for="email">Email</label>
        <input name="email" id="email" type="email" />
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" />
    </div>
    <button type="submit">Login</button>
</form>




<!------ Include the above in your HEAD tag ---------->
{{--
<div class="login-box" >
	<div class="login-header">Login</div>
	<div class="login-body">
		<form class="form-group">
            @csrf
			<label>Email</label>
			<input type="email" class="form-control" name="">
			<label>Password</label>
			<input type="password" class="form-control" name="">
			<input type="checkbox" value="checked"><b>Remember</b>
			<input type="submit" value="Login" class="form-control btn btn-success " name="">
		</form>
	</div>
</div> --}}
