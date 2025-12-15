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
		<form action="{{ url("dashboard/post") }}" method="POST" autocomplete="off" id="create-post-form">
			@csrf
			<div class="row">
				<div class="input-field col s12 m6 offset-m3" style="min-height: 40px">
					@if (session("status"))
						<div class="success-card">
							<i class="material-symbols-rounded" style="font-size: 18px">check_circle</i>
							<span>{{ session("message") }}</span>
						</div>
					@endif

					@if ($errors->any())
						<div class="error-card">
							<i class="material-symbols-rounded">error</i>
							<span>
								{{ $errors->first() }}
								@if ($errors->count() - 1 > 0)
									(and {{ $errors->count() - 1 }} more error{{ $errors->count() - 1 > 1 ? 's' : '' }})
								@endif
							</span>
						</div>
					@endif
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<input type="text" name="topic" id="topic" class="@error("topic") invalid @enderror">
					<label for="topic">Topic</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<input type="text" name="keywords" id="keywords" class="@error("keywords") invalid @enderror">
					<label for="keywords">Keywords</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<input type="text" name="title" id="title" class="@error("title") invalid @enderror">
					<label for="title">Title</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<input type="text" name="description" id="description" class="@error("description") invalid @enderror">
					<label for="description">Description</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<select name="category" id="category">
						<option value="" disabled>Select a category</option>
						<option value="accounting">Accounting Services</option>
						<option value="bookkeeping">Bookkeeping Services</option>
						<option value="qb-consultation">QB Consultation & Setup</option>
						<option value="qb-bookkeeping">QB Bookkeeping</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<textarea class="materialize-textarea @error("content") invalid @enderror" name="content" id="content" style="max-height: 104px"></textarea>
					<label for="content">Content</label>
				</div>
			</div>

			<div class="row">
				<div class="col s12 m6 offset-m3">
					<p>
						<label>
							<input type="checkbox" id="add-cta" name="add-cta" value="true" onchange="toggleCheckbox(event)" />
							<span>Add Call To Action for the post</span>
						</label>
					</p>
				</div>
			</div>

			<div class="row hide" id="cta-header">
				<div class="input-field col s12 m6 offset-m3">
					<input type="text" name="cta_header" id="cta_header" class="@error("cta_header") invalid @enderror">
					<label for="cta_header">CTA Header</label>
				</div>
			</div>
			
			<div class="row hide" id="cta-body">
				<div class="input-field col s12 m6 offset-m3">
					<input type="text" name="cta_body" id="cta_body" class="@error("cta_body") invalid @enderror">
					<label for="cta_body">CTA Body</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6 offset-m3">
					<button class="btn-large yellow darken-2 full-width" name="submit-btn">Create new post</button>
				</div>
			</div>
		</form>

	</div>
</section>
@endsection

@section("script")
<script>
	const toggleCheckbox = (event) => {
		if (event.target.checked) {
			event.target.value = "true"
			document.getElementById("cta-header").classList.remove("hide")
			document.getElementById("cta-body").classList.remove("hide")
		} else {
			event.target.value = "false"
			document.getElementById("cta-header").classList.add("hide")
			document.getElementById("cta-body").classList.add("hide")
		}
	}
</script>
@endsection