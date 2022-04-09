<?php
/**
 * The sidebar containing the main widget area
 * 
 * @package Aquila
 */
?>
<?php if( is_active_sidebar('sidebar') ): ?>
<aside id="sidebar" role="complementory">
    <?php dynamic_sidebar('sidebar'); ?>
</aside>
<?php endif; ?>