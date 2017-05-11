<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Wysdom
 */
?>
<div class="col-md-3 col-md-pull-9 hidden-sm">
	<div class="widget bg-secondary p24">
		<h5 class="uppercase mb16"><?php echo get_theme_mod('title_subscribe'); ?></h5>
		<p><?php echo get_theme_mod('content_subscribe'); ?></p>
		<form action="/mail.php" method="post">
			<input type="text" class="mb0" name="email" placeholder="Email Address" />
			<input type="submit" value="Subscribe" />
		</form>
	</div>
	<?php if ( is_active_sidebar('blog-sidebar') ) : ?>
		<?php dynamic_sidebar('blog-sidebar'); ?>		
	<?php endif; ?>
</div>