<!DOCTYPE html>
<html lang="en">
<head>
	{{-- @if (!Request::is("dashboard/login"))
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17721883777"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'AW-17721883777');
		</script>
		<script>
			gtag('config', 'AW-17721883777/qLaXCMHz5b8bEIH5uYJC', {
				'phone_conversion_number': '1-888-849-2341'
			});
		</script>
	@endif --}}

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	@yield('schema')

	<title>@yield("title") | {{ env("WEBSITE") }}</title>

	<!-- Favicon -->
	<link rel="icon" id="favicon" href="{{ asset('images/logo/website-circle-64.ico') }}" type="image/x-icon">

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="{{ asset("app.css") }}">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
	<nav class="main-nav">
		<div class="nav-wrapper container">
			<a href="{{ url("") }}" class="brand-logo" style="position: relative; padding-left: 64px">
				<img src="{{ asset("images/logo/website-circle-64.png") }}" alt="{{ env("COMPANY") }}">
				<span class="hide-on-small-only">{{ env("COMPANY") }}</span>
				<span class="hide-on-med-and-up">QAS</span>
			</a>
			{{-- <a href="{{ url("") }}" class="brand-logo show-on-small">QAS</a> --}}
			<a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-symbols-rounded black-text">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li>
					<a href="#!" class="btn dropdown-trigger menu-dropdown" data-target="about-us" style="margin: 0 0.5rem">
						<i class="material-symbols-rounded right" style="height: 36px; line-height: 36px; margin-left: 0.5rem">arrow_drop_down</i>
						About
					</a>
				</li>
				<li>
					<a href="#!" class="btn dropdown-trigger menu-dropdown" data-target="services" style="margin: 0 0.5rem">
						<i class="material-symbols-rounded right" style="height: 36px; line-height: 36px; margin-left: 0.5rem">arrow_drop_down</i>
						Services
					</a>
				</li>
				<li>
					<a href="#!" class="btn dropdown-trigger menu-dropdown" data-target="resources" style="margin: 0 0.5rem">
						<i class="material-symbols-rounded right" style="height: 36px; line-height: 36px; margin-left: 0.5rem">arrow_drop_down</i>
						Resources
					</a>
				</li>
				<li><a href="{{ url("pricing") }}" class="btn" style="margin: 0 0.5rem">Pricing</a></li>
				<li><a href="{{ url("contact-us") }}" class="btn" style="margin: 0 0.5rem">Contact Us</a></li>
				<li><a href="#book-consultation" class="btn yellow darken-2 modal-trigger" style="margin: 0 0.5rem">Get Free Consultation</a></li>
			</ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-nav">
		<li><a href="{{ url("") }}" style="padding-left: 16px">Home</a></li>
		<li>
			<ul class="collapsible collapsible-accordion">
				<li>
					<a class="collapsible-header">
						About Us
						<i class="material-symbols-rounded right">arrow_drop_down</i>
					</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="{{ url("about-us/our-firm") }}">Our firm</a></li>
							<li><a href="{{ url("about-us/our-team") }}">Our team</a></li>
							<li><a href="{{ url("about-us/why-choose-us") }}">Why choose us</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
		<li>
			<ul class="collapsible collapsible-accordion">
				<li>
					<a class="collapsible-header">
						Services
						<i class="material-symbols-rounded right">arrow_drop_down</i>
					</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="{{ url("services/bookkeeping-services") }}">Bookkeeping Services</a></li>
							<li><a href="{{ url("services/accounting-services") }}">Accounting Services</a></li>
							<li><a href="{{ url("services/quickbooks-setup-and-consultation") }}">QuickBooks Setup & Consultation</a></li>
							<li><a href="{{ url("services/quickbooks-bookkeeping") }}">QuickBooks Bookkeeping</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
		<li>
			<ul class="collapsible collapsible-accordion">
				<li>
					<a class="collapsible-header">
						Resources
						<i class="material-symbols-rounded right">arrow_drop_down</i>
					</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="{{ url("resources/blog") }}">Our Blog</a></li>
							<li><a href="{{ url("resources/faq") }}">FAQs</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
		<li><a href="{{ url("pricing") }}" style="padding-left: 16px">Pricing</a></li>
		<li><a href="{{ url("contact-us") }}" style="padding-left: 16px">Contact Us</a></li>
		<li class="divider"></li>
		<li>
			<a href="tel:{{ env("PHONE") }}" class="btn yellow darken-2" style="text-align: left">
				<i class="material-symbols-rounded left" style="margin-right: 1rem">phone</i>
				Call Now : {{ env("PHONE") }}
			</a>
		</li>
	</ul>

	<ul class="dropdown-content" id="about-us">
		<li><a href="{{ url("about-us/our-firm") }}">Our firm</a></li>
			<li><a href="{{ url("about-us/our-team") }}">Our team</a></li>
			<li><a href="{{ url("about-us/why-choose-us") }}">Why choose us</a></li>
	</ul>
	
	<ul class="dropdown-content" id="services">
		<li><a href="{{ url("services/bookkeeping-services") }}">Bookkeeping Services</a></li>
		<li><a href="{{ url("services/accounting-services") }}">Accounting Services</a></li>
		<li><a href="{{ url("services/quickbooks-setup-and-consultation") }}">QuickBooks Setup & Consultation</a></li>
		<li><a href="{{ url("services/quickbooks-bookkeeping") }}">QuickBooks Bookkeeping</a></li>
	</ul>

	{{-- <ul class="dropdown-content" id="pricing">
		<li><a href="{{ url("pricing/bookkeeping-services") }}">Bookkeeping Services</a></li>
		<li><a href="{{ url("pricing/accounting-services") }}">Accounting Services</a></li>
		<li><a href="{{ url("pricing/quickbooks-setup-and-consultation") }}">QuickBooks Setup & Consultation</a></li>
		<li><a href="{{ url("pricing/quickbooks-bookkeeping") }}">QuickBooks Bookkeeping</a></li>
	</ul> --}}

	<ul class="dropdown-content" id="resources">
		<li><a href="{{ url("resources/blog") }}">Our Blog</a></li>
		<li><a href="{{ url("resources/faq") }}">FAQs</a></li>
	</ul>

	<div class="modal custom-modal" id="book-consultation">
		<form action="{{ url("contact-us") }}" method="POST" autocomplete="off" onsubmit="submitQueryForm(event)">
		<nav class="modal-nav">
			<a href="#!" class="brand-logo header-font">Get Free Consultation</a>
		</nav>

		<div class="modal-content">
			<div class="row">
				@csrf
				<div class="input-field col s12" style="min-height: 40px">
					<div class="error-card hide" id="error-container">
						<i class="material-symbols-rounded">error</i>
						<span></span>
					</div>

					<div class="success-card hide" id="success-container">
						<i class="material-symbols-rounded">check_circle</i>
						<span></span>
					</div>
				</div>
				<div class="input-field col s12">
					<input type="text" name="name" id="name" class="capitalize">
					<label for="name">First & last name</label>
				</div>

				<div class="input-field col s12">
					<input type="email" name="email" id="email" class="lowercase">
					<label for="email">Email address</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="phone" id="phone">
					<label for="phone">Phone number</label>
				</div>

				<div class="input-field col s12">
					<select name="service" id="service">
						<option value="" selected disabled>Select a service</option>
						<option value="Accounting Services">Accounting services</option>
						<option value="Bookkeeping Services">Bookkeeping services</option>
						<option value="QuickBooks Consultation">QuickBooks consultation</option>
						<option value="QuickBooks Bookkeeping">QuickBooks bookkeeping</option>
					</select>
					<label for="service">Service</label>
				</div>

				<div class="input-field col s12">
					<textarea name="query" id="query" class="materialize-textarea"></textarea>
					<label for="query">Your query</label>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<div class="row">
				<div class="input-field col s12">
					<button class="btn-large full-width yellow darken-2" name="submit-btn">Submit Query</button>
				</div>
			</div>
		</div>
		</form>
	</div>

	@yield('content')

	<footer class="page-footer yellow darken-2">
		<div style="margin: 0 5%">
			<div class="row">
				<div class="col s12 left-align" style="margin-bottom: 2rem">
					<p class="underline font-semibold">Disclaimer:</p>
					<p>{{ env("COMPANY") }} is an independent accounting and bookkeeping firm and a Certified QuickBooks ProAdvisor. We are not affiliated with, sponsored by, or endorsed by Intuit Inc. QuickBooks, QuickBooks ProAdvisor, TurboTax, and all related marks and logos are registered trademarks and property of Intuit Inc., used here solely for descriptive purposes. All information provided on this website is for general informational purposes only and should not be considered professional or financial advice.</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline font-semibold">Services</h4>

					<p>
						<a href="{{ url("services/bookkeeping-services") }}">Bookkeeping services</a>
					</p>
					<p>
						<a href="{{ url("services/accounting-services") }}">Accounting services</a>
					</p>
					<p>
						<a href="{{ url("services/quickbooks-setup-and-consultation") }}">QuickBooks setup & consultation</a>
					</p>
					<p>
						<a href="{{ url("services/quickbooks-bookkeeping") }}">QuickBooks bookkeeping</a>
					</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline font-semibold">Quick Links</p>

					<p>
						<a href="{{ url("about-us") }}">About us</a>
					</p>

					<p>
						<a href="{{ url("pricing") }}">Pricing</a>
					</p>

					<p>
						<a href="{{ url("resources/blog") }}">Our blog</a>
					</p>

					<p>
						<a href="{{ url("sitemap") }}">Sitemap</a>
					</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline font-semibold">Legal & Policies</h4>
					<p>
						<a href="{{ url("terms-of-service") }}">Terms of Service</a>
					</p>
					
					<p>
						<a href="{{ url("privacy-policy") }}">Privacy policy</a>
					</p>
					
					<p>
						<a href="{{ url("refund-policy") }}">Refund policy</a>
					</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline font-semibold">{{ env("COMPANY") }}</p>
					<p>
						<span class="font-medium">Address: </span>
						{{ env("ADDRESS") }}
					</p>
					<p>
						<span class="font-medium">Phone: </span>
						{{ env("PHONE") }}
					</p>
					<p>
						<span class="font-medium">Email address: </span>
						{{ env("EMAIL") }}
					</p>
				</div>
			</div>
		</div>
		<div class="footer-copyright black-text" style="padding: 0 5%">
			&copy; {{ date("Y") }} All Rights Reserved
		</div>
	</footer>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		M.AutoInit();

		document.addEventListener('DOMContentLoaded', function() {
			const instances = M.Dropdown.init(document.querySelectorAll('.menu-dropdown'), {
				constrainWidth: false,
				coverTrigger: false
			});
		});

		const submitQueryForm = async (event) => {
			event.preventDefault();
			const form = event.target;

			for (const input of form) {
				input.classList.remove("invalid");
			}
			document.querySelectorAll(".error-card").forEach(card => {
				card.classList.add("hide");
			})

			form["submit-btn"].classList.add("disabled")
			
			try {
				const response = await fetch(form.action, {
					method: form.method,
					body: new FormData(form),
					headers: {
						Accept: "application/json"
					}
				});

				const data = await response.json();

				if (!response.ok) throw data;

				gtag('event', 'conversion', {
					'send_to': 'AW-17721883777/gaIoCIbWpb4bEIH5uYJC',
					'value': 1.0,
					'currency': 'USD'
				});
				
				form.reset();

				document.querySelectorAll(".success-card").forEach(card => {
					card.querySelector("span").innerText = data;
					card.classList.remove("hide");
				})
			} catch (error) {
				for (const key in error.errors) {
					if (error.errors.hasOwnProperty(key)) {
						form[key].classList.add("invalid");
					}
				}

				document.querySelectorAll(".error-card").forEach(card => {
					card.querySelector("span").innerText = error.message;
					card.classList.remove("hide");
				});
			}

			form["submit-btn"].classList.remove("disabled")
		}
	</script>
	@yield('script')
	<!-- Default Statcounter code for Quick Accounting Services https://quickaccountingservices.com -->
	<script type="text/javascript">
		var sc_project=13188593; 
		var sc_invisible=1; 
		var sc_security="d649b94d"; 
	</script>
	<script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
	<noscript>
		<div class="statcounter">
			<a title="Web Analytics Made Easy - Statcounter" href="https://statcounter.com/" target="_blank"><img class="statcounter" src="https://c.statcounter.com/13188593/0/d649b94d/1/" alt="Web Analytics Made Easy - Statcounter" referrerPolicy="no-referrer-when-downgrade"></a>
		</div>
	</noscript>
	<!-- End of Statcounter Code -->
</body>
</html>