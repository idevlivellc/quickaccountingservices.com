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

@section("title", "Bookkeeping & Accounting Blog")
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
	@slot('title'){{ $post->title }} @endslot
	@slot('description')@endslot
@endcomponent

<style>
	.header-content h1 {
		font-size: 4.2rem;
	}

	h1 {
		font-size: 1.64rem;
		line-height: 110%;
		margin: 1.0933333333rem 0 .656rem 0;
	}

	h1.phone-number {
		font-size: 4.2rem;
		color: white;
		font-family: var(--header-font);
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

	@media screen and (max-width: 1440px) {
		h1.phone-number {
			font-size: 3.2rem !important;
		}
	}

	@media screen and (min-width: 1440px) and (max-width: 1680px) {
		h1.phone-number {
			font-size: 3.8rem;
		}
	}
</style>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12 white hide-on-med-and-up" style="position: fixed; bottom: 0; left: 0">
				<div class="card-panel z-depth-0" style="margin: 0">
					<a
						href="tel:{{ env("PHONE") }}"
						class="btn-large full-width"
						style="background-color: #2ca01c; color: white !important; font-size: 1.5rem"
					>
						Call Us At {{ env("PHONE") }}
					</a>
				</div>

				{{-- <p style="margin-top: 2rem">Or, want to schedule a callback? <a href="#book-consultation" class="modal-trigger yellow-text text-darken-4">Book free consultation</a>.</p> --}}
			</div>
			<div class="col m6 l5 hide-on-small-only center-align" style="position: sticky; top: 96px">
				@if ($post->category == "qb-bookkeeping" || $post->category == "qb-consultation")
					<img src="{{ asset("images/proadvisor.png") }}" alt="quick accounting services" width="25%">
					<p class="grey-text text-darken-1">{{ env("COMPANY") }} an independent QuickBooks ProAdvisor firm, not affiliated with Intuit. We offer bookkeeping and consulting-not product support.</p>
					<div class="card-panel z-depth-0" style="background-color: #2ca01c">
						<h5 class="header-font white-text">Call us for bookkeeping and QuickBooks consultation services</h5>
						<h1 class="phone-number">{{ env("PHONE") }}</h1>
						<p class="white-text">Talk to our accounting experts today to discover flexible bookkeeping solutions tailored to your small business.</p>
					</div>
				@else
					<div class="card-panel z-depth-0 yellow darken-2">
						<h5 class="header-font">Call us to speak with our bookkeeping and consultation team</h5>
						<h1 class="phone-number" style="color: #212121">{{ env("PHONE") }}</h1>
						<p>Talk to our accounting experts today to discover flexible bookkeeping solutions tailored to your small business.</p>
					</div>
				@endif
			</div>

			<div class="col s12 m6 l6 offset-l1">
				<h1 class="header-font" style="margin-top: 0">{{ $post->topic }}</h1>

				{!! $post->content !!}
			</div>
		</div>
	</div>
</section>

@endsection