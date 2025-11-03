@extends('templates.website')

@section("title", "Accounting Service Pricing | Quick Accounting Services")
@section("description", "Get accounting service pricing tailored to your business size and needs. Transparent and flexible plans.")

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
				"url" => url("pricing/accounting-services"),
				"text" => "Accounting Services"
			]
		]
	])
	@slot('title')Accounting Services @endslot
	@slot('description')Starting from $ 350.00 USD / per month.@endslot
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
					@slot('title')General Ledger Maintenance @endslot
					@slot('description')All your accounts are reviewed, adjusted, and balanced for accurate reporting and compliance.@endslot
				@endcomponent
			</div>
			
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')Financial Analysis & Reporting @endslot
					@slot('description')We prepare and interpret key financial statements — helping you make informed strategic decisions.@endslot
				@endcomponent
			</div>
			
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')Adjusting Entries & Year-End Closing @endslot
					@slot('description')Proper adjustments ensure accurate year-end reporting and readiness for tax season.@endslot
				@endcomponent
			</div>
			
			<div class="col s12 m6 l4 offset-l2">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')Budgeting & Forecasting Assistance @endslot
					@slot('description')Our team helps you plan ahead with realistic budgets and growth-focused forecasts.@endslot
				@endcomponent
			</div>
			
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')target @endslot
					@slot('title')Customized Reports & Insights @endslot
					@slot('description')Get monthly or quarterly insights tailored to your industry and business goals.@endslot
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