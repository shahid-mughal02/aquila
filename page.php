<?php
/** 
* Page Template 
* 
* @package Aquila
*/
get_header();
?>
<div class="">
    <h1>Page</h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, magnam.
</div>
<?php if( is_home()): ?>
<div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <?php if( have_posts( ) ): ?>
        <div class="container">
            <div class="row">
                <?php while( have_posts() ): the_post(); ?>
                <div class="col-md-3 col-sm-4 col-6">
                    <?php get_template_part( 'template-parts/content' ); ?>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php else: ?>
            <?php get_template_part( 'template-parts/content-none' ); ?>
        <?php endif; ?>
    </main>
</div>
<?php endif; ?>
<?php the_content(); ?>
<?php get_footer(); ?>