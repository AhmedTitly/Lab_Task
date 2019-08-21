<!DOCTYPE html>
<html>
<head>
	<title>employee list</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	</style>
</head>
<body>
	<div class="container">
	    <div class="jumbotron text-center">
	<center>
	<h1>Employee List</h1>

	<a href="{{route('admin.index')}}" class="btn btn-secondary btn-bg">Back</a>  
	<a href="{{route('logout.index')}}" class="btn btn-warning btn-bg"> Logout</a> 
	<a href="{{route('search.index')}}" class="btn btn-primary btn-bg"> Search User</a>

	<table>
		<tr>
			<th>ID</th>
			<th>Employee Name</th>
			<th>Contact Number</th>
			<th>User Type</th>
			<th>Others</th>
		</tr>
		@foreach($users as $u)
		<tr>
			<td>{{$u->id}}</td>
			<td>{{$u->name}}</td>
			<td>{{$u->phone}}</td>
			<td>{{$u->type}}</td>
			<td><a href="{{route('admin.edit', [$u->id])}}"class="btn btn-primary btn-bg">Edit</a> 
			<a href="{{route('admin.delete', [$u->id])}} " class="btn btn-danger btn-bg">Delete</a></td>
		</tr>
		@endforeach

	</table>
	</center>
</div>
</div>

</body>
</html>