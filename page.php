<?php
/**
 * The template for displaying all pages.
 *
 * @package Wysdom
 */
 get_header(); ?>
	<div class="main-container">
	  <?php while (have_posts()) : the_post(); ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-push-0 mb-xs-24">
						<div class="post-snippet mb64">
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>	
								<?php the_post_thumbnail($post->ID, 'featured'); ?>		
							<?php endif; ?>
							<div class="post-title">
							<h4 class="inline-block"><?php the_title(); ?></h4>
							</div>
							<hr>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php get_template_part( 'content', 'footer-press' ); ?>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>