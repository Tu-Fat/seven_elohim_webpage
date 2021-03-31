<?php

/**
 * Handy function to print variables/arrays/objects to the View.
 * Looks just nice!
 *
 * @param $data
 */
function epr($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

/**
 * Handy function to print advanced variables/arrays/objects to the View.
 * Doesn't look that good, but gives more info.
 *
 * @param $data
 */
function evd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

/**
 * Print some basic Hello World to the View. Helps you to know, if this file is working.
 *
 * @param bool $echo
 * @return string
 */
function helloWorld($echo = true) {
    $message = 'Hello World';
    if ($echo === true) {
        echo $message;
    } else {
        return $message;
    }
}

/**
 * @deprecated 0.0.1
 *
 * @return array
 */
function getAllCategories() {
    trigger_error("Deprecated function called.", E_USER_NOTICE);
    $args = array(
        'type'                     => 'post',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'hide_empty'               => 1,
        'hierarchical'             => 1,
        'exclude'                  => '',
        'include'                  => '',
        'number'                   => '',
        'taxonomy'                 => 'category',
        'pad_counts'               => false );

    return get_categories( $args );
}

/**
 * @deprecated 0.0.1
 *
 * @return string
 */
function displayAllCategories() {
    trigger_error("Deprecated function called.", E_USER_NOTICE);
    $cats = getAllCategories();
    $output = '';

    foreach ($cats as $index => $cat) {

        $output .= '
        <li>
            <a href="'.get_category_link($cat).'">'.$cat->name.'</a>
        </li>';
    }

    return $output;
}

