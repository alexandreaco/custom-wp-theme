<?php get_header(); ?>
	<div>	

			<?php

				while( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="col-md-12">
						<h2><?php the_title(); ?></h2>
	 				</div>
	 			</div>
	 			<div class="row">
		 			<div class="col-md-12">
						<?php the_content(); ?>
					</div>
				</div> <!-- /row -->
				<div class="row">
		 			<div class="col-md-6 apartment_description">

						<p><?php the_field('floor') ?>'st floor</p>
						<p><?php the_field('occupied') ?> vacant</p>
						<p><?php the_field('bedrooms') ?> bedroom(s)</p>
						<p><?php the_field('bathrooms') ?> bathroom(s)</p>
						<p><?php the_field('description') ?> </p>
						
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