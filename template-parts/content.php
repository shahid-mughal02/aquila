<?php
/**
 * Content Template
 *
 * @package Aquila
 */
?>

<article id="post-<?php the_ID();?>" <?php post_class('mb-5');?>>
    <?php get_template_part('template-parts/components/blog/entry-header');?>
    <?php get_template_part('template-parts/components/blog/entry-meta');?>
    <?php get_template_part('template-parts/components/blog/entry-content');?>
    <?php get_template_part('template-parts/components/blog/entry-footer');?>
</article>