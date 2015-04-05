<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

  </div> <!-- /.container -->
	  <a class="toTop" href="#"><img src="<?php echo get_bloginfo('template_directory');?>/images/toTop.svg" alt=""></a>
</div> <!-- /.main -->

<?php get_footer(); ?>