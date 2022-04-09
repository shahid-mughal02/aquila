<?php
/** 
* Template for post entry header
* 
* @package aquila
*/

$the_post_id = get_the_ID();
$hide_title = get_post_meta( $the_post_id, '_hide_page_title', true );
$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );
$heading_class = ! empty( $hide_title ) && 'yes' === $hide_title ? 'hide' : '';
?>

<?php if( $has_post_thumbnail ): ?>
<header>
    <div class="entry-image mb-3">
        <?php if( is_single() ): ?>
            <?php
            the_post_custom_thumbnail(
                $the_post_id,
                'featured-thumbnail',
                [
                    'size' => '(max-width: 560px) 260px, 170px',
                    'class' => 'attachement-featured-large size-featured-image'
                ]
                );
            ?>
        <?php else: ?>
            <a href="<?php echo esc_url( the_permalink() ); ?>">
            <?php
            the_post_custom_thumbnail(
                $the_post_id,
                'featured-thumbnail',
                [
                    'size' => '(max-width: 560px) 260px, 170px',
                    'class' => 'attachement-featured-large size-featured-image'
                ]
                );
            ?>
        </a>
        <?php endif; ?>
    </div>
    <?php 
    //Title
    if( is_single() || is_page() ):
        printf(
            '<h1 class=""page-title text-dark %1$s">%2$s</h1>',
            esc_attr( $heading_class ),
            wp_kses_post( get_the_title() )
        );
    else:
        printf(
            '<h2 class="entry-title mb-3"><a href="%1$s" class="text-success text-decoration-none">%2$s</a></h2>',
            esc_url( get_the_permalink() ),
            wp_kses_post( get_the_title() )
        );
    endif;
    ?>
</header>
<?php endif; ?>
