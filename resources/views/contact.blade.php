@extends('templates.website')

@section("title", "Contact Quick Accounting Services | Get a Free Consultation")
@section("description", "Have questions about bookkeeping or accounting? Contact Quick Accounting Services for a consultation or quote today.")

@section('content')

@component('Components.PageHeader', [
		"breadcrumb" => [
			[
				"url" => url(""),
				"text" => "Home"
			],
			[
				"url" => url("contact-us"),
				"text" => "Contact Us"
			]
		]
	])
	@slot('title')Contact Us @endslot
	@slot('description')Got any questions about any service? We're here to help.@endslot
@endcomponent

<style>
	p.contact-us-wrapper > a {
		position: relative;
		padding-left: 40px;
	}

	p.contact-us-wrapper > a > img {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		left: 0;
	}

	p.contact-us-wrapper > a:hover {
		text-decoration: underline;
	}
</style>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l5">
				<div class="card-panel z-depth-0" style="padding-top: 0">
					<form action="{{ url("contact-us") }}" method="POST" class="row" onsubmit="submitQueryForm(event)">
						@csrf
						<div class="input-field col s12">
							<input type="text" name="name" id="contactus-name" class="capitalize">
							<label for="contactus-name">First & last name</label>
						</div>

						<div class="input-field col s12">
							<input type="email" name="email" id="contactus-email" class="lowercase">
							<label for="contactus-email">Email address</label>
						</div>

						<div class="input-field col s12">
							<input type="text" name="contactus-phone" id="phone">
							<label for="contactus-phone">Phone number</label>
						</div>

						<div class="input-field col s12">
							<select name="service" id="contactus-service">
								<option value="" selected disabled>Select a service</option>
								<option value="Accounting Services">Accounting services</option>
								<option value="Bookkeeping Services">Bookkeeping services</option>
								<option value="QuickBooks Consultation">QuickBooks consultation</option>
								<option value="QuickBooks Bookkeeping">QuickBooks bookkeeping</option>
							</select>
							<label for="contactus-service">Service</label>
						</div>

						<div class="input-field col s12">
							<textarea name="query" id="contactus-query" class="materialize-textarea"></textarea>
							<label for="contactus-query">Your query</label>
						</div>

						<div class="input-field col s12" style="min-height: 40px">
							<div class="error-card hide">
								<i class="material-symbols-rounded">error</i>
								<span></span>
							</div>
						</div>

						<div class="input-field col s12">
							<button class="btn-large full-width yellow darken-2" style="font-size: 1.25rem">Submit Query</button>
						</div>
					</form>
				</div>
			</div>

			<div class="col s12 m6 l5 offset-l2">
				<h5 class="header-font">Chat with us</h5>
				<p class="grey-text text-darken-2">Speak to our friendly team via live chat.</p>
				
				<p class="contact-us-wrapper">
					<a href="#!" class="grey-text text-darken-4">
						<img src="{{ url("images/icons/chat.svg") }}" alt="" width="24">
						Start a live chat
					</a>
				</p>
				
				<p class="contact-us-wrapper">
					<a href="#!" class="grey-text text-darken-4">
						<img src="{{ url("images/icons/email.svg") }}" alt="" width="24">
						Shoot us an email
					</a>
				</p>
				
				{{-- <p>
					<a href="#!" class="grey-text text-darken-4">
						<i class="material-symbols-rounded left">chat</i>
						Start a live chat
					</a>
				</p> --}}

				<h5 class="header-font" style="margin-top: 5rem">Call us</h5>
				<p class="grey-text text-darken-2">Speak to our friendly team via live chat.</p>

				<p class="contact-us-wrapper">
					<a href="#!" class="grey-text text-darken-4">
						<img src="{{ url("images/icons/phone.svg") }}" alt="" width="24">
						{{ env("PHONE") }}
					</a>
				</p>
				
				<h5 class="header-font" style="margin-top: 5rem">Visit us</h5>
				<p class="grey-text text-darken-2">Chat to us in person at our office.</p>

				<p style="position: relative">
					<img src="{{ url("images/icons/location.svg") }}" alt="" width="24" style="position: absolute; top: 50%; transform: translateY(-50%); left: 0; z-index: 99">
					<span style="padding-left: 40px;">{{ env("ADDRESS") }}</span>
				</p>
			</div>
		</div>
	</div>
</section>

@endsection