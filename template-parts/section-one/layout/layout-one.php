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
    $section_title = ifb_get_mod( 'blogpage_section_one_content_title' );

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

    $section_one_query = ifb_get_mod( 'blogpage_section_one_content_query_toggle' );

    if( $section_one_query ) {

        $category = ifb_get_mod( 'blogpage_section_one_content_category' );

        $orderby = ifb_get_mod( 'blogpage_section_one_content_orderby' );

        $sort_order = ifb_get_mod( 'blogpage_section_one_content_sort_order' );

        $posts_no = ifb_get_mod( 'blogpage_section_one_content_posts_number' );

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

    $display_pagination = ifb_get_mod( 'blogpage_section_one_pagination_toggle' );

    if( $display_pagination ) {

        $pagination_style = ifb_get_mod( 'blogpage_section_one_pagination_style' );

        switch( $pagination_style ) {

            case 'one':
                ?><div class="ifb-pagination"><?php
                the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text' => esc_html__( 'Prev', 'influence-blog' ),
                    'next_text' => esc_html__( 'Next', 'influence-blog' ),
                ) );
                ?></div><?php
                break;

            case 'two':
                ?><div class="ifb-pagination"><?php
                the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text' => false,
                    'next_text' => false,
                ) );
                ?></div><?php
                break;

            case 'three':

                influence_blog_paginator( get_pagenum_link() );
                break;

            default:
                //code is poetry
        }
    }

    ?>
</div><!--//half-widget-left-->
<?php
