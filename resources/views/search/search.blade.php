<!DOCTYPE html>

<html>
<head>
	<meta name="_token" content="{{ csrf_token() }}">
	<title>Search Faculty</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
	
	<h1>Faculty info </h1>

	<a href="{{route('admin.userList')}}"class="btn btn-secondary btn-bg" role="button">Back</a> 
	<a href="{{route('logout.index')}}"class="btn btn-warning btn-bg" role="button"> Logout</a>
	<br>
    </br>

		<input type="text" id="search" name="search" placeholder="type here to search"></input>
		<br>
        </br>
		<table>
			<thead>
				<tr>
					<th> Name</th>
					
					<th>Contact Number</th>
					<th>Type</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>

	<script type="text/javascript">
		$('#search').on('keyup',function(){
			$value=$(this).val();
			$.ajax({
				type : 'get',
				url : '{{URL::to('searchValue')}}',
				data:{'search':$value},
				success:function(data){
					$('tbody').html(data);
				}
			});
		})
	</script>

	<script type="text/javascript">
		$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
	</script>
</center>
</div>
</div>
</body>
</html>