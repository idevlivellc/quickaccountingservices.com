<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Admin Panel | {{ env("WEBSITE") }}</title>

	<!-- Favicon -->
	<link rel="icon" id="favicon" href="{{ asset('images/logo/website-circle-64.ico') }}" type="image/x-icon">

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="{{ asset("app.css") }}">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

	<nav class="main-nav" style="position: sticky; top: 0">
		<div class="nav-wrapper container">
			<a href="{{ url("") }}" class="brand-logo left">{{ env("COMPANY") }}</a>

			<ul class="right hide-on-med-and-down">
				<li><a href="{{ url("dashboard/post") }}" class="btn" style="margin-left: 0">All posts</a></li>
				<li><a href="{{ url("dashboard/post/create") }}" class="btn" style="margin-left: 0">Create post</a></li>
				@if (Auth::user()->role == "admin")
					<li><a href="#add-user" class="btn modal-trigger" style="margin-left: 0">Add user</a></li>
				@endif
				<li>
					<form action="{{ url("dashboard/logout") }}" method="POST" style="line-height: 62px">
						@csrf;
						<button class="btn grey lighten-2">
							<i class="material-symbols-rounded left" style="height: 36px; line-height: 36px">logout</i>
							Logout
						</button>
					</form>
				</li>
			</ul>
		</div>
	</nav>

	{{-- <div class="modal custom-modal" id="create-blog">
		<form action="{{ url("dashboard/posts") }}" method="POST" autocomplete="off" data-id="create-blog" onsubmit="submitPostForm(event)">
			<nav class="modal-nav">
				<a href="#!" class="brand-logo header-font">Get Free Consultation</a>
			</nav>

			<div class="modal-content">
				<div class="row">
					@csrf
					<div class="input-field col s12">
						<input type="text" name="topic" id="topic">
						<label for="topic">Topic</label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="title" id="title">
						<label for="title">Title</label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="description" id="description">
						<label for="description">Description</label>
					</div>
					<div class="input-field col s12">
						<select name="category" id="category">
							<option value="" disabled selected>Select a category</option>
							<option value="accounting">Accounting Services</option>
							<option value="bookkeeping">Bookkeeping Services</option>
							<option value="qb-consultation">QB Consultation & Setup</option>
							<option value="qb-bookkeeping">QB Bookkeeping</option>
						</select>
					</div>

					<div class="input-field col s12">
						<textarea class="materialize-textarea" name="content" id="content" style="max-height: 104px"></textarea>
						<label for="content">Content</label>
					</div>

					<div class="input-field col s12">
						<input type="text" name="keywords" id="keywords">
						<label for="keywords">Keywords</label>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<div class="row">
					<div class="input-field col s12">
						<button class="btn-large full-width yellow darken-2" name="submit-btn">Submit Query</button>
					</div>
				</div>
			</div>
		</form>
	</div> --}}
	
	<div class="modal custom-modal" id="add-user">
		<form action="{{ url("dashboard/register") }}" method="POST" autocomplete="off" data-id="add-user" onsubmit="submitPostForm(event)">
			<nav class="modal-nav">
				<a href="#!" class="brand-logo header-font">Add new user</a>
			</nav>

			<div class="modal-content">
				<div class="row">
					@csrf
					<div class="input-field col s12" style="min-height: 40px">
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

					<div class="input-field col s12">
						<input type="text" name="name" id="dashboard-newuser-name" class="capitalize">
						<label for="dashboard-newuser-name">First & last name</label>
					</div>
					
					<div class="input-field col s12">
						<input type="email" name="email" id="dashboard-newuser-email" class="lowercase">
						<label for="dashboard-newuser-email">Email address</label>
					</div>
					
					<div class="input-field col s12">
						<input type="password" name="password" id="dashboard-newuser-password">
						<label for="dashboard-newuser-password">Password</label>
					</div>

					<div class="input-field col s12">
						<input type="password" name="password_confirmation" id="dashboard-newuser-password-confirmation">
						<label for="dashboard-newuser-password-confirmation">Password confirmation</label>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<div class="row">
					<div class="input-field col s12">
						<button class="btn-large full-width yellow darken-2" name="submit-btn">Add user</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	@yield('content')

	
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		M.AutoInit();

		const submitPostForm = async (event) => {
			event.preventDefault();

			const form = event.target
			const id = form.dataset.id
			
			try {
				const response = await fetch(form.action, {
					method: form.method,
					body: new FormData(form),
					headers: {
						Accept: "application/json",
					}
				})

				const data = await response.json()

				if (!response.ok) {
					throw data
				}

				M.toast({html: data.message})
				const instance = M.Modal.getInstance(document.getElementById(id))
				instance.close()
			} catch (error) {
				M.toast({
					html: error.message,
					classes: "red"
				})

				for (const key in error.errors) {
					if (error.errors.hasOwnProperty(key)) {
						form[key].classList.add("invalid");
					}
				}
			}
		}
	</script>
	@yield('script')
</body>
</html>