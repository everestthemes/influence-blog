<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Influence_Blog
 */

get_header();

$sidebar_col = 3;

$breadcrumb = influence_blog_get_mod( 'searchpage_content_options_breadcrumb_toggle' );

$sidebar_position = influence_blog_get_mod( 'searchpage_content_options_sidebar_position' );

$sidebar_area = influence_blog_get_mod( 'searchpage_content_options_widget_area_select' );

$content_col = 9;

$sticky = apply_filters( 'influence_blog_searchpage_sticky_status', false );
?>
<div class="archive-page-wrap lrg-padding">
    <div class="container">
        <?php influence_blog_breadcrumb( $breadcrumb ); ?>
        <div class="row">
            <?php influence_blog_blogpage_get_sidebar( $sidebar_position, $sidebar_area, $sidebar_col, $sticky, 'left' ); ?>
            <div class="<?php influence_blog_blogpage_container_class( $sidebar_position, $content_col, $sticky ); ?>">
                <aside id="primary" class="primary-widget-area">
                    <?php influence_blog_post_listing_layout_template(); ?>
                </aside>
            </div><!--//col-12 col-lg-8-->
            <?php influence_blog_blogpage_get_sidebar( $sidebar_position, $sidebar_area, $sidebar_col, $sticky, 'right' ); ?>
        </div><!--//row-->
    </div><!--//container-->
</div><!--//archive-page-wrap-->
<?php
get_footer();
