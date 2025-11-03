@extends('templates.website')

@section("title", "QuickBooks Setup Pricing | Quick Accounting Services")
@section("description", "View starting prices for QuickBooks setup and consultation. Independent professionals delivering personalized assistance.")

@section('content')

@component('Components.PageHeader', [
		"breadcrumb" => [
			[
				"url" => url(""),
				"text" => "Home"
			],
			[
				"url" => url("pricing"),
				"text" => "Pricing"
			],
			[
				"url" => url("pricing/quickbooks-setup-and-consultation"),
				"text" => "QuickBooks Setup & Consultation"
			]
		]
	])
	@slot('title')QuickBooks Setup & Consultation @endslot
	@slot('description')Starting from $ 500.00 USD (One time fees).@endslot
@endcomponent

<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12 m10 l8 offset-m1 offset-l2" style="margin-bottom: 5rem">
				<h5 class="header-font">What's Included In The Service</h5>
			</div>

			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')New QuickBooks Setup (Online or Desktop) @endslot
					@slot('description')We help you set up your QuickBooks account the right way from the start — selecting the correct version and company preferences.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')Chart of Accounts Creation @endslot
					@slot('description')A well-structured chart of accounts is created and customized to your business type for better reporting accuracy.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')Banking Integration & App Connections @endslot
					@slot('description')Connect your bank feeds and integrate essential third-party tools to automate your bookkeeping process.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4 offset-l2">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')Data Migration & Cleanup @endslot
					@slot('description')Transition from spreadsheets or other accounting software to QuickBooks smoothly with verified data transfer.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')One-on-One Consultation @endslot
					@slot('description')Personalized guidance on best practices, reporting, and workflow optimization to make the most of QuickBooks features.@endslot
				@endcomponent
			</div>
		</div>
	</div>
</section>

@component('Components.Divider')@endcomponent

@component('Components.CallToAction')
	@slot('button')Book a free consultation today!@endslot
@endcomponent

@endsection