<div id="bg-image" ></div>

<div id="header">
	<div class="inner">
		<div class="tri-down"><img src="/<?php echo path_to_theme(); ?>/images/O+P-tri-down.png" alt=""></div>
		<div id="logo"><div class="inner"><a href="/"><img src="/<?php echo path_to_theme(); ?>/images/O+P-logo.svg" alt=""></a></div></div>
	</div>
</div>

<header id="header-nav">
	<div class="inner">		
		<nav id="nav-main">
				<?php  render($page['nav_main']); ?>
				<ul class="menu">
					<li class="first"><a href="#about" data-scroll-nav="0" >About O+P</a></li>
					<li><a href="" data-scroll-nav="1" >Menu</a></li>
					<li><a href="" data-scroll-nav="2" >Press</a></li>
					<li><a href="" data-scroll-nav="3" >Info</a></li>
					<li><a href="" >Reservations</a></li>
				</ul>
				<div class="social-icons">
					<a href="http://twitter.com/" class="icon-twitter" target="_blank"></a>
					<a href="http://instagram.com/" class="icon-instagram" target="_blank"></a>
					<a href="http://pinterest" class="icon-pinterest" target="_blank"></a>
				</div> <!-- END .social-icons -->
		</nav> <!-- END #nav -->

		<div class="menu-toggle icon-list"></div>
	</div>
</header> <!-- END header -->



<div id="content-main">
	<div id="header-info">
	<div class="inner">
		<ul>
			<li class="first">(323) 939-1033</li>
			<li><a href="mailto:info@odysandpenelope.com" class="email">info@odysandpenelope.com</a></li>
			<li>127 S La Brea Ave. <a href="">Directions</a> </li>
		</ul>
	</div>
</div>
	<div class="inner">
		<?php if(isset($messages)): ?>
			<div id="messages"><?php echo $messages; ?></div>
		<?php endif; ?>

		<?php if(isset($tabs)): ?>
			<div id="tabs"><?php echo render($tabs); ?></div>
		<?php endif; ?>

		<?php if(isset($title)): ?>
			<h1 id="page-title"><?php echo $title; ?></h1>
		<?php endif; ?>

		<div id="content">
			<?php print render($page['content']); ?>
		</div>
	</div>
</div> <!-- END #content-main -->

<footer id="footer-main" >
	<div class="inner">
		<div class="footer-left"><?php print render($page['footer_left']); ?></div>
		<div class="footer-main"><?php print render($page['footer_main']); ?></div>
		<div class="footer-right"><?php print render($page['footer_right']); ?></div>		
	</div>

	<div class="copy">
		&copy; <?php echo date('Y'); ?> Odys + Penelope. Don't Steal. It's not nice.
	</div>
</footer>
