<?php get_header();  ?>

<div class="main">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<p><?php get_sub_field('introductory_message'); ?></p>
		<p><?php get_sub_field('introductory_sub_header'); ?></p>
		<p><?php get_sub_field('introductory_message'); ?></p>

      <?php endwhile; // end the loop?>

</div> <!-- /.main -->

<?php get_footer(); ?>