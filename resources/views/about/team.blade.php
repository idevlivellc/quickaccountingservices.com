@extends('templates.website')

@section("title", "Meet Our Accounting Team | Quick Accounting Services")
@section("description", "Our experienced accountants and bookkeepers bring years of expertise in QuickBooks and financial management to support your business success.")

@section('content')

@component('Components.PageHeader', [
		"breadcrumb" => [
			[
				"url" => url(""),
				"text" => "Home"
			],
			[
				"url" => url("about-us"),
				"text" => "About"
			],
			[
				"url" => url("about/our-team"),
				"text" => "Our Team"
			]
		]
	])
	@slot('title')Our Team.@endslot
	@slot('description')We're a Certified QuickBooks ProAdvisor firm helping small and medium businesses manage their books efficiently with accurate, timely, and transparent accounting support.@endslot
@endcomponent

<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4 class="underline header-font" style="margin-bottom: 2rem">The Leadership</h4>
			</div>

			<div class="row">
				<div class="col s6 m4 l4">
					<div class="card-panel center-align z-depth-0">
						<img src="{{ asset("images/team/christy-parker.jpg") }}" alt="" width="50%" class="circle">
						<h5 class="header-font">Christy K.</h5>
						<p class="header-font text-base" style="margin-top: 0">Sales Head</p>
						<p class="text-base grey-text text-darken-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro odit quisquam, ducimus reiciendis necessitatibus veniam blanditiis quo similique autem eveniet.</p>
					</div>
				</div>

				<div class="col s6 m4 l4">
					<div class="card-panel center-align z-depth-0">
						<img src="{{ asset("images/team/sayan-das.jpg") }}" alt="" width="50%" class="circle">
						<h5 class="header-font">Sayan D.</h5>
						<p class="header-font text-base" style="margin-top: 0">Founder & CEO</p>
						<p class="text-base grey-text text-darken-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro odit quisquam, ducimus reiciendis necessitatibus veniam blanditiis quo similique autem eveniet.</p>
					</div>
				</div>

				<div class="col s6 m4 l4">
					<div class="card-panel center-align z-depth-0">
						<img src="{{ asset("images/team/jason-sharma.jpg") }}" alt="" width="50%" class="circle">
						<h5 class="header-font">Jason S.</h5>
						<p class="header-font text-base" style="margin-top: 0">Tech Head</p>
						<p class="text-base grey-text text-darken-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro odit quisquam, ducimus reiciendis necessitatibus veniam blanditiis quo similique autem eveniet.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4 class="underline header-font" style="margin-bottom: 2rem">The Senior Team</h4>
			</div>

			<div class="row">
				<div class="col s6 m4 l4">
					<div class="card-panel center-align z-depth-0">
						<div class="z-depth-0 grey" style="border-radius: 200px; width: 145px; min-height: 145px; margin-left: calc(50% - 72.5px);"></div>
						<h5 class="header-font">Prakash C.</h5>
						<p class="header-font text-base" style="margin-top: 0">Founder & CEO</p>
						<p class="text-base grey-text text-darken-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro odit quisquam, ducimus reiciendis necessitatibus veniam blanditiis quo similique autem eveniet.</p>
					</div>
				</div>

				<div class="col s6 m4 l4">
					<div class="card-panel center-align z-depth-0">
						<div class="z-depth-0 grey" style="border-radius: 200px; width: 145px; min-height: 145px; margin-left: calc(50% - 72.5px);"></div>
						<h5 class="header-font">Ankita P.</h5>
						<p class="header-font text-base" style="margin-top: 0">Founder & CEO</p>
						<p class="text-base grey-text text-darken-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro odit quisquam, ducimus reiciendis necessitatibus veniam blanditiis quo similique autem eveniet.</p>
					</div>
				</div>

				<div class="col s6 m4 l4">
					<div class="card-panel center-align z-depth-0">
						<div class="z-depth-0 grey" style="border-radius: 200px; width: 145px; min-height: 145px; margin-left: calc(50% - 72.5px);"></div>
						<h5 class="header-font">Rizwan J.</h5>
						<p class="header-font text-base" style="margin-top: 0">Founder & CEO</p>
						<p class="text-base grey-text text-darken-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro odit quisquam, ducimus reiciendis necessitatibus veniam blanditiis quo similique autem eveniet.</p>
					</div>
				</div>

				<div class="col s6 m4 l4">
					<div class="card-panel center-align z-depth-0">
						<div class="z-depth-0 grey" style="border-radius: 200px; width: 145px; min-height: 145px; margin-left: calc(50% - 72.5px);"></div>
						<h5 class="header-font">Sachin G.</h5>
						<p class="header-font text-base" style="margin-top: 0">Founder & CEO</p>
						<p class="text-base grey-text text-darken-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro odit quisquam, ducimus reiciendis necessitatibus veniam blanditiis quo similique autem eveniet.</p>
					</div>
				</div>

				<div class="col s6 m4 l4">
					<div class="card-panel center-align z-depth-0">
						<div class="z-depth-0 grey" style="border-radius: 200px; width: 145px; min-height: 145px; margin-left: calc(50% - 72.5px);"></div>
						<h5 class="header-font">Pritam S.</h5>
						<p class="header-font text-base" style="margin-top: 0">Founder & CEO</p>
						<p class="text-base grey-text text-darken-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro odit quisquam, ducimus reiciendis necessitatibus veniam blanditiis quo similique autem eveniet.</p>
					</div>
				</div>

				<div class="col s6 m4 l4">
					<div class="card-panel center-align z-depth-0">
						<div class="z-depth-0 grey" style="border-radius: 200px; width: 145px; min-height: 145px; margin-left: calc(50% - 72.5px);"></div>
						<h5 class="header-font">Retika S.</h5>
						<p class="header-font text-base" style="margin-top: 0">Founder & CEO</p>
						<p class="text-base grey-text text-darken-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro odit quisquam, ducimus reiciendis necessitatibus veniam blanditiis quo similique autem eveniet.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection