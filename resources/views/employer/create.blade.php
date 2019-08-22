<!DOCTYPE html>
<html>
<head>
	<title>create place</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
	    <div class="jumbotron text-center">
	<center>
	<h1>Add a new place</h1>

	<a href="{{route('employer.index')}}" class="btn btn-secondary btn-bg">Back</a>
	<br>
</br>

	<form method="post">
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<table>
			<tr>
				<td>Location :</td>
				<td><input type="text" name="location" value="{{old('location')}}"></td>
			</tr>
			
			<tr>
				<td>Cost :</td>
				<td><input type="text" name="cost" value="{{old('cost')}}"></td>
			</tr>
			<tr>
				<td>Medium :</td>
				<td><input type="text" name="medium" value="{{old('medium')}}"></td>
			</tr>
			<tr>
				<td>Writing :</td>
				
				<td><textarea rows="4" cols="20" name="writing" value="{{old('writing')}}"></textarea></td>
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