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
			<div class="col s12">
				<h2 class="underline header-font">Our Services</h2>
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
				<h2 class="underline header-font" style="margin-bottom: 2rem">About Us</h2>
				
				<p>At Quick Accounting Services, we believe that strong financial management is the foundation of every successful business.</p>
				
				<p>Our team of experienced professionals provides complete bookkeeping, accounting, and QuickBooks setup services designed to save you time, reduce stress, and help your business stay compliant.</p>

				<p>As a Certified QuickBooks ProAdvisor, we bring deep expertise in QuickBooks Online and Desktop platforms — helping you set up, clean up, and manage your financial data with confidence.</p>

				<p>Whether you're a startup or an established company, we provide reliable, affordable, and personalized accounting support to help you make informed business decisions.</p>

				<a href="{{ url("about-us") }}" class="btn-large yellow darken-2">Learn more about us!</a>
			</div>
		</div>
	</div>
</section>
<!-- About us section (end) -->

<!-- Why choose us section (start) -->
<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2 class="underline header-font" style="margin-bottom: 2rem">Why choose us</h2>
				<p>Our goal is to make bookkeeping simple, stress-free, and completely tailored to your business</p>
			</div>
			<div class="col s12 m6 l6">
				<table class="bottomless">
					<tbody>
						<tr>
							<td>
								<p>Certified QuickBooks ProAdvisor Team</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Transparent, Fixed Monthly Pricing</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Dedicated Bookkeeping Specialists</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Secure, Cloud-Based Process</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Personalized Support for Your Business Type</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
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

<!-- Industries we serve section (start) -->
<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6" style="margin-bottom: 5rem">
				<h2 class="underline header-font" style="margin-top: 0">Industries we serve</h2>
				<p>Our companies provides services to small & medium sized businesses and start ups. Some of the industries we serve are</p>
				
				<br>

				<ul>
					<li>01. Startups implementing QuickBooks for the first time</li>
					<li>02. Small and medium businesses shifting from manual bookkeeping</li>
					<li>03. Firms upgrading from QuickBooks Desktop to Online</li>
					<li>04. Entrepreneurs who want to understand their financial data better</li>
				</ul>

				<p>Whether you have in-house accounting team or outsourced it to some other company, give us a chance.</p>
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
							<input type="text" name="name" id="nameIndex" class="capitalize">
							<label for="nameIndex">First & last name</label>
						</div>

						<div class="input-field col s12">
							<input type="email" name="email" id="emailIndex" class="lowercase">
							<label for="emailIndex">Email address</label>
						</div>

						<div class="input-field col s12">
							<input type="text" name="phone" id="phoneIndex">
							<label for="phoneIndex">Phone number</label>
						</div>

						<div class="input-field col s12">
							<select name="service" id="serviceIndex">
								<option value="" selected disabled>Select a service</option>
								<option value="Accounting Services">Accounting services</option>
								<option value="Bookkeeping Services">Bookkeeping services</option>
								<option value="QuickBooks Consultation">QuickBooks consultation</option>
								<option value="QuickBooks Bookkeeping">QuickBooks bookkeeping</option>
							</select>
							<label for="serviceIndex">Service</label>
						</div>

						<div class="input-field col s12">
							<textarea name="query" id="queryIndex" class="materialize-textarea"></textarea>
							<label for="queryIndex">Your query</label>
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
<!-- Industries we serve section (end) -->

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