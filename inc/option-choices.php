<?php
/**
 * Theme Options Choices
 *
 * @package Influence_Blog
 */


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
                'left'  => get_template_directory_uri() . '/everestthemes/admin/images/sidebar_left.png',
                'right' => get_template_directory_uri() . '/everestthemes/admin/images/sidebar_right.png',
                'none'  => get_template_directory_uri() . '/everestthemes/admin/images/sidebar_none.png',
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
            'full_one'            => get_template_directory_uri() . '/everestthemes/admin/images/full_one.png',
        );

        return $fullwidth;

	}
endif;

if( !function_exists( 'influence_blog_halfwidth_layouts_array' ) ) :
	/*
	 * Function to get halfwidth style
	 */
	function influence_blog_halfwidth_layouts_array() {

        $halfwidth = array(
            'half_one'            => get_template_directory_uri() . '/everestthemes/admin/images/half_one.png',
            'half_two'            => get_template_directory_uri() . '/everestthemes/admin/images/half_two.png',
            'half_three'          => get_template_directory_uri() . '/everestthemes/admin/images/half_three.png',
        );

        return $halfwidth;

	}
endif;

if( !function_exists( 'influence_blog_post_layouts_array' ) ) :
	/*
	 * Function to get fullwidth style
	 */
	function influence_blog_post_layouts_array() {

        $post = array(
            'post_one'            => get_template_directory_uri() . '/everestthemes/admin/images/post_one.png',
            'post_two'            => get_template_directory_uri() . '/everestthemes/admin/images/post_two.png',
        );

        return $post;

	}
endif;