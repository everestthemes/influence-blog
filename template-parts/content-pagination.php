<?php
/**
 * Template part for displaying pagination
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Influence_Blog
 */

$display_blog_page_pagination = ifb_mod( 'display_blog_page_pagination', true );

if( $display_blog_page_pagination == true ) {

    $blog_page_pagination_type = ifb_mod( 'blog_page_pagination_type', 'default' );

    switch ( $blog_page_pagination_type ) {

        case 'loadmore' :

            /**
            * Hook - influence_blog_pagination_loadmore_template.
            *
            * @hooked influence_blog_pagination_loadmore_template_action - 500
            */
            do_action( 'influence_blog_pagination_loadmore_template' );
            break;

        default :

            /**
            * Hook - influence_blog_pagination_default_template.
            *
            * @hooked influence_blog_pagination_default_template_action - 510
            */
            do_action( 'influence_blog_pagination_default_template' );
            break;
    }
}
