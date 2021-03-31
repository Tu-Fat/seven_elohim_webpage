<?php

/**
 * ACF FIELDS INCLUDES
 */

require_once 'acf/options_pages.php';
require_once 'acf/projects_acf_fields.php';
require_once 'acf/seven_elohim_settings.php';
require_once 'acf/seven_elohim_singlepage.php';
require_once 'acf/partners_acf_fields.php';

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
    register_nav_menu( 'primary', __( 'Primary Menu', 'sevenelohim' ) );
}

add_theme_support( 'post-thumbnails', array( 'post', 'page', 'projects', 'partners' ) );

add_theme_support( 'title-tag' );

if ( ! function_exists( '_wp_render_title_tag' ) ) {
    function theme_slug_render_title() {
        ?>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php
    }
    add_action( 'wp_head', 'theme_slug_render_title' );
}

add_action( 'after_setup_theme', 'sevenelohim_theme_setup' );
function sevenelohim_theme_setup() {
    add_image_size( '2000w', 2000 ); // 300 pixels wide (and unlimited height)
}

function kb_svg ( $svg_mime ){
    $svg_mime['svg'] = 'image/svg+xml';
    return $svg_mime;
}

add_filter( 'upload_mimes', 'kb_svg' );