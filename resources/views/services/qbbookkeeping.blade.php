@extends('templates.website')

@section("title", "QuickBooks Bookkeeping Services | Quick Accounting Services")
@section("description", "We provide professional bookkeeping using QuickBooks for efficient financial management — independent, reliable, and customized.")

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
				"url" => url("services/quickbooks-bookkeeping"),
				"text" => "QuickBooks Bookkeeping"
			]
		]
	])
	@slot('title')QuickBooks Bookkeeping @endslot
	@slot('description')@endslot
@endcomponent

<!-- Introduction Section (start) -->
<section class="center-align" style="padding-bottom: 0">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4 class="header-font underline">Independent QuickBooks ProAdvisor Bookkeepers</h4>
				<h1 class="header-font hide-on-small-only">Call {{ env("PHONE") }}</h1>
				<a href="tel:{{ env("PHONE") }}" class="btn-large yellow darken-2 hide-on-med-and-up">{{ env("PHONE") }}</a>
				<p>At {{ env("COMPANY") }}, we specialize in accurate, reliable bookkeeping for small and mid-sized businesses using QuickBooks Online or QuickBooks Desktop. Our firm is a Certified QuickBooks ProAdvisor, meaning we are trained in the software and experienced in customizing it for diverse industries.</p>

				<div class="info-card">
					<p>
						<span class="font-semibold">Disclaimer:</span>
						<br>
						{{ env("COMPANY") }} is an independent accounting firm and Certified QuickBooks ProAdvisor. We are not affiliated with or endorsed by Intuit Inc. QuickBooks and Intuit are registered trademarks of Intuit Inc.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Introduction Section (end) -->

@component('Components.Divider')@endcomponent

<!-- Our Process Section (start) -->
<section style="padding-top: 0">
	<div class="container">
		<div class="row">
			<div class="col s12 center-align" style="margin-bottom: 5rem">
				<h4 class="header-font underline">Our Approach to QuickBooks Bookkeeping</h4>
				<p>We go beyond data entry - our process ensures every transaction, report, and reconciliation reflects the real health of your business.</p>
			</div>

			<div class="col s12 m6 l6">
				<table class="bottomless">
					<tbody>
						<tr>
							<td>
								<p class="font-medium">Step 1: Understanding Your Business</p>
								<p class="text-base grey-text text-darken-2">We begin by reviewing your existing QuickBooks setup (Online or Desktop) and understanding your industry, workflow, and reporting needs.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="font-medium">Step 2: Organized Chart of Accounts</p>
								<p class="text-base grey-text text-darken-2">We refine or create a chart of accounts aligned with your operations — making financial data clean, logical, and audit-ready.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="font-medium">Step 3: Accurate Daily Bookkeeping</p>
								<p class="text-base grey-text text-darken-2">Our team maintains your daily entries, bank feeds, and reconciliations directly in QuickBooks, so you always have up-to-date financials.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="font-medium">Step 4: Monthly Reviews & Reports</p>
								<p class="text-base grey-text text-darken-2">We prepare management reports that summarize key insights — profit & loss, balance sheet, cash flow — to help you make informed decisions.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="font-medium">Step 5: Ongoing Advisory Guidance</p>
								<p class="text-base grey-text text-darken-2">We don't just record numbers; we explain them. You receive tailored recommendations for improving cash flow, controlling expenses, and maximizing efficiency.</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col s12 m6 l5 offset-l1">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
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
							<button class="btn-large full-width yellow darken-2" name="submit-btn">Submit Query</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our Process Section (start) -->

<!-- What's Included Section (start) -->
<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12" style="margin-bottom: 5rem">
				<h4 class="underline header-font">What's Included in Our QuickBooks Bookkeeping Packages</h4>
			</div>

			<div class="col s12 m4 l3">
				<div class="card-panel benefit-card-2">
					<h2 class="header-font">01.</h2>
					<p>Setup & configuration review of your existing QuickBooks file</p>
				</div>
			</div>

			<div class="col s12 m4 l3">
				<div class="card-panel benefit-card-2">
					<h2 class="header-font">02.</h2>
					<p>Daily, weekly, or monthly transaction entries</p>
				</div>
			</div>

			<div class="col s12 m4 l3">
				<div class="card-panel benefit-card-2">
					<h2 class="header-font">03.</h2>
					<p>Bank and credit card reconciliation</p>
				</div>
			</div>

			<div class="col s12 m4 l3">
				<div class="card-panel benefit-card-2">
					<h2 class="header-font">04.</h2>
					<p>Accounts receivable & payable management</p>
				</div>
			</div>

			<div class="col s12 m4 l3">
				<div class="card-panel benefit-card-2">
					<h2 class="header-font">05.</h2>
					<p>Sales tax tracking and filing assistance</p>
				</div>
			</div>

			<div class="col s12 m4 l3">
				<div class="card-panel benefit-card-2">
					<h2 class="header-font">06.</h2>
					<p>Financial statements & custom reports</p>
				</div>
			</div>

			<div class="col s12 m4 l3">
				<div class="card-panel benefit-card-2">
					<h2 class="header-font">07.</h2>
					<p>Period-end closing and data backups</p>
				</div>
			</div>

			<div class="col s12 m4 l3">
				<div class="card-panel benefit-card-2">
					<h2 class="header-font">08.</h2>
					<p>Secure data sharing & cloud document storage</p>
				</div>
			</div>
			<div class="col s12" style="margin-top: 2rem">
				<div class="card-panel z-depth-0 yellow darken-2">
					{{-- <h4>Reach out to us for a free consultation.</h4> --}}
					<p>Our bookkeeping services are tailored around QuickBooks Online and Desktop platforms to fit your business needs and growth stage.</p>
					<a href="tel:{{ env("PHONE") }}">
						<h1 class="grey-text text-darken-4">{{ env("PHONE") }}</h1>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

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
							<input type="text" name="name" id="qbbookkeeping-industries-name" class="capitalize">
							<label for="qbbookkeeping-industries-name">First & last name</label>
						</div>

						<div class="input-field col s12">
							<input type="email" name="email" id="qbbookkeeping-industries-email" class="lowercase">
							<label for="qbbookkeeping-industries-email">Email address</label>
						</div>

						<div class="input-field col s12">
							<input type="text" name="phone" id="qbbookkeeping-industries-phone">
							<label for="qbbookkeeping-industries-phone">Phone number</label>
						</div>

						<div class="input-field col s12">
							<select name="service" id="qbbookkeeping-industries-service">
								<option value="" selected disabled>Select a service</option>
								<option value="Accounting Services">Accounting services</option>
								<option value="Bookkeeping Services">Bookkeeping services</option>
								<option value="QuickBooks Consultation">QuickBooks consultation</option>
								<option value="QuickBooks Bookkeeping">QuickBooks bookkeeping</option>
							</select>
							<label for="qbbookkeeping-industries-service">Service</label>
						</div>

						<div class="input-field col s12">
							<textarea name="query" id="qbbookkeeping-industries-query" class="materialize-textarea"></textarea>
							<label for="qbbookkeeping-industries-query">Your query</label>
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

<!-- How It Works Section (start) -->
<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h3 class="underline header-font">How It Works</h3>
			</div>

			<div class="col s12 m4">
				<div class="card-panel steps-card flexbox flex-col justify-center">
					<p>
						<span class="font-medium">Schedule a Consultation</span>
						<br>
						<span class="text-base grey-text text-darken-2">Talk to our ProAdvisor team to discuss your bookkeeping goals.</span>
					</p>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card-panel steps-card flexbox flex-col justify-center">
					<p>
						<span class="font-medium">Get Your Plan</span>
						<br>
						<span class="text-base grey-text text-darken-2">We'll design a custom QuickBooks bookkeeping package - monthly or quarterly.</span>
					</p>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card-panel steps-card flexbox flex-col justify-center">
					<p>
						<span class="font-medium">Start Bookkeeping</span>
						<br>
						<span class="text-base grey-text text-darken-2">We'll organize your accounts, connect your bank feeds, and begin maintaining your books accurately.</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection