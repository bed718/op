<div class="press-teaser press">
	<?php if(isset($cover)): ?>
		<div class="cover-image"><?php print $cover; ?></div>
	<?php endif; ?>
	<div class="body"><?php print $body; ?></div>
	<?php if(isset($author)): ?>
		<div class="author">- <?php print $author; ?></div>
	<?php endif; ?>
</div>
