<?php if ($entry->intendedTemplate()->name() === 'reference-icon'): ?>
<figure class="p-3 mr-3 bg-light rounded">
	<svg style="width: 1rem; height: 1rem;">
		<use xlink:href="#icon-<?=  $entry->slug() ?>" />
	</svg>
</figure>
<?php endif ?>
