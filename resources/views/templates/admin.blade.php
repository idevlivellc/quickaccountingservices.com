<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	@yield("schema")

	<title>@yield("title") | {{ env("WEBSITE") }}</title>

	<!-- Favicon -->
	<link rel="icon" id="favicon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="{{ asset("app.css") }}">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

	<nav class="main-nav">
		<div class="nav-wrapper container">
			<a href="{{ url("") }}" class="brand-logo">Company name</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#!" class="btn">Logout</a></li>
				{{-- <li><a href="#!" class="btn dropdown-trigger menu-dropdown" data-target="services">Services</a></li> --}}
				{{-- <li><a href="#!" class="btn dropdown-trigger menu-dropdown" data-target="pricing">Pricing</a></li> --}}
				{{-- <li><a href="#!" class="btn dropdown-trigger menu-dropdown" data-target="resources">Resources</a></li> --}}
				{{-- <li><a href="{{ url("contact-us") }}" class="btn">Contact Us</a></li> --}}
				{{-- <li><a href="#book-consultation" class="btn yellow darken-2 modal-trigger">Get Free Consultation</a></li> --}}
			</ul>
		</div>
	</nav>

	@yield('content')

	
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		M.AutoInit();
	</script>
	@yield('script')
</body>
</html>