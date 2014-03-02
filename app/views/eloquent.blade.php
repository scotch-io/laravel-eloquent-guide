<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eloquent Bears</title>

	<!-- CSS -->
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<style>
		body { padding-top:50px; } /* add some padding to the top of our site */
	</style>
</head>
<body class="container">
<div class="col-sm-8 col-sm-offset-2">

	<!-- BEARS TABLE -->
	<!-- loop over the bears and show off some things -->
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<td>id</td>
				<td>Name</td>
				<td>Type</td>
				<td>Fish Weight</td>
				<td>Picnic</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($bears as $bear)
			<tr>
				<td>{{ $bear->id }}</td>
				<td>{{ $bear->name }}</td>
				<td>{{ $bear->type }}</td>

				<!-- fish is an object inside the bear object. you can loop over this also -->
				<td>{{ $bear->fish->weight }}</td>
				<td>{{ $bear->picnic }}</td>
			</tr>				
			@endforeach
		</tbody>
	</table>

</div>
</body>
</html>
