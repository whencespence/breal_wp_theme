<!-- //this is the blog posts page -->

<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main wrapper">
		<?php $blog_title = get_field('blog_title', get_option('page_for_posts')); ?>
		<?php echo $blog_title ?>
		<div class="blog_container flex_container">
			<?php if( have_posts() ): ?>
				<?php while( have_posts() ): the_post(); ?>

					<div class="post_item flex_container">
						<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail('medium'); ?></a>
						<h3 class="post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt($length); ?>
						<div class="blog_menu">
							<p>Share :: </p>
							<?php wp_nav_menu( array(
          						'container' => false,
          						'theme_location' => 'blog_menu'
       						)); ?>
						</div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- //end blog_container -->

</div> <!-- /.main -->

<?php get_footer(); ?>