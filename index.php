<?php get_header(); ?>

	<div>	

			<?php

				while( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="col-md-12">
						<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
	 					<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
	 				</div>
	 			</div>
	 			<div class="row">
		 			<div class="col-md-12">
						<?php the_content(); ?>
					</div>
				</div> <!-- /row -->
				<?php endwhile;?>

	</div>
<?php get_footer(); ?>
<?php get_sidebar(); ?>

