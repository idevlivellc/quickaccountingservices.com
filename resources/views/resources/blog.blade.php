@extends('templates.website')

@section("title", "Bookkeeping & Accounting Blog | Quick Accounting Services")
@section("description", "Read expert tips on bookkeeping, accounting, and QuickBooks best practices for small business growth and compliance.")

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
		<div class="row">
			<div class="col s12" style="margin-bottom: 5rem">
				<nav class="blog-nav">
					<div class="nav-wrapper">
						<ul class="left">
							<li>
								<a href="#search-modal" class="btn modal-trigger grey lighten-2" style="margin-left: 0">
									<i class="material-symbols-rounded left" style="height: 36px; line-height: 36px">search</i>
									Search
								</a>
							</li>
							<li>
								<a href="#!" class="btn grey lighten-2">
									<i class="material-symbols-rounded left" style="height: 36px; line-height: 36px">sort</i>
									Sort By
								</a>
							</li>
							<li>
								<a href="#!" class="btn dropdown-trigger grey lighten-2" data-target="categories">
									<i class="material-symbols-rounded right" style="height: 36px; line-height: 36px">arrow_drop_down</i>
									Categories
								</a>
							</li>
						</ul>

						<ul class="right">
							<li>
								@if ($posts->previousPageUrl())
									<a href="{{ $posts->previousPageUrl() }}" class="btn yellow darken-2">Previous</a>
								@else
									<a href="#!" class="btn disabled">Previous</a>
								@endif
							</li>
							<li>
								@if ($posts->nextPageUrl())
									<a href="{{ $posts->nextPageUrl() }}" class="btn yellow darken-2" style="margin-right: 0">Next</a>
								@else
									<a href="#!" class="btn disabled" style="margin-right: 0">Next</a>
								@endif
							</li>
						</ul>
					</div>
				</nav>
			</div>

			<ul class="dropdown-content" id="categories">
				<li><a href="#!">Bookkeeping Services</a></li>
				<li><a href="#!">Accounting Services</a></li>
				<li><a href="#!">QuickBooks Consultation & Setup</a></li>
				<li><a href="#!">QuickBooks Bookkeeping</a></li>
			</ul>

			<div class="modal custom-modal" id="search-modal">
				<form action="#!" method="POST" autocomplete="off" onsubmit="submitBlogForm(event)">
					<div class="modal-header">
						<nav class="modal-nav">
							<div class="nav-wrapper">
								<p class="brand-logo header-font">Search Blogs</p>
							</div>
						</nav>
					</div>

					<div class="modal-content">
						<div class="row">
							<div class="input-field col s12">
								<input type="search" name="search" id="search">
								<label for="search">Search for blogs</label>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<div class="row">
							<div class="input-field col s12">
								<button class="btn-large full-width yellow darken-2">Search</button>
							</div>
						</div>
					</div>
				</form>
			</div>

			@foreach ($posts as $post)
				<div class="col s12 m6 l4">
					<a href="{{ url("resources/blog/$post->url") }}">
						<div class="card blog-card">
							<div class="card-image">
								<img src="{{ asset($post->image) }}" alt="" class="responsive-img">
							</div>
							<div class="card-content">
								<p class="header-font" style="margin-bottom: 1rem; min-height: 81px">{{ $post->topic }}</p>
								<p class="text-base grey-text text-darken-2" style="min-height: 68px">{{ $post->description }}</p>
							</div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
</section>

@endsection

@section('script')
<script>
	// const index = async () => {
	// 	const response = await fetch("http://quickaccountingservices.test/resources/blog")
	// 	const data = await response.json()
	// 	console.log(data)
	// }

	// index();

	const submitBlogForm = (event) => {
		event.preventDefault()
	}
</script>
@endsection