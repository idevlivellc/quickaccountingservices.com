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
				"url" => url("pricing"),
				"text" => "Pricing"
			],
			[
				"url" => url("pricing/quickbooks-bookkeeping"),
				"text" => "QuickBooks Bookkeeping"
			]
		]
	])
	@slot('title')QuickBooks Bookkeeping @endslot
	@slot('description')@endslot
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
					@slot('title')Daily Transaction Entry & Categorization @endslot
					@slot('description')We manage all your daily transactions within QuickBooks for consistent, real-time records.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')Bank Reconciliation & Review @endslot
					@slot('description')Monthly reconciliation ensures accuracy between your QuickBooks data and your actual bank records.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')Financial Reporting in QuickBooks @endslot
					@slot('description')Generate and share reports directly from QuickBooks for full transparency and control.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4 offset-l2">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')Ongoing File Review & Adjustments @endslot
					@slot('description')Regular account reviews to ensure data integrity and compliance with best practices.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')Advisory on QuickBooks Features @endslot
					@slot('description')Guidance on how to use QuickBooks more effectively for smoother accounting workflows.@endslot
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