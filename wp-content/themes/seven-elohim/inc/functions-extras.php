<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 26.02.18
 * Time: 23:53
 */


// ### POSTTYPES ###

function svne_projects_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Projects', 'Post Type General Name', 'sevenelohim'),
        'singular_name' => _x('Project', 'Post Type Singular Name', 'sevenelohim'),
        'menu_name' => __('Projects', 'sevenelohim'),
        'parent_item_colon' => __('Parent Project', 'sevenelohim'),
        'all_items' => __('All Projects', 'sevenelohim'),
        'view_item' => __('View Project', 'sevenelohim'),
        'add_new_item' => __('Add New Project', 'sevenelohim'),
        'add_new' => __('Add New', 'sevenelohim'),
        'edit_item' => __('Edit Project', 'sevenelohim'),
        'update_item' => __('Update Project', 'sevenelohim'),
        'search_items' => __('Search Project', 'sevenelohim'),
        'not_found' => __('Not Found', 'sevenelohim'),
        'not_found_in_trash' => __('Not found in Trash', 'sevenelohim'),
    );

    $args = array(
        'label' => __('projects', 'sevenelohim'),
        'description' => __('All Projects', 'sevenelohim'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'taxonomies' => array('category'),

        'hierarchical' => false, // Like Posts
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    register_post_type('projects', $args);

}
add_action('init', 'svne_projects_post_type', 0);



function svne_partners_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Partners', 'Post Type General Name', 'sevenelohim'),
        'singular_name' => _x('Partners', 'Post Type Singular Name', 'sevenelohim'),
        'menu_name' => __('Partners', 'sevenelohim'),
        'parent_item_colon' => __('Parent Partner', 'sevenelohim'),
        'all_items' => __('All Partners', 'sevenelohim'),
        'view_item' => __('View Partner', 'sevenelohim'),
        'add_new_item' => __('Add New Partner', 'sevenelohim'),
        'add_new' => __('Add New', 'sevenelohim'),
        'edit_item' => __('Edit Partner', 'sevenelohim'),
        'update_item' => __('Update Partner', 'sevenelohim'),
        'search_items' => __('Search Partner', 'sevenelohim'),
        'not_found' => __('Not Found', 'sevenelohim'),
        'not_found_in_trash' => __('Not found in Trash', 'sevenelohim'),
    );

    $args = array(
        'label' => __('Partners', 'sevenelohim'),
        'description' => __('All Partners', 'sevenelohim'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'taxonomies' => array('categories'), // TODO

        'hierarchical' => false, // Like Posts
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    register_post_type('partners', $args);
}

add_action('init', 'svne_partners_post_type', 0);


function getSevenElohimPageUrl() {

    $seven_elohim_page = get_field('seven_elohim_menu_seite', 'option');
    if(!$seven_elohim_page) {
        $seven_elohim_page = '#';
    }

    return $seven_elohim_page;
}

function composeRedirURL($category)  {
	// $base_url = get_site_url() . '/projects';
	// $redirURL = isset($_GET['category']) &&  $_GET['category'] == $category ? $base_url : $base_url . '?category=' . $category;

	if(isset($_GET['category']) && (int) $_GET['category'] === $category) {
		$category = -1;
	}

	$redirURL = add_query_arg( array(
		'category' => $category,
	), $_SERVER['REQUEST_URI'] );
	return esc_url($redirURL);
}