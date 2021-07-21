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

if( !function_exists( 'influence_blog_author_widget_select_array' ) ) :
	/*
	 * Function to get author widgets
	 */
	function influence_blog_author_widget_select_array() {

        $options = array(

            'one' => array(
                'image' => trailingslashit( INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI ). 'images/author-one.jpg',
                'name' => __( 'Layout One', 'influence-blog' )
            ),
            'two' => array(
                'image' => trailingslashit( INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI ). 'images/author-two.jpg',
                'name' => __( 'Layout Two', 'influence-blog' )
            ),
            'three' => array(
                'image' => trailingslashit( INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI ). 'images/author-three.jpg',
                'name' => __( 'Layout Three', 'influence-blog' )
            ),
            'four' => array(
                'image' => trailingslashit( INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI ). 'images/author-four.jpg',
                'name' => __( 'Layout Four', 'influence-blog' )
            ),
        );

        $options = apply_filters( 'influence_blog_filter_author_widget_select_array', $options );

        return $options;

	}
endif;

if( !function_exists( 'influence_blog_widget_content_select_array' ) ) :
	/*
	 * Function to get widget content
	 */
	function influence_blog_widget_content_select_array() {

        $options = array(

            'one' => esc_html__( 'Excerpt Content', 'influence-blog' ),
            'two' => esc_html__( 'Full Content', 'influence-blog' ),
        );

        $options = apply_filters( 'influence_blog_filter_author_widget_select_array', $options );

        return $options;

	}
endif;

if( !function_exists( 'influence_blog_sidebar_widget_select_array' ) ) :
	/*
	 * Function to get sidebar widgets
	 */
	function influence_blog_sidebar_widget_select_array() {

        $options = array(

            'one' => array(
                'image' => trailingslashit( INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI ). 'images/post-one.png',
                'name' => __( 'Layout One', 'influence-blog' )
            ),
            'two' => array(
                'image' => trailingslashit( INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI ). 'images/post-two.png',
                'name' => __( 'Layout Two', 'influence-blog' )
            ),
        );

        $options = apply_filters( 'influence_blog_filter_sidebar_widget_select_array', $options );

        return $options;

	}
endif;

if( !function_exists( 'influence_blog_widget_orderby_array' ) ) :
	/*
	 * Function to get orderby choices
	 */
	function influence_blog_widget_orderby_array() {

        $orderby_choices = array(
            'date'            => esc_html__( 'Date', 'influence-blog' ),
            'author'           => esc_html__( 'Author', 'influence-blog' ),
            'comment_count'    => esc_html__( 'Comments', 'influence-blog' ),
        );

        $orderby_choices = apply_filters( 'influence_blog_filter_widget_orderby_choices_array', $orderby_choices );

        return $orderby_choices;

	}
endif;

if( !function_exists( 'influence_blog_widget_sort_order_array' ) ) :
	/*
	 * Function to get order choices
	 */
	function influence_blog_widget_sort_order_array() {

        $order_choices = array(
            'asc'      => esc_html__( 'Ascending Order', 'influence-blog' ),
            'desc'     => esc_html__( 'Descending Order', 'influence-blog' ),
        );

        $order_choices = apply_filters( 'influence_blog_filter_widget_order_choices_array', $order_choices );

        return $order_choices;

	}
endif;

if( !function_exists( 'influence_blog_fullwidth_widget_select_array' ) ) :
	/*
	 * Function to get fullwidth widgets
	 */
	function influence_blog_fullwidth_widget_select_array() {

        $options = array(

            'one' => array(
                'image' => trailingslashit( INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI ). 'images/full-one.png',
                'name' => __( 'Layout One', 'influence-blog' )
            ),
            'two' => array(
                'image' => trailingslashit( INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI ). 'images/full-two.png',
                'name' => __( 'Layout Two', 'influence-blog' )
            ),
        );

        $options = apply_filters( 'influence_blog_filter_fullwidth_widget_select_array', $options );

        return $options;

	}
endif;


if( !function_exists( 'influence_blog_post_category_array' ) ) :
    /*
     * Function to get order choices
     */
    function influence_blog_post_category_array() {

        $taxonomy = 'category';

        $terms = get_terms( $taxonomy );

        $categories = array();

        foreach( $terms as $term ) {

            $categories[$term->term_id] = $term->name;
        }

        $post_categories = apply_filters( 'influence_blog_filter_post_category_array', $categories );

        return $post_categories;
    }
endif;
