<?php get_header(); ?>

<main class="wrapper">

      <h1>Category Archives: <?php single_cat_title(); ?></h1>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?>

    <?php get_sidebar(); ?>

</main> <!-- /.main -->

<?php get_footer(); ?>