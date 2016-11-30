<!-- //this is the blog posts page -->

<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main class="blog wrapper">
		<?php $blog_title = get_field('blog_title', get_option('page_for_posts')); ?>
		<?php echo $blog_title ?>
		<?php $blog_intro = get_field('blog_introduction', get_option('page_for_posts')); ?>
		<p class="intro_sub"><?php echo $blog_intro ?></p>

		<div class="blog_container">
			<?php if( have_posts() ): ?>
				<?php while( have_posts() ): the_post(); ?>

					<div class="post_item flex_container">
						<div class="post_image">
							<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail('large'); ?></a>
						</div>
						<h3 class="post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt($length); ?>
						<div class="blog_menu">
							<?php wp_nav_menu( array(
          						'container' => false,
          						'theme_location' => 'blog_menu'
       						)); ?>
       						<p><?php single_cat_title(); ?></p>
						</div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- //end blog_container -->

</main> <!-- /.main -->

<?php get_footer(); ?>