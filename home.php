<?php
/*
	Template Name: Home
*/
		get_header();
?>
	<div class="middle">
		<div class="middle-inner">
			<div class="top">
				<div class="image-box"><?php shslideshow(); ?>
				</div><!-- end image box -->
				<div class="mission-statement">
					<?php $loop = new WP_Query( array( 'post_type' => 'mission-statements', 'posts_per_page' => 1 ) ); ?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php the_content(); ?>
				<?php endwhile; ?> 
				</div><!-- end mission statement -->
			</div><!-- end top -->
			<div class="bottom">
				<div class="callout-container">
				            <?php $loop = new WP_Query( array( 'post_type' => 'bottom-callouts', 'posts_per_page' => 3, 'order' => 'ASC' ) ); ?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="callout">
				            <?php the_content(); ?>
				        </div><!-- end callout -->
				<?php endwhile; ?>					
				</div><!-- end callout container -->				
			</div><!-- end bottom -->
	</div><!-- end middle -->
	<?php
		get_footer();
	?>