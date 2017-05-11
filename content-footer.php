<?php 
/**
 * 
 * @package Wysdom 
 */
?>
<footer class="footer-1 bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
			    <a href="<?php echo esc_url(home_url('/')); ?>">
					<?php if ( get_theme_mod('pwt_image_header') ) { ?>
						<img alt="Logo" class="logo" src="<?php echo esc_url(get_theme_mod('pwt_image_header')); ?>" />
					<?php } ?>	
                </a>  				
			</div>
			<div class="col-md-3 col-sm-6">
				<?php if ( is_active_sidebar('footer-widget-area-1') ) : ?>
		            <?php dynamic_sidebar('footer-widget-area-1'); ?>		
	            <?php endif; ?>
			</div>
			<div class="col-md-3 col-sm-6">
				<?php if ( is_active_sidebar('footer-widget-area-2') ) : ?>
		            <?php dynamic_sidebar('footer-widget-area-2'); ?>		
	            <?php endif; ?>
				<!--end of widget-->
			</div>
			<div class="col-md-3 col-sm-6">
			    <?php if ( is_active_sidebar('footer-widget-area-3') ) : ?>
		            <?php dynamic_sidebar('footer-widget-area-3'); ?>		
	            <?php endif; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<span class="sub"><?php echo get_theme_mod('pwt_copyrights'); ?></span>
			</div>
			<div class="col-sm-6 text-right">
				<ul class="list-inline social-list">
					<li><a href="<?php echo esc_url(get_theme_mod('social_twitter')); ?>"><i class="ti-twitter-alt"></i></a></li>
					<li><a href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>"><i class="ti-facebook"></i></a></li>
					<li><a href="<?php echo esc_url(get_theme_mod('social_dribbble')); ?>"><i class="ti-dribbble"></i></a></li>
					<li><a href="<?php echo esc_url(get_theme_mod('social_vimeo')); ?>"><i class="ti-vimeo-alt"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--end of container-->
	<a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
</footer>