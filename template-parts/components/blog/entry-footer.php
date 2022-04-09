<?php
/**
 * Template for post entry footer
 *
 * @package aquila
 */
$the_post_ID = get_the_ID();
$artical_terms = wp_get_post_terms($the_post_ID, array('category', 'post_tag'));
if (empty($artical_terms) || !is_array($artical_terms)) {
    return;
}
?>
<div class="entry-footer mt-3">
    <?php foreach ($artical_terms as $artical_term): ?>
        <button class="border-0 bg-light mb-2 me-2">
            <a class="btn btn-sm btn-outline-secondary" href="<?php echo esc_url(get_term_link($artical_term)); ?>">
            <?php echo esc_html($artical_term->name); ?>
            </a>
        </button>
        <?php endforeach;?>
</div>