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
				"url" => url("services"),
				"text" => "Services"
			]
		]
	])
	@slot('title')Professional Bookkeeping & Accounting Services Tailored to Your Business @endslot
	@slot('description')Simplify your finances, stay compliant, and focus on growth — while we handle your books with precision and care.@endslot
@endcomponent

<section class="center-align" style="padding-bottom: 0">
	<div class="container">
		<h5>At Quick Accounting Services, we provide end-to-end financial management solutions for small and medium-sized businesses. From bookkeeping and accounting to QuickBooks setup and consulting, our team ensures your finances are accurate, organized, and ready for decision-making.</h5>
	</div>
</section>

@component('Components.Divider')@endcomponent

<section style="padding-top: 0">
	<div class="container">
		<div class="row">
			<div class="col s12 center-align" style="margin-bottom: 2rem">
				<h2 class="underline font-medium">Accounting & Bookkeeping Services</h2>
			</div>
			<div class="col s12 m6">
				@component('Components.ServiceCardDetailed', ["features" => ["Recording and categorization of financial transactions", "Bank and credit card reconciliation", "Accounts payable and receivable management", "Financial statement preparation (Profit & Loss, Balance Sheet)", "Regular reporting and performance insights"]])
					@slot('title')Bookkeeping Services @endslot
					@slot('subheader')Accurate, Reliable, and Stress-Free Bookkeeping @endslot
					@slot('description')Keep your financial records clean, organized, and up to date with our professional bookkeeping services. We handle everything from daily transaction recording to monthly reconciliation — so you always know where your business stands financially.@endslot
					@slot('service'){{ url("services/bookkeeping-services") }}@endslot
					@slot('pricing'){{ url("pricing/bookkeeping-services") }}@endslot
				@endcomponent
			</div>

			<div class="col s12 m6">
				@component('Components.ServiceCardDetailed', ["features" => ["Financial reporting and analysis", "Year-end and quarterly account reviews", "Budgeting and cash flow management", "Compliance with accounting standards", "Tax-ready financial preparation"]])
					@slot('title')Accounting Services @endslot
					@slot('subheader')Strategic Accounting That Drives Better Business Decisions @endslot
					@slot('description')Our accounting services go beyond just numbers — we help you interpret them. Whether it's preparing reports, analyzing financial health, or ensuring compliance, our experts bring clarity and strategy to your business finances.@endslot
					@slot('service'){{ url("services/accounting-services") }}@endslot
					@slot('pricing'){{ url("pricing/accounting-services") }}@endslot
				@endcomponent
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12 center-align" style="margin-bottom: 2rem">
				<h2 class="underline font-medium">QuickBooks Related Services</h2>
				<p>Quick Accounting Services is an independent accounting firm and a Certified QuickBooks ProAdvisor. We are not affiliated with or endorsed by Intuit Inc. QuickBooks and its logo are registered trademarks of Intuit Inc.</p>
			</div>
			<div class="col s12 m6">
				@component('Components.ServiceCardDetailed', ["features" => ["New QuickBooks setup (Online or Desktop)", "Chart of accounts creation and customization", "Integration with banking and third-party tools", "Data migration and cleanup", "One-on-one QuickBooks training and consultation"]])
					@slot('title')QuickBooks Setup & Consultation @endslot
					@slot('subheader')QuickBooks Setup and Expert Consultation for Your Business @endslot
					@slot('description')As a Certified QuickBooks ProAdvisor, we help you get the most out of your QuickBooks software — from initial setup to ongoing optimization. We ensure your system is configured correctly, your accounts are synced, and your team knows how to use it effectively.@endslot
					@slot('service'){{ url("services/quickbooks-setup-and-consultation") }}@endslot
					@slot('pricing'){{ url("pricing/quickbooks-setup-and-consultation") }}@endslot
				@endcomponent
			</div>

			<div class="col s12 m6">
				@component('Components.ServiceCardDetailed', ["features" => ["QuickBooks-based bookkeeping and reconciliation", "Cloud-based access to reports and data", "Monthly financial reviews", "Cleanup and correction of existing QuickBooks data", "Support for QuickBooks Online, Desktop, and Multi-User setups"]])
					@slot('title')QuickBooks Bookkeeping @endslot
					@slot('subheader')Expert QuickBooks Bookkeeping Services for Businesses @endslot
					@slot('description')We combine professional bookkeeping expertise with the power of QuickBooks to deliver accurate, efficient, and real-time financial tracking. Whether you use QuickBooks Online or Desktop, we'll manage your books so you can focus on running your business.@endslot
					@slot('service'){{ url("services/quickbooks-bookkeeping") }}@endslot
					@slot('pricing'){{ url("pricing/quickbooks-bookkeeping") }}@endslot
				@endcomponent
			</div>
		</div>
	</div>
</section>

@endsection