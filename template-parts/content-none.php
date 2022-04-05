<?php
/** 
* Content-None Template
* 
* @package Aquila
*/
?>
<h1 class="text-center">
    <?php esc_html_e( 'You dont have any Posts', 'aquila' ); ?>
</h1>
<?php if( is_home() &&  current_user_can( 'publish_posts' )):?>
    <p class="lead">
        <?php
        printf(
            wp_kses( 
                __('Ready to Publish Your First Post? <a href="%s">Get Started Here</a>', 'aquila'),
                [
                    'a' => [
                        'href' => []
                    ]
                    ]),
                    esc_url( admin_url('post-new.php'))
                    );
        ?>
    </p>
<?php else: ?>
    <p><?php esc_html_e( 'Sorry But Nothing Match Your Search Item' ); ?></p>
    <?php get_search_form(); ?>
<?php endif; ?>
