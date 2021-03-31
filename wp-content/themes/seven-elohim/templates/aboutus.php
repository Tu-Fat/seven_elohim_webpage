<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 04.03.18
 * Time: 23:45
 */

/*
Template Name: About Us
*/
get_header();

?>

<div id="primary">
    <div class="main_content">
    <div id="about">
        <div class="about-container">
            <?php
            get_template_part('template-parts/page-parts/logo_aboutus');
            ?>
            <div id="about-text">
	            <?php echo apply_filters('the_content', get_post_field('post_content', $post->ID)); ?>
            </div>
        </div>
    </div>

    </div>
</div>

<?php

get_footer();