<!DOCTYPE html>
<html>
<head>
	<title>admin home</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
	    <div class="jumbotron text-center">
	    	<center>
	<h1>Admin Home</h1>

    <a href="{{route('admin.profile')}}" class="btn btn-primary btn-bg"> Profile </a>
	<a href="{{route('admin.create')}}" class="btn btn-primary btn-bg"> Register new employee </a>  
	<a href="{{route('admin.userList')}}" class="btn btn-primary btn-bg"> List Of Users </a>  
	<a href="{{route('logout.index')}}" class="btn btn-warning btn-bg"> Logout</a> 
	</center>
</div>
</div>
</body>
</html>