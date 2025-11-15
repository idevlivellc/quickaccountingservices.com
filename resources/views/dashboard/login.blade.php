@extends('templates.website')

@section("title", "Admin Login | Quick Accounting Services")

@section('content')
<section>
	<div class="flexbox justify-center items-center" style="min-height: calc(100dvh - 500px)">
		<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0; max-width: 500px">
			<form action="{{ url("dashboard/login") }}" method="POST" class="row">
				<div class="input-field col s12">
					<h3 class="header-font">Admin Login</h3>
					@csrf
				</div>

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
					<input type="text" id="login-email" name="email" class="@error("email") invalid @enderror" value="{{ old("email") }}">
					<label for="login-email">Email address</label>
				</div>

				<div class="input-field col s12">
					<input type="password" id="login-password" name="password" class="@error("password") invalid @enderror">
					<label for="login-password">Password</label>
				</div>

				<div class="input-field col s12">
					<a href="{{ url("forgot-password") }}" class="btn-large btn-flat full-width">Forgot password</a>
				</div>

				<div class="input-field col s12">
					<button class="btn-large yellow darken-2 full-width">Login</button>
				</div>

				<div class="input-field col s12 center-align">
					<p>&copy; {{ date("Y") }} All Rights Reserved</p>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection