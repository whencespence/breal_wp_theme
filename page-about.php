<?php get_header();  ?>

<div class="main">

	<?php // Start the loop ?>
		<?php
			if( have_posts() )
				while ( have_posts() ) : the_post();
		?>

		<div class="wrapper">
			<?php the_field('introductory_message'); ?>
			<p class="intro_sub"><?php the_field('introductory_sub_header'); ?></p>
			<p class="body_header"><?php the_field('body_header'); ?></p>

		<!-- about container -->
			<div class="about_container">

				<div class="about_content">
					<p class="about_body_content"><?php the_field('body_content'); ?></p>
				</div>
				
				<div class="outer_container flex_container">
					<div class="staff_container flex_container">
						<?php if( have_rows('staff_content') ): while( have_rows('staff_content') ) : the_row(); ?>
							<div class="staff">
								<?php $image = get_sub_field('staff_image'); ?>
								<img src="<?php echo $image['url'] ?>" class= "staff_image" alt="<?php echo $image['alt']?>">
								<p class="staff_name"><?php the_sub_field('staff_name'); ?></p>
							</div>
						<?php endwhile; endif; ?>
					</div>
					<div class="about_image">
						<?php $image = get_field('about_image'); ?>
						<img src="<?php echo $image['url'] ?>" class= "about_image" alt="<?php echo $image['alt']?>">
					</div>
				</div>

			</div><!-- end of about_container -->
		</div><!-- end of wrapper -->

     <?php endwhile; // end the loop?>

</div> <!-- /.main -->

<?php get_footer(); ?>