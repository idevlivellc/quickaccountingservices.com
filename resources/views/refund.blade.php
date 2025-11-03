@extends('templates.website')

@section("title", "Refund Policy | Quick Accounting Services")
@section("description", "Understand our refund and cancellation policy for bookkeeping and accounting services. Transparent and fair.")

@section('content')

@component('Components.PageHeader', [
		"breadcrumb" => [
			[
				"url" => url(""),
				"text" => "Home"
			],
			[
				"url" => url("refund-policy"),
				"text" => "Refund Policy"
			]
		]
	])
	@slot('title')Refund Policy @endslot
	@slot('description')@endslot
@endcomponent

<section>
	<div class="container">
		
	</div>
</section>

@endsection