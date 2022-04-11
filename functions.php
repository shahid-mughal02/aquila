<?php
/*
 * Theme Functions
 *
 * @package Aquila
 */
if (!defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory())); //untrailingslashit => remove slash
}
if (!defined('AQUILA_DIR_URI')) {
    define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri())); //untrailingslashit => remove slash
}

require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';
require_once AQUILA_DIR_PATH . '/inc/helpers/template-tags.php';

function aquila_get_theme_instance()
{
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}
aquila_get_theme_instance();

//Remvoe Guten Block library css from loading on the frontend
// function ebavads_remove_block_styles()
// {
//     wp_dequeue_style('wp-block-library');
//     wp_dequeue_style('wp-block-library-theme');
//     wp_dequeue_style('wp-block-style'); //remove wooCommerce block css
    
// }
// add_action('wp_enqueue_scripts', 'ebavads_remove_block_styles', 100)
?>
