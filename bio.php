<?php
/* Template Name: Bio */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="content-container">
		<div class="inner-content">
			<div class="featured-image"><?php the_post_thumbnail('full'); ?></div><!-- end featured image -->
			<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				}
			?>
			<div class="content bio">


					<?php get_template_part( 'content', 'page' ); ?>
					<?php comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div><!-- end side bar -->			
		</div><!-- end inner content -->
	</div><!-- end content container -->
<?php get_footer(); ?>