@extends('templates.website')

@section("title", "")

@section('content')

@component('Components.PageHeader', [
		"breadcrumb" => [
			[
				"url" => url(""),
				"text" => "Home"
			],
			[
				"url" => url("about-us"),
				"text" => "About"
			],
			[
				"url" => url("about/why-choose-us"),
				"text" => "Why Choose Us"
			]
		]
	])
	@slot('title')Why Choose Us.@endslot
	@slot('description')We're a Certified QuickBooks ProAdvisor firm helping small and medium businesses manage their books efficiently with accurate, timely, and transparent accounting support.@endslot
@endcomponent

<section class="center-align">
	<div class="container">
		<h4 class="underline header-font" style="margin-bottom: 5rem">Discover Why Businesses Trust Quick Accounting Services</h4>
		<p>Choosing the right accounting partner can make all the difference. At Quick Accounting Services, we go beyond data entry and reporting — we deliver financial clarity, accuracy, and peace of mind.</p>
		<p>Our clients choose us because we combine Certified QuickBooks ProAdvisor expertise, modern accounting tools, and a personalized approach that adapts to your business needs.</p>
	</div>
</section>

@component('Components.Divider')@endcomponent

<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12" style="margin-bottom: 2rem">
				<h4 class="underline header-font" style="margin-bottom: 5rem">What Sets Us Apart</h4>
			</div>

			<div class="col s12 m4">
				<div class="card-panel z-depth-0">
					{{-- <i class="material-symbols-rounded small yellow-text text-darken-2">license</i> --}}
					<img src="{{ asset("images/icons/license.svg") }}" alt="" width="48">
					<p class="font-medium">Certified QuickBooks ProAdvisors</p>
					<p class="grey-text text-darken-2" style="min-height: 81px">Our team is trained and certified to help you make the most of QuickBooks — from setup to cleanup and ongoing management.</p>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="card-panel z-depth-0">
					<img src="{{ asset("images/icons/price-change.svg") }}" alt="" width="48">
					<p class="font-medium">Transparent, Fixed Pricing</p>
					<p class="grey-text text-darken-2" style="min-height: 81px">No surprises, no hidden fees. We believe in predictable monthly plans and clear deliverables.</p>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="card-panel z-depth-0">
					<img src="{{ asset("images/icons/finance.svg") }}" alt="" width="48">
					<p class="font-medium">Personalized Financial Solutions</p>
					<p class="grey-text text-darken-2" style="min-height: 81px">Every business is unique. We customize our approach to match your goals, industry, and workflow.</p>
				</div>
			</div>

			<div class="col s12 m4 offset-m2">
				<div class="card-panel z-depth-0">
					<img src="{{ asset("images/icons/cloud.svg") }}" alt="" width="48">
					<p class="font-medium">Cloud-Based, Secure Process</p>
					<p class="grey-text text-darken-2" style="min-height: 81px">We use encrypted, cloud-based accounting systems to ensure your data is safe, accessible, and always up to date.</p>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="card-panel z-depth-0">
					<img src="{{ asset("images/icons/help.svg") }}" alt="" width="48">
					<p class="font-medium">Reliable & Responsive Support</p>
					<p class="grey-text text-darken-2" style="min-height: 81px">You'll always have a dedicated point of contact who understands your books, your goals, and your deadlines.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6">
				<p class="underline">Our Promise</p>
				<h2 class="header-font">We don't just manage numbers - we manage trust.</h2>
				<h5>Our mission is to provide you with accurate financials, strategic insight, and the freedom to focus on growing your business.</h5>
			</div>
		</div>
	</div>
</section>

@component('Components.Divider')@endcomponent

<!-- Testimonial section (start) -->
<section>
	<div class="container">
		<div class="row">
			<div class="col s12" style="margin-bottom: 2rem">
				<h2 class="underline header-font">Testimonials</h2>
			</div>
		</div>
	</div>
</section>
<!-- Testimonial section (end) -->
@endsection