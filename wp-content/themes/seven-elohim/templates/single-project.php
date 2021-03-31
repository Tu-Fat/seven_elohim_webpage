<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 04.03.18
 * Time: 23:45
 */

/*
Template Name: Einzelnes Projekt
*/
get_header();

?>

<div id="primary">
    <div class="main_content">
        <?php
        get_template_part('template-parts/projects/p_project', 'single');
        ?>
    </div>
</div>

<?php

get_footer();