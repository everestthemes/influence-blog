<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Influence_Blog
 */

get_header();

$sidebar_position = influence_blog_sidebar_position();
?>
<div class="archive-page-wrap lrg-padding">
    <div class="container">
        <?php influence_blog_breadcrumb(); ?>
        <div class="row">
            <?php
                
            if( $sidebar_position == 'left' && is_active_sidebar( 'influence-blog-sidebar' ) ) {

                get_sidebar();
            }

            ?>
            <div class="<?php influence_blog_main_container_class(); ?>">
                <aside id="primary" class="primary-widget-area">
                    <?php influence_blog_post_listing_layout_template(); ?>
                </aside>
            </div><!--//col-12 col-lg-8-->
            <?php
                
            if( $sidebar_position == 'right' && is_active_sidebar( 'influence-blog-sidebar' ) ) {

                get_sidebar();
            }

            ?>
        </div><!--//row-->
    </div><!--//container-->
</div><!--//archive-page-wrap-->

<?php
get_footer();
