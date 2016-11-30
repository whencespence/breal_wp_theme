<?php get_header();  ?>

<div class="main">

	<?php // Start the loop ?>
		<?php
			if( have_posts() )
				while ( have_posts() ) : the_post();
		?>

		<div class="page_about wrapper">
			<?php the_field('introductory_message'); ?>
			<p class="intro_sub"><?php the_field('introductory_sub_header'); ?></p>
			<p class="body_header"><?php the_field('body_header'); ?></p>

			<div class="about_container flex_container">
				<div class="about_content">
					<p class="about_body_content"><?php the_field('body_content'); ?></p>
					<div class="inner_container flex_container">
						<div class="staff_container flex_container">
							<?php if( have_rows('staff_content') ): while( have_rows('staff_content') ) : the_row(); ?>
								<div class="staff">
									<?php $image = get_sub_field('staff_image'); ?>
									<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']?>">
									<p class="staff_name"><?php the_sub_field('staff_name'); ?></p>
								</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>

				<div class="about_image">
					<div class="inner_about_image">
						<?php $image = get_field('about_image'); ?>
						<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']?>">
					</div>
				</div>

			</div>

		</div><!-- end of .page_about/wrapper-->

     <?php endwhile; ?>

</div> <!-- /.main -->

<?php get_footer(); ?>