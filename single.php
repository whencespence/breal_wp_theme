<?php get_header(); ?>

<main class="wrapper">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><?php the_title(); ?></h2><!-- post title -->

        <div class="single flex_container">

          <!-- main column -->
          <div class="column">
            <div class="entry-content">
              <div class="single_post_image">
                  <img src="<?php the_post_thumbnail('medium'); ?>
                </div>
                <?php the_content(); ?>

                  <?php wp_link_pages(array(
                    'before' => '<div class="page-link"> Pages: ',
                    'after' => '</div>'
                  )); ?>

              <div class="entry-utility">
                <p><?php edit_post_link( '(Edit as admin)'); ?></p>
              </div><!-- .entry-utility -->
            </div><!-- #post-## -->

            <div id="nav-below" class="navigation">
              <p class="nav-previous"><?php previous_post_link('%link', '%title'); ?></p>
              <p class="nav-next"><?php next_post_link('%link', '%title'); ?></p>
            </div><!-- #nav-below -->

            <?php comments_template( '', true ); ?>
  
            <?php endwhile; // end of the loop. ?>
          
          </div><!-- end of column -->

          <?php get_sidebar(); ?><!-- this is the aside.sidebar -->

        </div><!-- end of flex_container -->

  

</main> <!-- /.main -->

<?php get_footer(); ?>