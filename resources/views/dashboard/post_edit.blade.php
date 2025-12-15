@extends('templates.admin')

@section('content')


<section>
	<div class="container">
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
					<textarea class="materialize-textarea" name="content" id="content" style="max-height: 104px; overflow-y: auto; resize: none;">{!! $post->content !!}</textarea>
					<label for="content">Content</label>
				</div>
			</div>

			@if ($post->cta)
				<div class="row">
					<div class="col s12 m6 offset-m3">
						<p>
							<label>
								<input type="checkbox" id="add-cta" name="add-cta" value="true" checked onchange="toggleCheckbox(event)" />
								<span>Add Call To Action for the post</span>
							</label>
						</p>
					</div>
				</div>

				<div class="row" id="cta-header">
					<div class="input-field col s12 m6 offset-m3">
						<input type="text" name="cta_header" id="cta_header" value="{{ $post->cta["header"] }}" class="@error("cta_header") invalid @enderror">
						<label for="cta_header">CTA Header</label>
					</div>
				</div>
				
				<div class="row" id="cta-body">
					<div class="input-field col s12 m6 offset-m3">
						<input type="text" name="cta_body" id="cta_body" value="{{ $post->cta["body"] }}" class="@error("cta_body") invalid @enderror">
						<label for="cta_body">CTA Body</label>
					</div>
				</div>
			@endif

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