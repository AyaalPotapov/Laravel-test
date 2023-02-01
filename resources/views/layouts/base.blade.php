<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css">
	<link rel="stylesheet" href="\css\app.css">
	@stack('css')
	<title>@yield('title' , config('app.name'))</title>

</head>
<body>

	<div class="d-flex flex-column justify-content-between min-vh-100">
		@include('includes.alert')
		@include('includes.header')
		
		<main class="flex-grow-1 py-3">
			@yield('content')
		</main>
	
		@include('includes.footer')
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/js/bootstrap.min.js"></script>
	@stack('js')
</body>
</html>