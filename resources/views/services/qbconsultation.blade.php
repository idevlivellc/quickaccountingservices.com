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
				"url" => url("services/quickbooks-setup-and-consultation"),
				"text" => "QuickBooks Setup & Consultation"
			]
		]
	])
	@slot('title')QuickBooks Setup & Consultation @endslot
	@slot('description')@endslot
@endcomponent

<section>
	<div class="container">
		
	</div>
</section>

@endsection