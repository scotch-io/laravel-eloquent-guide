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

	<!-- BEARS -->
	<!-- loop over the bears and show off some things -->
	@foreach ($bears as $bear)

		<!-- GET OUR BASIC BEAR INFORMATION -->
		<h2>{{ $bear->name }} <small>{{ $bear->type }}: Level {{ $bear->danger_level }}</small></h2>

		<!-- SHOW OFF THE TREES -->
		<h4>Trees</h4>
		@foreach ($bear->trees as $tree) 
			<p>{{ $tree->type }}</p>
		@endforeach

		<!-- SHOW OFF THE PICNICS -->
		<h4>Picnics</h4>
		@foreach ($bear->picnics as $picnic)
			<p>{{ $picnic->name }}: Taste Level {{ $picnic->taste_level }}</p>
		@endforeach 

	@endforeach

</div>
</body>
</html>
