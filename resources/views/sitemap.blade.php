@extends('templates.website')

@section("title", "Sitemap | Quick Accounting Services")
@section("description", "Sitemap for " . env("COMPANY"))

@section('content')

<style>
	ul > li {
		margin-bottom: 1rem;
	}

	ul.main > li {
		margin-bottom: 1rem;
	}

	ul > li > a {
		color: #212121;
	}

	ul > li > a:hover {
		color: #fbc02d;
		text-decoration: underline;
	}
</style>

<section>
	<div class="container">
		<ul class="main">
			<li>
				<a href="{{ url("") }}">1. Home</a>
			</li>
			<li><a href="{{ url("about-us") }}">2. About Us</a></li>
			<ul style="margin-left: 2rem">
				<li><a href="{{ url("about-us/our-firm") }}">2.1 Our Firm</a></li>
				<li><a href="{{ url("about-us/our-team") }}">2.2 Our Team</a></li>
				<li><a href="{{ url("about-us/why-choose-us") }}">2.3 Why Choose Us</a></li>
				<br>
			</ul>
			<li><a href="{{ url("services") }}">3. Services</a></li>
			<ul style="margin-left: 2rem">
				<li><a href="{{ url("services/bookkeeping-services") }}">3.1 Bookkeeping Services</a></li>
				<li><a href="{{ url("services/accounting-services") }}">3.2 Accounting Services</a></li>
				<li><a href="{{ url("services/quickbooks-setup-and-consultation") }}">3.3 QuickBooks Setup & Consultation</a></li>
				<li><a href="{{ url("services/quickbooks-bookkeeping") }}">3.4 QuickBooks Bookkeeping</a></li>
				<br>
			</ul>
			<li><a href="{{ url("resources") }}">4. Resources</a></li>
			<ul style="margin-left: 2rem">
				<li><a href="{{ url("resources/blog") }}">4.1 Our Blog</a></li>
				<li><a href="{{ url("resources/faq") }}">4.2 Frequently Asked Questions</a></li>
				<br>
			</ul>
			<li><a href="{{ url("pricing") }}">5. Pricing</a></li>
			<li><a href="{{ url("contact-us") }}">6. Contact Us</a></li>
			<li><a href="{{ url("terms-of-service") }}">7. Terms of Service</a></li>
			<li><a href="{{ url("privacy-policy") }}">8. Privacy Policy</a></li>
			<li><a href="{{ url("refund-policy") }}">9. Refund Policy</a></li>
		</ul>
	</div>
</section>

@endsection