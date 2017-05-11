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
					<div class="col-md-9 col-md-push-3 mb-xs-24">
						<div class="post-snippet mb64">
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>	
								<div class="mb24"><?php the_post_thumbnail($post->ID, 'featured'); ?></div>		
							<?php endif; ?>
							<div class="post-title">
							<h4 class="inline-block"><?php the_title(); ?></h4>
							</div>
							<ul class="post-meta">
							  <li> <em class="ti-user"></em> <span><?php _e( 'Written by', 'wysdom' ); ?> <?php the_author_posts_link(); ?> </span> </li>
							  <li>
									<i class="ti-tag"></i>
									<span><?php _e( 'Tagged as', 'wysdom' ); ?> <?php the_tags( '', ',', '' ); ?></span>
								</li>
							</ul>
							<hr>
							<?php the_content(); ?>
						</div>
						<hr>
						<?php comments_template(); ?>
					</div>
					 <?php get_sidebar(); ?>
				</div>
			</div>
		</section>
		<?php get_template_part( 'content', 'footer' ); ?>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>