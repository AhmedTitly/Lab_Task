<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
	    <div class="jumbotron text-center">

	<center>

	<h1>Employee Profile</h1>
	
	<a href="{{route('employer.index')}}"class="btn btn-secondary btn-bg" role="button">Back</a> 
	<a href="{{route('logout.index')}}"class="btn btn-warning btn-bg" role="button"> Logout</a> 
	<br>
    </br>

	@if ($message = Session::get('success'))
		<p> {{ $message }}</p>
	@endif

	<form method="post">
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
		<input type="hidden" name="id" value="{{$user->id}}">
		<table>
			
			<tr>
				<td> Name :</td>
				<td><input type="text" name="name" value="{{$user->name}}"></td>
			</tr>
			<tr>
				<td> UserName :</td>
				<td><input type="text" name="username" value="{{$user->username}}"></td>
			</tr>
			<tr>
				<td>Contact Number :</td>
				<td><input type="text" name="phone" value="{{$user->phone}}"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" value="{{$user->password}}"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Update" class="btn btn-success btn-bg" role="button">
					<input type="reset" name="reset" value="Reset" class="btn btn-primary btn-bg" role="button">
				</td>
			</tr>
		</table>
	</form>
	<div style="color: red">
		@if($errors->any())
			@foreach($errors->all() as $err)
				{{$err}} <br>
			@endforeach
		@endif
	</div>
	   </center>
	</div>
</div>
</body>
</html>
