<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="row">

		<div class="col-md-12 title">
			<h1>NOMADS Creative</h1>
		</div>

	</div><!-- /row -->
	<div class="row">
			<?php

				while( have_posts() ) : the_post(); ?>

				<div class="col-md-6">
					<?php the_content(); ?>
				</div>

				<?php endwhile;?>
	</div><!-- /row -->
	
<?php get_footer(); ?>
<?php get_sidebar(); ?>