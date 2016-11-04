<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,600|Open+Sans:400,600" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.css" media="screen">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <nav class="wrapper">
      <a href="<?php echo home_url( '/' ); ?>" rel="home">
        <p><?php the_field('header_logo', 'option'); ?></p>
      </a>
      <div class="menu_wrap">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
      </div>
      <div class="toggle_button">
        <div class="menu_bar menu_bar_top"></div>
        <div class="menu_bar menu_bar_middle"></div>
        <div class="menu_bar menu_bar_bottom"></div>
      </div>
    </nav>
</header><!--/.header-->

<div id="panel"></div>