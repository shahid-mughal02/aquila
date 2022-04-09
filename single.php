<?php
/*
*   Single Post Template
* 
*   @package Aquila 
*/
get_header();
?>
<div class="content text-center pt-5">
    <h1>Single</h1>
    <?php esc_html_e( 'Content Index', 'aquila' ) ?>
</div>
<div id="primary">
    <div class="container py-5 mt-2 border">
        <div class="row">
            <div class="col-md-8 col-12">
            <main id="main" class="site-main mt-5" role="main">
        <div class="container">
            <?php if( have_posts( ) ): ?>
            <div class="row">
                <div class="col-12">
                    <?php get_template_part( 'template-parts/content' ); ?>
                </div>
            </div>
            <?php else: ?>
                <?php get_template_part( 'template-parts/content-none' ); ?>
                <?php endif; 
        previous_post_link();
        next_post_link();
        ?>
        </div>
    </main>
            </div>
            <div class="col-md-4 col-12">
<?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    
</div>
<?php
get_footer();
?>