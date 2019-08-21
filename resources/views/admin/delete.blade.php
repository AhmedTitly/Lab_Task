<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
	<h1>Confirm delete</h1>

	<a href="{{route('admin.userList')}}"> Back </a>
	<form method="post">
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<h3>You want to delete {{$user->name}} ?</h3>
		<input type="hidden" name="id" value="{{$user->id}}">
		<input type="submit" name="submit" value="Confirm">
	</form>
</body>
</html>