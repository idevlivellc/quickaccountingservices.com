<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ @yield("title") }} | Quick Accounting Services</title>

	<meta name="description" content="{{ @yield("description") }}" />
	<meta name="keywords" content="{{ @yield("keywords")}}" />

	<link rel="canonical" href="https://quickaccountingservices.com/qbcf-monitor-service-not-running" />

	<meta name="robots" content="index, follow" />

	<!-- Favicon -->
	<link rel="icon" id="favicon" href="{{ asset('images/q.ico') }}" type="image/x-icon">

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="{{ asset("app.css") }}">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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

	<style>
		/* @import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap'); */
		/* @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'); */
		@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

		body {
			font-family: "Outfit", sans-serif;
		}

		h1 {
			font-size: 3.1rem;
		}

		p {
			font-weight: 500;
			color: #616161 !important;
			font-size: 15px;
		}

		ul > li,
		ul > li > span {
			font-weight: 500;
			color: #616161 !important;
			font-size: 15px;
		}

		ul > li > span {
			margin-left: 8px;
		}

		p.header-font {
			color: #212121 !important;
		}

		.card-panel.step-card {
			box-shadow: none;
			position: relative;
			border-radius: 8px;
			cursor: pointer;
			margin-bottom: 2rem;
		}

		.card-panel.step-card:hover {
			background-color: #eeeeee;
		}

		.step-card::before {
			position: absolute;
			content: "\F4B6";
			font-family: "Material Symbols Rounded";
			font-size: 1.5rem;
			left: 50%;
			bottom: -32px;
			transform: translateX(-50%);
			color: #1f7a6b;
		}

		.step-wrapper .step-card:last-child:before {
			display: none;
			margin-bottom: 0;
		}

		input[type="text"]:focus,
		input[type="email"]:focus {
			border-bottom-color: #1f7a6b !important;
			box-shadow: 0 1px 0 0 #1f7a6b !important;
		}

		.input-field > label {
			letter-spacing: normal;
		}

		input[type="text"] ~ label.active,
		input[type="email"] ~ label.active {
			color: #1f7a6b !important;
		}

		p.header-points {
			min-height: 45px;
		}

		@media screen and (max-width: 480px) {
			h1.header-font {
				font-size: 2.5rem;
			}

			p.header-points {
				font-size: 13px;
			}

			.modal#contact-us {
				width: 95% !important;
				height: fit-content !important;
				max-height: 100vh !important;
				/* bottom: 0 !important; */
			}
		}
	</style>
</head>
<body>
	<nav class="service-nav">
		<div class="nav-wrapper container">
			<a href="{{ url("") }}" class="brand-logo">
				<img src="{{ asset("images/logo/logo-q.png") }}" alt="{{ env("COMPANY") }}">
				<span class="hide-on-small-only header-font">{{ env("COMPANY") }}</span>
				<span class="hide-on-med-and-up header-font">QAS</span>
			</a>

			<a href="#contact-us" class="modal-trigger right btn hide-on-large-only" style="background-color: #1f7a6b; margin-top: 10px">
				<i class="material-symbols-rounded white-text" style="height: 36px; line-height: 36px">phone</i>
			</a>
			<ul class="right hide-on-med-and-down">
				<li>
					<a href="#contact-us" class="btn modal-trigger" style="background-color: #00254a !important; color: white !important; letter-spacing: 1px">
						<i class="material-symbols-rounded left white-text" style="height: 36px; line-height: 36px">phone</i>
						Talk to a Independent QuickBooks Professional
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Modal (start) -->
	<div class="modal" id="contact-us" style="width: 500px">
		<div class="modal-content center-align white">
			<h5 class="header-font" style="margin-top: 0">Contact a QuickBooks Consultant</h5>
			<p>If you'd like to speak with someone about a QuickBooks Desktop issue, you can call us directly or request a callback using the form on this page.</p>

			<img src="{{ url("images/image.png") }}" alt="" class="responsive-img">

			<p>
				<a href="tel:{{ env("PHONE") }}" class="btn-large full-width" style="background-color: #1f7a6b; font-family: 'RadionB', sans-serif; color: white !important; line-height: 52px">{{ env("PHONE") }}</a>
			</p>

			<p class="text-sm">This connects you with a Independent QuickBooks Professional.</p>
		</div>
	</div>
	<!-- Modal (end) -->

	@yield("content")

	<footer class="page-footer teal">
		<div style="margin: 0 5%">
			<div class="row">
				<div class="col s12 left-align" style="margin-bottom: 2rem">
					<p class="underline header-font">Disclaimer:</p>
					<p class="text-sm">{{ env("COMPANY") }} is an independent accounting and bookkeeping firm and a Certified QuickBooks ProAdvisor. We are not affiliated with, sponsored by, or endorsed by Intuit Inc. QuickBooks, QuickBooks ProAdvisor, TurboTax, and all related marks and logos are registered trademarks and property of Intuit Inc., used here solely for descriptive purposes. All information provided on this website is for general informational purposes only and should not be considered professional or financial advice.</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline header-font">Services</h4>

					<p>
						<a class="text-sm" href="{{ url("services/bookkeeping-services") }}">Bookkeeping services</a>
					</p>
					<p>
						<a class="text-sm" href="{{ url("services/accounting-services") }}">Accounting services</a>
					</p>
					<p>
						<a class="text-sm" href="{{ url("services/quickbooks-setup-and-consultation") }}">QuickBooks setup & consultation</a>
					</p>
					<p>
						<a class="text-sm" href="{{ url("services/quickbooks-bookkeeping") }}">QuickBooks bookkeeping</a>
					</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline header-font">Quick Links</p>

					<p>
						<a class="text-sm" href="{{ url("about-us") }}">About us</a>
					</p>

					<p>
						<a class="text-sm" href="{{ url("pricing") }}">Pricing</a>
					</p>

					<p>
						<a class="text-sm" href="{{ url("resources/blog") }}">Our blog</a>
					</p>

					<p>
						<a class="text-sm" href="{{ url("sitemap") }}">Sitemap</a>
					</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline header-font">Legal & Policies</h4>
					<p>
						<a class="text-sm" href="{{ url("terms-of-service") }}">Terms of Service</a>
					</p>
					
					<p>
						<a class="text-sm" href="{{ url("privacy-policy") }}">Privacy policy</a>
					</p>
					
					<p>
						<a class="text-sm" href="{{ url("refund-policy") }}">Refund policy</a>
					</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline header-font">{{ env("COMPANY") }}</p>
					<p class="text-sm">
						<span class="font-medium text-sm">Address: </span>
						{{ env("ADDRESS") }}
					</p>
					<p class="text-sm">
						<span class="font-medium text-sm">Phone: </span>
						{{ env("PHONE") }}
					</p>
					<p class="text-sm">
						<span class="font-medium text-sm">Email address: </span>
						{{ env("EMAIL") }}
					</p>
				</div>
			</div>
		</div>
		<div class="footer-copyright text-sm" style="padding: 0 5%">
			&copy; {{ date("Y") }} All Rights Reserved
		</div>
	</footer>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		M.AutoInit();

		const submitForm = async (event) => {
			event.preventDefault();
			const form = event.target;

			for (const input of form) {
				input.classList.remove("invalid");
			}
			document.querySelectorAll(".error-card").forEach(card => {
				card.classList.add("hide");
			});

			form["submit-btn"].classList.add("disabled");

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

				form.reset();

				document.querySelectorAll(".success-card").forEach(card => {
					card.querySelector("span").innerText = data;
					card.classList.remove("hide");
				});

				gtag('event', 'conversion', {
					'send_to': 'AW-17721883777/EVFcCMSut-4bEIH5uYJC',
					'value': 100.0
				});
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