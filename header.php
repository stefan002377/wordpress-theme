<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Wysdom
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
</head>
<body>
	<div class="nav-container">
		<nav class="bg-dark">
			<div class="nav-bar">
				<div class="module left">
					<?php if ( get_theme_mod('pwt_logo_upload_light') ) { ?>
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img class="logo logo-light" alt="Foundry" src="<?php echo esc_url(get_theme_mod('pwt_logo_upload_light')); ?>">
						<img class="logo logo-dark" alt="Foundry" src="<?php echo esc_url(get_theme_mod('pwt_logo_upload_dark')); ?>">
					</a>
					<?php } ?>				
				</div>
				<div class="mobile-toggle">
					<div class="bar-1"></div>
					<div class="bar-2"></div>
				</div>
				<div class="module-group right">
					<div class="module left">
						<?php if ( has_nav_menu( 'main-menu' ) ) { ?>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'main-menu', 'items_wrap'  => '<ul class="menu">%3$s</ul>'  ) ); ?>
						<?php } else { ?>
							<?php wp_nav_menu(  array('container'=> '', 'items_wrap'  => '<ul class="menu">%3$s</ul>' ) ); ?>	
						<?php } ?>
					</div>
				</div>
			</div>
		</nav>
	</div>