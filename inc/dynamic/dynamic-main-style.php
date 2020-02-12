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

        /*-----------------------------------------------------------------------------
							 Site layout
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Design Section -----------------------------------*/

        $site_layout_style = ifb_get_mod( 'site_layout_style' );
        $site_layout_style_design_options = ifb_get_mod( 'site_layout_style_design_options' );
        $site_layout_style_design_box_shadow_toggle = ifb_get_mod( 'site_layout_style_design_box_shadow_toggle' );

        if( $site_layout_style !== 'wide' ) {

            if( $site_layout_style_design_options == 'color' ) {

                $site_layout_style_design_outside = ifb_get_mod( 'site_layout_style_design_outside' );
                $site_layout_style_design_inside = ifb_get_mod( 'site_layout_style_design_inside' );

                $site_layout_design_css = array(
                    'body.framed, body.boxed' => array(
                        'background-color' => esc_attr( $site_layout_style_design_outside ),
                    ),
                    'body.boxed .page-wrap, body.framed .page-wrap' => array(
                        'background-color' => esc_attr( $site_layout_style_design_inside ),
                    ),
                );

                $output_css = array_merge(
                    $site_layout_design_css
                );

                $parse_css .= influence_blog_parse_css( $output_css );

                $output_css = array();

            }

            if( $site_layout_style_design_box_shadow_toggle ) {

                $site_layout_style_design_box_shadow_css = array(
                    'body.boxed .page-wrap, body.framed .page-wrap' => array(
                        'box-shadow' => esc_attr( '0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)' ),
                    ),
                );

                $output_css = array_merge(
                    $site_layout_style_design_box_shadow_css
                );

                $parse_css .= influence_blog_parse_css( $output_css );

                $output_css = array();

            }
        }

        /*---------------------------------- Advance Section -----------------------------------*/

        $site_layout_advance_toggle = ifb_get_mod( 'site_layout_advance_toggle' );

        if( $site_layout_advance_toggle ) {

            $site_layout_style_advance_d_p_top = ifb_get_mod( 'site_layout_style_advance_d_p_top' );
            $site_layout_style_advance_d_p_right = ifb_get_mod( 'site_layout_style_advance_d_p_right' );
            $site_layout_style_advance_d_p_bottom = ifb_get_mod( 'site_layout_style_advance_d_p_bottom' );
            $site_layout_style_advance_d_p_left = ifb_get_mod( 'site_layout_style_advance_d_p_left' );

            $site_layout_advance_wide_css = array(
                'body.wide, body.boxed .page-warp, body.framed .page-warp' => array(
                    'padding-top' => esc_attr( $site_layout_style_advance_d_p_top . 'px' ),
                    'padding-right' => esc_attr( $site_layout_style_advance_d_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $site_layout_style_advance_d_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $site_layout_style_advance_d_p_left . 'px' ),
                ),
            );

            $output_css = array_merge(
                $site_layout_advance_wide_css
            );

            $parse_css .= influence_blog_parse_css( $output_css );

            $output_css = array();

            if( $site_layout_style == 'boxed' ) {

                $site_layout_style_advance_b_d_m_right = ifb_get_mod( 'site_layout_style_advance_b_d_m_right' );
                $site_layout_style_advance_b_d_m_left = ifb_get_mod( 'site_layout_style_advance_b_d_m_left' );

                $site_layout_advance_box_css = array(
                    'body.boxed .page-wrap' => array(
                        'margin-right' => esc_attr( $site_layout_style_advance_b_d_m_right . 'px' ),
                        'margin-left' => esc_attr( $site_layout_style_advance_b_d_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $site_layout_advance_box_css
                );

                $parse_css .= influence_blog_parse_css( $output_css );

                $output_css = array();
            }

            if( $site_layout_style == 'framed' ) {

                $site_layout_style_advance_f_d_m_top = ifb_get_mod( 'site_layout_style_advance_f_d_m_top' );
                $site_layout_style_advance_f_d_m_right = ifb_get_mod( 'site_layout_style_advance_f_d_m_right' );
                $site_layout_style_advance_f_d_m_bottom = ifb_get_mod( 'site_layout_style_advance_f_d_m_bottom' );
                $site_layout_style_advance_f_d_m_left = ifb_get_mod( 'site_layout_style_advance_f_d_m_left' );

                $site_layout_advance_framed_css = array(
                    'body.framed .page-wrap' => array(
                        'margin-top' => esc_attr( $site_layout_style_advance_f_d_m_top . 'px' ),
                        'margin-right' => esc_attr( $site_layout_style_advance_f_d_m_right . 'px' ),
                        'margin-bottom' => esc_attr( $site_layout_style_advance_f_d_m_bottom . 'px' ),
                        'margin-left' => esc_attr( $site_layout_style_advance_f_d_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $site_layout_advance_framed_css
                );

                $parse_css .= influence_blog_parse_css( $output_css );

                $output_css = array();
            }

            if( $site_layout_style !== 'wide' ) {

                $site_layout_style_advance_boxed_border_radius = ifb_get_mod( 'site_layout_style_advance_boxed_border_radius' );
                $site_layout_style_advance_boxed_border_width = ifb_get_mod( 'site_layout_style_advance_boxed_border_width' );
                $site_layout_style_advance_boxed_border_color = ifb_get_mod( 'site_layout_style_advance_boxed_border_color' );

                $site_layout_advance_box_border_radius_css = array(
                    'body.boxed .page-wrap, body.framed .page-wrap' => array(
                        'border-top-left-radius' => esc_attr( $site_layout_style_advance_boxed_border_radius . 'px' ),
                        'border-top-right-radius' => esc_attr( $site_layout_style_advance_boxed_border_radius . 'px' ),
                        'border' => esc_attr( $site_layout_style_advance_boxed_border_width . 'px solid ' . $site_layout_style_advance_boxed_border_color ),
                    ),
                );

                $output_css = array_merge(
                    $site_layout_advance_box_border_radius_css
                );

                $parse_css .= influence_blog_parse_css( $output_css );

                $output_css = array();
            }
        }

        /*-----------------------------------------------------------------------------
							 Typography Section
        -----------------------------------------------------------------------------*/

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
                'font-size' => esc_attr( $body_font_size . 'px' ),
                'line-height' => esc_attr( $body_line_height ),
                'letter-spacing' => esc_attr( $body_letter_spacing . 'px' ),
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
                'font-size' => esc_attr( $heading_H1_font_size . 'px' ),
                'line-height' => esc_attr( $heading_H1_line_height ),
                'letter-spacing' => esc_attr( $heading_H1_letter_spacing . 'px' ),
            ),
        );

        $heading_H2_css = array(
            'h2' => array(
                'text-transform' => esc_attr( $heading_H2_text_transform ),
                'font-size' => esc_attr( $heading_H2_font_size . 'px' ),
                'line-height' => esc_attr( $heading_H2_line_height ),
                'letter-spacing' => esc_attr( $heading_H2_letter_spacing . 'px' ),
            ),
        );

        $heading_H3_css = array(
            'h3' => array(
                'text-transform' => esc_attr( $heading_H3_text_transform ),
                'font-size' => esc_attr( $heading_H3_font_size . 'px' ),
                'line-height' => esc_attr( $heading_H3_line_height ),
                'letter-spacing' => esc_attr( $heading_H3_letter_spacing . 'px' ),
            ),
        );

        $heading_H4_css = array(
            'h4' => array(
                'text-transform' => esc_attr( $heading_H4_text_transform ),
                'font-size' => esc_attr( $heading_H4_font_size . 'px' ),
                'line-height' => esc_attr( $heading_H4_line_height ),
                'letter-spacing' => esc_attr( $heading_H4_letter_spacing . 'px' ),
            ),
        );

        $heading_H5_css = array(
            'h5' => array(
                'text-transform' => esc_attr( $heading_H5_text_transform ),
                'font-size' => esc_attr( $heading_H5_font_size . 'px' ),
                'line-height' => esc_attr( $heading_H5_line_height ),
                'letter-spacing' => esc_attr( $heading_H5_letter_spacing . 'px' ),
            ),
        );

        $heading_H6_css = array(
            'h6' => array(
                'text-transform' => esc_attr( $heading_H6_text_transform ),
                'font-size' => esc_attr( $heading_H6_font_size . 'px' ),
                'line-height' => esc_attr( $heading_H6_line_height ),
                'letter-spacing' => esc_attr( $heading_H6_letter_spacing . 'px' ),
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

        /*-----------------------------------------------------------------------------
							 Color Section
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Global color -----------------------------------*/

        $color_theme = ifb_get_mod( 'color_theme' );
        $color_text = ifb_get_mod( 'color_text' );
        $color_link = ifb_get_mod( 'color_link' );
        $color_link_hover = ifb_get_mod( 'color_link_hover' );

        $color_theme_css = array(
            '.foot-top-sec' => array(
                'background-color' => esc_attr( $color_theme ),
            ),
        );

        $color_text_css = array(
            'p' => array(
                'color' => esc_attr( $color_text ),
            ),
        );

        $color_link_css = array(
            'a' => array(
                'color' => esc_attr( $color_link ),
            ),
        );

        $color_link_hover_css = array(
            'a:hover' => array(
                'color' => esc_attr( $color_link_hover ),
            ),
        );

        $output_css = array_merge(
            $color_theme_css,
            $color_text_css,
            $color_link_css,
            $color_link_hover_css
        );

        $parse_css .= influence_blog_parse_css( $output_css );

        $output_css = array();












        $dynamic_css = $parse_css;

        // trim white space for faster page loading.
        $dynamic_css = influence_blog_trim_css( $dynamic_css );

        return apply_filters( 'influence_blog_filter_dynamic_main_style', $dynamic_css );
    }
}
