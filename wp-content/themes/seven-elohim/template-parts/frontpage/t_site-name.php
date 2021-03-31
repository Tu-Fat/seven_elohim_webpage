<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 01.02.18
 * Time: 17:38
 */

$categories = displayAllCategories();

echo '<ul class="menu-list">
        '. $categories .'
    </ul>';

if ( is_home() && ! is_front_page() ) : ?>
    <header class="page-header">
        <h1 class="page-title"><?php single_post_title(); ?></h1>
    </header>
<?php else : ?>
    <header class="page-header">
        <h2 class="page-title"><a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo(); ?></a></h2>
    </header>
<?php endif; ?>