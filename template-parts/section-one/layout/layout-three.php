<?php
/**
 * The template for Layout three
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

?>
<div class="half-widget-left half-widget-d2">
    <?php
    $section_title = infb_blog_get_mod( 'blogpage_section_one_content_title' );

    if( !empty( $section_title ) ) {

        ?>
        <div class="widget-tt">
            <h3 class="l-title"><?php echo esc_html( $section_title ); ?></h3>
        </div>
        <?php
    }
    ?>
    <div id="content" class="row">
    <?php

    $section_one_query = infb_blog_get_mod( 'blogpage_section_one_content_query_toggle' );

    if( $section_one_query ) {

        $category = infb_blog_get_mod( 'blogpage_section_one_content_category' );

        $orderby = infb_blog_get_mod( 'blogpage_section_one_content_orderby' );

        $sort_order = infb_blog_get_mod( 'blogpage_section_one_content_sort_order' );

        $posts_no = infb_blog_get_mod( 'blogpage_section_one_content_posts_number' );

        $query = influence_blog_blogpage_posts_query( $category, $orderby, $sort_order, $posts_no );

        if( $query -> have_posts() ) {

            /* Start the Loop */
            while( $query -> have_posts() ) {

                $query -> the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */

                get_template_part( 'template-parts/section-one/content/content', 'three' );
            }
            wp_reset_postdata();

        } else {

            get_template_part( 'template-parts/content', 'none' );
        }

    } else {

        if( have_posts() ) :

            /* Start the Loop */
            while( have_posts() ) :

                the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */

                get_template_part( 'template-parts/section-one/content/content', 'three' );

            endwhile;

        else :

        get_template_part( 'template-parts/content', 'none' );

        endif;
    }
    ?>
    </div><!--//inn-row-->
    <?php

    $display_pagination = infb_blog_get_mod( 'blogpage_section_one_pagination_toggle' );

    if( $display_pagination ) {

        $pagination_style = infb_blog_get_mod( 'blogpage_section_one_pagination_style' );

        influence_blog_get_pagination_style( $pagination_style );
    }

    ?>
</div><!--//half-widget-left-d2-->
