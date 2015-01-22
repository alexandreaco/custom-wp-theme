<?php
/*
Template Name: Homepage
*/
?>
<div class="background_img"></div>
<?php get_header(); ?>

	<div class="row">

		<div class="col-md-12 title">
			<h1>Nomads Creative</h1>
			<small>est. 2012</small>
		</div>

	</div><!-- /row -->
	<div class="row">
			<?php

				while( have_posts() ) : the_post(); ?>

				<div class="col-md-6 home_content">
					<?php the_content(); ?>
				</div>

				<?php endwhile;?>
	</div><!-- /row -->
	
<?php get_footer(); ?>
<?php get_sidebar(); ?>
