@extends('templates.website')

@section("title", "Affordable Bookkeeping & Accounting Services | Quick Accounting Services")
@section("description", "Quick Accounting Services offers expert bookkeeping, accounting, and QuickBooks setup solutions for small businesses. Reliable. Compliant. Affordable.")

{{-- @section('title', $meta['title'])
@section('keywords', $meta['keywords'])
@section('description', $meta['description']) --}}

@section('content')

<header class="home">
	<div class="header-content container">
		<h1 class="header-font">Reliable Bookkeeping & Accounting Services for Growing Businesses</h1>
		<h5>We're a Certified QuickBooks ProAdvisor firm helping small and medium businesses manage their books efficiently with accurate, timely, and transparent accounting support.</h5>
		<br>
		<a href="#book-consultation" class="btn-large white modal-trigger">Get a Free Consultation</a>
	</div>
</header>

<!-- Services section (start) -->
<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12" style="margin-bottom: 5rem">
				<h4 class="underline header-font">Our Services</h4>
				<p class="grey-text text-darken-2">At {{ env("COMPANY") }}, we provide end-to-end financial management solutions for small and medium-sized businesses. From bookkeeping and accounting to QuickBooks setup and consulting, our team ensures your finances are accurate, organized, and ready for decision-making.</p>
			</div>

			<div class="col s12 m6 l3">
				<div class="card-panel service-card">
					<h5 class="header-font" style="min-height: 56px">Bookkeeping Services</h5>
					<p>Starting from $ 200 USD / Month</p>
					<p class="text-base">Keep your books accurate, organized, and up to date. From monthly reconciliations to financial statements, we handle it all — so you can focus on running your business.</p>
					<a href="{{ url("services/bookkeeping-service") }}" class="btn-large yellow darken-2 full-width">Learn more...</a>
				</div>
			</div>

			<div class="col s12 m6 l3">
				<div class="card-panel service-card">
					<h5 class="header-font" style="min-height: 56px">Accounting Services</h5>
					<p>Starting from $ 200 USD / Month</p>
					<p class="text-base">Get complete accounting solutions including accounts payable/receivable management, payroll processing, and financial reporting — all customized to your business needs.</p>
					<a href="{{ url("services/accounting-service") }}" class="btn-large yellow darken-2 full-width">Learn more...</a>
				</div>
			</div>

			<div class="col s12 m6 l3">
				<div class="card-panel service-card">
					<h5 class="header-font" style="min-height: 56px">QuickBooks Setup & Consultation</h5>
					<p>Starting from $ 200 USD / Month</p>
					<p class="text-base">New to QuickBooks? We'll help you choose the right version, set up your chart of accounts, import your data, and customize reports to fit your operations.</p>
					<a href="{{ url("services/quickbooks-setup-and-consultation") }}" class="btn-large yellow darken-2 full-width">Learn more...</a>
				</div>
			</div>

			<div class="col s12 m6 l3">
				<div class="card-panel service-card">
					<h5 class="header-font" style="min-height: 56px">QuickBooks Bookkeeping</h5>
					<p>Starting from $ 200 USD / Month</p>
					<p class="text-base">Work with certified QuickBooks professionals who ensure your data is clean, accurate, and ready for tax time — every month.</p>
					<a href="{{ url("services/quickbooks-bookkeeping") }}" class="btn-large yellow darken-2 full-width">Learn more...</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Services section (end) -->

<!-- About us section (start) -->
<section class="about-us">
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				{{-- <img src="{{ asset("images/office.jpg") }}" alt="bookkeepers in wyoming" class="responsive-img"> --}}
			</div>

			<div class="col s12 m6 l5 offset-l1">
				<h4 class="underline header-font" style="margin-bottom: 2rem">About Us</h4>
				
				<p class="grey-text text-darken-2">At {{ env("COMPANY") }}, we believe that strong financial management is the foundation of every successful business.</p>
				
				<p class="grey-text text-darken-2">Our team of experienced professionals provides complete bookkeeping, accounting, and QuickBooks setup services designed to save you time, reduce stress, and help your business stay compliant.</p>

				<p class="grey-text text-darken-2">As a Certified QuickBooks ProAdvisor, we bring deep expertise in QuickBooks Online and Desktop platforms — helping you set up, clean up, and manage your financial data with confidence.</p>

				<p class="grey-text text-darken-2">Whether you're a startup or an established company, we provide reliable, affordable, and personalized accounting support to help you make informed business decisions.</p>

				<a href="{{ url("about-us") }}" class="btn-large yellow darken-2">Learn more about us!</a>
			</div>
		</div>
	</div>
</section>
<!-- About us section (end) -->

<!-- Why choose us section (start) -->
@php
	$reasons = [
		"Certified QuickBooks ProAdvisor Team",
		"Transparent, Fixed Monthly Pricing",
		"Dedicated Bookkeeping Specialists",
		"Secure, Cloud-Based Process",
		"Personalized Support for Your Business Type",
	];
@endphp
<section>
	<div class="container">
		<div class="row">

			<div class="col s12 m6 l6">
				<h4 class="underline header-font" style="margin-bottom: 2rem">Why choose us</h4>
				<p class="grey-text text-darken-2">Our goal is to make bookkeeping simple, stress-free, and completely tailored to your business</p>
				<br>
				<ul class="grey-text text-darken-2">
					@foreach ($reasons as $key => $reason)	
						<li>
							<span>0{{ $key + 1 }}. </span>
							{{ $reason }}
						</li>
						<br>
					@endforeach
				</ul>
				<a href="#book-consultation" class="btn-large yellow darken-2 hide-on-med-and-up modal-trigger" style="margin-top: 1rem">Book Free Consultation</a>
			</div>

			<div class="col s12 m6 l5 offset-l1">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0; margin-top: 0">
					<form action="{{ url("contact-us") }}" method="POST" class="row" autocomplete="off" onsubmit="submitQueryForm(event)">
						<div class="input-field col s12" style="min-height: 40px">
							@csrf
							<div class="error-card hide" id="error-container">
								<i class="material-symbols-rounded">error</i>
								<span></span>
							</div>
						</div>

						<div class="input-field col s12">
							<input type="text" name="name" id="index-whyus-name" class="capitalize">
							<label for="index-whyus-name">First & last name</label>
						</div>

						<div class="input-field col s12">
							<input type="email" name="email" id="index-whyus-email" class="lowercase">
							<label for="index-whyus-email">Email address</label>
						</div>

						<div class="input-field col s12">
							<input type="text" name="phone" id="index-whyus-phone">
							<label for="index-whyus-phone">Phone number</label>
						</div>

						<div class="input-field col s12">
							<select name="service" id="index-whyus-service">
								<option value="" selected disabled>Select a service</option>
								<option value="Accounting Services">Accounting services</option>
								<option value="Bookkeeping Services">Bookkeeping services</option>
								<option value="QuickBooks Consultation">QuickBooks consultation</option>
								<option value="QuickBooks Bookkeeping">QuickBooks bookkeeping</option>
							</select>
							<label for="index-whyus-service">Service</label>
						</div>

						<div class="input-field col s12">
							<textarea name="query" id="index-whyus-query" class="materialize-textarea"></textarea>
							<label for="index-whyus-query">Your query</label>
						</div>

						<div class="input-field col s12">
							<button class="btn-large full-width yellow darken-2">Submit Query</button>
						</div>
					</form>
				</div>
			</div>

			{{-- <div class="col s12" style="margin-bottom: 5rem">
				<h4 class="underline header-font" style="margin-bottom: 2rem">Why choose us</h4>
				<p class="grey-text text-darken-2">Our goal is to make bookkeeping simple, stress-free, and completely tailored to your business</p>
			</div>

			@foreach ($reasons as $key => $reason)	
				@if ($key == 3)
					<div class="col s12 m6 l4 offset-l2">
						<div class="card-panel benefit-card-2">
							<h5 class="header-font" style="font-size: 4.2rem; line-height: 110%; margin: 2.8rem 0 1.68rem 0;">0{{ $key + 1 }}.</h5>
							<p>{{ $reason }}</p>
						</div>
					</div>
				@else
					<div class="col s12 m6 l4">
						<div class="card-panel benefit-card-2">
							<h5 class="header-font" style="font-size: 4.2rem; line-height: 110%; margin: 2.8rem 0 1.68rem 0;">0{{ $key + 1 }}.</h5>
							<p>{{ $reason }}</p>
						</div>
					</div>
				@endif
			@endforeach --}}
		</div>
	</div>
</section>
<!-- Why choose us section (end) -->

<!-- Call to action section (start) -->
<section class="yellow darken-2 center-align">
	<div class="container">
		<div class="row">
			<div class="col s12 m8 l6 offset-m2 offset-l3">
				<h2 class="underline header-font">Ready to simplify your bookkeeping?</h2>
				<h5>Get expert help from a Certified QuickBooks ProAdvisor today.</h5>
				<a href="#book-consultation" class="btn-large white z-depth-2 underline modal-trigger" style="margin-top: 2rem">Get Free Consultation</a>
			</div>
		</div>
	</div>
</section>
<!-- Call to action section (end) -->

<!-- Industries we serve (start) -->
@php
	$industries = ["Professional services (consulting, marketing, design)", "Retail and eCommerce", "Construction and real estate", "Healthcare and wellness", "IT and software companies", "Hospitality and restaurants"]
@endphp
<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<h4 class="header-font underline">Industries We Serve</h4>
				<p class="grey-text text-darken-2">Every business is unique — so are its bookkeeping needs. We serve clients across a range of industries, including:</p>
				<ul class="grey-text text-darken-2">
					@foreach ($industries as $key => $industry)	
						<li>
							<span>0{{ $key + 1 }}. </span>
							{{ $industry }}
						</li>
						<br>
					@endforeach
				</ul>
				<p class="grey-text text-darken-2">Whether you have in-house accounting team or outsourced it to some other company, give us a chance.</p>
				<a href="#book-consultation" class="btn-large yellow darken-2 hide-on-med-and-up modal-trigger">Book Free Consultation</a>
			</div>
			
			<div class="col s12 m6 l5 offset-l1">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0; margin-top: 0">
					<form action="{{ url("contact-us") }}" method="POST" class="row" autocomplete="off" onsubmit="submitQueryForm(event)">
						<div class="input-field col s12" style="min-height: 40px">
							@csrf
							<div class="error-card hide" id="error-container">
								<i class="material-symbols-rounded">error</i>
								<span></span>
							</div>
						</div>

						<div class="input-field col s12">
							<input type="text" name="name" id="index-industries-name" class="capitalize">
							<label for="index-industries-name">First & last name</label>
						</div>

						<div class="input-field col s12">
							<input type="email" name="email" id="index-industries-email" class="lowercase">
							<label for="index-industries-email">Email address</label>
						</div>

						<div class="input-field col s12">
							<input type="text" name="phone" id="index-industries-phone">
							<label for="index-industries-phone">Phone number</label>
						</div>

						<div class="input-field col s12">
							<select name="service" id="index-industries-service">
								<option value="" selected disabled>Select a service</option>
								<option value="Accounting Services">Accounting services</option>
								<option value="Bookkeeping Services">Bookkeeping services</option>
								<option value="QuickBooks Consultation">QuickBooks consultation</option>
								<option value="QuickBooks Bookkeeping">QuickBooks bookkeeping</option>
							</select>
							<label for="index-industries-service">Service</label>
						</div>

						<div class="input-field col s12">
							<textarea name="query" id="index-industries-query" class="materialize-textarea"></textarea>
							<label for="index-industries-query">Your query</label>
						</div>

						<div class="input-field col s12">
							<button class="btn-large full-width yellow darken-2">Submit Query</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Industries we serve (end) -->

@component('Components.Divider')@endcomponent

<!-- Blog section (start) -->
<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12" style="margin-bottom: 5rem">
				<h2 class="underline header-font">Learning Section</h2>
			</div>

			@foreach ($posts as $post)
				<div class="col s12 m6 l4">
					<a href="{{ url("resources/blog/$post->url") }}">
						<div class="card blog-card">
							<div class="card-image">
								<img src="{{ asset("images/blogs/post1.jpg") }}" alt="" class="responsive-img">
							</div>
							<div class="card-content">
								<p class="header-font" style="margin-bottom: 1rem; min-height: 81px">{{ $post->topic }}</p>
								<p class="text-base grey-text text-darken-2" style="min-height: 68px">{{ $post->description }}</p>
							</div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- Blog section (end) -->



@endsection