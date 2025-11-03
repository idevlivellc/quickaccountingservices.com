@extends('templates.website')

@section("title", "Bookkeeping Service Pricing | Quick Accounting Services")
@section("description", "Explore our flexible bookkeeping pricing plans. Affordable rates, transparent structure, and customizable options.")

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
				"url" => url("pricing/bookkeeping-services"),
				"text" => "Bookkeeping Services"
			]
		]
	])
	@slot('title')Bookkeeping Services @endslot
	@slot('description')Prices start from $ 200.00 USD per month.@endslot
@endcomponent

<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12 m10 l8 offset-m1 offset-l2" style="margin-bottom: 5rem">
				<h5 class="header-font">What's Included In The Service</h5>
			</div>

			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')edit_note @endslot
					@slot('title')Transaction Recording & Categorization @endslot
					@slot('description')We accurately record and categorize all your business transactions to ensure your books remain up-to-date and error-free.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')article @endslot
					@slot('title')Bank & Credit Card Reconciliation @endslot
					@slot('description')Regular reconciliation ensures that your books match your bank and credit statements, helping identify any discrepancies early.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')sync_alt @endslot
					@slot('title')Accounts Payable & Receivable Tracking @endslot
					@slot('description')Keep track of money owed to you and payments you owe, maintaining healthy cash flow and timely invoicing.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4 offset-l2">
				@component('Components.PricingFeatureCard')
					@slot('icon')receipt @endslot
					@slot('title')Monthly Financial Statements @endslot
					@slot('description')Receive detailed profit & loss, balance sheet, and cash flow reports every month to monitor your business performance.@endslot
				@endcomponent
			</div>
			<div class="col s12 m6 l4">
				@component('Components.PricingFeatureCard')
					@slot('icon')add_chart @endslot
					@slot('title')Expense Classification & Reporting @endslot
					@slot('description')We ensure each expense is properly categorized to maximize financial insights and tax-readiness.@endslot
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