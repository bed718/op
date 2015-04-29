
<div id="wrapper">
	<div id="logo-big"><a href="/"><img src="/sites/all/themes/base/images/Hatfields_logo-large.png" alt="Hatfield's Logo - Large"></a></div>
	
	<div id="header">
		<div id="header-inner">
			<div id="nav"><?php print render($page['nav_main']); ?></div>
			
			<?php print render($page['header']); ?>
		</div>
	</div>
	
	<div id="main-content">
		
		<div id="main">
			<div id="main-inner">
				<div id="content">
					
					<?php if ($title): ?>
			        <h1 class="title">
			          <?php print render($title); ?>
			        </h1>
			      <?php endif; ?>					

					<?php if ($tabs): ?>
			        <div class="tabs">
			          <?php print render($tabs); ?>
			        </div>
			      <?php endif; ?>
					<?php echo render($page['content']); ?>
				</div>
			</div>
		</div>

	</div>

</div>

<div id="footer">
	<div class="inner">
		<div id="logo-med"><a href="/"><img src="/sites/all/themes/base/images/Hatfields_logo-med.png" alt="Hatfield's Logo - Large"></a></div>
		<div id="footer-main">
			<?php echo render($page['footer_main']); ?>
		</div>
		<div id="footer-side">
			<?php echo render($page['footer_side']); ?>
		</div>
	</div>
	<div id="footer-bottom">
		<div id="copy">&copy; <?php echo date('Y'); ?> Hatfield's. Don't steal. It's not nice.</div>
	</div>
</div>
