<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Influence_Blog
 */

if ( ! is_active_sidebar( 'influence-blog-sidebar' ) ) {
	return;
}
?>

<div class="<?php influence_blog_sidebar_class(); ?>">
    <aside id="secondary" class="secondary-widget-area">
        <?php dynamic_sidebar( 'influence-blog-sidebar' ); ?>
    </aside><!-- // aside -->
</div><!--side-bar col-3-->