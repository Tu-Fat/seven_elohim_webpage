<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 08.11.17
 * Time: 17:37
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo get_template_directory_uri() ?>/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="194x194"
          href="<?php echo get_template_directory_uri() ?>/favicons/favicon-194x194.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?php echo get_template_directory_uri() ?>/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_template_directory_uri() ?>/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/favicons/manifest.json">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/favicons/safari-pinned-tab.svg"
          color="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage"
          content="<?php echo get_template_directory_uri() ?>/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#000000">

    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php

?>

<nav>

	<?php
	    wp_nav_menu( array(
	            'theme_location' => 'primary',
                'menu_id' => 'header-menu',
                'container_class' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
            )
        );
	?>

    <div class="header">
        <div class="burger-container">
            <div id="burger">
                <div class="bar topBar"></div>
                <div class="bar btmBar"></div>
            </div>
        </div>
        <div class="mobile-menu">
	        <?php
	        wp_nav_menu( array(
			        'theme_location' => 'primary',
			        'menu_id' => 'header-menu-mobile',
			        'container_class' => '',
			        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
		        )
	        );
	        ?>
        </div>
    </div>
    <div class="mobile-menu-darken"></div>
</nav>

<div class="page-wrapper">
