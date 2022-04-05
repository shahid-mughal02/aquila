<?php
/*
*   Main File
* 
*   @package Aquila 
*/
get_header();
?>
<div class="content">
    <?php esc_html_e( 'Content Index', 'aquila' ) ?>
</div>
<div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <?php if( have_posts( ) ): ?>
        <div class="container">
            <div class="row">
                <?php while( have_posts() ): the_post(); ?>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card">
                        <?php if(wp_get_attachment_url( get_post_thumbnail_id( get_the_ID()))): ?>
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID())); ?>"
                            class="card-img-top" alt="...">
                            <?php endif; ?>
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                            <h6 class="card-subtitle mb-2 text-muted "><?php the_date(); ?></h6>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </main>
</div>
<?php
get_footer();
?>