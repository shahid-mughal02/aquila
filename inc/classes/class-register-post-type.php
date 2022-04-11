<?php
/*
 * Regiser Post Type
 *
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Register_Post_Type
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
        add_action('init', [$this, 'create_movie_cpt'], 0);
    }
    // Register Custom Post Type Movie
    public function create_movie_cpt()
    {

        $labels = array(
            'name' => _x('Movies', 'Post Type General Name', 'aquila'),
            'singular_name' => _x('Movie', 'Post Type Singular Name', 'aquila'),
            'menu_name' => _x('Movies', 'Admin Menu text', 'aquila'),
            'name_admin_bar' => _x('Movie', 'Add New on Toolbar', 'aquila'),
            'archives' => __('Movie Archives', 'aquila'),
            'attributes' => __('Movie Attributes', 'aquila'),
            'parent_item_colon' => __('Parent Movie:', 'aquila'),
            'all_items' => __('All movies', 'aquila'),
            'add_new_item' => __('Add New Movie', 'aquila'),
            'add_new' => __('Add New', 'aquila'),
            'new_item' => __('New Movie', 'aquila'),
            'edit_item' => __('Edit Movie', 'aquila'),
            'update_item' => __('Update Movie', 'aquila'),
            'view_item' => __('View Movie', 'aquila'),
            'view_items' => __('View movies', 'aquila'),
            'search_items' => __('Search Movie', 'aquila'),
            'not_found' => __('Not found', 'aquila'),
            'not_found_in_trash' => __('Not found in Trash', 'aquila'),
            'featured_image' => __('Featured Image', 'aquila'),
            'set_featured_image' => __('Set featured image', 'aquila'),
            'remove_featured_image' => __('Remove featured image', 'aquila'),
            'use_featured_image' => __('Use as featured image', 'aquila'),
            'insert_into_item' => __('Insert into Movie', 'aquila'),
            'uploaded_to_this_item' => __('Uploaded to this Movie', 'aquila'),
            'items_list' => __('movies list', 'aquila'),
            'items_list_navigation' => __('movies list navigation', 'aquila'),
            'filter_items_list' => __('Filter movies list', 'aquila'),
        );
        $args = array(
            'label' => __('Movie', 'aquila'),
            'description' => __('The Movies', 'aquila'),
            'labels' => $labels,
            'menu_icon' => 'dashicons-video-alt',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
            'taxonomies' => array(),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'exclude_from_search' => false,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type('movie', $args);
    }
}
