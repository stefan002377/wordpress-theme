<?php 
/**
 * 
 * @package Wysdom 
 */
?>
<footer class="footer-2 bg-dark pt96 pt-xs-40">
	<div class="container">
		<div class="row mb64 mb-xs-24">
			<div class="col-sm-12">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<?php if ( get_theme_mod('pwt_image_header') ) { ?>
						<div class="vnu"><img alt="logo" class="image-xxs" src="<?php echo esc_url(get_theme_mod('pwt_image_header')); ?>"></div>
					<?php } ?>	
				</a> 					
			</div>
		</div>
		<div class="row mb64 mb-xs-24">
			<div class="col-md-3 col-sm-4">
				<?php wp_nav_menu( array('container'=> '', 'theme_location' => 'footer-menu-1', 'items_wrap'  => '<ul>%3$s</ul>', 'link_before' => '<h5 class="uppercase mb16 fade-on-hover">', 'link_after'  => '</h5>'  ) ); ?>
			</div>
			<div class="col-md-3 col-sm-4">
				<?php wp_nav_menu( array('container'=> '', 'theme_location' => 'footer-menu-2', 'items_wrap'  => '<ul>%3$s</ul>', 'link_before' => '<h5 class="uppercase mb16 fade-on-hover">', 'link_after'  => '</h5>'  ) ); ?>
			</div>
			<div class="col-md-4 col-md-offset-2 col-sm-4">
				<p class="lead"><?php echo get_theme_mod('title_follow'); ?></p>  
				<ul class="list-inline social-list">
					<li><a href="<?php echo esc_url(get_theme_mod('social_twitter')); ?>"><i class="ti-twitter-alt"></i></a></li>
					<li><a href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>"><i class="ti-facebook"></i></a></li>
					<li><a href="<?php echo esc_url(get_theme_mod('social_dribbble')); ?>"><i class="ti-dribbble"></i></a></li>
					<li><a href="<?php echo esc_url(get_theme_mod('social_vimeo')); ?>"><i class="ti-vimeo-alt"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="row fade-half">
			<div class="col-sm-12 text-center">
				<span><?php echo get_theme_mod('pwt_copyrights'); ?></span>
			</div>
		</div>
	</div>
</footer>