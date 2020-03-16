<?php
/**
 * Theme Options Choices
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( !function_exists( 'influence_blog_pagination_type_array' ) ) :
	/*
	 * Function to get pagination type for in homepage
	 */
	function influence_blog_pagination_type_array() {

        $pagination_for = array(
            'default'   => esc_html__( 'Default', 'influence-blog' ),
            'loadmore' => esc_html__( 'Load More', 'influence-blog' ),
        );

        return $pagination_for;

	}
endif;
