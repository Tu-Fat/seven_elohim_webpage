<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 13.04.18
 * Time: 21:39
 */

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5ace4627d9834',
		'title' => 'Seven Elohim Single Page',
		'fields' => array(
			array(
				'key' => 'field_5ace46336f441',
				'label' => 'Style Selector',
				'name' => 'style_selector',
				'type' => 'flexible_content',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layouts' => array(
					'5ad6200512807' => array(
						'key' => '5ad6200512807',
						'name' => 'header',
						'label' => 'Überschrift ',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5ad6200512808',
								'label' => 'Text',
								'name' => 'text',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
						),
						'min' => '',
						'max' => '',
					),
					'5ace47766b3cf' => array(
						'key' => '5ace47766b3cf',
						'name' => 'text-image',
						'label' => 'Text - Bild Gruppe',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5ace47868d14d',
								'label' => 'Text',
								'name' => 'text',
								'type' => 'textarea',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '50',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'rows' => '',
								'new_lines' => '',
							),
							array(
								'key' => 'field_5ace47aa8d14e',
								'label' => 'Bild',
								'name' => 'image',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '50',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'id',
								'preview_size' => 'thumbnail',
								'library' => 'all',
								'min_width' => '',
								'min_height' => '',
								'min_size' => '',
								'max_width' => '',
								'max_height' => '',
								'max_size' => '',
								'mime_types' => '',
							),
						),
						'min' => '',
						'max' => '',
					),
					'5ace47c58d14f' => array(
						'key' => '5ace47c58d14f',
						'name' => 'image-text',
						'label' => 'Bild - Text Gruppe',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5ace47c58d151',
								'label' => 'Bild',
								'name' => 'image',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '50',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'id',
								'preview_size' => 'thumbnail',
								'library' => 'all',
								'min_width' => '',
								'min_height' => '',
								'min_size' => '',
								'max_width' => '',
								'max_height' => '',
								'max_size' => '',
								'mime_types' => '',
							),
							array(
								'key' => 'field_5ace47c58d150',
								'label' => 'Text',
								'name' => 'text',
								'type' => 'textarea',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '50',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'rows' => '',
								'new_lines' => '',
							),
						),
						'min' => '',
						'max' => '',
					),
					'5ace47f28d155' => array(
						'key' => '5ace47f28d155',
						'name' => 'image',
						'label' => 'Bild Gruppe',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5ace47f28d156',
								'label' => 'Bild',
								'name' => 'image',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'id',
								'preview_size' => 'medium',
								'library' => 'all',
								'min_width' => '',
								'min_height' => '',
								'min_size' => '',
								'max_width' => '',
								'max_height' => '',
								'max_size' => '',
								'mime_types' => '',
							),
						),
						'min' => '',
						'max' => '',
					),
					'5ace47d88d152' => array(
						'key' => '5ace47d88d152',
						'name' => 'text',
						'label' => 'Text Gruppe',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5ace47d88d154',
								'label' => 'Text',
								'name' => 'text',
								'type' => 'textarea',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'rows' => '',
								'new_lines' => '',
							),
						),
						'min' => '',
						'max' => '',
					),
					'5ad4dbfafb062' => array(
						'key' => '5ad4dbfafb062',
						'name' => 'all_partners',
						'label' => 'Alle Partner',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5ad4dc0ffb063',
								'label' => 'Partner',
								'name' => '',
								'type' => 'message',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'message' => 'Alle Partner werden angezeigt',
								'new_lines' => 'wpautop',
								'esc_html' => 0,
							),
						),
						'min' => '',
						'max' => '',
					),
				),
				'button_label' => 'Inhalt hinzufügen',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_template',
					'operator' => '==',
					'value' => 'templates/t_seven-elohim-page.php',
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