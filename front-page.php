<?php get_header();  ?>

<div class="main wrapper">

	<?php // Start the loop ?>

		<?php
			if( have_posts() )
				while ( have_posts() ) : the_post();
		?>

		<!-- company tagline -->
		<p class="tagline"><?php the_field('tagline'); ?></p>
		
</div> <!-- /.main-->

		<div class="home_carousel" data-flickity>
		<!-- image carousel -->
		<?php 
			if( have_rows('home_carousel') ):
				while( have_rows('home_carousel') ) : the_row();
					?>
					<?php $image = get_sub_field('carousel_image') ?>
					<?php $caption = get_sub_field('caption'); ?>
					
					<div class="carousel-cell">
						<div>
							<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']?>">
						</div>
						<p><?php echo $image['caption'] ?></p>
					</div>

					<?php
				endwhile;
			endif;
		?>
		</div>

	<?php endwhile; // end the loop?>

<?php get_footer(); ?>