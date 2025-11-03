@extends('templates.website')

@section("title", "Professional Bookkeeping Services | " . env("COMPANY"))
@section("description", "We handle daily bookkeeping, bank reconciliations, and financial reporting to help small businesses stay organized and compliant.")

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

<!-- Introduction (start) -->
<section class="center-align" style="padding-bottom: 0">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4 class="header-font underline">Accurate, Reliable, and Hassle-Free Bookkeeping for Your Business</h4>
				{{-- <h5>Let our experts handle your books while you focus on running and growing your business.</h5> --}}
				<p class="grey-text text-darken-2">Bookkeeping is the foundation of every successful business — it tells the story of where your money comes from, where it goes, and what it means for your future growth. At {{ env("COMPANY") }}, we provide professional bookkeeping services designed for small and medium-sized businesses that want accuracy, efficiency, and financial clarity without the stress of managing their own books. Our team of experienced bookkeepers and accountants ensures your records are always up to date, compliant, and organized. Whether you're a startup, an established company, or a growing business, we tailor our bookkeeping solutions to fit your unique needs.</p>
			</div>
		</div>
	</div>
</section>
<!-- Introduction (end) -->

@component('Components.Divider')@endcomponent

<!-- Why service matters (start) -->
<section class="center-align" style="padding-top: 0">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4 class="header-font underline">Why Bookkeeping Matters</h4>
				<p class="grey-text text-darken-2">Accurate bookkeeping is more than just recording numbers - it's about maintaining a clear picture of your business health. Without organized records, even the most profitable companies can face cash flow confusion, tax penalties, and missed growth opportunities.</p>
			</div>

			<div class="col s12 m6 l4">
				<div class="card-panel z-depth-0" style="border: 2px solid #fbc02d">
					<h1 class="header-font">01.</h1>
					<p class="grey-text text-darken-2">Every transaction is recorded correctly</p>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel z-depth-0" style="border: 2px solid #fbc02d">
					<h1 class="header-font">02.</h1>
					<p class="grey-text text-darken-2">Reports are generated on time</p>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel z-depth-0" style="border: 2px solid #fbc02d">
					<h1 class="header-font">03.</h1>
					<p class="grey-text text-darken-2">You have full visibility into your financial position</p>
				</div>
			</div>
			<div class="col s12">
				<div class="card-panel z-depth-0 yellow darken-2">
					<h4>Reach out to us for a free consultation.</h4>
					<a href="tel:{{ env("PHONE") }}">
						<h1 class="grey-text text-darken-4">{{ env("PHONE") }}</h1>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Why service matters (end) -->

<!-- Our services include (start) -->
@php
	$services = [
		[
			"title" => "Transaction Recording",
			"description" => "We record every sale, expense, payment, and deposit — ensuring every entry is properly categorized and reconciled."
		],
		[
			"title" => "Bank and Credit Card Reconciliation",
			"description" => "We match your bank and credit card statements with your books, ensuring that your records are error-free and reflect your true financial position."
		],
		[
			"title" => "Accounts Payable & Receivable",
			"description" => "Track what you owe and what you're owed — without missing a payment or an invoice. Our system ensures timely billing and collections."
		],
		[
			"title" => "Financial Reporting",
			"description" => "Receive accurate monthly and quarterly reports — including Balance Sheets, Income Statements, and Cash Flow Statements — to understand your financial performance."
		],
		[
			"title" => "Expense Tracking",
			"description" => "Monitor and categorize every business expense for accurate budgeting and effortless tax filing."
		],
		[
			"title" => "Book Cleanup & Catch-Up",
			"description" => "Falling behind on your books? We specialize in historical cleanup and catching up missed months or years of bookkeeping."
		],
	];
@endphp
<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<h4 class="header-font underline">Our Bookkeeping Services Include</h4>
				<p class="grey-text text-darken-2">We provide comprehensive bookkeeping solutions that cover every aspect of your business finances.</p>
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
							<p class="font-semibold">Have a query? Write to us</p>
							@csrf
						</div>

						<div class="input-field col s12">
							<input type="text" name="name" id="pricing-name" class="capitalize">
							<label for="pricing-name">First & last name</label>
						</div>

						<div class="input-field col s12">
							<input type="email" name="email" id="pricing-email" class="lowercase">
							<label for="pricing-email">Email address</label>
						</div>

						<div class="input-field col s12">
							<input type="text" name="phone" id="pricing-phone">
							<label for="pricing-phone">Phone number</label>
						</div>

						<div class="input-field col s12">
							<select name="service" id="pricing-service">
								<option value="" selected disabled>Select a service</option>
								<option value="Accounting Services">Accounting services</option>
								<option value="Bookkeeping Services">Bookkeeping services</option>
								<option value="QuickBooks Consultation">QuickBooks consultation</option>
								<option value="QuickBooks Bookkeeping">QuickBooks bookkeeping</option>
							</select>
							<label for="pricing-service">Service</label>
						</div>

						<div class="input-field col s12">
							<textarea name="query" id="pricing-query" class="materialize-textarea"></textarea>
							<label for="pricing-query">Your query</label>
						</div>

						<div class="input-field col s12">
							<button class="btn-large full-width yellow darken-2" style="font-size: 1.25rem">Submit Query</button>
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
		"Accuracy You Can Trust",
		"Cost-Effective",
		"Time-Saving",
		"Stress-Free Compliance",
		"Expert Support",
		"Scalable Solutions",
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
			"title" => "Step 1: Free Consultation",
			"description" => "We start with a conversation to understand your business structure, goals, and current bookkeeping system."
		],
		[
			"title" => "Step 2: System Setup",
			"description" => "If you're new to bookkeeping or moving from another system, we'll set up your QuickBooks account, chart of accounts, and workflows."
		],
		[
			"title" => "Step 3: Data Collection",
			"description" => "You share your financial records — bank statements, receipts, invoices — securely through our client portal."
		],
		[
			"title" => "Step 4: Monthly Bookkeeping",
			"description" => "We handle all transaction recording, reconciliation, and reporting — keeping your books clean and updated."
		],
		[
			"title" => "Step 5: Review & Reporting",
			"description" => "We deliver detailed monthly or quarterly financial statements and highlight key insights for better financial control."
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
							<p class="font-semibold">Have a query? Write to us</p>
							@csrf
						</div>

						<div class="input-field col s12">
							<input type="text" name="name" id="bookkeeping-industries-name" class="capitalize">
							<label for="bookkeeping-industries-name">First & last name</label>
						</div>

						<div class="input-field col s12">
							<input type="email" name="email" id="bookkeeping-industries-email" class="lowercase">
							<label for="bookkeeping-industries-email">Email address</label>
						</div>

						<div class="input-field col s12">
							<input type="text" name="phone" id="bookkeeping-industries-phone">
							<label for="bookkeeping-industries-phone">Phone number</label>
						</div>

						<div class="input-field col s12">
							<select name="service" id="bookkeeping-industries-service">
								<option value="" selected disabled>Select a service</option>
								<option value="Accounting Services">Accounting services</option>
								<option value="Bookkeeping Services">Bookkeeping services</option>
								<option value="QuickBooks Consultation">QuickBooks consultation</option>
								<option value="QuickBooks Bookkeeping">QuickBooks bookkeeping</option>
							</select>
							<label for="bookkeeping-industries-service">Service</label>
						</div>

						<div class="input-field col s12">
							<textarea name="query" id="bookkeeping-industries-query" class="materialize-textarea"></textarea>
							<label for="bookkeeping-industries-query">Your query</label>
						</div>

						<div class="input-field col s12">
							<button class="btn-large full-width yellow darken-2" style="font-size: 1.25rem">Submit Query</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Industries we serve (end) -->

@endsection