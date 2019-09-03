<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                <?php influence_blog_post_listing_layout_template(); ?>
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
