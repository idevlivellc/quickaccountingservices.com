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
			],
			[
				"url" => url("services/bookkeeping-services"),
				"text" => "Bookkeeping Services"
			]
		]
	])
	@slot('title')Bookkeeping Services @endslot
	@slot('description')@endslot
@endcomponent

<section class="center-align" style="padding-bottom: 0">
	<div class="container">
		<h4 class="header-font">Accurate, Reliable, and Hassle-Free Bookkeeping for Your Business</h4>
		<h5>Let our experts handle your books while you focus on running and growing your business.</h5>
	</div>
</section>

@component('Components.Divider')@endcomponent

<section class="center-align" style="padding-top: 0">
	<div class="container">
		<p>Bookkeeping is the foundation of every successful business — it tells the story of where your money comes from, where it goes, and what it means for your future growth.</p>

		<p>At Quick Accounting Services, we provide professional bookkeeping services designed for small and medium-sized businesses that want accuracy, efficiency, and financial clarity without the stress of managing their own books.</p>

		<p>Our team of experienced bookkeepers and accountants ensures your records are always up to date, compliant, and organized. Whether you're a startup, an established company, or a growing business, we tailor our bookkeeping solutions to fit your unique needs.</p>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<h4 class="underline header-font">Why Bookkeeping Matters</h4>
				<p>Accurate bookkeeping is more than just recording numbers - it's about maintaining a clear picture of your business health. Without organized records, even the most profitable companies can face cash flow confusion, tax penalties, and missed growth opportunities.</p>
			</div>

			<div class="col s12 m6 l5 offset-l1">
				<table class="bottomless">
					<thead>
						<tr>
							<th>
								<p class="font-semibold">Our bookkeeping service ensures:</p>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<p>Every transaction is recorded correctly</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Reports are generated on time</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>You have full visibility into your financial position</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<section class="center-align">
	<div class="container">
		{{-- <div class="row">
			<div class="col s12" style="margin-bottom: 5rem">
				<h4 class="underline header-font">Our Bookkeeping Services Include</h4>
				<p>We provide comprehensive bookkeeping solutions that cover every aspect of your business finances.</p>
			</div>

			<div class="col s6 m4 l3">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
					<p class="font-medium" style="min-height: 54px">Transaction Recording</p>
					<p class="text-base grey-text text-darken-2" style="min-height: 113px">We record every sale, expense, payment, and deposit — ensuring every entry is properly categorized and reconciled.</p>
				</div>
			</div>
			<div class="col s6 m4 l3">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
					<p class="font-medium" style="min-height: 54px">Bank and Credit Card Reconciliation</p>
					<p class="text-base grey-text text-darken-2" style="min-height: 113px">We match your bank and credit card statements with your books, ensuring that your records are error-free and reflect your true financial position.</p>
				</div>
			</div>
			<div class="col s6 m4 l3">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
					<p class="font-medium" style="min-height: 54px">Accounts Payable & Receivable</p>
					<p class="text-base grey-text text-darken-2" style="min-height: 113px">Track what you owe and what you're owed — without missing a payment or an invoice. Our system ensures timely billing and collections.</p>
				</div>
			</div>
			<div class="col s6 m4 l3">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
					<p class="font-medium" style="min-height: 54px">Financial Reporting</p>
					<p class="text-base grey-text text-darken-2" style="min-height: 113px">Receive accurate monthly and quarterly reports - including Balance Sheets, Income Statements, and Cash Flow Statements — to understand your financial performance.</p>
				</div>
			</div>
			<div class="col s6 m4 l3 offset-l2">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
					<p class="font-medium" style="min-height: 54px">Expense Tracking</p>
					<p class="text-base grey-text text-darken-2" style="min-height: 113px">Monitor and categorize every business expense for accurate budgeting and effortless tax filing.</p>
				</div>
			</div>
			<div class="col s6 m4 l3">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
					<p class="font-medium" style="min-height: 54px">Book Cleanup & Catch-Up</p>
					<p class="text-base grey-text text-darken-2" style="min-height: 113px">Falling behind on your books? We specialize in historical cleanup and catching up missed months or years of bookkeeping.</p>
				</div>
			</div>
			<div class="col s6 m4 l3">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
					<p class="font-medium" style="min-height: 54px">Cloud-Based Access</p>
					<p class="text-base grey-text text-darken-2" style="min-height: 113px">Access your financial records anytime, anywhere — securely stored and backed up on trusted cloud accounting platforms.</p>
				</div>
			</div>
		</div> --}}


		<div class="row">
			<div class="col s12" style="margin-bottom: 5rem">
				<h4 class="underline header-font">Our Bookkeeping Services Include</h4>
				<p>We provide comprehensive bookkeeping solutions that cover every aspect of your business finances.</p>
			</div>

			<div class="col s12 m6 l5">
				<ul class="collapsible z-depth-0" style="border: none">
					<li>
						<div class="collapsible-header">
							<p>Transaction Recording</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem">
							<p class="grey-text text-darken-2">We record every sale, expense, payment, and deposit — ensuring every entry is properly categorized and reconciled.</p>
						</div>
					</li>
					
					<li>
						<div class="collapsible-header">
							<p>Bank and Credit Card Reconciliation</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem">
							<p class="grey-text text-darken-2">We match your bank and credit card statements with your books, ensuring that your records are error-free and reflect your true financial position.</p>
						</div>
					</li>
					
					<li>
						<div class="collapsible-header">
							<p>Accounts Payable & Receivable</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem">
							<p class="grey-text text-darken-2">Track what you owe and what you’re owed — without missing a payment or an invoice. Our system ensures timely billing and collections.</p>
						</div>
					</li>
					
					<li>
						<div class="collapsible-header">
							<p>Financial Reporting</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem">
							<p class="grey-text text-darken-2">Receive accurate monthly and quarterly reports — including Balance Sheets, Income Statements, and Cash Flow Statements — to understand your financial performance.</p>
						</div>
					</li>
					
					<li>
						<div class="collapsible-header">
							<p>Expense Tracking</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem">
							<p class="grey-text text-darken-2">Monitor and categorize every business expense for accurate budgeting and effortless tax filing.</p>
						</div>
					</li>
					
					<li>
						<div class="collapsible-header">
							<p>Book Cleanup & Catch-Up</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem">
							<p class="grey-text text-darken-2">Falling behind on your books? We specialize in historical cleanup and catching up missed months or years of bookkeeping.</p>
						</div>
					</li>
					
					<li>
						<div class="collapsible-header">
							<p>Cloud-Based Access</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem">
							<p class="grey-text text-darken-2">Access your financial records anytime, anywhere — securely stored and backed up on trusted cloud accounting platforms.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>



	</div>
</section>

@php
	$industries = ["Professional services (consulting, marketing, design)", "Retail and eCommerce", "Construction and real estate", "Healthcare and wellness", "IT and software companies", "Hospitality and restaurants"]
@endphp

<section class="industries-we-serve">
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l5">
				<h4 class="underline header-font">Industries We Serve</h4>
				<p>Every business is unique — so are its bookkeeping needs. We serve clients across a range of industries, including:</p>
				<table class="bottomless">
					<tbody>
						@foreach ($industries as $item)
						<tr>
							<td style="padding-left: 0">
								<p>{{ $item }}</p>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<section class="center-align">
	<div class="container">
		<h4 class="underline header-font" style="margin-bottom: 2rem">Technology We Use</h4>
		
		<p>We use trusted and industry-standard accounting software, including QuickBooks Online and Desktop, to provide efficient and accurate bookkeeping.</p>

		<p>As a Certified QuickBooks ProAdvisor firm, we ensure that your QuickBooks is set up correctly and maintained according to best practices — maximizing automation and minimizing errors.</p>

		<p>Quick Accounting Services is an independent accounting firm and a Certified QuickBooks ProAdvisor. QuickBooks and Intuit are registered trademarks of Intuit Inc.</p>
	</div>
</section>

<section class="center-align yellow darken-2">
	<div class="container">
		<h4 class="underline header-font" style="margin-bottom: 2rem">Benefits of Choosing Our Bookkeeping Services</h4>
		<div class="row">
			<div class="col s6 m4 l2">
				<p>Accuracy You Can Trust</p>
			</div>
			<div class="col s6 m4 l2">
				<p>Cost-Effective</p>
			</div>
			<div class="col s6 m4 l2">
				<p>Time-Saving</p>
			</div>
			<div class="col s6 m4 l2">
				<p>Stress-Free Compliance</p>
			</div>
			<div class="col s6 m4 l2">
				<p>Expert Support</p>
			</div>
			<div class="col s6 m4 l2">
				<p>Scalable Solutions</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container"></div>
</section>

@endsection