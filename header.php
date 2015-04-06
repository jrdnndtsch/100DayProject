<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic|Amatic+SC' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300' rel='stylesheet' type='text/css'>
  <link rel="icon" href="<?php echo get_bloginfo('template_directory');?>/images/favicon.png">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
<div class="container">
  <div class="aboutInfo">
    <p class="close">&otimes;</p>
    <div class="aboutContainer">
      <h2>About Us</h2>

      <div class="jordan">
        <img src="<?php echo get_bloginfo('template_directory');?>/images/jordan.svg" alt="jordan avatar">
        <h3 class="name">Jordan Deutsch</h3>
        <a class="twitter" target="blank" href="http://twitter.com/jrdnndtsch">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 80 80" enable-background="new 0 0 80 80" xml:space="preserve">
          <path d="M76.534,17.322c-2.691,1.191-5.585,1.996-8.618,2.36c3.103-1.857,5.483-4.797,6.598-8.297
            c-2.901,1.719-6.108,2.964-9.533,3.635c-2.729-2.913-6.631-4.736-10.949-4.736c-8.282,0-14.998,6.719-14.998,15.002
            c0,1.178,0.125,2.323,0.385,3.417c-12.466-0.625-23.52-6.594-30.927-15.677C7.2,15.25,6.462,17.825,6.462,20.574
            c0,5.199,2.648,9.792,6.672,12.487c-2.456-0.075-4.77-0.758-6.799-1.874v0.184c0,7.274,5.173,13.34,12.04,14.715
            c-1.257,0.353-2.583,0.527-3.952,0.527c-0.97,0-1.909-0.092-2.821-0.268c1.906,5.961,7.445,10.299,14.013,10.413
            c-5.136,4.028-11.607,6.426-18.633,6.426c-1.212,0-2.407-0.066-3.581-0.206c6.64,4.251,14.529,6.736,22.997,6.736
            c27.604,0,42.691-22.858,42.691-42.686c0-0.653-0.012-1.303-0.042-1.944C71.98,22.972,74.53,20.328,76.534,17.322"/>
          </svg>
        </a>
        <a target="blank" class="site" href="http://jordandeutsch.com">&#9786;</a>
      </div><!-- /.jordan -->
      <div class="vivi">
        <img src="<?php echo get_bloginfo('template_directory');?>/images/vivi.svg" alt="vivi avatar">
        <h3 class="name">Vivien Ilett</h3>
        <a class="twitter" target="blank" href="http://twitter.com/vivienilett">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 80 80" enable-background="new 0 0 80 80" xml:space="preserve">
          <path d="M76.534,17.322c-2.691,1.191-5.585,1.996-8.618,2.36c3.103-1.857,5.483-4.797,6.598-8.297
            c-2.901,1.719-6.108,2.964-9.533,3.635c-2.729-2.913-6.631-4.736-10.949-4.736c-8.282,0-14.998,6.719-14.998,15.002
            c0,1.178,0.125,2.323,0.385,3.417c-12.466-0.625-23.52-6.594-30.927-15.677C7.2,15.25,6.462,17.825,6.462,20.574
            c0,5.199,2.648,9.792,6.672,12.487c-2.456-0.075-4.77-0.758-6.799-1.874v0.184c0,7.274,5.173,13.34,12.04,14.715
            c-1.257,0.353-2.583,0.527-3.952,0.527c-0.97,0-1.909-0.092-2.821-0.268c1.906,5.961,7.445,10.299,14.013,10.413
            c-5.136,4.028-11.607,6.426-18.633,6.426c-1.212,0-2.407-0.066-3.581-0.206c6.64,4.251,14.529,6.736,22.997,6.736
            c27.604,0,42.691-22.858,42.691-42.686c0-0.653-0.012-1.303-0.042-1.944C71.98,22.972,74.53,20.328,76.534,17.322"/>
          </svg>
        </a>
        <a target="blank" class="site" href="http://vivienilett.com">&#9786;</a>
      </div><!-- /.vivi -->
      <p>Hello there, welcome to 100 Days of the Internet! We are two front-end developer friends from Toronto, Canada and we aspire to always build nice things for the web. This blog is a side project inspired by <a target="blank" href="https://thegreatdiscontent.com/100days">The Great Discontent</a> to log our work. Watch this space to see what we create :)</p>
      <a target="blank" href="http://instagram.com/vivienandjordan">
      <p class="follow">Follow our Instagram</p></a>
    </div><!-- /.aboutContainer -->
  </div>
  <div class="about clearfix">
    <svg class ="aboutSvg" title="About the authors" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">

    <g>
      <circle title="About the authors" class="st0 aboutCircle" cx="686.3" cy="35.3" r="12.7"/>
      <path class="about1" d="M683.5,32.5c0,0.3,0.1,0.5,0.4,0.7V33c0-0.2,0.1-0.3,0.2-0.4s0.3-0.2,0.4-0.2c0.5,0,0.7,0.2,0.7,0.7
        c0,0.3-0.1,0.6-0.4,0.8s-0.6,0.3-0.9,0.3c-0.5,0-0.9-0.2-1.2-0.5c-0.3-0.3-0.5-0.7-0.5-1.2c0-0.9,0.4-1.7,1.2-2.3s1.8-0.9,3-0.9
        c1.2,0,2.2,0.3,2.9,0.9c0.7,0.6,1.1,1.3,1.1,2.2c0,1.2-0.6,2-1.7,2.6c-0.2,0.1-0.4,0.2-0.8,0.3c-0.6,0.3-1.1,0.5-1.3,0.8
        c-0.2,0.3-0.4,0.6-0.4,1c0,0.3,0,0.5-0.1,0.6c-0.1,0.2-0.3,0.2-0.5,0.2c-0.5,0-0.7-0.3-0.7-0.9c0-0.5,0.1-1,0.4-1.3
        c0.3-0.4,0.9-0.9,1.8-1.4c0.8-0.4,1.3-0.8,1.5-1s0.3-0.6,0.3-1.1c0-0.6-0.2-1.1-0.7-1.4s-1.1-0.5-1.9-0.5c-0.8,0-1.5,0.2-2.1,0.6
        C683.8,31.4,683.5,31.9,683.5,32.5z M685.9,41c-0.3,0-0.5-0.1-0.7-0.3s-0.3-0.4-0.3-0.7s0.1-0.5,0.3-0.7c0.2-0.2,0.4-0.3,0.7-0.3
        s0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.4,0.3,0.7s-0.1,0.5-0.3,0.7S686.2,41,685.9,41z"/>
    </g>
    <circle class="st0" cx="25" cy="25" r="18.7"/>
    <path class="about1" d="M20.3,21.3c0,0.5,0.2,0.8,0.7,1.2v-0.3c0-0.2,0.1-0.5,0.3-0.6c0.2-0.2,0.4-0.3,0.7-0.3c0.8,0,1.2,0.4,1.2,1.2
      c0,0.5-0.2,1-0.6,1.3c-0.4,0.3-0.9,0.5-1.5,0.5c-0.8,0-1.4-0.3-1.9-0.8c-0.5-0.5-0.8-1.2-0.8-2c0-1.5,0.6-2.7,1.9-3.7
      c1.3-1,2.9-1.5,4.9-1.5c2,0,3.6,0.5,4.8,1.4c1.2,0.9,1.8,2.2,1.8,3.7c0,1.9-0.9,3.3-2.8,4.3c-0.3,0.2-0.7,0.3-1.2,0.6
      c-1.1,0.4-1.8,0.9-2.2,1.3c-0.4,0.4-0.6,1-0.6,1.6c0,0.5,0,0.8-0.1,1c-0.1,0.3-0.4,0.4-0.9,0.4c-0.7,0-1.1-0.5-1.1-1.4
      c0-0.9,0.2-1.6,0.6-2.2c0.5-0.7,1.5-1.5,2.9-2.3c1.3-0.7,2.1-1.3,2.5-1.7c0.4-0.4,0.6-1,0.6-1.7c0-1-0.4-1.8-1.2-2.4
      C27.4,18.3,26.4,18,25,18c-1.3,0-2.5,0.3-3.4,1C20.8,19.6,20.3,20.4,20.3,21.3z M24.2,35.2c-0.5,0-0.9-0.2-1.2-0.5
      c-0.3-0.3-0.5-0.7-0.5-1.2s0.2-0.9,0.5-1.2c0.3-0.3,0.7-0.5,1.2-0.5c0.5,0,0.9,0.2,1.2,0.5c0.3,0.3,0.5,0.7,0.5,1.2
      s-0.2,0.9-0.5,1.2C25,35.1,24.6,35.2,24.2,35.2z"/>
    </svg>
  </div>  


    <a href="<?php echo home_url( '/' ); ?>" rel="home">

      <svg class="headerImg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 520 240" style="enable-background:new 0 0 520 240;" xml:space="preserve">

      <g>
        <g>
          <!-- 'INTERNET' shadow -->
          <path class="internet2" d="M103,203.8h5.1c2.3,0,4.7,0.5,4.7,3.4c0,3-2.7,3.4-4.7,3.4H90.8c-2,0-4.7-0.4-4.7-3.4c0-2.9,2.4-3.4,4.7-3.4
            h5.4v-24.5h-5.4c-2,0-4.7-0.4-4.7-3.4c0-2.9,2.4-3.4,4.7-3.4H98c3.9,0,5,0.7,5,4.7V203.8z M92.7,158.9c0-2.4,1.3-3.2,3.2-3.2h3.9
            c1.8,0,3.2,0.8,3.2,3.2v3.2c0,2.4-1.3,3.2-3.2,3.2h-3.9c-1.8,0-3.2-0.8-3.2-3.2V158.9z"/>
          <path class="internet2" d="M137.6,186.2v19.7c0,2.3-0.5,4.7-3.4,4.7s-3.4-2.3-3.4-4.7v-28.3c0-2.5,0.3-5,3.4-5c3,0,3.4,2.5,3.4,4.9v0.8
            v0.1l5.5-3.6c1.8-1.1,3.7-2.3,5.8-2.3h5c2.6,0,4.2,0.7,6.3,2.5c3,2.6,2.9,5.5,3,9.2l0.7,21.3c0.1,2.4-0.3,5.1-3.3,5.1
            c-2.7,0-3.3-2.3-3.4-4.6l-0.7-20.9c-0.1-4.2-0.5-5.8-4.6-5.8h-2.3c-0.7,0-1.4,0.2-2.1,0.6L137.6,186.2z"/>
          <path class="internet2" d="M192.3,197.8c0,3.8-0.1,6,4.5,6h3.5c2.7,0,4-0.2,4.7-3c0.4-1.6,1.7-2.7,3.4-2.7c1.9,0,3.5,1.5,3.5,3.4
            s-1.2,4.3-2.3,5.6c-2.5,3-5.7,3.5-9.3,3.5h-3.5c-3.4,0-6.3-0.8-8.7-3.4c-2.6-2.9-2.5-5.8-2.5-9.4v-18.4h-2.2c-2,0-4.7-0.4-4.7-3.4
            c0-2.9,2.4-3.4,4.7-3.4h2.2v-6.9c0-2.3,0.5-4.7,3.4-4.7c2.9,0,3.4,2.3,3.4,4.7v6.9h11.3c2.3,0,4.7,0.5,4.7,3.4
            c0,3-2.7,3.4-4.7,3.4h-11.3V197.8z"/>
          <path class="internet2" d="M239,210.5c-2.8,0-3.9,0-6.1-1.8l-2.9-2.5c-2.7-2.4-3.5-3.9-3.5-7.6v-13c0-3.6,0.5-5.7,3.3-8.1l2.4-2
            c3.2-2.7,4.7-2.8,7.5-2.8h6.2c3.3,0,4.9,0.4,7.5,2.5l2.7,2.2c3.1,2.5,3.5,5.1,3.5,8.8v5.4c0,3.9-0.6,5-4.7,5h-21.7v2.3
            c0,0.6,0.5,1.5,1,2l1.7,1.8c0.9,1,2.3,1.3,4.5,1.3h14.5c2.3,0,4.7,0.5,4.7,3.4c0,3-2.7,3.4-4.7,3.4H239z M233.4,189.7H253v-4.1
            c0-1.3,0.1-2.3-0.8-3.2l-2.6-2.3c-0.8-0.8-2.2-0.8-3.2-0.8h-5.7c-1.3,0-2.3,0-3.5,0.8l-2.3,1.7c-0.8,0.6-1.4,1.1-1.4,3.1V189.7z"
            />
          <path class="internet2" d="M274.5,177.6c0-2.5,0.3-5,3.4-5c2.7,0,3.4,2.3,3.4,4.5v2.7l5.3-4.4c1.9-1.5,3.9-2.9,6-2.9h5.4
            c2.6,0,4.8,0.8,6.6,2.7c2.3,2.3,3,4.6,3,7.7c0,2.3-0.4,4.7-3.3,4.7c-2.5,0-3.5-2-3.5-4.2c0-1.1,0-2-0.7-3
            c-0.8-1.2-2.5-1.2-4.1-1.2h-2c-1.3,0-2.2,0.6-3.4,1.6l-9.4,7.8v17.1c0,2.3-0.5,4.7-3.4,4.7s-3.4-2.3-3.4-4.7V177.6z"/>
          <path class="internet2" d="M329.2,186.2v19.7c0,2.3-0.5,4.7-3.4,4.7s-3.4-2.3-3.4-4.7v-28.3c0-2.5,0.3-5,3.4-5c3,0,3.4,2.5,3.4,4.9v0.8
            v0.1l5.5-3.6c1.8-1.1,3.7-2.3,5.8-2.3h5c2.6,0,4.2,0.7,6.3,2.5c3,2.6,2.9,5.5,3,9.2l0.7,21.3c0.1,2.4-0.3,5.1-3.3,5.1
            c-2.7,0-3.3-2.3-3.4-4.6l-0.7-20.9c-0.1-4.2-0.5-5.8-4.6-5.8h-2.3c-0.7,0-1.4,0.2-2.1,0.6L329.2,186.2z"/>
          <path class="internet2" d="M382.8,210.5c-2.8,0-3.9,0-6.1-1.8l-2.9-2.5c-2.7-2.4-3.5-3.9-3.5-7.6v-13c0-3.6,0.5-5.7,3.3-8.1l2.4-2
            c3.2-2.7,4.7-2.8,7.5-2.8h6.2c3.3,0,4.9,0.4,7.5,2.5l2.7,2.2c3.1,2.5,3.5,5.1,3.5,8.8v5.4c0,3.9-0.6,5-4.7,5h-21.7v2.3
            c0,0.6,0.5,1.5,1,2l1.7,1.8c0.9,1,2.3,1.3,4.5,1.3h14.5c2.3,0,4.7,0.5,4.7,3.4c0,3-2.7,3.4-4.7,3.4H382.8z M377.1,189.7h19.6v-4.1
            c0-1.3,0.1-2.3-0.8-3.2l-2.6-2.3c-0.8-0.8-2.2-0.8-3.2-0.8h-5.7c-1.3,0-2.3,0-3.5,0.8l-2.3,1.7c-0.8,0.6-1.4,1.1-1.4,3.1V189.7z"
            />
          <path class="internet2" d="M431.9,197.8c0,3.8-0.1,6,4.5,6h3.5c2.7,0,4-0.2,4.7-3c0.4-1.6,1.7-2.7,3.4-2.7c1.9,0,3.5,1.5,3.5,3.4
            s-1.2,4.3-2.3,5.6c-2.5,3-5.7,3.5-9.3,3.5h-3.5c-3.4,0-6.3-0.8-8.7-3.4c-2.6-2.9-2.5-5.8-2.5-9.4v-18.4h-2.2c-2,0-4.7-0.4-4.7-3.4
            c0-2.9,2.4-3.4,4.7-3.4h2.2v-6.9c0-2.3,0.5-4.7,3.4-4.7c2.9,0,3.4,2.3,3.4,4.7v6.9h11.3c2.3,0,4.7,0.5,4.7,3.4
            c0,3-2.7,3.4-4.7,3.4h-11.3V197.8z"/>
            <!-- END 'INTERNET' shadow -->
        </g>
        <g>
          <!-- 'INTERNET' -->
          <path class="internet" d="M100,200.8h5.1c2.3,0,4.7,0.5,4.7,3.4c0,3-2.7,3.4-4.7,3.4H87.8c-2,0-4.7-0.4-4.7-3.4c0-2.9,2.4-3.4,4.7-3.4
            h5.4v-24.5h-5.4c-2,0-4.7-0.4-4.7-3.4c0-2.9,2.4-3.4,4.7-3.4H95c3.9,0,5,0.7,5,4.7V200.8z M89.7,155.9c0-2.4,1.3-3.2,3.2-3.2h3.9
            c1.8,0,3.2,0.8,3.2,3.2v3.2c0,2.4-1.3,3.2-3.2,3.2h-3.9c-1.8,0-3.2-0.8-3.2-3.2V155.9z"/>
          <path class="internet" d="M134.6,183.2v19.7c0,2.3-0.5,4.7-3.4,4.7s-3.4-2.3-3.4-4.7v-28.3c0-2.5,0.3-5,3.4-5c3,0,3.4,2.5,3.4,4.9v0.8
            v0.1l5.5-3.6c1.8-1.1,3.7-2.3,5.8-2.3h5c2.6,0,4.2,0.7,6.3,2.5c3,2.6,2.9,5.5,3,9.2l0.7,21.3c0.1,2.4-0.3,5.1-3.3,5.1
            c-2.7,0-3.3-2.3-3.4-4.6l-0.7-20.9c-0.1-4.2-0.5-5.8-4.6-5.8h-2.3c-0.7,0-1.4,0.2-2.1,0.6L134.6,183.2z"/>
          <path class="internet" d="M189.3,194.8c0,3.8-0.1,6,4.5,6h3.5c2.7,0,4-0.2,4.7-3c0.4-1.6,1.7-2.7,3.4-2.7c1.9,0,3.5,1.5,3.5,3.4
            s-1.2,4.3-2.3,5.6c-2.5,3-5.7,3.5-9.3,3.5h-3.5c-3.4,0-6.3-0.8-8.7-3.4c-2.6-2.9-2.5-5.8-2.5-9.4v-18.4h-2.2c-2,0-4.7-0.4-4.7-3.4
            c0-2.9,2.4-3.4,4.7-3.4h2.2v-6.9c0-2.3,0.5-4.7,3.4-4.7c2.9,0,3.4,2.3,3.4,4.7v6.9h11.3c2.3,0,4.7,0.5,4.7,3.4
            c0,3-2.7,3.4-4.7,3.4h-11.3V194.8z"/>
          <path class="internet" d="M236,207.5c-2.8,0-3.9,0-6.1-1.8l-2.9-2.5c-2.7-2.4-3.5-3.9-3.5-7.6v-13c0-3.6,0.5-5.7,3.3-8.1l2.4-2
            c3.2-2.7,4.7-2.8,7.5-2.8h6.2c3.3,0,4.9,0.4,7.5,2.5l2.7,2.2c3.1,2.5,3.5,5.1,3.5,8.8v5.4c0,3.9-0.6,5-4.7,5h-21.7v2.3
            c0,0.6,0.5,1.5,1,2l1.7,1.8c0.9,1,2.3,1.3,4.5,1.3h14.5c2.3,0,4.7,0.5,4.7,3.4c0,3-2.7,3.4-4.7,3.4H236z M230.4,186.7H250v-4.1
            c0-1.3,0.1-2.3-0.8-3.2l-2.6-2.3c-0.8-0.8-2.2-0.8-3.2-0.8h-5.7c-1.3,0-2.3,0-3.5,0.8l-2.3,1.7c-0.8,0.6-1.4,1.1-1.4,3.1V186.7z"
            />
          <path class="internet" d="M271.5,174.6c0-2.5,0.3-5,3.4-5c2.7,0,3.4,2.3,3.4,4.5v2.7l5.3-4.4c1.9-1.5,3.9-2.9,6-2.9h5.4
            c2.6,0,4.8,0.8,6.6,2.7c2.3,2.3,3,4.6,3,7.7c0,2.3-0.4,4.7-3.3,4.7c-2.5,0-3.5-2-3.5-4.2c0-1.1,0-2-0.7-3
            c-0.8-1.2-2.5-1.2-4.1-1.2h-2c-1.3,0-2.2,0.6-3.4,1.6l-9.4,7.8v17.1c0,2.3-0.5,4.7-3.4,4.7s-3.4-2.3-3.4-4.7V174.6z"/>
          <path class="internet" d="M326.2,183.2v19.7c0,2.3-0.5,4.7-3.4,4.7s-3.4-2.3-3.4-4.7v-28.3c0-2.5,0.3-5,3.4-5c3,0,3.4,2.5,3.4,4.9v0.8
            v0.1l5.5-3.6c1.8-1.1,3.7-2.3,5.8-2.3h5c2.6,0,4.2,0.7,6.3,2.5c3,2.6,2.9,5.5,3,9.2l0.7,21.3c0.1,2.4-0.3,5.1-3.3,5.1
            c-2.7,0-3.3-2.3-3.4-4.6l-0.7-20.9c-0.1-4.2-0.5-5.8-4.6-5.8h-2.3c-0.7,0-1.4,0.2-2.1,0.6L326.2,183.2z"/>
          <path class="internet" d="M379.8,207.5c-2.8,0-3.9,0-6.1-1.8l-2.9-2.5c-2.7-2.4-3.5-3.9-3.5-7.6v-13c0-3.6,0.5-5.7,3.3-8.1l2.4-2
            c3.2-2.7,4.7-2.8,7.5-2.8h6.2c3.3,0,4.9,0.4,7.5,2.5l2.7,2.2c3.1,2.5,3.5,5.1,3.5,8.8v5.4c0,3.9-0.6,5-4.7,5h-21.7v2.3
            c0,0.6,0.5,1.5,1,2l1.7,1.8c0.9,1,2.3,1.3,4.5,1.3h14.5c2.3,0,4.7,0.5,4.7,3.4c0,3-2.7,3.4-4.7,3.4H379.8z M374.1,186.7h19.6v-4.1
            c0-1.3,0.1-2.3-0.8-3.2l-2.6-2.3c-0.8-0.8-2.2-0.8-3.2-0.8h-5.7c-1.3,0-2.3,0-3.5,0.8l-2.3,1.7c-0.8,0.6-1.4,1.1-1.4,3.1V186.7z"
            />
          <path class="internet" d="M428.9,194.8c0,3.8-0.1,6,4.5,6h3.5c2.7,0,4-0.2,4.7-3c0.4-1.6,1.7-2.7,3.4-2.7c1.9,0,3.5,1.5,3.5,3.4
            s-1.2,4.3-2.3,5.6c-2.5,3-5.7,3.5-9.3,3.5h-3.5c-3.4,0-6.3-0.8-8.7-3.4c-2.6-2.9-2.5-5.8-2.5-9.4v-18.4h-2.2c-2,0-4.7-0.4-4.7-3.4
            c0-2.9,2.4-3.4,4.7-3.4h2.2v-6.9c0-2.3,0.5-4.7,3.4-4.7c2.9,0,3.4,2.3,3.4,4.7v6.9h11.3c2.3,0,4.7,0.5,4.7,3.4
            c0,3-2.7,3.4-4.7,3.4h-11.3V194.8z"/>
            <!-- 'INTERNET' -->
        </g>
        <g>
          <path class="st17" d="M176.8,166"/>
        </g>
        <g>
          <g id="XMLID_10_">
            <g>
              <!-- '0' -->
              <path class="st14" d="M199.3,45.3c5.5,9.7,8.8,21.9,8.8,35.1c0,14.1-3.7,27-9.9,37l-11.8-9.2c5.3-7.1,8.6-16.9,8.6-27.8
                c0-10.1-2.8-19.3-7.4-26.2L199.3,45.3z"/>
              <path class="st0" d="M199.3,45.3l-11.8,8.8c-5.3-8-13-13-21.6-13c-8.4,0-16,4.8-21.3,12.5l-12.4-9.9
                c7.8-12.9,19.8-21.1,33.1-21.1C179.2,22.6,191.5,31.5,199.3,45.3z"/>
              <path class="st15" d="M186.4,108.2l11.8,9.2c-7.9,12.7-19.7,20.8-32.9,20.8c-13,0-24.6-7.8-32.4-20.1l12.7-9.7
                c5.2,7,12.4,11.3,20.4,11.3C173.9,119.6,181.1,115.2,186.4,108.2z"/>
              <path class="st5" d="M187.5,54.2c4.6,6.9,7.4,16.1,7.4,26.2c0,10.9-3.3,20.7-8.6,27.8L173.2,98c3.3-3.8,5.5-10.1,5.5-17.3
                c0-6.6-1.9-12.5-4.8-16.4L187.5,54.2z"/>
              <path class="st2" d="M187.5,54.2L174,64.3c-2.2-2.9-4.9-4.6-7.9-4.6c-3,0-5.8,1.8-8,4.7l-13.5-10.8c5.3-7.7,12.9-12.5,21.3-12.5
                C174.5,41.2,182.2,46.2,187.5,54.2z"/>
              <path class="st10" d="M173.2,98l13.1,10.2c-5.2,7-12.5,11.4-20.5,11.4c-7.9,0-15.1-4.3-20.4-11.3L159,98c2,2.3,4.5,3.6,7.1,3.6
                C168.8,101.6,171.2,100.3,173.2,98z"/>
              <path class="st1" d="M159,98l-13.5,10.3c-5.4-7.1-8.7-17-8.7-27.9c0-10.3,3-19.7,7.8-26.7l13.5,10.8c-2.8,3.8-4.7,9.7-4.7,16.2
                C153.5,87.9,155.7,94.2,159,98z"/>
              <path class="st14" d="M145.5,108.3l-12.7,9.7c-6.5-10.1-10.4-23.3-10.4-37.7c0-13.9,3.6-26.7,9.7-36.7l12.4,9.9
                c-4.8,7-7.8,16.4-7.8,26.7C136.9,91.3,140.2,101.2,145.5,108.3z"/>
            </g>
              <!-- '0' -->
          </g>
          <g>
            <!-- '0' 2 -->
            <path class="st4" d="M290.1,45.3c5.5,9.7,8.8,21.9,8.8,35.1c0,14.1-3.7,27-9.9,37l-11.8-9.2c5.3-7.1,8.6-16.9,8.6-27.8
              c0-10.1-2.8-19.3-7.4-26.2L290.1,45.3z"/>
            <path class="st5" d="M290.1,45.3l-11.8,8.8c-5.3-8-13-13-21.6-13c-8.4,0-16,4.8-21.3,12.5L223,43.7c7.8-12.9,19.8-21.1,33.1-21.1
              C270,22.6,282.3,31.5,290.1,45.3z"/>
            <path class="st14" d="M277.2,108.2l11.8,9.2c-7.9,12.7-19.7,20.8-32.9,20.8c-13,0-24.6-7.8-32.4-20.1l12.7-9.7
              c5.2,7,12.4,11.3,20.4,11.3C264.7,119.6,271.9,115.2,277.2,108.2z"/>
            <path class="st15" d="M278.3,54.2c4.6,6.9,7.4,16.1,7.4,26.2c0,10.9-3.3,20.7-8.6,27.8L264,98c3.3-3.8,5.5-10.1,5.5-17.3
              c0-6.6-1.9-12.5-4.7-16.4L278.3,54.2z"/>
            <path class="st1" d="M278.3,54.2l-13.5,10.1c-2.2-2.9-4.9-4.6-7.9-4.6c-3,0-5.8,1.8-8,4.7l-13.5-10.8
              c5.3-7.7,12.9-12.5,21.3-12.5C265.3,41.2,273,46.2,278.3,54.2z"/>
            <path class="st2" d="M264,98l13.1,10.2c-5.2,7-12.5,11.4-20.5,11.4c-7.9,0-15.1-4.3-20.4-11.3L249.8,98c2,2.3,4.5,3.6,7.1,3.6
              C259.6,101.6,262,100.3,264,98z"/>
            <path class="st0" d="M249.8,98l-13.5,10.3c-5.4-7.1-8.7-17-8.7-27.9c0-10.3,3-19.7,7.8-26.7l13.5,10.8c-2.8,3.8-4.7,9.7-4.7,16.2
              C244.3,87.9,246.5,94.2,249.8,98z"/>
            <path class="st10" d="M236.3,108.3l-12.7,9.7c-6.5-10.1-10.4-23.3-10.4-37.7c0-13.9,3.6-26.7,9.7-36.7l12.4,9.9
              c-4.8,7-7.8,16.4-7.8,26.7C227.7,91.3,231,101.2,236.3,108.3z"/>
          </g>
          <!-- END '0' 2 -->
          <g>
            <g id="XMLID_9_">
              <g>
                <!-- '1' -->
                <polygon class="st2" points="115.7,135.9 115.7,135.9 115.7,136.4 85.4,136.4 85.4,135.9 85.6,135.9 100.6,119.9"/>
                <polygon class="st0" points="85.7,24.9 100.6,40.8 100.3,41.1 100.3,119.6 100.6,119.9 85.6,135.9 85.4,135.9 85.4,24.9"/>
                <polygon class="st5" points="115.7,24.9 100.6,40.8 85.7,24.9"/>
                <polygon class="st10" points="100.6,40.8 115.7,24.9 115.7,135.9 115.7,135.9 100.6,119.9 100.3,119.6 100.3,41.1"/>
                <!-- END '1' -->
              </g>
            </g>
          </g>
        </g>

        <!-- 'DAY' -->
        <g>
          <path class="day" d="M317.4,28.5c-2,18.7-2.2,37.6-2.6,56.4c-0.2,10.5-0.3,21,0,31.5c0.2,6-0.1,12.9,1.8,18.7
            c0.5,1.4,2.6,0.8,2.2-0.6c-1.9-5.9-1.6-13-1.7-19.1c-0.3-10.6-0.1-21.1,0.1-31.7c0.4-18.4,0.7-36.9,2.6-55.2
            C319.8,27,317.5,27.1,317.4,28.5L317.4,28.5z"/>
        </g>
        <g>
          <path class="day" d="M317.9,28.6c9.3,1.7,14.2,11,17.2,19c4.2,11.4,5.5,23.8,5.5,35.8c0.1,11.7-1.3,23.8-5.3,34.8
            c-2.7,7.4-8,16.4-17.1,15.7c-1.4-0.1-1.4,2.1,0,2.2c9,0.7,14.7-6.9,18-14.3c5.1-11.3,6.4-24.3,6.6-36.6
            c0.2-13.1-1.3-26.8-5.9-39.1c-3.1-8.5-8.8-18.1-18.5-19.8C317.1,26.1,316.5,28.3,317.9,28.6L317.9,28.6z"/>
        </g>
        <g>
          <path class="day" d="M355.6,29.4c1.8,6.6,0.6,14.7,0.2,21.4c-0.7,11.4-1.9,22.8-3.2,34.1c-1.2,10.9-2.5,21.7-3.7,32.6
            c-0.6,5.3-2.2,11.6-1.6,17c0.2,1.4,2.4,1.4,2.2,0c-0.5-5.1,0.9-11,1.5-16.1c1.3-11.1,2.6-22.3,3.8-33.4c1.3-11.6,2.5-23.3,3.2-35
            c0.4-6.7,1.5-14.5-0.3-21.1C357.4,27.4,355.2,28,355.6,29.4L355.6,29.4z"/>
        </g>
        <g>
          <path class="day" d="M355.7,30c3.2,7.6,4.6,16.2,6.3,24.3c2.4,11.4,4.4,22.8,6.4,34.2c1.6,9.1,3.1,18.1,4.7,27.2
            c0.3,1.9,0.6,3.7,1,5.6c0.8,3.6,0.8,8,2.5,11.3c0.2,0.3,0.6,0.6,1,0.6c0,0,0.1,0,0.1,0c0.5,0,1-0.3,1.1-0.8c0.1-0.4,0.1-0.7,0.1-1
            c0-1.5-2.2-1.4-2.2,0c0.1-1.8,2.1,1.2,1.5-1.4c-0.3-1.2-0.5-2.4-0.7-3.6c-0.4-1.9-0.7-3.9-1.2-5.8c-0.5-2.2-0.8-4.4-1.2-6.6
            c-1.6-9.4-3.2-18.8-4.8-28.2c-2-11.4-4.1-22.8-6.5-34.1c-1.6-7.6-3.1-15.6-6.1-22.8C357.1,27.5,355.1,28.7,355.7,30L355.7,30z"/>
        </g>
        <g>
          <path class="day" d="M369,87.1c-4.5,2-10,2-14.8,1.4c-1.4-0.2-1.4,2.1,0,2.2c5.2,0.7,11.1,0.5,16-1.7
            C371.4,88.4,370.3,86.5,369,87.1L369,87.1z"/>
        </g>
        <g>
          <g>
            <path class="day" d="M376.1,29.8c3.9,12.9,7.9,25.8,13.6,38.1c0.4,0.9,1.8,0.6,2.1-0.3c3.5-13.6,8.2-26.7,11.5-40.3
              c0.3-1.4-1.8-2-2.2-0.6c-3.3,13.6-8.1,26.8-11.5,40.3c0.7-0.1,1.4-0.2,2.1-0.3c-5.6-12.1-9.5-24.8-13.3-37.5
              C377.8,27.8,375.7,28.4,376.1,29.8L376.1,29.8z"/>
          </g>
          <g>
            <path class="day" d="M389.8,65.4c0.1,23.1,1.9,46.1,1.9,69.2c0,1.5,2.3,1.5,2.2,0c-0.1-23.1-1.9-46.1-1.9-69.2
              C392,63.9,389.8,63.9,389.8,65.4L389.8,65.4z"/>
          </g>
        </g>
        <g>
          <path class="day" d="M430.8,52.4c2.7-3-1.7-11.8-3-14.8c-2.2-5.1-8-11.6-14-8.8c-6.1,2.8-5.2,12.8-3.9,17.8
            c2.9,11.1,9.9,21,15.2,31c4.5,8.5,7.5,17.6,8.2,27.2c0.7,8.1,0.2,17.8-5.2,24.3c-2.4,2.9-6.6,4.7-10.4,4c-3.8-0.7-5.9-4.9-7.1-8.2
            c-2.2-6.1-2.9-14.9-0.1-20.9c0.6-1.3-1.3-2.5-1.9-1.1c-4.1,8.9-2.6,24.8,5.5,31c4.3,3.3,10.5,1.2,14.3-1.9
            c5.2-4.3,6.6-12.1,7.2-18.5c1.6-18.6-7.1-34.4-15.7-50.1c-4.4-8-13.7-23.3-6-31.9c4.7-5.3,11.2,5,12.7,8.7
            c0.6,1.5,3.9,9.2,2.7,10.6C428.3,51.9,429.8,53.5,430.8,52.4L430.8,52.4z"/>
        </g>
        <!-- END 'DAY' -->

        <g class="days">
          <g class="day">
            <path class="day1" d="M317.4,28.5c-2,18.7-2.2,37.6-2.6,56.4c-0.2,10.5-0.3,21,0,31.5c0.2,6-0.1,12.9,1.8,18.7
              c0.5,1.4,2.6,0.8,2.2-0.6c-1.9-5.9-1.6-13-1.7-19.1c-0.3-10.6-0.1-21.1,0.1-31.7c0.4-18.4,0.7-36.9,2.6-55.2
              C319.8,27,317.5,27.1,317.4,28.5L317.4,28.5z"/>
          </g>
          <g class="day">
            <path class="day1" d="M317.9,28.6c9.3,1.7,14.2,11,17.2,19c4.2,11.4,5.5,23.8,5.5,35.8c0.1,11.7-1.3,23.8-5.3,34.8
              c-2.7,7.4-8,16.4-17.1,15.7c-1.4-0.1-1.4,2.1,0,2.2c9,0.7,14.7-6.9,18-14.3c5.1-11.3,6.4-24.3,6.6-36.6
              c0.2-13.1-1.3-26.8-5.9-39.1c-3.1-8.5-8.8-18.1-18.5-19.8C317.1,26.1,316.5,28.3,317.9,28.6L317.9,28.6z"/>
          </g>
          <g class="day">
            <path class="day2" d="M355.6,29.4c1.8,6.6,0.6,14.7,0.2,21.4c-0.7,11.4-1.9,22.8-3.2,34.1c-1.2,10.9-2.5,21.7-3.7,32.6
              c-0.6,5.3-2.2,11.6-1.6,17c0.2,1.4,2.4,1.4,2.2,0c-0.5-5.1,0.9-11,1.5-16.1c1.3-11.1,2.6-22.3,3.8-33.4c1.3-11.6,2.5-23.3,3.2-35
              c0.4-6.7,1.5-14.5-0.3-21.1C357.4,27.4,355.2,28,355.6,29.4L355.6,29.4z"/>
          </g>
          <g class="day">
            <path class="day2" d="M355.7,30c3.2,7.6,4.6,16.2,6.3,24.3c2.4,11.4,4.4,22.8,6.4,34.2c1.6,9.1,3.1,18.1,4.7,27.2
              c0.3,1.9,0.6,3.7,1,5.6c0.8,3.6,0.8,8,2.5,11.3c0.2,0.3,0.6,0.6,1,0.6c0,0,0.1,0,0.1,0c0.5,0,1-0.3,1.1-0.8c0.1-0.4,0.1-0.7,0.1-1
              c0-1.5-2.2-1.4-2.2,0c0.1-1.8,2.1,1.2,1.5-1.4c-0.3-1.2-0.5-2.4-0.7-3.6c-0.4-1.9-0.7-3.9-1.2-5.8c-0.5-2.2-0.8-4.4-1.2-6.6
              c-1.6-9.4-3.2-18.8-4.8-28.2c-2-11.4-4.1-22.8-6.5-34.1c-1.6-7.6-3.1-15.6-6.1-22.8C357.1,27.5,355.1,28.7,355.7,30L355.7,30z"/>
          </g>
          <g class="day">
            <path class="day2" d="M369,87.1c-4.5,2-10,2-14.8,1.4c-1.4-0.2-1.4,2.1,0,2.2c5.2,0.7,11.1,0.5,16-1.7
              C371.4,88.4,370.3,86.5,369,87.1L369,87.1z"/>
          </g>
          <g>
            <g class="day">
              <path class="day3" d="M376.1,29.8c3.9,12.9,7.9,25.8,13.6,38.1c0.4,0.9,1.8,0.6,2.1-0.3c3.5-13.6,8.2-26.7,11.5-40.3
                c0.3-1.4-1.8-2-2.2-0.6c-3.3,13.6-8.1,26.8-11.5,40.3c0.7-0.1,1.4-0.2,2.1-0.3c-5.6-12.1-9.5-24.8-13.3-37.5
                C377.8,27.8,375.7,28.4,376.1,29.8L376.1,29.8z"/>
            </g>
            <g class="day">
              <path class="day3" d="M389.8,65.4c0.1,23.1,1.9,46.1,1.9,69.2c0,1.5,2.3,1.5,2.2,0c-0.1-23.1-1.9-46.1-1.9-69.2
                C392,63.9,389.8,63.9,389.8,65.4L389.8,65.4z"/>
            </g>
          </g>
          <g class="day">
            <path class="day4" d="M430.8,52.4c2.7-3-1.7-11.8-3-14.8c-2.2-5.1-8-11.6-14-8.8c-6.1,2.8-5.2,12.8-3.9,17.8
              c2.9,11.1,9.9,21,15.2,31c4.5,8.5,7.5,17.6,8.2,27.2c0.7,8.1,0.2,17.8-5.2,24.3c-2.4,2.9-6.6,4.7-10.4,4c-3.8-0.7-5.9-4.9-7.1-8.2
              c-2.2-6.1-2.9-14.9-0.1-20.9c0.6-1.3-1.3-2.5-1.9-1.1c-4.1,8.9-2.6,24.8,5.5,31c4.3,3.3,10.5,1.2,14.3-1.9
              c5.2-4.3,6.6-12.1,7.2-18.5c1.6-18.6-7.1-34.4-15.7-50.1c-4.4-8-13.7-23.3-6-31.9c4.7-5.3,11.2,5,12.7,8.7
              c0.6,1.5,3.9,9.2,2.7,10.6C428.3,51.9,429.8,53.5,430.8,52.4L430.8,52.4z"/>
          </g>
        </g>  

        <g>
          <!-- 'OF THE' -->
          <path class="st16" d="M251.6,149.3c0.5,0.7,0.8,1.7,0.8,2.8c0,1.2-0.3,2.2-0.9,3c-0.7,1-1.8,1.4-3.1,1.4c-1.3,0-2.2-0.4-3-1.2
            c-0.6-0.8-1-1.8-1-3c0-1.1,0.3-2.1,0.8-2.8c0.7-1,1.8-1.5,3.1-1.5C249.8,147.9,250.9,148.3,251.6,149.3z M250.6,154.5
            c0.4-0.7,0.7-1.5,0.7-2.4c0-1-0.3-1.7-0.8-2.3c-0.5-0.6-1.2-0.9-2.1-0.9c-0.8,0-1.5,0.3-2.1,0.9c-0.5,0.6-0.8,1.4-0.8,2.6
            c0,0.9,0.2,1.7,0.7,2.3c0.5,0.6,1.2,0.9,2.2,0.9C249.4,155.5,250.1,155.2,250.6,154.5z"/>
          <path class="st16" d="M255.9,148.1h5.7v1H257v2.5h4v1h-4v3.7h-1.1V148.1z"/>
          <path class="st16" d="M275.8,148.1v1H273v7.2h-1.1v-7.2h-2.8v-1H275.8z"/>
          <path class="st16" d="M278.9,148.1h1.1v3.4h4.2v-3.4h1.1v8.2h-1.1v-3.8H280v3.8h-1.1V148.1z"/>
          <path class="st16" d="M289.2,148.1h5.9v1h-4.9v2.5h4.5v0.9h-4.5v2.8h4.9v1h-6V148.1z"/>
          <!-- END 'OF THE' -->
        </g>
        <g>
          <!-- bracket left -->
          <path class="bracket" d="M28.8,222.1c-2.5-4.3-3.7-11-3.7-20.1v-38.7c0-9.7-1.1-17.9-3.3-24.5c-2.2-6.6-6.9-12.2-13.9-16.9v-4.8
            c2.7-0.5,5.1-1.9,7.2-4.3c2.1-2.4,3.9-5.4,5.4-9.1c1.5-3.7,2.7-7.8,3.5-12.4c0.8-4.6,1.2-9.3,1.2-14.1V37.8
            c0-9.1,1.2-15.7,3.7-19.8c2.5-4.1,7.1-6.2,13.7-6.2h12v4.8H43.1c-4.8,0-8.2,1.8-10.2,5.4c-2,3.6-3,10.3-3,20.2v39.2
            c0,3.5-0.3,7.3-1,11.2c-0.6,4-1.7,7.8-3.1,11.5c-1.4,3.7-3.2,6.9-5.4,9.8c-2.2,2.9-4.7,4.9-7.8,6.2c5.3,2.6,9.4,7.5,12.6,14.7
            c3.1,7.3,4.7,15.4,4.7,24.5v38.5c0,5.3,0.3,9.6,0.8,13c0.6,3.4,1.4,6.1,2.4,8c1,1.9,2.4,3.2,4.1,3.9c1.7,0.7,3.6,1.1,5.9,1.1h11.5
            v4.8h-12C35.9,228.6,31.3,226.4,28.8,222.1z"/>
        </g>
        <g>
          <!-- bracket right -->
          <path class="bracket" d="M492,18.2c2.5,4.3,3.7,11,3.7,20.1v39c0,9.7,1.1,17.9,3.3,24.6c2.2,6.7,6.9,12.3,13.9,16.7v4.8
            c-2.6,0.5-4.9,1.9-7.1,4.3c-2.2,2.4-4,5.4-5.5,9.1c-1.5,3.7-2.7,7.8-3.5,12.4c-0.8,4.6-1.2,9.3-1.2,14.1v39.2
            c0,9.1-1.2,15.7-3.7,19.8c-2.5,4.1-7.1,6.2-13.7,6.2h-12v-4.8h11.5c4.8,0,8.2-1.8,10.2-5.4c2-3.6,3-10.3,3-20.2v-39
            c0-3.5,0.3-7.3,1-11.2c0.6-4,1.7-7.8,3.1-11.5c1.4-3.7,3.2-6.9,5.4-9.8c2.2-2.9,4.7-4.9,7.8-6.2c-5.3-2.5-9.4-7.4-12.6-14.7
            c-3.1-7.3-4.7-15.4-4.7-24.5V42.6c0-5.3-0.3-9.6-0.8-13c-0.6-3.4-1.4-6.1-2.4-8c-1-1.9-2.4-3.2-4.1-3.9s-3.6-1.1-5.9-1.1h-11.5
            v-4.8h12C484.9,11.7,489.5,13.9,492,18.2z"/>
        </g>
      </g>

      <g>
        <g>
          <path class="yay" d="M68.7,151.2c-5.8-2.2-9.6-7.6-15-10.5c-1.7-0.9-3.2,1.7-1.5,2.6c5.7,3,9.5,8.5,15.7,10.8
            C69.8,154.8,70.5,151.9,68.7,151.2L68.7,151.2z"/>
        </g>
      </g>
      <g>
        <g>
          <path class="yay2" d="M62.3,174.5c-6.2-0.1-12.2-1.3-18.3-2.6c-1.9-0.4-2.7,2.5-0.8,2.9c6.3,1.4,12.6,2.6,19.1,2.7
            C64.3,177.5,64.3,174.5,62.3,174.5L62.3,174.5z"/>
        </g>
      </g>
      <g>
        <g>
          <path class="yay3" d="M61.9,199.9c-6.9,1.6-12.9,5.3-19.3,8c-1.8,0.7-1,3.6,0.8,2.9c6.4-2.7,12.5-6.5,19.3-8
            C64.6,202.4,63.8,199.5,61.9,199.9L61.9,199.9z"/>
        </g>
      </g>
      <g>
        <g>
          <path class="yay" d="M448.1,147.4c5.9-2.3,11.4-5.3,16-9.7c1.4-1.3-0.7-3.5-2.1-2.1c-4.2,4-9.3,6.9-14.7,8.9
            C445.5,145.2,446.3,148.1,448.1,147.4L448.1,147.4z"/>
        </g>
      </g>
      <g>
        <g>
          <path class="yay2" d="M463.7,172.2c6.4,0,12.8,0.5,19.1-1.4c1.8-0.6,1.1-3.5-0.8-2.9c-6,1.8-12.1,1.3-18.3,1.3
            C461.7,169.2,461.7,172.2,463.7,172.2L463.7,172.2z"/>
        </g>
      </g>
      <g>
        <g>
          <path class="yay3" d="M463.9,198.8c6.6,0.9,11.8,5.1,17.6,7.8c1.7,0.8,3.3-1.8,1.5-2.6c-6.1-2.8-11.5-7.2-18.4-8.2
            C462.8,195.6,462,198.5,463.9,198.8L463.9,198.8z"/>
        </g>
      </g>

      </svg>
    </a>
    <p>a project crafted &amp; curated by jordan deutsch &amp; vivien ilett</p>
    <p>inspired by <a href="https://thegreatdiscontent.com/100days" target="_">the great discontent / 100 days</a></p>
  </div> <!-- /.container -->
</header><!--/.header-->
