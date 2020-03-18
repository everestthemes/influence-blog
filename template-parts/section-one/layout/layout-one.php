<?php
/**
 * The template for Layout one
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

?>
<div class="half-widget-left half-widget-d1">
    <?php
    $section_title = influence_blog_get_mod( 'blogpage_section_one_content_title' );

    if( !empty( $section_title ) ) {

        ?>
        <div class="widget-tt">
            <h3 class="l-title"><?php echo esc_html( $section_title ); ?></h3>
        </div>
        <?php
    }
    ?>
    <div id="content" class="row ifb-home-posts">
    <?php

    $section_one_query = influence_blog_get_mod( 'blogpage_section_one_content_query_toggle' );

    if( $section_one_query ) {

        $category = influence_blog_get_mod( 'blogpage_section_one_content_category' );

        $orderby = influence_blog_get_mod( 'blogpage_section_one_content_orderby' );

        $sort_order = influence_blog_get_mod( 'blogpage_section_one_content_sort_order' );

        $posts_no = influence_blog_get_mod( 'blogpage_section_one_content_posts_number' );

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

                get_template_part( 'template-parts/section-one/content/content', 'one' );
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

                get_template_part( 'template-parts/section-one/content/content', 'one' );

            endwhile;

        else :

        get_template_part( 'template-parts/content', 'none' );

        endif;
    }

    ?>
    </div><!--//inner-row-->
    <?php

    $display_pagination = influence_blog_get_mod( 'blogpage_section_one_pagination_toggle' );

    if( $display_pagination ) {

        $pagination_style = influence_blog_get_mod( 'blogpage_section_one_pagination_style' );

        influence_blog_get_pagination_style( $pagination_style );
    }

    ?>
</div><!--//half-widget-left-->
