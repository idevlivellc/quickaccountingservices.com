<ul class="collapsible z-depth-0" style="border: none">
	@foreach ($faqs as $faq)
		<li>
			<div class="collapsible-header">
				<p>{{ $faq["question"] }}</p>
			</div>
			<div class="collapsible-body" style="padding: 1rem">
				<p class="grey-text text-darken-2">{{ $faq["answer"] }}</p>
			</div>
		</li>
	@endforeach
</ul>