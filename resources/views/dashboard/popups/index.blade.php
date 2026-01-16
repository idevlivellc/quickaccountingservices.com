@extends("templates.admin")

@section("content")

<section>
	<div class="container">
		<nav class="blog-nav" style="margin-bottom: 5rem">
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo" style="pointer-events: none; color: #212121;">Modal Popups</a>
				
				{{-- <ul class="left">
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
				</ul> --}}

				<ul class="right">
					<li>
						<a href="#!" class="btn yellow darken-2" style="margin-right: 0">Create Popup</a>
					</li>
					{{-- <li>
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
					</li> --}}
				</ul>
			</div>
		</nav>
	</div>
</section>

@endsection