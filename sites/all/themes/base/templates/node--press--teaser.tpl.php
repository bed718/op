<div class="teaser press">
	<?php if(isset($cover)): ?>
		<div class="cover-image"><?php print $cover; ?></div>
	<?php endif; ?>
	<h2><?php print $title; ?></h2>
	<?php if(isset($stars)): ?>
		<div class="stars"><?php print $stars; ?></div>
	<?php endif; ?>
	<div class="body"><?php print $body; ?></div>
	<?php if(isset($author)): ?>
		<div class="author">- <?php print $author; ?></div>
	<?php endif; ?>
</div>
