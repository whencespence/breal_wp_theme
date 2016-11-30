<?php get_header(); ?>

<main class="category main wrapper">

      <h2>Category Archives: <?php single_cat_title(); ?></h2>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?>

    <?php get_sidebar(); ?>

</main> <!-- /.main -->

<?php get_footer(); ?>