<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage CONCEPTFIT
 * @since CONCEPTFIT
 */
get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<?php

				while ( have_posts() ) : the_post();		
					get_template_part( 'detail', get_post_format() );

				endwhile;
				?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

	
<?php get_footer(); ?>


