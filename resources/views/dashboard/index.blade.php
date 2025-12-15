@extends('templates.admin')

@section('content')
<style>
	table > thead > tr > th {
		font-family: var(--header-font);
		font-weight: 500;
		color: #616161;
		font-size: 0.8rem;
	}
</style>


<section>
	<div class="container">
		<nav class="blog-nav" style="margin-bottom: 5rem">
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

		<ul class="dropdown-content" id="categories">
			<li><a href="#!">Bookkeeping Services</a></li>
			<li><a href="#!">Accounting Services</a></li>
			<li><a href="#!">QuickBooks Consultation & Setup</a></li>
			<li><a href="#!">QuickBooks Bookkeeping</a></li>
		</ul>

		@if (session("delete-status"))
			<div class="success-card">
				<i class="material-symbols-rounded" style="font-size: 18px">check_circle</i>
				<span>{{ session("message") }}</span>
			</div>
		@endif

		@if (count($posts) == 0)
			<p>No posts found.</p>
		@else
			<table>
				<thead>
					<tr>
						<th>Blog Title</th>
						<th class="center-align">Category</th>
						<th class="center-align">Date Added</th>
						<th class="right-align"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<td>
								<span class="text-base">{{ $post->title }}</span>
								<br>
								<span class="grey-text text-sm">{{ $post->description }}</span>
							</td>
							<td class="center-align">
								<span class="text-base">{{ ucwords(str_replace("-", " ", $post->category)) }}</span>
							</td>
							<td class="center-align">
								<span class="text-base">{{ date("j M", strtotime($post->created_at)) }}</span>
								<br>
								<span class="text-base">{{ date("Y", strtotime($post->created_at)) }}</span>
							</td>
							<td class="right-align flexbox" style="justify-content: flex-end; align-items: center; gap: 8px">
								<a href="{{ url("dashboard/post/$post->id/edit") }}" class="btn yellow darken-2">
									<i class="material-symbols-rounded">edit_note</i>
								</a>
								<form action="{{ url("dashboard/post/$post->id") }}" method="POST">
									@csrf
									@method("DELETE")
									<button class="btn red">
										<i class="material-symbols-rounded white-text">delete</i>
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endif
	</div>
</section>
@endsection

@section("script")
<script>
	// const handleEditPost = async (event) => {
	// 	event.preventDefault();
	// 	const element = event.target.closest("a");
	// 	// console.log(element.href)
	// 	try {
	// 		const response = await fetch(element.href);

	// 		const data = await response.json()

	// 		if (!response.ok) {
	// 			throw data;
	// 		}

	// 		console.log(data)
	// 	} catch (error) {
	// 		console.log(error)
	// 	}

	// }
</script>
@endsection