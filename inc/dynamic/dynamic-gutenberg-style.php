<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( !function_exists( 'influence_blog_dynamic_gutenberg_style' ) ) {
    /*
    * Functions for dynamic gutenberg styles
    */
    function influence_blog_dynamic_gutenberg_style() {

        global $pagenow;

        $dynamic_css = '';

        $output_css = array();

        $parse_css = '';

        if( !defined( 'INFLUENCE_BLOG_PRO' ) && !class_exists( 'Influence_Blog_Pro' ) ) {

            //heading typography
            $heading_font_family = influence_blog_get_font_data( 'typo_heading_font' );
            $heading_font_weight = influence_blog_get_font_data( 'typo_heading_font', 'fontweight' );
            //heading H1 typography
            $heading_H1_text_transform = influence_blog_get_mod( 'typo_heading_H1_transform' );
            $heading_H1_font_size = influence_blog_get_mod( 'typo_heading_H1_size_d' );
            $heading_H1_line_height = influence_blog_get_mod( 'typo_heading_H1_height_d' );
            $heading_H1_letter_spacing = influence_blog_get_mod( 'typo_heading_H1_spacing_d' );
            //heading H2 typography
            $heading_H2_text_transform = influence_blog_get_mod( 'typo_heading_H2_transform' );
            $heading_H2_font_size = influence_blog_get_mod( 'typo_heading_H2_size_d' );
            $heading_H2_line_height = influence_blog_get_mod( 'typo_heading_H2_height_d' );
            $heading_H2_letter_spacing = influence_blog_get_mod( 'typo_heading_H2_spacing_d' );
            //heading H2 typography
            $heading_H3_text_transform = influence_blog_get_mod( 'typo_heading_H3_transform' );
            $heading_H3_font_size = influence_blog_get_mod( 'typo_heading_H3_size_d' );
            $heading_H3_line_height = influence_blog_get_mod( 'typo_heading_H3_height_d' );
            $heading_H3_letter_spacing = influence_blog_get_mod( 'typo_heading_H3_spacing_d' );
            //heading H4 typography
            $heading_H4_text_transform = influence_blog_get_mod( 'typo_heading_H4_transform' );
            $heading_H4_font_size = influence_blog_get_mod( 'typo_heading_H4_size_d' );
            $heading_H4_line_height = influence_blog_get_mod( 'typo_heading_H4_height_d' );
            $heading_H4_letter_spacing = influence_blog_get_mod( 'typo_heading_H4_spacing_d' );
            //heading H5 typography
            $heading_H5_text_transform = influence_blog_get_mod( 'typo_heading_H5_transform' );
            $heading_H5_font_size = influence_blog_get_mod( 'typo_heading_H5_size_d' );
            $heading_H5_line_height = influence_blog_get_mod( 'typo_heading_H5_height_d' );
            $heading_H5_letter_spacing = influence_blog_get_mod( 'typo_heading_H5_spacing_d' );
            //heading H6 typography
            $heading_H6_text_transform = influence_blog_get_mod( 'typo_heading_H6_transform' );
            $heading_H6_font_size = influence_blog_get_mod( 'typo_heading_H6_size_d' );
            $heading_H6_line_height = influence_blog_get_mod( 'typo_heading_H6_height_d' );
            $heading_H6_letter_spacing = influence_blog_get_mod( 'typo_heading_H6_spacing_d' );

            $free_theme_css = array(
                '.widget .widget-title,
                .comments-area .comment-reply-title' => array(
                    'font-family' => esc_attr( $heading_font_family ),
                    'font-weight' => esc_attr( $heading_font_weight ),
                    'text-transform' => esc_attr( $heading_H3_text_transform ),
                    'font-size' => esc_attr( $heading_H3_font_size . 'px' ),
                    'line-height' => esc_attr( $heading_H3_line_height ),
                    'letter-spacing' => esc_attr( $heading_H3_letter_spacing . 'px' ),
                ),
            );

            $parse_css .= influence_blog_parse_css( $free_theme_css );
        }

        $dynamic_css = $parse_css;

        // trim white space for faster page loading.
        $dynamic_css = influence_blog_trim_css( $dynamic_css );

        return apply_filters( 'influence_blog_filter_dynamic_gutenberg_style', $dynamic_css );
    }
}
