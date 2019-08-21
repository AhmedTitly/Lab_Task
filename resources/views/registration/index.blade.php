<!DOCTYPE html>
<html>
<head>
	<title>create user</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="jumbotron text-center">
			<center>
	<h1>Registration Page</h1>

	<a href="{{route('welcome.index')}}" class="btn btn-secondary btn-bg" role="button">Back</a>
	<br>
    </br>

	@if ($message = Session::get('success'))
		<p> {{ $message }}</p>
	@endif


	<form method="post">
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		@csrf
		<table>
			<tr>
				<td>Your Name :</td>
				<td><input type="text" name="name" value="{{old('name')}}"></td>
			</tr>
			
			<tr>
				<td>Contact Number :</td>
				<td><input type="text" name="phone" value="{{old('phone')}}"></td>
			</tr>
			<tr>
				<td>UserName :</td>
				<td><input type="text" name="username" value="{{old('username')}}"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" value="{{old('password')}}"></td>
			</tr>
			<tr>
				<td>type :</td>
				<td>
                    <select name="type">
             
                    <option value="User">User</option>
                    </select>
                </td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Submit" class="btn btn-success btn-bg" role="button" >
					<!-- <input type="reset" name="reset" value="Reset"> -->
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