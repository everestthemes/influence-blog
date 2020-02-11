<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( !function_exists( 'influence_blog_dynamic_main_style' ) ) {
    /*
    * Functions for dynamic main styles
    */
    function influence_blog_dynamic_main_style() {

        global $pagenow;

        $dynamic_css = '';

        $output_css = array();

        $parse_css = '';

        /*---------------------------------- Site layout -----------------------------------*/

        /*---------------------------------- Global typography -----------------------------------*/

        //body typography
        $body_font_family = influence_blog_get_font_data( 'typo_body_font' );
        $body_font_weight = influence_blog_get_font_data( 'typo_body_font', 'fontweight' );
        $body_text_transform = ifb_get_mod( 'typo_body_transform' );
        $body_font_size = ifb_get_mod( 'typo_body_size_d' );
        $body_line_height = ifb_get_mod( 'typo_body_height_d' );
        $body_letter_spacing = ifb_get_mod( 'typo_body_spacing_d' );

        $body_css = array(
            'body' => array(
                'font-family' => esc_attr( $body_font_family ),
                'font-weight' => esc_attr( $body_font_weight ),
                'text-transform' => esc_attr( $body_text_transform ),
                'font-size' => esc_attr( $body_font_size ) . 'px',
                'line-height' => esc_attr( $body_line_height ),
                'letter-spacing' => esc_attr( $body_letter_spacing ) . 'px',
            ),
        );

        //heading typography
        $heading_font_family = influence_blog_get_font_data( 'typo_heading_font' );
        $heading_font_weight = influence_blog_get_font_data( 'typo_heading_font', 'fontweight' );
        //heading H1 typography
        $heading_H1_text_transform = ifb_get_mod( 'typo_heading_H1_transform' );
        $heading_H1_font_size = ifb_get_mod( 'typo_heading_H1_size_d' );
        $heading_H1_line_height = ifb_get_mod( 'typo_heading_H1_height_d' );
        $heading_H1_letter_spacing = ifb_get_mod( 'typo_heading_H1_spacing_d' );
        //heading H2 typography
        $heading_H2_text_transform = ifb_get_mod( 'typo_heading_H2_transform' );
        $heading_H2_font_size = ifb_get_mod( 'typo_heading_H2_size_d' );
        $heading_H2_line_height = ifb_get_mod( 'typo_heading_H2_height_d' );
        $heading_H2_letter_spacing = ifb_get_mod( 'typo_heading_H2_spacing_d' );
        //heading H2 typography
        $heading_H3_text_transform = ifb_get_mod( 'typo_heading_H3_transform' );
        $heading_H3_font_size = ifb_get_mod( 'typo_heading_H3_size_d' );
        $heading_H3_line_height = ifb_get_mod( 'typo_heading_H3_height_d' );
        $heading_H3_letter_spacing = ifb_get_mod( 'typo_heading_H3_spacing_d' );
        //heading H4 typography
        $heading_H4_text_transform = ifb_get_mod( 'typo_heading_H4_transform' );
        $heading_H4_font_size = ifb_get_mod( 'typo_heading_H4_size_d' );
        $heading_H4_line_height = ifb_get_mod( 'typo_heading_H4_height_d' );
        $heading_H4_letter_spacing = ifb_get_mod( 'typo_heading_H4_spacing_d' );
        //heading H5 typography
        $heading_H5_text_transform = ifb_get_mod( 'typo_heading_H5_transform' );
        $heading_H5_font_size = ifb_get_mod( 'typo_heading_H5_size_d' );
        $heading_H5_line_height = ifb_get_mod( 'typo_heading_H5_height_d' );
        $heading_H5_letter_spacing = ifb_get_mod( 'typo_heading_H5_spacing_d' );
        //heading H6 typography
        $heading_H6_text_transform = ifb_get_mod( 'typo_heading_H6_transform' );
        $heading_H6_font_size = ifb_get_mod( 'typo_heading_H6_size_d' );
        $heading_H6_line_height = ifb_get_mod( 'typo_heading_H6_height_d' );
        $heading_H6_letter_spacing = ifb_get_mod( 'typo_heading_H6_spacing_d' );

        $heading_css = array(
            'h1, h2, h3, h4, h5, h6' => array(
                'font-family' => esc_attr( $heading_font_family ),
                'font-weight' => esc_attr( $heading_font_weight ),
            ),
        );

        $heading_H1_css = array(
            'h1' => array(
                'text-transform' => esc_attr( $heading_H1_text_transform ),
                'font-size' => esc_attr( $heading_H1_font_size ) . 'px',
                'line-height' => esc_attr( $heading_H1_line_height ),
                'letter-spacing' => esc_attr( $heading_H1_letter_spacing ) . 'px',
            ),
        );

        $heading_H2_css = array(
            'h2' => array(
                'text-transform' => esc_attr( $heading_H2_text_transform ),
                'font-size' => esc_attr( $heading_H2_font_size ) . 'px',
                'line-height' => esc_attr( $heading_H2_line_height ),
                'letter-spacing' => esc_attr( $heading_H2_letter_spacing ) . 'px',
            ),
        );

        $heading_H3_css = array(
            'h3' => array(
                'text-transform' => esc_attr( $heading_H3_text_transform ),
                'font-size' => esc_attr( $heading_H3_font_size ) . 'px',
                'line-height' => esc_attr( $heading_H3_line_height ),
                'letter-spacing' => esc_attr( $heading_H3_letter_spacing ) . 'px',
            ),
        );

        $heading_H4_css = array(
            'h4' => array(
                'text-transform' => esc_attr( $heading_H4_text_transform ),
                'font-size' => esc_attr( $heading_H4_font_size ) . 'px',
                'line-height' => esc_attr( $heading_H4_line_height ),
                'letter-spacing' => esc_attr( $heading_H4_letter_spacing ) . 'px',
            ),
        );

        $heading_H5_css = array(
            'h5' => array(
                'text-transform' => esc_attr( $heading_H5_text_transform ),
                'font-size' => esc_attr( $heading_H5_font_size ) . 'px',
                'line-height' => esc_attr( $heading_H5_line_height ),
                'letter-spacing' => esc_attr( $heading_H5_letter_spacing ) . 'px',
            ),
        );

        $heading_H6_css = array(
            'h6' => array(
                'text-transform' => esc_attr( $heading_H6_text_transform ),
                'font-size' => esc_attr( $heading_H6_font_size ) . 'px',
                'line-height' => esc_attr( $heading_H6_line_height ),
                'letter-spacing' => esc_attr( $heading_H6_letter_spacing ) . 'px',
            ),
        );

        $output_css = array_merge(
            $body_css,
            $heading_css,
            $heading_H1_css,
            $heading_H2_css,
            $heading_H3_css,
            $heading_H4_css,
            $heading_H5_css,
            $heading_H6_css
        );

        $parse_css .= influence_blog_parse_css( $output_css );

        $output_css = array();


















        $dynamic_css = $parse_css;

        // trim white space for faster page loading.
        $dynamic_css = influence_blog_trim_css( $dynamic_css );

        return apply_filters( 'influence_blog_filter_dynamic_main_style', $dynamic_css );
    }
}