@extends('templates.website')

@section("title", "")

{{-- @section('title', $meta['title'])
@section('keywords', $meta['keywords'])
@section('description', $meta['description']) --}}

@section('content')

<header class="home">
	<div class="header-content container">
		<h1>Reliable Bookkeeping & Accounting Services for Growing Businesses</h1>
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

			<div class="col s12 m6 l6">
				<a href="{{ url("services") }}">
					<div class="card-panel service-card">
						<h5 class="font-semibold white-text">Bookkeeping Services</h5>
						<p class="white-text">Keep your books accurate, organized, and up to date. From monthly reconciliations to financial statements, we handle it all — so you can focus on running your business.</p>
					</div>
				</a>
			</div>

			<div class="col s12 m6 l6">
				<a href="{{ url("services") }}">
					<div class="card-panel service-card">
						<h5 class="font-semibold white-text">Accounting Services</h5>
						<p class="white-text">Get complete accounting solutions including accounts payable/receivable management, payroll processing, and financial reporting — all customized to your business needs.</p>
					</div>
				</a>
			</div>

			<div class="col s12 m6 l6">
				<a href="{{ url("services") }}">
					<div class="card-panel service-card">
						<h5 class="font-semibold white-text">QuickBooks Setup & Consultation</h5>
						<p class="white-text">New to QuickBooks? We'll help you choose the right version, set up your chart of accounts, import your data, and customize reports to fit your operations.</p>
					</div>
				</a>
			</div>

			<div class="col s12 m6 l6">
				<a href="{{ url("services") }}">
					<div class="card-panel service-card">
						<h5 class="font-semibold white-text">QuickBooks Bookkeeping</h5>
						<p class="white-text">Work with certified QuickBooks professionals who ensure your data is clean, accurate, and ready for tax time — every month.</p>
					</div>
				</a>
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
<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12" style="margin-bottom: 5rem">
				<h2 class="underline header-font">Industries we serve</h2>
			</div>
			<div class="col s12 m6 l3">
				<i class="material-symbols-rounded medium">villa</i>
			</div>
			<div class="col s12 m6 l3">
				<i class="material-symbols-rounded medium">villa</i>
			</div>
			<div class="col s12 m6 l3">
				<i class="material-symbols-rounded medium">villa</i>
			</div>
			<div class="col s12 m6 l3">
				<i class="material-symbols-rounded medium">villa</i>
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
			<div class="col s12">
				<h2 class="underline header-font" style="margin-bottom: 2rem">Learning Section</h2>
			</div>

			<div class="col s12 m6 l4">
				<div class="card-panel">
					<p class="title">QuickBooks Online Setup Checklist for Small Businesses</p>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel">
					<p class="title">Top 5 Bookkeeping Mistakes to Avoid</p>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel">
					<p class="title">How to Switch from Excel to QuickBooks Easily</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Blog section (end) -->



@endsection