<?php
/**
 * The template for displaying archive
 *
 *
 * @package Wysdom
 */
get_header(); ?>
<div class="main-container">
	<?php get_template_part( 'content', 'posts' ); ?>
	<?php get_template_part( 'content', 'footer-press' ); ?>
</div>
<?php get_footer(); ?>