<?php get_header();  ?>

<div class="main">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<p class="tagline wrapper"><?php the_field('tagline'); ?></p>

      <?php endwhile; // end the loop?>

</div> <!-- /.main-->

<?php get_footer(); ?>