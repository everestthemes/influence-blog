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

if( !function_exists( 'influence_blog_post_layouts_array' ) ) :
	/*
	 * Function to get fullwidth style
	 */
	function influence_blog_post_layouts_array() {

        $post = array(
            'post_one'            => get_template_directory_uri() . '/everestthemes/admin/images/post_one.png',
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

if( !function_exists( 'influence_blog_pagination_for_array' ) ) :
	/*
	 * Function to get pagination for in homepage
	 */
	function influence_blog_pagination_for_array() {

        $pagination_for = array(
            'grid_two'   => esc_html__( 'Grid Two Column Layout', 'influence-blog' ),
            'grid_three' => esc_html__( 'Grid Three Column Layout', 'influence-blog' ),
        );
        
        return $pagination_for;

	}
endif;