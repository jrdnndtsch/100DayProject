<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic|Amatic+SC' rel='stylesheet' type='text/css'>

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <img class="headerImg" src="<?php echo get_bloginfo('template_directory');?>/images/logo_con1.svg" alt="">
    </a>
    <p>a project crafted &amp; curated by jordan deutsch &amp; vivien ilett</p>
    <p>inspired by <a href="https://thegreatdiscontent.com/100days" target="blank">the great discontent / 100 days</a></p>
  </div> <!-- /.container -->
</header><!--/.header-->

