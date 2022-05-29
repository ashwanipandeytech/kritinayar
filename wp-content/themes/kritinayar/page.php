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
		
	} elseif (is_page('terms-and-conditions')) {
		get_template_part('terms');
	
	}
	elseif (is_page('disclaimer')) {
		get_template_part('disclaimer');
	
	} 
	elseif (is_page('refund-policy')) {
		get_template_part('refundpolicy');
	
	} 
	elseif (is_page('privacy-policy')) {
		get_template_part('privacypolicy');
	
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