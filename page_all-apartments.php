<?php
/*
Template Name: All Apartments
*/
?>

<?php get_header(); ?>

	<div>			
				<?php $query = new WP_Query( 'post_type=apartment' );

				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

					<!-- Project Content -->
					<article class="project">
						<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>	
					</article>

				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

				<?php
					// Restore original Post Data
					wp_reset_postdata();
				?>

	</div>
<?php get_footer(); ?>
<?php get_sidebar(); ?>