@extends('templates.website')

@section("schema")
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "BlogPosting",
  "mainEntityOfPage": {
    "@@type": "WebPage",
    "@@id": "{{ url("blog/" . $post->url) }}"
  },
  "headline": "{{ $post->title }}",
  "description": "{{ $post->description ?? '' }}",
  "image": "{{ asset($post->image ?? 'images/blogs/post1.jpg') }}",
  "author": {
    "@@type": "Organization",
    "name": "Quick Accounting Services",
    "url": url("/")
  },
  "publisher": {
    "@@type": "Organization",
    "name": "Quick Accounting Services",
    "logo": {
      "@@type": "ImageObject",
      "url": "{{ asset("images/logo/website.png") }}"
    }
  },
  "datePublished": "{{ optional($post->created_at)->toDateString() }}",
  "dateModified": "{{ optional($post->updated_at)->toDateString() }}",
  "articleSection": "{{ $post->category->name ?? "Bookkeeping" }}",
  "inLanguage": "en-US",
  "isAccessibleForFree": true
}
</script>
@endsection

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

<style>
	h1 {
		font-size: 1.64rem;
		line-height: 110%;
		margin: 1.0933333333rem 0 .656rem 0;
	}

	h2 {
		font-size: 18px;
		font-family: var(--header-font), sans-serif;
		letter-spacing: 0;
	}

	h3 {
		font-size: 18px;
		font-weight: 400;
		color: #21221;
	}
</style>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l5" style="position: sticky; top: 96px">
				<h5 class="header-font" style="margin-top: 0">Ready to simplify your bookkeeping?</h5>
				<p class="grey-text text-darken-2">Talk to our accounting experts today to discover flexible bookkeeping solutions tailored to your small business.</p>

				<a href="tel:{{ env("PHONE") }}" class="btn-large full-width yellow darken-2" style="margin-top: 2rem">Call Us At {{ env("PHONE") }}</a>

				<p style="margin-top: 2rem">Or, want to schedule a callback? <a href="#book-consultation" class="modal-trigger yellow-text text-darken-4">Book free consultation</a>.</p>
			</div>

			<div class="col s12 m6 l6 offset-l1">
				<h1 class="header-font" style="margin-top: 0">{{ $post->topic }}</h1>

				{!! $post->content !!}
			</div>
		</div>
	</div>
</section>

@endsection