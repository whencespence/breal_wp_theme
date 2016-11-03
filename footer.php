</div>
<footer>
	<div class="contact wrapper">
		<p class="company"><?php the_field('company_name'); ?></p>
		<p><?php the_field('email_address'); ?></p>
		<p><?php the_field('phone_number'); ?></p>
		<div class="copyright flex_container">
			<i class="fa fa-copyright" aria-hidden="true"></i>
			<p><?php the_field('copyright_info'); ?></p>
		</div>
	</div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
<script src="<?php bloginfo('template_url') ?>/js/slideout.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>