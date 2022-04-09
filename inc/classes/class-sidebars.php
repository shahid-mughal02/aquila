<?php
/*
 * Theme Sidebar
 *
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Sidebars
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
        add_action('widgets_init', [$this, 'custom_registers_sidebars']);
        add_action('widgets_init', [$this, 'register_clock_widget']);
    }

    public function custom_registers_sidebars()
    {
        register_sidebar(
            array(
                'id' => 'sidebar',
                'name' => __('Sidebar', 'aquila'),
                'description' => __('This is the sidebar of my website.', 'aquila'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );
        /* register_sidebars(4, array(
            'name' => __('Footer %d', 'aquila'),
            'id' => 'footer',
            'description' => __('Add anything inside footer widget.', 'aquila'),
            'class' => 'footer-widget',
            'before_title' => '<h1>',
            'after_title' => '</h1>',
        )); */
    }

    public function register_clock_widget(){
        register_widget('AQUILA_THEME\Inc\Clock_Widget');
    }
}
