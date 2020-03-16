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

        $banner_query = infb_blog_get_mod( 'banner_content_options_query_toggle' );

        $banner_category = infb_blog_get_mod( 'banner_category' );

        $banner_orderby = infb_blog_get_mod( 'banner_orderby' );

        $banner_sort_order = infb_blog_get_mod( 'banner_sort_order' );

        $banner_posts_no = infb_blog_get_mod( 'banner_posts_number' );

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
 * Blogpage Posts Query
 */
if( !function_exists( 'influence_blog_blogpage_posts_query' ) ) {

    function influence_blog_blogpage_posts_query( $cat, $order, $sort, $num ) {

        $query_args = array(
            'post_type'      => 'post',
            'paged'          => get_query_var( 'paged' ),
        );

        if( !empty( $cat ) ) {

            if( is_array( $cat ) ) {

                $query_args['category_name'] = implode( ',', $cat );

            } else {

                $query_args['category_name'] = $cat;
            }
        }

        if( !empty( $order ) ) {

            $query_args['orderby'] = $order;

        } else {

            $query_args['orderby'] = esc_html( 'date' );

        }

        if( !empty( $sort ) ) {

            $query_args['order'] = $sort;

        } else {

            $query_args['order'] = esc_html( 'desc' );

        }

        if( !empty( $num ) ) {

            $query_args['posts_per_page'] = absint( $num );
        }

        $post_query = new WP_Query( $query_args );

        return $post_query;
    }
}
