@extends("templates.admin")

@section("content")

<style>
	p.header-font > a {
		color: #212121;
	}

	p.header-font > a:hover {
		text-decoration: underline;
	}
</style>

<section>
	<div class="container">
		{{-- <p class="header-font">Latest Blogs</p>
		<table class="bottomless">
			<tbody>
				@foreach ($posts as $post)
					<tr>
						<td style="padding-left: 0">
							<span class="text-base">{{ $post->title }}</span>
							<br>
							<span class="grey-text text-sm truncate">{{ $post->description }}</span>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table> --}}
		
		<div class="row">
			<div class="col s12">
				<p class="header-font">Latest Blogs</p>
				{{-- <br> --}}
				<table class="bottomless">
					<tbody>
						@foreach ($posts as $post)
							<tr>
								<td style="padding-left: 0">
									<span class="text-base">{{ $post->title }}</span>
									<br>
									<span class="grey-text text-sm truncate">{{ $post->description }}</span>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<div class="col s12 m6 l5" style="margin-top: 5rem">
				<p class="header-font">Users</p>
				<table class="bottomless">
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td style="padding-left: 0">
									<span class="text-base">{{ $user->name }}</span>
									<br>
									<span class="grey-text text-sm truncate">{{ $user->email }}</span>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<div class="col s12 m6 l5 offset-l2" style="margin-top: 5rem">
				<p class="header-font">
					<a href="{{ url("dashboard/popups") }}">Modal Popup</a>
				</p>
				<table class="bottomless">
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td style="padding-left: 0">
									<span class="text-base">{{ $user->name }}</span>
									<br>
									<span class="grey-text text-sm truncate">{{ $user->email }}</span>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

@endsection