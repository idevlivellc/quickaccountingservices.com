@extends('templates.website')

@section("title", "QuickBooks Setup & Consultation Services | Quick Accounting Services")
@section("description", "Independent professionals helping you set up, customize, and optimize your QuickBooks account — compliant, accurate, and fully tailored.")

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
				"url" => url("services/quickbooks-setup-and-consultation"),
				"text" => "QuickBooks Setup & Consultation"
			]
		]
	])
	@slot('title')QuickBooks Setup & Consultation @endslot
	@slot('description')@endslot
@endcomponent

<!-- Introduction Section (start) -->
<section class="center-align" style="padding-bottom: 0">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4 class="header-font underline">Professional Setup and Configuration Support from Quick Accounting Services</h4>
				<p class="grey-text text-darken-2">Managing your books becomes effortless when QuickBooks is properly configured for your business. At Quick Accounting Services, we help small and mid-sized businesses set up QuickBooks the right way — so your accounting is accurate, organized, and ready for growth.</p>
				<div class="info-card">
					<p>
						<span class="font-semibold">Disclaimer</span>
						<br>
						Quick Accounting Services is an independent accounting firm. We are not affiliated with or endorsed by Intuit Inc., the maker of QuickBooks®. QuickBooks and Intuit are registered trademarks of Intuit Inc.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Introduction Section (end) -->

@component('Components.Divider')@endcomponent

<!-- Why Proper QuickBooks Setup Matters Section (start) -->
<section class="center-align" style="padding-top: 0">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4 class="underline header-font" style="margin-bottom: 2rem">Why Proper QuickBooks Setup Matters</h4>
				<p>Incorrect setup often leads to reporting errors, duplicate data, and compliance issues. Whether you're starting fresh or migrating from another software, our professional guidance ensures QuickBooks reflects your true financial position from day one.</p>
			</div>

			<div class="col s12 m6 l3">
				<div class="card-panel z-depth-0" style="border: 2px solid #fbc02d">
					<p>01.</p>
					<p style="min-height: 81px">Your chart of accounts fits your business structure and tax requirements.</p>
				</div>
			</div>
			<div class="col s12 m6 l3">
				<div class="card-panel z-depth-0" style="border: 2px solid #fbc02d">
					<p>02.</p>
					<p style="min-height: 81px">Opening balances and prior data are entered correctly.</p>
				</div>
			</div>
			<div class="col s12 m6 l3">
				<div class="card-panel z-depth-0" style="border: 2px solid #fbc02d">
					<p>03.</p>
					<p style="min-height: 81px">Bank feeds, vendors, and customers are configured without duplication.</p>
				</div>
			</div>
			<div class="col s12 m6 l3">
				<div class="card-panel z-depth-0" style="border: 2px solid #fbc02d">
					<p>04.</p>
					<p style="min-height: 81px">Reports provide meaningful insights for decision-making.</p>
				</div>
			</div>

			<div class="col s12" style="margin-top: 2rem">
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
<!-- Why Proper QuickBooks Setup Matters Section (end) -->

@component('Components.Divider')@endcomponent

<!-- Our Process Section (start) -->
<section class="center-align">
	<div class="container">
		<div class="center-align" style="margin-bottom: 5rem">
			<h4 class="underline header-font">Our QuickBooks Setup & Consultation Services</h4>
			<p>We provide end-to-end setup and advisory support designed around your business type and goals. </p>
		</div>
		
		<nav class="steps-nav">
			<div class="nav-wrapper row" style="margin: 0">
				<div class="col s12">
					<a class="breadcrumb step active" href="#step1">Initial Setup & Configuration</a>
					<a class="breadcrumb step" href="#step2">Data Migration</a>
					<a class="breadcrumb step" href="#step3">Banking & Integrations</a>
					<a class="breadcrumb step" href="#step4">One-on-One Consultation</a>
				</div>
			</div>
		</nav>

		<div class="steps" id="step1" style="margin-top: 2rem">
			<div class="row">
				<div class="col s12" style="margin-bottom: 2rem">
					<h5 class="header-font">Step 1: Initial Setup & Configuration</h5>
				</div>

				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Setting up your QuickBooks Online or Desktop file</span>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Customizing your chart of accounts, classes, and items</span>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Defining income, expense, and asset accounts for clarity</span>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Setting up company information, tax settings, and users</span>
					</div>
				</div>
			</div>
		</div>
		<div class="steps" id="step2">
			<div class="row">
				<div class="col s12" style="margin-bottom: 2rem">
					<h5 class="header-font">Step 2: Data Migration</h5>
				</div>

				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Importing prior accounting data securely</span>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Cleaning and restructuring existing QuickBooks files</span>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Reviewing and verifying opening balances and reconciliation </span>
					</div>
				</div>
			</div>
		</div>
		<div class="steps" id="step3">
			<div class="row">
				<div class="col s12" style="margin-bottom: 2rem">
					<h5 class="header-font">Step 3: Banking & Integrations</h5>
				</div>

				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Secure connection to bank and credit card feeds</span>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Integration with third-party apps and payment systems</span>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Setup for recurring transactions and automation</span>
					</div>
				</div>
			</div>
		</div>
		<div class="steps" id="step4">
			<div class="row">
				<div class="col s12" style="margin-bottom: 2rem">
					<h5 class="header-font">Step 4: One-on-One Consultation</h5>
				</div>

				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Personalized guidance from certified QuickBooks professionals</span>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Best-practice recommendations for efficient bookkeeping</span>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Review of key reports and dashboards</span>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel steps-card flexbox flex-col justify-center">
						<span>Q&A sessions tailored to your workflow </span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our Process Section (end) -->

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
							<input type="text" name="name" id="qbconsultation-industries-name" class="capitalize">
							<label for="qbconsultation-industries-name">First & last name</label>
						</div>

						<div class="input-field col s12">
							<input type="email" name="email" id="qbconsultation-industries-email" class="lowercase">
							<label for="qbconsultation-industries-email">Email address</label>
						</div>

						<div class="input-field col s12">
							<input type="text" name="phone" id="qbconsultation-industries-phone">
							<label for="qbconsultation-industries-phone">Phone number</label>
						</div>

						<div class="input-field col s12">
							<select name="service" id="qbconsultation-industries-service">
								<option value="" selected disabled>Select a service</option>
								<option value="Accounting Services">Accounting services</option>
								<option value="Bookkeeping Services">Bookkeeping services</option>
								<option value="QuickBooks Consultation">QuickBooks consultation</option>
								<option value="QuickBooks Bookkeeping">QuickBooks bookkeeping</option>
							</select>
							<label for="qbconsultation-industries-service">Service</label>
						</div>

						<div class="input-field col s12">
							<textarea name="query" id="qbconsultation-industries-query" class="materialize-textarea"></textarea>
							<label for="qbconsultation-industries-query">Your query</label>
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

<!-- Benefits of choosing us (start) -->
@php
	$benefits = [
		"Accurate financial data from day one",
		"Streamlined workflows and time savings",
		"Reduced accounting errors and reconciliation issues",
		"Personalized QuickBooks guidance and support",
		"Peace of mind knowing your books are correctly configured",
	];
@endphp
<section>
	<div class="container">
		<div class="center-align">
			<div class="row">
				<div class="col s12" style="margin-bottom: 5rem">
					<h4 class="underline header-font">Benefits of Choosing Our Accounting Services</h4>
				</div>

				@foreach ($benefits as $key => $benefit)
					<div class="col s12 m4 l4">
						<div class="card-panel benefit-card-2">
							<h2 class="header-font">0{{ $key + 1 }}.</h2>
							<p style="min-height: 54px">{{ $benefit }}</p>
						</div>
					</div>
				@endforeach

				<div class="col s12" style="margin-top: 2rem">
					<a href="#book-consultation" class="btn-large yellow darken-2 modal-trigger">Book Free Consultation</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Benefits of choosing us (end) -->

<!-- Our process (start) -->
@php
	$steps = [
		"Initial consultation to understand your business",
		"QuickBooks file setup or review",
		"Chart of accounts and settings customization",
		"Training and handover session",
		"Ongoing support as needed",
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
				@foreach ($steps as $key => $step)	
					<div class="card-panel process-card">
						<p>Step {{ $key + 1 }}</p>
						<p class="grey-text text-darken-2 text-base">{{ $step }}</p>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<!-- Our process (end) -->

@endsection

@section("script")
<script>
	document.addEventListener('DOMContentLoaded', function() {
		document.querySelectorAll(".step").forEach((item) => {
			if (item.classList.contains("active")) {
				const id = item.getAttribute("href")
				document.querySelector(id).classList.add("active")
			}
		})
	})

	document.addEventListener("click", (e) => {
		const steps = e.target.closest(".step")
		if (steps) {
			e.preventDefault()
			document.querySelectorAll(".step").forEach((item) => {
				item.classList.remove("active")
			})
			steps.classList.add("active")

			document.querySelectorAll(".steps").forEach((item) => {
				item.classList.remove("active")
			})
			const id = steps.getAttribute("href")
			document.querySelector(id).classList.add("active")
		}
	})
</script>
@endsection