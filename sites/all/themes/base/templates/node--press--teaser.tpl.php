<div class="teaser press">
	<h2><?php print $title_link; ?></h2>
	<?php if(isset($stars)): ?>
		<div class="stars"><?php print $stars; ?></div>
	<?php endif; ?>
	<div class="body"><?php print $body; ?></div>
	<?php if(isset($author)): ?>
		<div class="author">- <?php print $author; ?></div>
	<?php endif; ?>
</div>
