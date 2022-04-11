<?php
/*
 * Block Patterns
 *
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Block_Patterns
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
        // do_action('init', [$this, 'register_block_patterns']);
        // do_action('init', [$this, 'register_block_patterns_categories']);
    }

    public function register_block_patterns()
    {

        if (function_exists('register_block_pattern')) {

            /**
             * Cover Pattern
             */
            $cover_content = $this->get_pattern_content('template-parts/patterns/cover');

            register_block_pattern(
                'aquila/cover',
                array(
                    'title' => __('Aquila Cover', 'aquila'),
                    'description' => __('Aquila Cover Block With Image And Text', 'aquila'),
                    'categories' => ['cover'],
                    'content' => $cover_content,
                )
            );
        }
    }

    public function get_pattern_content($template_path)
    {
        //start
        //this stops from echoing something
        ob_start();

        get_template_part($template_path);

        $pattern_content = ob_get_contents();
        ob_end_clean();
        //end
        return $pattern_content;
    }

    public function register_block_patterns_categories()
    {
        $pattern_categories = array(
            'cover' => __('Cover', 'aquila'),
            'carousel' => __('Carousel', 'aquila'),
        );

        if (!empty($pattern_categories) && is_array($pattern_categories)) {
            foreach ($$pattern_categories as $$pattern_category => $pattern_category_label) {
                register_block_patterns_category(
                    $pattern_categories,
                    array('label' => $pattern_category_label)
                );
            }
        }
    }
}
