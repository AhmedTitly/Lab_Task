<!DOCTYPE html>
<html>
<head>
	<title>edit employee</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<h1>Edit Employee Info</h1>

	<a href="{{route('admin.userList')}}">Back</a> |
	<a href="{{route('logout.index')}}"> Logout</a> 

	<form method="post">
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
		<input type="hidden" name="id" value="{{$user->id}}">
		<table>
			
			<tr>
				<td>Employee Name :</td>
				<td><input type="text" name="name" value="{{$user->name}}"></td>
			</tr>
			<tr>
				<td>Contact Number :</td>
				<td><input type="text" name="phone" value="{{$user->phone}}"></td>
			</tr>
			<!-- <tr>
				<td>Type :</td>
				<td><input type="text" name="type" value="{{$user->type}}"></td>
			</tr> -->
			<tr>
				<td>User Name :</td>
				<td><input type="text" name="username" value="{{$user->username}}"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" value="{{$user->password}}"></td>
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
					<input type="submit" name="submit" value="Update">
					<input type="reset" name="reset" value="Reset">
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
	
</body>
</html>