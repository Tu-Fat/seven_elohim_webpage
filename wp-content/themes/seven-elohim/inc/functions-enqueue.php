<?php

function sevenelohim_scripts() {

    // remove wordpress jquery
    wp_deregister_script('jquery');
    // register new jquery
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.2.1');
    wp_enqueue_script('jquery');


    wp_enqueue_script( 'sevenelohim-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'swipe-detect', get_template_directory_uri() . '/js/jquery_detect_swipe.min.js', array('jquery'), '2.1.1', true );
    wp_enqueue_script( 'sevenelohim-bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '4.0.0', true );

    wp_enqueue_style( 'fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	 wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', false,'4.0.0' );

    // wp_enqueue_style( 'fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
     wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap_css'), '1.0.0' );

    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/bootstrap.min.css', '4.0.0' );

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // NEW
    wp_enqueue_style( 'seven-new', get_template_directory_uri() .'/css/seven_new.css', array('featherlight-css','featherlight-gallery-css'));
    wp_enqueue_script( 'main_functions', get_template_directory_uri() . '/js/main_functions.js', array('jquery','featherlight-js','featherlight-gallery-js'), '1.0.0', true );
   
    // FEATHERLIGHT
    wp_enqueue_style( 'featherlight-css', get_template_directory_uri() .'/css/featherlight.css' );
    wp_enqueue_style( 'featherlight-gallery-css', get_template_directory_uri() .'/css/featherlight.gallery.css' );
    wp_enqueue_script( 'featherlight-js', get_template_directory_uri() . '/js/featherlight.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'featherlight-gallery-js', get_template_directory_uri() . '/js/featherlight.gallery.js', array('jquery'), '1.0.0', true );

	
}
add_action('wp_enqueue_scripts', 'sevenelohim_scripts');
