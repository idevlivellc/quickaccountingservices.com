@extends("templates.admin")

@section("content")

<section>
	<div class="container">
		<form action="{{ url("dashboard/popups/$resource->id") }}" method="POST" class="row">
			@method("PATCH")
			@csrf
			<div class="col s12">
				<p>Page name</p>
			</div>

			<div class="input-field col s12 m8 l4">
				<input type="text" name="page" id="page" value="{{ $resource->page }}">
				<label for="page">Page name</label>
				<span class="helper-text" data-error=""></span>
			</div>

			<div class="col s12">
				<p>Status</p>
			</div>

			<div class="input-field col s12">
				<div class="switch">
					<label>
						Off
						<input type="checkbox" name="popup" class="custom-teal" checked="{{ $resource->popup == 1 ? true : false }}">
						<span class="lever"></span>
						On
					</label>
				</div>
			</div>

			<div class="input-field col s12 m8 l4" style="margin-top: 5rem">
				<button class="btn-large custom-teal" name="submit-btn" value="submit">Update Page</button>
			</div>
		</form>
	</div>
</section>

@endsection