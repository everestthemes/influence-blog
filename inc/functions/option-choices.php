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

if( !function_exists( 'influence_blog_categories_array' ) ) :
	/*
	 * Function to get blog categories
	 */
	function influence_blog_categories_array() {

		$post_taxonomy = 'category';
		$post_terms = get_terms( $post_taxonomy );
		$post_categories = array();
		foreach( $post_terms as $post_term ) {
			$post_categories[$post_term->slug] = $post_term->name;
		}

		return $post_categories;

	}
endif;

if( !function_exists( 'influence_blog_sidebar_position_array' ) ) :
	/*
	 * Function to get select pagination style
	 */
	function influence_blog_sidebar_position_array( $format ) {

        if( $format == 'text' ) {

            $position = array(
                'right'            => esc_html__( 'Right', 'influence-blog' ),
                'left'             => esc_html__( 'Left', 'influence-blog' ),
                'none'             => esc_html__( 'None', 'influence-blog' ),
            );

        } else {

            $position = array(
                'left'  => IFB_INC_CUSTOMIZER_ASSETS_PATH_URI . 'images/header-one.png',
                'right' => IFB_INC_CUSTOMIZER_ASSETS_PATH_URI . 'images/header-one.png',
                'none'  => IFB_INC_CUSTOMIZER_ASSETS_PATH_URI . 'images/header-one.png',
            );
        }

        return $position;

	}
endif;

if( !function_exists( 'influence_blog_fullwidth_layouts_array' ) ) :
	/*
	 * Function to get fullwidth style
	 */
	function influence_blog_fullwidth_layouts_array() {

        $fullwidth = array(
            'full_one'            => IFB_INC_CUSTOMIZER_ASSETS_PATH_URI . 'images/header-one.png',
        );

        return $fullwidth;

	}
endif;

if( !function_exists( 'influence_blog_post_layouts_array' ) ) :
	/*
	 * Function to get fullwidth style
	 */
	function influence_blog_post_layouts_array() {

        $post = array(
            'post_one'            => IFB_INC_CUSTOMIZER_ASSETS_PATH_URI . 'images/header-one.png',
        );

        return $post;

	}
endif;

if( !function_exists( 'influence_blog_post_types_array' ) ) :
	/*
	 * Function to get post type
	 */
	function influence_blog_post_types_array() {

        $post_type = array(
            'recent_posts'   => esc_html__( 'Recent Posts', 'influence-blog' ),
            'popular_posts'  => esc_html__( 'Popular Posts', 'influence-blog' ),
        );

        return $post_type;

	}
endif;

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
