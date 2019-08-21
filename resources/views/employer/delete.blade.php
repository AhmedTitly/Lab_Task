<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
	    <div class="jumbotron text-center">
	    	<center>
	<h1>Confirm delete</h1>

	<a href="{{route('admin.userList')}}"  class="btn btn-secondary btn-bg"> Back </a>
	<br>
</br>
	<form method="post">
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<h3>You want to delete {{$user->name}} ?</h3>
		<input type="hidden" name="id" value="{{$user->id}}">
		<input type="submit" name="submit" value="Confirm">
	</form>
	</center>
</div>
</div>
</body>
</html>