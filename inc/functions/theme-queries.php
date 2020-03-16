<?php
/**
 * Influence Blog queries functions
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/**
 * Banner Posts Query
 */
if( !function_exists( 'influence_blog_banner_posts_query' ) ) {

    function influence_blog_banner_posts_query() {

        $banner_query = ifb_get_mod( 'banner_content_options_query_toggle' );

        $banner_category = ifb_get_mod( 'banner_category' );

        $banner_orderby = ifb_get_mod( 'banner_orderby' );

        $banner_sort_order = ifb_get_mod( 'banner_sort_order' );

        $banner_posts_no = ifb_get_mod( 'banner_posts_number' );

        $banner_args = array(
            'post_type'      => 'post',
            'ignore_sticky_posts' => 1,
        );

        if( $banner_query ) {

            if( !empty( $banner_category ) ) {

                if( is_array( $banner_category ) ) {

                    $banner_args['category_name'] = implode( ',', $banner_category );

                } else {

                    $banner_args['category_name'] = $banner_category;
                }
            }

            if( !empty( $banner_orderby ) ) {

                $banner_args['orderby'] = $banner_orderby;

            } else {

                $banner_args['orderby'] = esc_html( 'date' );

            }

            if( !empty( $banner_sort_order ) ) {

                $banner_args['order'] = $banner_sort_order;

            } else {

                $banner_args['order'] = esc_html( 'desc' );

            }
        }

        if( !empty( $banner_posts_no ) ) {

            $banner_args['posts_per_page'] = absint( $banner_posts_no );
        }

        $banner_query = new WP_Query( $banner_args );

        return $banner_query;
    }
}



/**
 * Homepage Block Layout Posts Query
 */
if( !function_exists( 'influence_blog_homepage_block_layout_posts_query' ) ) {

    function influence_blog_homepage_block_layout_posts_query() {

        $homepage_block_category = ifb_get_mod( 'blog_page_grid_three_col_layout_category', '' );

        $homepage_block_post_type = ifb_get_mod( 'blog_page_grid_three_col_layout_post_type', 'recent_posts' );

        $homepage_block_posts_no = ifb_get_mod( 'blog_page_grid_three_col_layout_post_number', 3 );

        $homepage_block_args = array(
          'post_type'      => 'post',
        );

        if( !empty( $homepage_block_category ) ) {
            $homepage_block_args['category_name'] = $homepage_block_category;
        }

        if( $homepage_block_post_type == 'popular_posts' ) {

            $homepage_block_args['orderby'] = 'comment_count';
        }

        if( !empty( $homepage_block_posts_no ) ) {
            $homepage_block_args['posts_per_page'] = absint( $homepage_block_posts_no );
        }

        $homepage_block_query = new WP_Query( $homepage_block_args );

        return $homepage_block_query;
    }
}
