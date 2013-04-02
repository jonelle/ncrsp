<?php
/* Template Name: News */

get_header(); ?>
					
	<div class="content-container">
		<div class="inner-content">
			<div class="featured-image"><?php the_post_thumbnail('full'); ?></div><!-- end featured image -->
			<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				}
			?>
			<div class="content">
				<?php 
					// The Query
					$the_query = new WP_Query( 'category_name=news' );

					// The Loop
					while ( $the_query->have_posts() ) :
						$the_query->the_post();

						get_template_part( 'content', get_post_format() );
					endwhile;

					/* Restore original Post Data 
					 * NB: Because we are using new WP_Query we aren't stomping on the 
					 * original $wp_query and it does not need to be reset.
					*/
					wp_reset_postdata();
				?>
			</div><!-- #content -->
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div><!-- end sidebar -->					
		</div><!-- end inner content -->
	</div><!-- end content container -->
<?php get_footer(); ?>