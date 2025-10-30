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
				"url" => url("services/quickbooks-bookkeeping"),
				"text" => "QuickBooks Bookkeeping"
			]
		]
	])
	@slot('title')QuickBooks Bookkeeping @endslot
	@slot('description')@endslot
@endcomponent

<section>
	<div class="container">
		
	</div>
</section>

@endsection