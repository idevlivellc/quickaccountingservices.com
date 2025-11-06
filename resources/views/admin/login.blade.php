@extends('templates.website')

@section("title", "Admin Login | Quick Accounting Services")

@section('content')
<div class="flexbox justify-center items-center" style="min-height: calc(100dvh - 500px)">
	<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0; max-width: 500px">
		<form action="{{ url("admin/login") }}" method="POST" class="row">
			<div class="input-field col s12">
				<h3 class="header-font">Admin Login</h3>
				@csrf
			</div>
			<div class="input-field col s12">
				<input type="text" id="username" name="username">
				<label for="username">Username</label>
			</div>

			<div class="input-field col s12">
				<input type="password" id="password" name="password">
				<label for="password">Password</label>
			</div>

			<div class="input-field col s12">
				<button class="btn-large yellow darken-2 full-width">Login</button>
			</div>
		</form>
	</div>
</div>
@endsection

@section("script")
<script>
	// const submitForm = async (event) => {
	// 	event.preventDefault()
	// 	const form = event.target

	// 	try {
	// 		const response = await fetch(form.action, {
	// 			method: form.method,
	// 			body: new FormData(form)
	// 		})

	// 		const data = await response.json()

	// 		if (!response.ok) throw data
	// 		console.log(data)
	// 	} catch (error) {
	// 		console.log(error)
	// 	}
	// }
</script>
@endsection