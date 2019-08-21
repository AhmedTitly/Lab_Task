<!DOCTYPE html>
<html>
<head>
	<title>welcome page</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

	 
	<div class="container">
		<div class="jumbotron text-center">

	    <h1>Welcome To Travel Guide</h1>
	    <a href="{{route('login.index')}}" class="btn btn-primary btn-lg" role="button"> Login</a> 
	    <a href="{{route('registration.index')}}" class="btn btn-success btn-lg" role="button"> Register</a> 

        </div>
	</div>
</body>
</html>