<?php

/**
 * Define Constants
 */

 define('COMPLIANCE__THEME_DIR', trailingslashit(get_stylesheet_directory()));
 //require_once(PROVOST_NEWS_THEME_DIR . 'acf-blocks/blocks.php'); //acf blocks


/**
 * Enqueue styles
 */
function enqueue_parent_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('provost-news-style', get_stylesheet_directory_uri() . '/assets/css/compliance.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles'); // add parent style