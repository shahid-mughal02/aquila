<?php
/*
 * Customizer Theme Options
 *
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Customizer
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
        add_action('customize_register', [$this, 'aquila_customize_register']);
    }

    public function aquila_customize_register($wp_customize)
    {
        $wp_customize->add_panel('aquila_settings', array(
            'title' => 'Aquila Settings',
            'description' => 'This is aquila theme settings',
            'priority' => 10,
        ));

        $wp_customize->add_section('aquila_colors', array(
            'title' => 'Colors',
            'panel' => 'aquila_settings',
        ));

        $wp_customize->add_setting('aquila_nav_bg_color', array(
            'type' => 'theme_mod', //or option
            'capability' => 'edit_theme_options',
            'default' => '',
            'transport' => 'refresh', //postMessage
            'sanitize_callback' => 'sanitize_hex_color',
        ));

        $wp_customize->add_control('aquila_nav_bg_color', array(
            'label' => _('Menu Background'),
            'type' => 'color',
            'section' => 'aquila_colors',
        ));

        $wp_customize->add_section('aquila_spacing', array(
            'title' => 'Post Spacing',
            'panel' => 'aquila_settings',
        ));

        $wp_customize->add_setting('aquila_post_spacing', array(
            'type' => 'theme_mod', //or option
            'capability' => 'edit_theme_options',
            'default' => '',
            'transport' => 'refresh', //postMessage
            'sanitize_callback' => 'esc_attr',
        ));

        $wp_customize->add_control('aquila_post_spacing', array(
            'label' => _('Post Spacing'),
            'type' => 'range',
            'section' => 'aquila_spacing',
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
                'step' => 2
              ),
        ));
    }
}
