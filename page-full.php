<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<?php $image = get_field('contact_image'); ?>

<div class="contact_image">
	<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']?>">
</div>

<mai class="main wrapper flex_container">

	<?php // Start the loop ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="contact_container">
			<div class="contact_content">
				<p><?php the_field('contact_title'); ?></p>
				<p><?php the_field('contact_text'); ?></p>
			</div>
			<div class="social_content">
				<p><?php the_field('social_title'); ?></p>
				<p><?php the_field('social_text'); ?></p>
			</div>
			</div>

			<?php echo do_shortcode( '[contact-form-7 id="20" title="Contact form 1"]' ); ?>
		</div>

	<?php endwhile; // end the loop?>
</div> <!-- /.main -->

<?php get_footer(); ?>