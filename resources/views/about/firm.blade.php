@extends('templates.website')

@section("title", "About Us")

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
				"url" => url("about/our-firm"),
				"text" => "Our Firm"
			]
		]
	])
	@slot('title')Building Financial Clarity for Businesses Through Expertise and Integrity.@endslot
	@slot('description')At Quick Accounting Services, we're more than just accountants — we're your financial partners. Our mission is to simplify the way small and mid-sized businesses manage their books, empowering owners to focus on growth while we handle the numbers.@endslot
@endcomponent

<section class="center-align">
	<div class="container">
		<p>We provide professional bookkeeping, accounting, and QuickBooks ProAdvisor services designed to help you stay accurate, compliant, and financially confident.</p>

		<div class="divider" style="margin: 5rem 0"></div>

		<h4 class="header-font underline" style="margin-bottom: 2rem">Our Story</h4>

		<p>Founded in 2019, Quick Accounting Services was established to bring reliable, transparent, and affordable bookkeeping to business owners who value accuracy and peace of mind.</p>

		<p>Over the years, we've helped companies across the States, streamline their accounting processes and transition seamlessly to QuickBooks Online and Desktop platforms. Our client-centered approach ensures every solution is tailored to individual needs — from startups to established enterprises.</p>

		<p>Our firm was built on one principle: Financial clarity leads to better business decisions.</p>
	</div>
</section>

@component('Components.Divider')@endcomponent

<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 flexbox flex-col justify-center" style="aspect-ratio: 1">
				<h4 class="header-font underline" style="margin-bottom: 2rem">Our Mission</h4>
				<p>To deliver accurate, timely, and transparent financial services that help businesses make confident decisions and achieve sustainable growth.</p>
			</div>

			<div class="col s12 m6"></div>
		</div>

		<div class="row right-align">
			<div class="col s12 m6"></div>

			<div class="col s12 m6 flexbox flex-col justify-center">
				<h4 class="header-font underline" style="margin-bottom: 2rem">Our Vision</h4>
				<p>To become a trusted financial partner for businesses worldwide — known for integrity, precision, and excellence in bookkeeping and QuickBooks services.</p>
			</div>
		</div>
	</div>
</section>

@component('Components.Divider')@endcomponent

<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12" style-"margin-bottom: 5rem">
				<h4 class="header-font underline" style="margin-bottom: 2rem">Our Values</h4>
			</div>
			
			<div class="col s12 m4 l4">
				<div class="card-panel z-depth-0">
					<p style="min-height: 81px">
						<span class="font-medium">Integrity</span>
						<br>
						<span class="grey-text text-darken-2">We believe trust is earned through honesty and accountability.</span>
					</p>
				</div>
			</div>
			<div class="col s12 m4 l4">
				<div class="card-panel z-depth-0">
					<p style="min-height: 81px">
						<span class="font-medium">Accuracy</span>
						<br>
						<span class="grey-text text-darken-2">Every transaction and every report must be precise to the point.</span>
					</p>
				</div>
			</div>
			<div class="col s12 m4 l4">
				<div class="card-panel z-depth-0">
					<p style="min-height: 81px">
						<span class="font-medium">Confidentiality</span>
						<br>
						<span class="grey-text text-darken-2">Your data is always secure and private with us so don't worry about data leaks.</span>
					</p>
				</div>
			</div>
			<div class="col s12 m4 l4 offset-l2">
				<div class="card-panel z-depth-0">
					<p style="min-height: 81px">
						<span class="font-medium">Innovation</span>
						<br>
						<span class="grey-text text-darken-2">We embrace technology to simplify your accounting experience.</span>
					</p>
				</div>
			</div>
			<div class="col s12 m4 l4">
				<div class="card-panel z-depth-0">
					<p style="min-height: 81px">
						<span class="font-medium">Commitment</span>
						<br>
						<span class="grey-text text-darken-2">We succeed only when our clients succeed.</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection