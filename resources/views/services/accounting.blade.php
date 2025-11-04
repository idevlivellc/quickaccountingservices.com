@extends('templates.website')

@section("title", "Online Accounting Services for Small Businesses | Quick Accounting Services")
@section("description", "Our accountants provide financial statements, reporting, and tax-ready records to keep your business financially healthy.")

@section('content')

<!-- Accounting hero section (start) -->
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
				"url" => url("services/accounting-services"),
				"text" => "Accounting Services"
			]
		]
	])
	@slot('title')Accounting Services @endslot
	@slot('description')@endslot
@endcomponent
<!-- Accounting hero section (end) -->

<!-- Introduction (start) -->
<section class="center-align" style="padding-bottom: 0">
	<div class="container">
		<div>
			<div class="row">
				<div class="col s12">
					<h4 class="underline header-font">Our Approach to Accounting</h4>
					<p class="grey-text text-darken-2">Accounting is the language of business — and when done right, it gives you the insight and confidence to make smarter decisions. At {{ env("COMPANY") }}, we deliver professional accounting services tailored to the needs of small and medium-sized businesses. Our goal is simple: to help you maintain accurate financial records, stay compliant, and understand your numbers — so you can focus on running your business, not just balancing it. Our accounting professionals combine experience, technology, and personalized attention to ensure that every financial statement, transaction, and report truly reflects the performance of your business.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Introduction (end) -->

@component('Components.Divider')@endcomponent

<!-- Our services include (start) -->
@php
	$services = [
		[
			"title" => "Financial Statement Preparation",
			"description" => "We prepare and maintain complete sets of financial statements — including Balance Sheets, Income Statements, and Cash Flow Statements — that reflect the real financial health of your business."
		],
		[
			"title" => "General Ledger Maintenance",
			"description" => "We maintain and reconcile your general ledger, ensuring every transaction is properly recorded and classified. This allows for smoother financial reporting, tax filing, and business analysis"
		],
		[
			"title" => "Budgeting & Forecasting Monitaring",
			"description" => "Our team helps you set realistic financial goals through detailed budgeting and forecasting. We use historical data and industry benchmarks to help you plan for profitability and growth."
		],
		[
			"title" => "Accounts Payable & Receivable Management",
			"description" => "We ensure all your bills, vendor payments, and customer invoices are accurately tracked and processed — helping you maintain healthy cash flow and minimize outstanding dues."
		],
		[
			"title" => "Compliance & Year-End Reviews",
			"description" => "We make sure your accounts are compliant with accounting standards and ready for tax season. Our year-end reviews help you identify discrepancies, prepare for audits, and reduce compliance risks."
		],
		[
			"title" => "Financial Analysis & Advisory",
			"description" => "Beyond standard accounting, we help you interpret what your financial data means. From profitability ratios to expense trends, we translate numbers into actionable insights for smarter business decisions."
		],
	];
@endphp

<section style="padding-top: 0">
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<h4 class="header-font underline">Our Accounting Services Include</h4>
				<p class="grey-text text-darken-2"> We offer a comprehensive range of accounting solutions to help businesses manage their finances accurately and efficiently.</p>
				<br>
				<table class="bottomless">
					@foreach ($services as $service)
						<tr>
							<td style="padding-left: 0">
								<p>
									<span>{{ $service["title"] }}</span>
									<br>
									<span class="grey-text text-darken-2 text-base">{{ $service["description"] }}</span>
								</p>
							</td>
						</tr>
					@endforeach
				</table>
			</div>

			<div class="col m6 l5 offset-l1 hide-on-small-only" style="position: sticky; top: 128px">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0; margin-top: 1.52rem">
					<form action="{{ url("contact-us") }}" method="POST" class="row" onsubmit="submitQueryForm(event)">
						<div class="input-field col s12">
							<span class="font-semibold">Have a query? Write to us</span>
						</div>

						<div class="input-field col s12">
							@csrf
							<div class="error-card hide" id="error-container">
								<i class="material-symbols-rounded">error</i>
								<span></span>
							</div>

							<div class="success-card hide" id="success-container">
								<i class="material-symbols-rounded">check_circle</i>
								<span></span>
							</div>
						</div>

						<div class="input-field col s12">
							<input type="text" name="name" id="bookkeeping-services-name" class="capitalize">
							<label for="bookkeeping-services-name">First & last name</label>
						</div>

						<div class="input-field col s12">
							<input type="email" name="email" id="bookkeeping-services-email" class="lowercase">
							<label for="bookkeeping-services-email">Email address</label>
						</div>

						<div class="input-field col s12">
							<input type="text" name="phone" id="bookkeeping-services-phone">
							<label for="bookkeeping-services-phone">Phone number</label>
						</div>

						<div class="input-field col s12">
							<select name="service" id="bookkeeping-services-service">
								<option value="" selected disabled>Select a service</option>
								<option value="Accounting Services">Accounting services</option>
								<option value="Bookkeeping Services">Bookkeeping services</option>
								<option value="QuickBooks Consultation">QuickBooks consultation</option>
								<option value="QuickBooks Bookkeeping">QuickBooks bookkeeping</option>
							</select>
							<label for="bookkeeping-services-service">Service</label>
						</div>

						<div class="input-field col s12">
							<textarea name="query" id="bookkeeping-services-query" class="materialize-textarea"></textarea>
							<label for="bookkeeping-services-query">Your query</label>
						</div>

						<div class="input-field col s12">
							<button class="btn-large full-width yellow darken-2" name="submit-btn">Submit Query</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our services include (end) -->

<!-- Benefits of choosing us (start) -->
@php
	$benefits = [
		"Accurate & Timely Reports - Reliable financial statements you can count on.",
		"Compliance-Ready - Stay aligned with accounting standards and reporting rules.",
		"Cost-Effective Solutions - Professional accounting at a fraction of in-house costs.",
		"Strategic Insights - Data-driven financial advice that supports better decision-making.",
		"Personalized Service - Every client gets a dedicated accounting specialist.",
		"Cloud Access - View your financial data securely, anytime, anywhere.",
	];
@endphp

<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12" style="margin-bottom: 5rem">
				<h4 class="header-font underline">Benefits of Choosing {{ env("COMPANY") }}</h4>
			</div>

			@foreach ($benefits as $key => $benefit)
				<div class="col s12 m6 l4">
					<div class="card-panel z-depth-0 benefit-card-2">
						<h1 class="header-font">0{{ $key + 1 }}.</h1>
						<p>{{ $benefit }}</p>
					</div>
				</div>
			@endforeach

			<div class="col s12" style="margin-top: 2rem">
				<a href="#book-consultation" class="btn-large yellow darken-2 modal-trigger">Book Free Consultation</a>
			</div>
		</div>
	</div>
</section>
<!-- Benefits of choosing us (end) -->

<!-- Our process (start) -->
@php
	$steps = [
		[
			"title" => "Step 1: Initial Consultation",
			"description" => "We start by understanding your business operations, financial structure, and accounting needs."
		],
		[
			"title" => "Step 2: System Setup",
			"description" => "If needed, we help set up or optimize your accounting system (QuickBooks Online or Desktop) for smooth operations."
		],
		[
			"title" => "Step 3: Ongoing Accounting",
			"description" => "Our team manages your accounts monthly or quarterly — recording transactions, reconciling balances, and preparing statements."
		],
		[
			"title" => "Step 4: Reporting & Review",
			"description" => "We review your reports with you to ensure you understand your business performance and make informed financial decisions."
		],
	];
@endphp

<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4 class="header-font underline">Our Process</h4>
				<p class="grey-text text-darken-2">We follow a simple yet effective process to ensure complete transparency and smooth operations.</p>
			</div>

			<div class="col s12">
				@foreach ($steps as $step)	
					<div class="card-panel process-card">
						<p>{{ $step["title"] }}</p>
						<p class="grey-text text-darken-2 text-base">{{ $step["description"] }}</p>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<!-- Our process (end) -->

<!-- Industries we serve (start) -->
@php
	$industries = ["Professional services (consulting, marketing, design)", "Retail and eCommerce", "Construction and real estate", "Healthcare and wellness", "IT and software companies", "Hospitality and restaurants"]
@endphp
<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<h4 class="header-font underline">Industries We Serve</h4>
				<p class="grey-text text-darken-2">Every business is unique — so are its bookkeeping needs. We serve clients across a range of industries, including:</p>
				<ul class="grey-text text-darken-2">
					@foreach ($industries as $key => $industry)	
						<li>
							<span>0{{ $key + 1 }}. </span>
							{{ $industry }}
						</li>
						<br>
					@endforeach
				</ul>
				<a href="#book-consultation" class="btn-large yellow darken-2 hide-on-med-and-up modal-trigger">Book Free Consultation</a>
			</div>
			<div class="col m6 l5 offset-l1 hide-on-small-only" style="position: sticky; top: 128px">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0; margin-top: 1.52rem">
					<form action="{{ url("contact-us") }}" method="POST" class="row" onsubmit="submitQueryForm(event)">
						<div class="input-field col s12">
							<span class="font-semibold">Have a query? Write to us</span>
						</div>

						<div class="input-field col s12">
							@csrf
							<div class="error-card hide" id="error-container">
								<i class="material-symbols-rounded">error</i>
								<span></span>
							</div>

							<div class="success-card hide" id="success-container">
								<i class="material-symbols-rounded">check_circle</i>
								<span></span>
							</div>
						</div>

						<div class="input-field col s12">
							<input type="text" name="name" id="accounting-industries-name" class="capitalize">
							<label for="accounting-industries-name">First & last name</label>
						</div>

						<div class="input-field col s12">
							<input type="email" name="email" id="accounting-industries-email" class="lowercase">
							<label for="accounting-industries-email">Email address</label>
						</div>

						<div class="input-field col s12">
							<input type="text" name="phone" id="accounting-industries-phone">
							<label for="accounting-industries-phone">Phone number</label>
						</div>

						<div class="input-field col s12">
							<select name="service" id="accounting-industries-service">
								<option value="" selected disabled>Select a service</option>
								<option value="Accounting Services">Accounting services</option>
								<option value="Bookkeeping Services">Bookkeeping services</option>
								<option value="QuickBooks Consultation">QuickBooks consultation</option>
								<option value="QuickBooks Bookkeeping">QuickBooks bookkeeping</option>
							</select>
							<label for="accounting-industries-service">Service</label>
						</div>

						<div class="input-field col s12">
							<textarea name="query" id="accounting-industries-query" class="materialize-textarea"></textarea>
							<label for="accounting-industries-query">Your query</label>
						</div>

						<div class="input-field col s12">
							<button class="btn-large full-width yellow darken-2" name="submit-btn">Submit Query</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Industries we serve (end) -->
@endsection