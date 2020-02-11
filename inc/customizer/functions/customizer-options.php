<?php
/**
 * Collection of customizer options function for customizer fields.
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( !function_exists( 'influence_blog_tab_one_array' ) ) :
	/*
	 * Function to get tabs one values
	 */
	function influence_blog_tab_one_array( $condition = null, $args = null ) {

        $tab_one = array();

        if( $condition == 'default' || $condition == null ) {

            $tab_one = array(
                'button_one'           => array(
                    'label'            => esc_html__( 'General', 'influence-blog' ),
                    'icon'             => 'dashboard',
                ),
                'button_two'           => array(
                    'label'            => esc_html__( 'Design', 'influence-blog' ),
                    'icon'             => 'admin-appearance',
                ),
                'button_three'         => array(
                    'label'            => esc_html__( 'Advance', 'influence-blog' ),
                    'icon'             => 'admin-generic',
                ),
            );
        }

        if( $condition == 'custom' && ( !$condition == null && !$args == null ) && is_array( $args ) ) {

            $tab_one = $args;
        }

        $tab_one = apply_filters( 'influence_blog_filter_tab_one_array', $tab_one );

        return $tab_one;

	}
endif;

if( !function_exists( 'influence_blog_site_layout_style_array' ) ) :
	/*
	 * Function to get site layout style values
	 */
	function influence_blog_site_layout_style_array() {

        $styles = array(
            'wide'                 => esc_html__( 'Wide' , 'influence-blog' ),
            'boxed'                => esc_html__( 'Boxed' , 'influence-blog' ),
            'framed'               => esc_html__( 'Framed' , 'influence-blog' ),
        );

        $styles = apply_filters( 'influence_blog_filter_site_layout_style_array', $styles );

        return $styles;

	}
endif;

if( !function_exists( 'influence_blog_site_layout_container_style_array' ) ) :
	/*
	 * Function to get site layout container style values
	 */
	function influence_blog_site_layout_container_style_array() {

        $styles = array(
            'uniform'               => esc_html__( 'Uniform' , 'influence-blog' ),
            'boxed'                 => esc_html__( 'Boxed' , 'influence-blog' ),
            'content-boxed'         => esc_html__( 'Content Boxed' , 'influence-blog' ),
        );

        $styles = apply_filters( 'influence_blog_filter_site_layout_container_style_array', $styles );

        return $styles;

	}
endif;

if( !function_exists( 'influence_blog_site_layout_style_design_options_array' ) ) :
	/*
	 * Function to get site layout style design options values
	 */
	function influence_blog_site_layout_style_design_options_array() {

        $options = array(
            'image'                 => esc_html__( 'Image' , 'influence-blog' ),
            'color'                 => esc_html__( 'Color' , 'influence-blog' ),
        );

        $options = apply_filters( 'influence_blog_filter_site_layout_style_design_options_array', $options );

        return $options;

	}
endif;

if( !function_exists( 'influence_blog_font_attrs_array' ) ) :
	/*
	 * Function to get font input attributes options values
	 */
	function influence_blog_font_attrs_array() {

        $options = array(
            'font_count'            => 'all',
            'orderby'               => 'popular',
        );

        $options = apply_filters( 'influence_blog_filter_font_attrs_array', $options );

        return $options;

	}
endif;

if( !function_exists( 'influence_blog_font_size_attrs_array' ) ) :
	/*
	 * Function to get font size input attributes options values
	 */
	function influence_blog_font_size_attrs_array() {

        $options = array(
            'min'                   => 10,
            'max'                   => 20,
            'step'                  => 1,
        );

        $options = apply_filters( 'influence_blog_filter_font_size_attrs_array', $options );

        return $options;

	}
endif;

if( !function_exists( 'influence_blog_line_height_attrs_array' ) ) :
	/*
	 * Function to get line height input attributes options values
	 */
	function influence_blog_line_height_attrs_array() {

        $options = array(
            'min'                   => 0,
            'max'                   => 5,
            'step'                  => 0.5,
        );

        $options = apply_filters( 'influence_blog_filter_line_height_attrs_array', $options );

        return $options;

	}
endif;

if( !function_exists( 'influence_blog_letter_spacing_attrs_array' ) ) :
	/*
	 * Function to get letter spacing input attributes options values
	 */
	function influence_blog_letter_spacing_attrs_array() {

        $options = array(
            'min'                   => 0,
            'max'                   => 5,
            'step'                  => 0.5,
        );

        $options = apply_filters( 'influence_blog_filter_letter_spacing_attrs_array', $options );

        return $options;

	}
endif;

if( !function_exists( 'influence_blog_font_text_transform_array' ) ) :
	/*
	 * Function to get font text transform options values
	 */
	function influence_blog_font_text_transform_array() {

        $options = array(
            'none'                  => esc_html__( 'None' , 'influence-blog' ),
            'lowercase'             => esc_html__( 'Lowercase' , 'influence-blog' ),
            'uppercase'             => esc_html__( 'Uppercase' , 'influence-blog' ),
            'capitalize'            => esc_html__( 'Capitalize' , 'influence-blog' ),
        );

        $options = apply_filters( 'influence_blog_filter_font_text_transform_array', $options );

        return $options;

	}
endif;