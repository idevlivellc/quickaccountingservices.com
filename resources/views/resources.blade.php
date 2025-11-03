@extends('templates.website')

@section("title", "Resources & Guides for Small Businesses | Quick Accounting Services")
@section("description", "Access bookkeeping guides, FAQs, and expert tips to simplify your accounting and QuickBooks experience.")

@section('content')

@component('Components.PageHeader', [
		"breadcrumb" => [
			[
				"url" => url(""),
				"text" => "Home"
			],
			[
				"url" => url("resources"),
				"text" => "Resources"
			]
		]
	])
	@slot('title')Resources @endslot
	@slot('description')@endslot
@endcomponent

<section>
	<div class="container">
		
	</div>
</section>

@endsection