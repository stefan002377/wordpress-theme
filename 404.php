<?php
/**
 * The template for displaying page NOT FOUND.
 *
 * @package Wysdom
 */
get_header(); ?>
<div class="main-container">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-push-0 mb-xs-24">
					<div class="post-snippet mb64">
						<div class="post-title">
							<h4 class="inline-block"><?php _e( 'Not found', 'wysdom' ); ?></h4>
						</div>
						<hr>
						<p><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'wysdom' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part( 'content', 'footer-press' ); ?>
</div>
<?php get_footer(); ?>


