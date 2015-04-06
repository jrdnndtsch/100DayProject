<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="contentSingle">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-meta">
            <p><?php echo esc_attr(); echo get_the_date(); ?></p>
          </div><!-- .entry-meta -->

          <p class="desc"><?php echo the_field('short_desc') ?></p>

          <?php echo get_the_post_thumbnail($post_id, 'bigSquare'); ?>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
           
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation clearfix">
          <p class="nav-previous"><?php previous_post_link('%link', '&#8701; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &#8702;') ?></p>
         
        </div><!-- #nav-below -->

       

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>