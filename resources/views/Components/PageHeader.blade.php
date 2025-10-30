<header class="page">
	<div class="header-content">
		<div class="container center-align">
			<h1 class="header-font">{{ $title }}</h1>
			<h5>{{ $description }}</h5>
			<nav class="breadcrumb-nav">
				<div class="nav-wrapper">
					<div class="col s12">
						@foreach ($breadcrumb as $item)
							<a href="{{ $item["url"] }}" class="breadcrumb">{{ $item["text"] }}</a>
						@endforeach
					</div>
				</div>
			</nav>
		</div>
	</div>
</header>