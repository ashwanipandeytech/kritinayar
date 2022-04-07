<?php
/**
 * Template Name: Service Page
 * The Service page template file
 */
get_header();
?>

<section class="no-padding sh-single-services">
    <div class="sub-header desk-pdt-60">


        <span>WHAT WE DO</span>
        <h3>Roc Matters</h3>
        <ol class="breadcrumb">
            <li>
                <a href="/"><i class="fa fa-home"></i> HOME </a>
            </li>
            <li>
                <a href="/service-8"> SERVICES </a>
            </li>
            <li class="active">Roc Matters</li>
        </ol>

    </div>
</section>
<!-- /Sub HEader -->

<section>
    <div class="container">
        <div class="row row-reverse">
            <?php get_template_part('sidebar-left'); ?>
            
        </div>
    </div>
</section>
<?php get_template_part('newsletter'); ?>