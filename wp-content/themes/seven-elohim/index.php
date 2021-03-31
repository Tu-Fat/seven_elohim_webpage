<?php
get_header();
?>

<div id="primary" class="container content-area">
  <div class="row" id="main" class="site-main" role="main">
      <div class="col-md-12 left-menu nav_content_alt">
          <?php get_template_part( 'template-parts/frontpage/t_site-name'); ?>

      </div>
      <div class="col-md-8 main_content">
          <?php
          if ( have_posts() ) :

              while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/post/content', get_post_format() );

              endwhile;

          else :

              get_template_part( 'template-parts/post/content', 'none' );

          endif;
          ?>

          <!-- Add the pagination functions here. -->

          <div class="pagination-container">
              <div class="nav-previous alignleft"><?php next_posts_link( '&laquo; Older posts' ); ?></div>
              <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts &raquo;' ); ?></div>
          </div>
      </div>
      <div class="col-md-4 right-menu nav_content">
          <?php get_template_part( 'template-parts/frontpage/t_site-name'); ?>
      </div>
  </div>
    <script>
       // var documentHeight = $(document).height();
       // $('.logo-container').height(documentHeight);
    </script>
<?php
get_footer();