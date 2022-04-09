<?php
/*
*   Main File
* 
*   @package Aquila 
*/
get_header();
?>
<div class="content">
    <h1>Index</h1>
    <?php esc_html_e( 'Content Index', 'aquila' ) ?>
</div>
<?php if( is_home()): ?>
<div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <div class="container">
        <?php if( have_posts( ) ): ?>
            <div class="row">
                <?php while( have_posts() ): the_post(); ?>
                <div class="col-md-3 col-sm-4 col-6">
                    <?php get_template_part( 'template-parts/content' ); ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php else: ?>
                <?php get_template_part( 'template-parts/content-none' ); ?>
                <?php endif;
        aquila_pagination();
        ?>
        </div>
    </main>
</div>
<?php endif; ?>
<?php the_content(); ?>
<?php
get_footer();
?>