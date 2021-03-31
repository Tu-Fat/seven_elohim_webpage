<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 18.04.18
 * Time: 04:31
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Seven Elohim Settings',
		'menu_title'	=> '7E Settings',
		'menu_slug' 	=> '7e-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}