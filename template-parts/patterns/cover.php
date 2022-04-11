<?php
/**
 * Cover Block Pattern Template
 * 
 * @package aquila
 */
?>

<!-- wp:cover {"url":"http://localhost/WPthemeDev/wp-content/uploads/2022/04/blog-2-1.jpg","id":156,"dimRatio":50,"contentPosition":"center center","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-156" alt="" src="http://localhost/WPthemeDev/wp-content/uploads/2022/04/blog-2-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"white","fontSize":"large"} -->
                    <p class="has-text-align-center has-white-color has-text-color has-large-font-size"><?php the_title(); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center","textColor":"white"} -->
                    <p class="has-text-align-center has-white-color has-text-color"><?php the_excerpt(); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link">Blog</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div></div>
                    <!-- /wp:cover -->
