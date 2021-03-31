<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 18.03.18
 * Time: 21:39
 */

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5aaec7ed75259',
		'title' => '7E Settings',
		'fields' => array(
			array(
				'key' => 'field_5aaecf96bb736',
				'label' => 'Seven Elohim Menü Seite',
				'name' => 'seven_elohim_menu_seite',
				'type' => 'page_link',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
				),
				'taxonomy' => array(
				),
				'allow_null' => 0,
				'allow_archives' => 0,
				'multiple' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => '7e-general-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

endif;