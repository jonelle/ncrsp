<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="content-container">
		<div class="inner-content">
			<div class="featured-image"><?php the_post_thumbnail('full'); ?></div><!-- end featured image -->
			<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				}
			?>
			<div class="content">


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