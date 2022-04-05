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

function aquila_get_theme_instance()
{
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}
aquila_get_theme_instance();
// echo '<pre>';
// print_r(AQUILA_DIR_PATH);
// wp_die();

function aquila_enqueue_scripts()
{
    
    
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts')
?>
