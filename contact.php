<?php
/* Template Name: Contact */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
					
	<div class="content-container">
		<div class="inner-content">
			<div class="featured-image"><?php the_post_thumbnail('full'); ?></div><!-- end featured image -->
			<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				}
			?>			
			<div class="content contact">
					<?php get_template_part( 'content', 'page' ); ?>
					<?php comments_template( '', true ); ?>
					<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->		
		</div><!-- end inner content -->
	</div><!-- end content container -->
<?php get_footer(); ?>