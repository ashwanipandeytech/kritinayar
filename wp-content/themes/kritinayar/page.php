<?php
/**
 * The template for displaying all single page and attachments
 *
 * @package WordPress
 * @subpackage OCC
 * @since OCC
 */

get_header();?>

<div id="main-content" class="main-content">

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <?php
// Start the Loop.

if (is_category() || is_front_page()) {
	while (have_posts()): the_post();
		get_template_part('home', get_post_format());
	endwhile;

} else {

	if (is_page('about-us')) {
		get_template_part('about');
		
	} 
	else if (is_page('contact')) {
		get_template_part('contact');
		
	} 
	else if (is_page('sales')) {
		get_template_part('sales');
		
	} elseif (is_page('service-2')) {
		get_template_part('service-2');
	
	}
	elseif (is_page('service-3')) {
		get_template_part('service-3');
	
	} 
	elseif (is_page('service-4')) {
		get_template_part('service-4');
	
	} 
	elseif (is_page('service-5')) {
		get_template_part('service-5');
	
	} 
	elseif (is_page('service-6')) {
		get_template_part('service-6');
	
	} 
	elseif (is_page('service-7')) {
		get_template_part('service-7');
	
	} 
	elseif (is_page('service-8')) {
		get_template_part('service-8');
	
	}  
	
	else {
		get_template_part('404.php');
	}

}

?>

        </div><!-- #content -->
    </div><!-- #primary -->
</div><!-- #main-content -->
<?php get_footer();?>