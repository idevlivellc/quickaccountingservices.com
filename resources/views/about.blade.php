@extends('templates.website')

@section("title", "About Us");

@section('content')

@component('Components.PageHeader', [
		"breadcrumb" => [
			[
				"url" => url(""),
				"text" => "Home"
			],
			[
				"url" => url("about-us"),
				"text" => "About Us"
			]
		]
	])
	@slot('title')About Us @endslot
	@slot('description')At Quick Accounting Services, we help business owners take control of their finances through reliable bookkeeping, professional accounting, and seamless QuickBooks management.@endslot
@endcomponent

<section class="center-align">
	<div class="container">
		<h4 class="underline header-font" style="margin-bottom: 5rem">Empowering Businesses with Accurate Bookkeeping & Trusted Accounting Expertise</h4>

		<p>At Quick Accounting Services, we help business owners take control of their finances through reliable bookkeeping, professional accounting, and seamless QuickBooks management.</p>

		<p>As a Certified QuickBooks ProAdvisor firm, we combine technical expertise with industry experience to deliver accurate, efficient, and personalized financial solutions.</p>

		<p>Whether you need help setting up QuickBooks, managing monthly books, or preparing accurate reports for better decision-making — our team is here to support your success every step of the way.</p>
	</div>
</section>

@component('Components.Divider')@endcomponent

<!-- Our firm section (start) -->
<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<h4 class="underline header-font" style="margin-top: 0">Our Firm</h4>
			</div>

			<div class="col s12 m6 l5 offset-l1">
				<p class="font-medium" style="margin-top: 0">A Trusted Accounting Partner for Modern Businesses</p>
				<p>Founded in 2007, Quick Accounting Services was created with one goal in mind — to make bookkeeping and accounting simple, transparent, and accessible for every business owner.</p>
				<p>We understand that managing financial data can be overwhelming. That's why our firm is built on a foundation of clarity, accuracy, and trust. Our services are tailored to help entrepreneurs and growing businesses maintain clean books, stay compliant, and make informed financial decisions.</p>
				<p>From daily bookkeeping to full-service accounting and QuickBooks setup, our approach is rooted in efficiency, security, and client satisfaction.</p>
				<br>
				<a href="{{ url("about-us/our-firm") }}" class="btn-large yellow darken-1">Learn more about our firm</a>
			</div>
		</div>
	</div>
</section>

<!-- Our firm section (end) -->

@component('Components.Divider')@endcomponent

<!-- Our team section (start) -->

<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12" style="margin-bottom: 5rem">
				<h4 class="underline header-font" style="margin-bottom: 2rem">Experienced Professionals Dedicated to Your Financial Success</h4>
				<p>Our team consists of qualified accountants, certified bookkeepers, and QuickBooks specialists with extensive experience in handling small to mid-sized business finances.</p>
				<p>Every member of our firm is committed to delivering accuracy, professionalism, and personalized care to every client — whether you're just getting started with QuickBooks or managing complex financial workflows.</p>
				We believe in communication, transparency, and accountability. You'll always know where your finances stand and can count on proactive support from our experts.
			</div>

			<div class="col s6 m4">
				<div class="card-panel center-align z-depth-0">
					<img src="{{ asset("images/team/christy-parker.jpg") }}" alt="" width="50%" class="circle">
					<h5 class="header-font">Christy K.</h5>
					<p class="header-font text-base" style="margin-top: 0">Sales Head</p>
				</div>
			</div>

			<div class="col s6 m4">
				<div class="card-panel center-align z-depth-0">
					<img src="{{ asset("images/team/sayan-das.jpg") }}" alt="" width="50%" class="circle">
					<h5 class="header-font">Sayan D.</h5>
					<p class="header-font text-base" style="margin-top: 0">Founder & CEO</p>
				</div>
			</div>

			<div class="col s6 m4">
				<div class="card-panel center-align z-depth-0">
					<img src="{{ asset("images/team/jason-sharma.jpg") }}" alt="" width="50%" class="circle">
					<h5 class="header-font">Jason S.</h5>
					<p class="header-font text-base" style="margin-top: 0">Tech Head</p>
				</div>
			</div>
		</div>

		<div class="col s12">
			<a href="{{ url("about-us/our-team") }}" class="btn-large yellow darken-1">Learn about all the experts</a>
		</div>
	</div>
</section>
<!-- Our firm section (end) -->

@component('Components.Divider')@endcomponent

<!-- Why choose us section (start) -->
<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<h4 class="underline header-font">Why Choose Us</h4>
				<br>
				<p>Your Financial Clarity is Our Commitment</p>
				<p>At Quick Accounting Services, we go beyond traditional bookkeeping. We aim to be your long-term financial partner — helping you streamline your accounting processes, maintain compliance, and gain clarity into your business performance.</p>
			</div>

			<div class="col s12 m6 l5 offset-l1 left-align">
				<ul class="collapsible z-depth-0" style="border: none">
					<li>
						<div class="collapsible-header">
							<p>
								Certified QuickBooks ProAdvisor Expertise
							</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem; color: #616161">
							We are certified professionals trained to optimize QuickBooks for your business's unique needs.
						</div>
					</li>
					<li>
						<div class="collapsible-header">
							<p>
								Transparent & Fixed Pricing
							</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem; color: #616161">
							No hidden fees — just straightforward, predictable monthly plans.
						</div>
					</li>
					<li>
						<div class="collapsible-header">
							<p>
								Personalized Service
							</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem; color: #616161">
							We tailor our bookkeeping and accounting approach to your industry, goals, and workflow.
						</div>
					</li>
					<li>
						<div class="collapsible-header">
							<p>
								Secure Cloud-Based Systems
							</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem; color: #616161">
							Your financial data is always protected through encrypted, cloud-based tools and secure sharing methods.
					</li>
					<li>
						<div class="collapsible-header">
							<p>
								Dedicated Support Team
							</p>
						</div>
						<div class="collapsible-body" style="padding: 1rem; color: #616161">
							Our specialists are always available to answer your questions and keep your books in perfect order.
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- Why choose us section (end) -->
@endsection

