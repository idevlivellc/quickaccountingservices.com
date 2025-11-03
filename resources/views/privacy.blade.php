@extends('templates.website')

@section("title", "Privacy Policy | Quick Accounting Services")
@section("description", "Learn how Quick Accounting Services collects, uses, and protects your personal information responsibly.")

@section('content')

@component('Components.PageHeader', [
		"breadcrumb" => [
			[
				"url" => url(""),
				"text" => "Home"
			],
			[
				"url" => url("privacy-policy"),
				"text" => "Privacy Policy"
			]
		]
	])
	@slot('title')Privacy Policy @endslot
	@slot('description')@endslot
@endcomponent

<section>
	<div class="container">
		
	</div>
</section>

@endsection