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
	<h1>Register a new employee</h1>

	<a href="{{route('admin.index')}}" class="btn btn-secondary btn-bg">Back</a>
	<br>
</br>

	<form method="post">
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<table>
			<tr>
				<td>Employer Name :</td>
				<td><input type="text" name="name" value="{{old('name')}}"></td>
			</tr>
			
			<tr>
				<td>Contact Number :</td>
				<td><input type="text" name="phone" value="{{old('phone')}}"></td>
			</tr>
			<tr>
				<td>User Name :</td>
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
                    <option value="User">Scout</option>
                    </select>
                </td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Submit" class="btn btn-success btn-bg">
					<input type="reset" name="reset" value="Reset" class="btn btn-primary btn-bg">
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