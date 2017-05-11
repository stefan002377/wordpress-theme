<?php 
/**
 * 
 * @package Wysdom 
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<section class="fullscreen image-bg .background-word ">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>	
		<div class="background-image-holder">
			<?php the_post_thumbnail($post->ID, 'featured'); ?>
		</div>		
		<?php endif; ?>
		<div class="container v-align-transform">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="thin mb0"><?php the_title(); ?></h1>
					<p> </p>
					<h6 class="uppercase mb16"><?php the_time( get_option( 'date_format' ) ); ?></h6>
					<p class="lead mb40"></p>
					<a class="btn btn-lg" href="<?php the_permalink() ?>"><?php _e( 'READ THE POST', 'wysdom' ); ?></a>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; ?>
	<section class="page-title page-title-4 bg-secondary">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				  <h3 class="mb0"><?php _e( 'Want more to Read more?', 'wysdom' ); ?></h3>
				</div>
				<div class="text-right col-md-6">
					<ol class="breadcrumb breadcrumb-2">
						<li><?php next_posts_link(__('Previous Posts', 'kasa')) ?></li>
						<li><?php previous_posts_link(__('Next posts', 'kasa')) ?></li>
					</ol>
				</div>
			</div>
		</div>
	</section>