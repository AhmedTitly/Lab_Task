<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	
	<div class="container">
	    <div class="jumbotron text-center">
	    	
	    	<center>
		    <h1>Login</h1>
		    <br>
		    </br>
	
		    <form method="post">
			@csrf
			<table>
					<tr>
						<td>Email :</td>
						<td><input type="text" name="email" value="" placeholder="type email here"></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input type="password" name="password" placeholder="type password here"></td>
					</tr>
					
					<tr>
						<td></td>
						<td> <br>
		    </br><input type="submit" name="" value="Submit" class="btn btn-success btn-bg" role="button"></td>
					</tr>
				</table>
		</form>
		

		<div>{{session('message')}}</div>
		</center>
	</div>
</div>

</body>
</html>