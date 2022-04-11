<?php
/*
 * Enqueue Theme Assets
 *
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //actions and filters
        /**
         * Actions
         *
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        //Register Styles
        wp_register_style('style-css', get_stylesheet_uri(), null, filemtime(AQUILA_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css', null, false, 'all');

        //Enqueue Styles
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }

    public function register_scripts()
    {
        //Register Scripts
        wp_register_script('main-js', AQUILA_DIR_URI . '/assets/src/js/main.js', ['jquery'], filemtime(AQUILA_DIR_PATH . '/assets/src/js/main.js'), true);
        wp_register_script('bootstrap-js', AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.min.js', null, false, true);

        //Enqueue Sscript
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
}
