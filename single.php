<?php
/** 
* Post Template 
* 
* @package Aquila
*/
get_header();
?>
<div class="">
    <h1>Post</h1>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <p class="fw-bolder"><b><?php the_excerpt(); ?></b></p>
</div>
<?php get_footer(); ?>