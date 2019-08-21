<!DOCTYPE html>
<html>
<head>
	<title>Employee home</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
	    <div class="jumbotron text-center">
	    	<center>
	<h1>Employee Home</h1>
	<a href="{{route('employer.profile')}}" class="btn btn-primary btn-bg"> Profile </a>

	<a href="{{route('employer.createPlace')}}" class="btn btn-primary btn-bg"> Add New Place </a>  
	<a href="{{route('employer.placeList')}}" class="btn btn-primary btn-bg"> List Of Places </a>  
	<a href="{{route('logout.index')}}" class="btn btn-warning btn-bg"> Logout</a> 
	</center>
</div>
</div>
</body>
</html>