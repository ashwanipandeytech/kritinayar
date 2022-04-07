<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage OCC 
 * @since OCC
 */

get_header(); ?>

<div id="main-content" class="main-content">

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

    <?php
      if (is_front_page()) :
        get_template_part( 'content', get_post_format() );
    
     
      else :
        // If no content, include the "No posts found" template.
        get_template_part( 'detail' );

      endif;
    ?>

    </div><!-- #content -->
  </div><!-- #primary -->

</div><!-- #main-content -->

<?php get_footer(); ?>


