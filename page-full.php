<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<?php $image = get_field('contact_image'); ?>

<div class="contact_image">
	<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']?>">
</div>

<main class="contact wrapper flex_container">

	<?php // Start the loop ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="contact_container">
			<div class="contact_content">
				<h2><?php the_field('contact_title'); ?></h2>
				<p><?php the_field('contact_text'); ?></p>
			</div>
			<div class="social_content">
				<h2><?php the_field('social_title'); ?></h2>
				<p><?php the_field('social_text'); ?></p>
				<ul>

					<?php if( have_rows('social_icons') ):
						while ( have_rows('social_icons') ) : the_row();
							$icon = get_sub_field('icon');
						    $icon_link = get_sub_field('icon_link');
				        	if($icon == 'linkedin' && $icon_link !== " ") {
				        		echo '<li><a href="' . $icon_link . '" target="_blank" role="link"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>';
				        	}
				        	elseif ($icon == 'twitter') {
								echo '<li><a href="' . $icon_link . '" target="_blank" role="link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
				        	}
				        	elseif($icon == 'facebook') {
				        		echo '<li><a href="' . $icon_link . '" target="_blank" role="link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
				        	}
						endwhile;
						else :
						endif;
					?>
				</ul>
			</div>
		</div>
		<div class="form_container">
			<h2><?php the_field('contact_form_title'); ?></h2>
			<?php echo do_shortcode( '[contact-form-7 id="20" title="Contact form 1"]' ); ?>
		</div>

	<?php endwhile; // end the loop?>
</main> <!-- /.main -->

<?php get_footer(); ?>