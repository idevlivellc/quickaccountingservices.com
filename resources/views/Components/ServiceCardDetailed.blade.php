<div class="card-panel service-card">
	<h5 class="underline header-font">{{ $title }}</h5>
	<p class="font-medium">{{ $subheader }}</p>
	<p class="text-base">{{ $description }}</p>

	<a href="{{ $service }}" class="btn-large full-width yellow darken-2" style="font-size: 1.25rem; margin-top: 1rem">Explore Service</a>
	<a href="{{ $pricing }}" class="btn-large full-width yellow darken-2 hover" style="font-size: 1.25rem; margin-top: 1rem">See pricing</a>

	<table class="bottomless centered">
		<tbody>
			@foreach ($features as $feature)
				<tr>
					<td style="padding-left: 0">
						<p>{{ $feature }}</p>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>