<?php get_header(); ?>
	<div>	

			<?php

				while( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="col-md-12">
						<h2><?php the_title(); ?></h2>
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

				<!-- previous and next links -->
				<div class="row">
					<div class="col-md-2">
						<?php previous_post_link(); ?> 
					</div>
					<div class="col-md-8">
					</div>
					<div class="col-md-2">
						<?php next_post_link(); ?> 
					</div>
				</div>
	</div>
<?php get_footer(); ?>
<?php get_sidebar(); ?>