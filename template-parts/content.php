<?php
/** 
* Content Template
* 
* @package Aquila
*/
?>
<div class="card">
    <?php if(wp_get_attachment_url( get_post_thumbnail_id( get_the_ID()))): ?>
    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID())); ?>" class="card-img-top"
        alt="...">
    <?php endif; ?>
    <div class="card-body">
        <a href="<?php the_permalink(); ?>">
            <h5 class="card-title">
                <?php the_title(); ?>
            </h5>
        </a>
        <h6 class="card-subtitle mb-2 text-muted ">
            <?php the_date(); ?>
        </h6>
        <p class="card-text">
            <?php the_excerpt(); ?>
        </p>
    </div>
</div>