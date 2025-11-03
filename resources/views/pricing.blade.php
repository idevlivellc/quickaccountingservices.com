@extends('templates.website')

@section("title", "Bookkeeping & Accounting Service Pricing | Quick Accounting Services")
@section("description", "See our transparent, customizable pricing for bookkeeping, accounting, and QuickBooks-related services. Plans start from $ 200 USD.")

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
			]
		]
	])
	@slot('title')Plans & Pricing @endslot
	@slot('description')@endslot
@endcomponent

<section style="padding-bottom: 0">
	<div class="container">
		<p>At Quick Accounting Services, we believe in transparent, fair, and flexible pricing. Each plan is tailored to your business size, transaction volume, and level of service required - ensuring you only pay for what you truly need.</p>

		<div class="info-card">
			<p><span class="font-medium">Note:</span> Prices below are starting points. Final estimates are provided after a free consultation based on your specific needs and business requirements.</p>
		</div>
	</div>
</section>

@component('Components.Divider')@endcomponent

<section style="padding-top: 0">
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<h4 class="header-font underline">Bookkeeping Services</h4>
				<p>Starting from $ 200.00 USD / per month</p>
				
				<a href="{{ url("pricing/bookkeeping-services") }}" class="btn-large yellow darken-2" style="margin: 2rem 0">Learn more about features & pricing</a>

				<table>
					<tr>
						<td style="padding-left: 0">
							<p>
								Accurate daily, weekly, or monthly transaction recording
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Bank and credit card reconciliation
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Accounts payable and receivable management
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Sales tax tracking and compliance assistance
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Custom financial statements and reports
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Dedicated bookkeeper and periodic review meetings
							</p>
						</td>
					</tr>
				</table>

				<h4 class="header-font underline" style="margin-top: 5rem">Accounting Services</h4>
				<p>Starting from $ 350.00 USD / per month</p>
				
				<a href="{{ url("pricing/accounting-services") }}" class="btn-large yellow darken-2" style="margin: 2rem 0">Learn more about features & pricing</a>

				<table>
					<tr>
						<td style="padding-left: 0">
							<p>
								Comprehensive general ledger management
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Financial reporting and statement preparation
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Period-end closings and reconciliations
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Budgeting and forecasting assistance
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Expense tracking and analysis
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Tax preparation coordination with CPAs
							</p>
						</td>
					</tr>
				</table>

				<h4 class="header-font underline" style="margin-top: 5rem">QuickBooks Setup & Consultation</h4>
				<p>Starting from $ 500.00 USD (One time fees)</p>
				
				<a href="{{ url("pricing/quickbooks-setup-and-consultation") }}" class="btn-large yellow darken-2" style="margin: 2rem 0">Learn more about features & pricing</a>

				<table>
					<tr>
						<td style="padding-left: 0">
							<p>
								New QuickBooks company setup (Online or Desktop)
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Chart of accounts creation and customization
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Integration with banking and third-party applications
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Data import, migration, and file cleanup
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								One-on-one QuickBooks orientation and process training
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Optimization of settings for your business operations
							</p>
						</td>
					</tr>
				</table>


				<h4 class="header-font underline" style="margin-top: 5rem">QuickBooks Bookkeeping</h4>
				<p>Starting from $ 350.00 USD / per month</p>
				
				<a href="{{ url("pricing/quickbooks-bookkeeping") }}" class="btn-large yellow darken-2" style="margin: 2rem 0">Learn more about features & pricing</a>

				<table>
					<tr>
						<td style="padding-left: 0">
							<p>
								Bookkeeping directly managed in QuickBooks Online or Desktop
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Real-time financial updates and reconciliations
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Expense categorization and cash flow management
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Monthly performance reports and insights
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Access to Certified QuickBooks ProAdvisors
							</p>
						</td>
					</tr>
					<tr>
						<td style="padding-left: 0">
							<p>
								Cloud document storage and secure data handling
							</p>
						</td>
					</tr>
				</table>
			</div>

			<div class="col s12 m6 l5 offset-l1" style="position: sticky; top: 96px">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
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

@endsection