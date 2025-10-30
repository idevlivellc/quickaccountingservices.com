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
				"url" => url("resources"),
				"text" => "Resources"
			],
			[
				"url" => url("resources/blog"),
				"text" => "Blog"
			]
		]
	])
	@slot('title')Our Blog @endslot
	@slot('description')@endslot
@endcomponent

<section>
	<div class="container">
		
	</div>
</section>

@endsection