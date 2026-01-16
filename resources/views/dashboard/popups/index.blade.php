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
				</ul>
			</div>
		</nav>
	</div>

	<div class="container">
		<table class="bottomless no-inline-padding">
			<thead>
				<tr>
					<th style="font-size: 1rem; color: #9e9e9e; font-weight: 500">Page name</th>
					<th class="center-align" style="font-size: 1rem; color: #9e9e9e; font-weight: 500">Popup</th>
					<th class="right-align" style="font-size: 1rem; color: #9e9e9e; font-weight: 500"></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($popups as $popup)
					<tr>
						<td>{{ $popup->page }}</td>
						<td class="center-align">
							@if ($popup->popup)
								<span class="badge on">On</span>
							@else
								<span class="badge off">Off</span>
							@endif
						</td>
						<td class="right-align">
							<a href="{{ url("dashboard/popups/$popup->id/edit") }}" class="btn yellow darken-2">
								<i class="material-symbols-rounded">edit_note</i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</section>

@endsection