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
		{{-- <nav class="blog-nav" style="margin-bottom: 5rem">
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
			</div>
		</nav> --}}

		<form action="{{ url("dashboard/post/edit/$post->id") }}" method="POST" autocomplete="off">
			@csrf
			@method("PATCH")
			<div class="row">
				<div class="input-field col s12 m6 offset-m3" style="min-height: 40px">
					@if (session("status"))
						<div class="success-card">
							<i class="material-symbols-rounded">check_circle</i>
							<span>{{ session("status") }}</span>
						</div>
					@endif
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<input type="text" name="topic" id="topic" value="{{ $post->topic }}">
					<label for="topic">Topic</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<input type="text" name="keywords" id="keywords" value="{{ $post->keywords }}">
					<label for="keywords">Keywords</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<input type="text" name="title" id="title" value="{{ $post->title }}">
					<label for="title">Title</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<input type="text" name="description" id="description" value="{{ $post->description }}">
					<label for="description">Description</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<select name="category" id="category">
						<option value="" disabled>Select a category</option>
						<option value="accounting" {{ $post->category == 'accounting' ? 'selected' : '' }}>Accounting Services</option>
						<option value="bookkeeping" {{ $post->category == 'bookkeeping' ? 'selected' : '' }}>Bookkeeping Services</option>
						<option value="qb-consultation" {{ $post->category == 'qb-consultation' ? 'selected' : '' }}>QB Consultation & Setup</option>
						<option value="qb-bookkeeping" {{ $post->category == 'qb-bookkeeping' ? 'selected' : '' }}>QB Bookkeeping</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<textarea class="materialize-textarea" name="content" id="content" style="max-height: 104px">{!! $post->content !!}</textarea>
					<label for="content">Content</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<button class="btn-large yellow darken-2 full-width" name="submit-btn">Update post</button>
				</div>
			</div>
		</form>

	</div>
</section>
@endsection

@section("script")
<script>
	
</script>
@endsection