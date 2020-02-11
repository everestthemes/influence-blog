<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( !function_exists( 'influence_blog_dynamic_responsive_style' ) ) {
    /*
    * Functions for dynamic responsive styles
    */
    function influence_blog_dynamic_responsive_style() {

        global $pagenow;

        $dynamic_css = '';

        $output_css = array();

        $parse_css = '';

        /*-----------------------------------------------------------------------------
							 Tablet
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Global typography -----------------------------------*/

        //body typography
        $body_font_size_t = ifb_get_mod( 'typo_body_size_t' );
        $body_line_height_t = ifb_get_mod( 'typo_body_height_t' );
        $body_letter_spacing_t = ifb_get_mod( 'typo_body_spacing_t' );

        $body_css_t = array(
            'body' => array(
                'font-size' => esc_attr( $body_font_size_t ) . 'px',
                'line-height' => esc_attr( $body_line_height_t ),
                'letter-spacing' => esc_attr( $body_letter_spacing_t ) . 'px',
            ),
        );

        //heading h1 typography
        $heading_H1_font_size_t = ifb_get_mod( 'typo_heading_H1_size_t' );
        $heading_H1_line_height_t = ifb_get_mod( 'typo_heading_H1_height_t' );
        $heading_H1_letter_spacing_t = ifb_get_mod( 'typo_heading_H1_spacing_t' );
        //heading h1 typography
        $heading_H2_font_size_t = ifb_get_mod( 'typo_heading_H2_size_t' );
        $heading_H2_line_height_t = ifb_get_mod( 'typo_heading_H2_height_t' );
        $heading_H2_letter_spacing_t = ifb_get_mod( 'typo_heading_H2_spacing_t' );
        //heading h3 typography
        $heading_H3_font_size_t = ifb_get_mod( 'typo_heading_H3_size_t' );
        $heading_H3_line_height_t = ifb_get_mod( 'typo_heading_H3_height_t' );
        $heading_H3_letter_spacing_t = ifb_get_mod( 'typo_heading_H3_spacing_t' );
        //heading h4 typography
        $heading_H4_font_size_t = ifb_get_mod( 'typo_heading_H4_size_t' );
        $heading_H4_line_height_t = ifb_get_mod( 'typo_heading_H4_height_t' );
        $heading_H4_letter_spacing_t = ifb_get_mod( 'typo_heading_H4_spacing_t' );
        //heading h5 typography
        $heading_H5_font_size_t = ifb_get_mod( 'typo_heading_H5_size_t' );
        $heading_H5_line_height_t = ifb_get_mod( 'typo_heading_H5_height_t' );
        $heading_H5_letter_spacing_t = ifb_get_mod( 'typo_heading_H5_spacing_t' );
        //heading h6 typography
        $heading_H6_font_size_t = ifb_get_mod( 'typo_heading_H6_size_t' );
        $heading_H6_line_height_t = ifb_get_mod( 'typo_heading_H6_height_t' );
        $heading_H6_letter_spacing_t = ifb_get_mod( 'typo_heading_H6_spacing_t' );

        $heading_H1_css_t = array(
            'h1' => array(
                'font-size' => esc_attr( $heading_H1_font_size_t ) . 'px',
                'line-height' => esc_attr( $heading_H1_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H1_letter_spacing_t ) . 'px',
            ),
        );

        $heading_H2_css_t = array(
            'h2' => array(
                'font-size' => esc_attr( $heading_H2_font_size_t ) . 'px',
                'line-height' => esc_attr( $heading_H2_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H2_letter_spacing_t ) . 'px',
            ),
        );

        $heading_H3_css_t = array(
            'h3' => array(
                'font-size' => esc_attr( $heading_H3_font_size_t ) . 'px',
                'line-height' => esc_attr( $heading_H3_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H3_letter_spacing_t ) . 'px',
            ),
        );

        $heading_H4_css_t = array(
            'h4' => array(
                'font-size' => esc_attr( $heading_H4_font_size_t ) . 'px',
                'line-height' => esc_attr( $heading_H4_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H4_letter_spacing_t ) . 'px',
            ),
        );

        $heading_H5_css_t = array(
            'h5' => array(
                'font-size' => esc_attr( $heading_H5_font_size_t ) . 'px',
                'line-height' => esc_attr( $heading_H5_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H5_letter_spacing_t ) . 'px',
            ),
        );

        $heading_H6_css_t = array(
            'h6' => array(
                'font-size' => esc_attr( $heading_H6_font_size_t ) . 'px',
                'line-height' => esc_attr( $heading_H6_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H6_letter_spacing_t ) . 'px',
            ),
        );

        $output_css = array_merge(
            $body_css_t,
            $heading_H1_css_t,
            $heading_H2_css_t,
            $heading_H3_css_t,
            $heading_H4_css_t,
            $heading_H5_css_t,
            $heading_H6_css_t
        );

        $parse_css .= influence_blog_parse_css( $output_css, '', '768' );

        $output_css = array();

        /*-----------------------------------------------------------------------------
							 Mobile
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Global typography -----------------------------------*/

        //body typography
        $body_font_size_m = ifb_get_mod( 'typo_body_size_m' );
        $body_line_height_m = ifb_get_mod( 'typo_body_height_m' );
        $body_letter_spacing_m = ifb_get_mod( 'typo_body_spacing_m' );

        $body_css_m = array(
            'body' => array(
                'font-size' => esc_attr( $body_font_size_m ) . 'px',
                'line-height' => esc_attr( $body_line_height_m ),
                'letter-spacing' => esc_attr( $body_letter_spacing_m ) . 'px',
            ),
        );

        //heading h1 typography
        $heading_H1_font_size_m = ifb_get_mod( 'typo_heading_H1_size_m' );
        $heading_H1_line_height_m = ifb_get_mod( 'typo_heading_H1_height_m' );
        $heading_H1_letter_spacing_m = ifb_get_mod( 'typo_heading_H1_spacing_m' );
        //heading h1 typography
        $heading_H2_font_size_m = ifb_get_mod( 'typo_heading_H2_size_m' );
        $heading_H2_line_height_m = ifb_get_mod( 'typo_heading_H2_height_m' );
        $heading_H2_letter_spacing_m = ifb_get_mod( 'typo_heading_H2_spacing_m' );
        //heading h3 typography
        $heading_H3_font_size_m = ifb_get_mod( 'typo_heading_H3_size_m' );
        $heading_H3_line_height_m = ifb_get_mod( 'typo_heading_H3_height_m' );
        $heading_H3_letter_spacing_m = ifb_get_mod( 'typo_heading_H3_spacing_m' );
        //heading h4 typography
        $heading_H4_font_size_m = ifb_get_mod( 'typo_heading_H4_size_m' );
        $heading_H4_line_height_m = ifb_get_mod( 'typo_heading_H4_height_m' );
        $heading_H4_letter_spacing_m = ifb_get_mod( 'typo_heading_H4_spacing_m' );
        //heading h5 typography
        $heading_H5_font_size_m = ifb_get_mod( 'typo_heading_H5_size_m' );
        $heading_H5_line_height_m = ifb_get_mod( 'typo_heading_H5_height_m' );
        $heading_H5_letter_spacing_m = ifb_get_mod( 'typo_heading_H5_spacing_m' );
        //heading h6 typography
        $heading_H6_font_size_m = ifb_get_mod( 'typo_heading_H6_size_m' );
        $heading_H6_line_height_m = ifb_get_mod( 'typo_heading_H6_height_m' );
        $heading_H6_letter_spacing_m = ifb_get_mod( 'typo_heading_H6_spacing_m' );

        $heading_H1_css_m = array(
            'h1' => array(
                'font-size' => esc_attr( $heading_H1_font_size_m ) . 'px',
                'line-height' => esc_attr( $heading_H1_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H1_letter_spacing_m ) . 'px',
            ),
        );

        $heading_H2_css_m = array(
            'h2' => array(
                'font-size' => esc_attr( $heading_H2_font_size_m ) . 'px',
                'line-height' => esc_attr( $heading_H2_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H2_letter_spacing_m ) . 'px',
            ),
        );

        $heading_H3_css_m = array(
            'h3' => array(
                'font-size' => esc_attr( $heading_H3_font_size_m ) . 'px',
                'line-height' => esc_attr( $heading_H3_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H3_letter_spacing_m ) . 'px',
            ),
        );

        $heading_H4_css_m = array(
            'h4' => array(
                'font-size' => esc_attr( $heading_H4_font_size_m ) . 'px',
                'line-height' => esc_attr( $heading_H4_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H4_letter_spacing_m ) . 'px',
            ),
        );

        $heading_H5_css_m = array(
            'h5' => array(
                'font-size' => esc_attr( $heading_H5_font_size_m ) . 'px',
                'line-height' => esc_attr( $heading_H5_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H5_letter_spacing_m ) . 'px',
            ),
        );

        $heading_H6_css_m = array(
            'h6' => array(
                'font-size' => esc_attr( $heading_H6_font_size_m ) . 'px',
                'line-height' => esc_attr( $heading_H6_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H6_letter_spacing_m ) . 'px',
            ),
        );

        $output_css = array_merge(
            $body_css_m,
            $heading_H1_css_m,
            $heading_H2_css_m,
            $heading_H3_css_m,
            $heading_H4_css_m,
            $heading_H5_css_m,
            $heading_H6_css_m
        );

        $parse_css .= influence_blog_parse_css( $output_css, '', '480' );

        $output_css = array();
















        $dynamic_css = $parse_css;

        // trim white space for faster page loading.
        $dynamic_css = influence_blog_trim_css( $dynamic_css );

        return apply_filters( 'influence_blog_filter_dynamic_responsive_style', $dynamic_css );
    }
}
