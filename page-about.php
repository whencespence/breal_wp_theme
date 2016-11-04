<?php get_header();  ?>

<div class="main">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="wrapper">
			<?php the_field('introductory_message'); ?>
			<p class="intro_sub"><?php the_field('introductory_sub_header'); ?></p>
			<p class="body_header"><?php the_field('body_header'); ?></p>

			<div class="about_container flex_container">
				<div class="about_content">
					<p class="about_body_content"><?php the_field('body_content'); ?></p>
				</div>
				<?php $image = get_field('about_image'); ?>
				<img src="<?php echo $image['url'] ?>" class= "about_image" alt="<?php echo $image['alt']?>">
			</div>
		</div>
      <?php endwhile; // end the loop?>

</div> <!-- /.main -->

<?php get_footer(); ?>