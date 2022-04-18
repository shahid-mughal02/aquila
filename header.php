<?php
/**
 * Header template
 *
 *@package Aquila
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <style>
        .custom-logo{
            width: 50px;
        }
        .header-bg-color{
            background-color: <?php echo get_theme_mod( 'aquila_nav_bg_color'); ?> !important;
        }
        .custom_sapcing{
            gap: <?php echo get_theme_mod( 'aquila_post_spacing'); ?>px !important;
        }
    </style>
</head>

<body <?php body_class('hello-class');?>>
    <?php if (function_exists('wp_body_open')):
    wp_body_open();
endif;?>

    <div id="page" class="site">
        <header id="mastheade" class="site-header" role="banner">
            <?php get_template_part('template-parts/header/nav');?>
        </header>
        <div id="content" class="site-content">
            <?php //get_template_part('template-parts/content', 'post'); ?>
        </div>
    </div>