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
                'font-size' => esc_attr( $body_font_size_t . 'px' ),
                'line-height' => esc_attr( $body_line_height_t ),
                'letter-spacing' => esc_attr( $body_letter_spacing_t . 'px' ),
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
                'font-size' => esc_attr( $heading_H1_font_size_t . 'px' ),
                'line-height' => esc_attr( $heading_H1_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H1_letter_spacing_t . 'px' ),
            ),
        );

        $heading_H2_css_t = array(
            'h2' => array(
                'font-size' => esc_attr( $heading_H2_font_size_t . 'px' ),
                'line-height' => esc_attr( $heading_H2_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H2_letter_spacing_t . 'px' ),
            ),
        );

        $heading_H3_css_t = array(
            'h3' => array(
                'font-size' => esc_attr( $heading_H3_font_size_t . 'px' ),
                'line-height' => esc_attr( $heading_H3_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H3_letter_spacing_t . 'px' ),
            ),
        );

        $heading_H4_css_t = array(
            'h4' => array(
                'font-size' => esc_attr( $heading_H4_font_size_t . 'px' ),
                'line-height' => esc_attr( $heading_H4_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H4_letter_spacing_t . 'px' ),
            ),
        );

        $heading_H5_css_t = array(
            'h5' => array(
                'font-size' => esc_attr( $heading_H5_font_size_t . 'px' ),
                'line-height' => esc_attr( $heading_H5_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H5_letter_spacing_t . 'px' ),
            ),
        );

        $heading_H6_css_t = array(
            'h6' => array(
                'font-size' => esc_attr( $heading_H6_font_size_t . 'px' ),
                'line-height' => esc_attr( $heading_H6_line_height_t ),
                'letter-spacing' => esc_attr( $heading_H6_letter_spacing_t . 'px' ),
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

        /*---------------------------------- Site layout advance -----------------------------------*/

        $site_layout_style = ifb_get_mod( 'site_layout_style' );
        $site_layout_advance_toggle = ifb_get_mod( 'site_layout_advance_toggle' );

        if( $site_layout_advance_toggle ) {

            $site_layout_style_advance_t_p_top = ifb_get_mod( 'site_layout_style_advance_t_p_top' );
            $site_layout_style_advance_t_p_right = ifb_get_mod( 'site_layout_style_advance_t_p_right' );
            $site_layout_style_advance_t_p_bottom = ifb_get_mod( 'site_layout_style_advance_t_p_bottom' );
            $site_layout_style_advance_t_p_left = ifb_get_mod( 'site_layout_style_advance_t_p_left' );

            $site_layout_advance_wide_css_t = array(
                'body.wide, body.boxed .page-wrap, body.framed .page-wrap' => array(
                    'padding-top' => esc_attr( $site_layout_style_advance_t_p_top . 'px' ),
                    'padding-right' => esc_attr( $site_layout_style_advance_t_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $site_layout_style_advance_t_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $site_layout_style_advance_t_p_left . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $site_layout_advance_wide_css_t
            );

            if( $site_layout_style == 'boxed' ) {

                $site_layout_style_advance_b_t_m_right = ifb_get_mod( 'site_layout_style_advance_b_t_m_right' );
                $site_layout_style_advance_b_t_m_left = ifb_get_mod( 'site_layout_style_advance_b_t_m_left' );

                $site_layout_advance_box_css_t = array(
                    'body.boxed .page-wrap' => array(
                        'margin-right' => esc_attr( $site_layout_style_advance_b_t_m_right . 'px' ),
                        'margin-left' => esc_attr( $site_layout_style_advance_b_t_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $output_css,
                    $site_layout_advance_box_css_t
                );
            }

            if( $site_layout_style == 'framed' ) {

                $site_layout_style_advance_f_t_m_top = ifb_get_mod( 'site_layout_style_advance_f_t_m_top' );
                $site_layout_style_advance_f_t_m_right = ifb_get_mod( 'site_layout_style_advance_f_t_m_right' );
                $site_layout_style_advance_f_t_m_bottom = ifb_get_mod( 'site_layout_style_advance_f_t_m_bottom' );
                $site_layout_style_advance_f_t_m_left = ifb_get_mod( 'site_layout_style_advance_f_t_m_left' );

                $site_layout_advance_framed_css_t = array(
                    'body.framed .page-wrap' => array(
                        'margin-top' => esc_attr( $site_layout_style_advance_f_t_m_top . 'px' ),
                        'margin-right' => esc_attr( $site_layout_style_advance_f_t_m_right . 'px' ),
                        'margin-bottom' => esc_attr( $site_layout_style_advance_f_t_m_bottom . 'px' ),
                        'margin-left' => esc_attr( $site_layout_style_advance_f_t_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $output_css,
                    $site_layout_advance_framed_css_t
                );
            }

            /*---------------------------------- Site layout container advance -----------------------------------*/

            $site_layout_container_style = ifb_get_mod( 'site_layout_container_style' );

            $site_layout_container_advance_b_t_p_top = ifb_get_mod( 'site_layout_container_advance_b_t_p_top' );
            $site_layout_container_advance_b_t_p_right = ifb_get_mod( 'site_layout_container_advance_b_t_p_right' );
            $site_layout_container_advance_b_t_p_bottom = ifb_get_mod( 'site_layout_container_advance_b_t_p_bottom' );
            $site_layout_container_advance_b_t_p_left = ifb_get_mod( 'site_layout_container_advance_b_t_p_left' );

            $site_layout_container_advance_b_t_m_top = ifb_get_mod( 'site_layout_container_advance_b_t_m_top' );
            $site_layout_container_advance_b_t_m_right = ifb_get_mod( 'site_layout_container_advance_b_t_m_right' );
            $site_layout_container_advance_b_t_m_bottom = ifb_get_mod( 'site_layout_container_advance_b_t_m_bottom' );
            $site_layout_container_advance_b_t_m_left = ifb_get_mod( 'site_layout_container_advance_b_t_m_left' );

            if( $site_layout_container_style == 'boxed' ) {

                $site_layout_advance_container_css_t = array(
                    '.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget' => array(
                        'padding-top' => esc_attr( $site_layout_container_advance_b_t_p_top . 'px' ),
                        'padding-right' => esc_attr( $site_layout_container_advance_b_t_p_right . 'px' ),
                        'padding-bottom' => esc_attr( $site_layout_container_advance_b_t_p_bottom . 'px' ),
                        'padding-left' => esc_attr( $site_layout_container_advance_b_t_p_left . 'px' ),

                        'margin-top' => esc_attr( $site_layout_container_advance_b_t_m_top . 'px' ),
                        'margin-right' => esc_attr( $site_layout_container_advance_b_t_m_right . 'px' ),
                        'margin-bottom' => esc_attr( $site_layout_container_advance_b_t_m_bottom . 'px' ),
                        'margin-left' => esc_attr( $site_layout_container_advance_b_t_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $output_css,
                    $site_layout_advance_container_css_t
                );
            }

            if( $site_layout_container_style == 'content-boxed' ) {

                $site_layout_advance_container_css_t = array(
                    '.container-style-content-boxed .primary-widget-area' => array(
                        'padding-top' => esc_attr( $site_layout_container_advance_b_t_p_top . 'px' ),
                        'padding-right' => esc_attr( $site_layout_container_advance_b_t_p_right . 'px' ),
                        'padding-bottom' => esc_attr( $site_layout_container_advance_b_t_p_bottom . 'px' ),
                        'padding-left' => esc_attr( $site_layout_container_advance_b_t_p_left . 'px' ),

                        'margin-top' => esc_attr( $site_layout_container_advance_b_t_m_top . 'px' ),
                        'margin-right' => esc_attr( $site_layout_container_advance_b_t_m_right . 'px' ),
                        'margin-bottom' => esc_attr( $site_layout_container_advance_b_t_m_bottom . 'px' ),
                        'margin-left' => esc_attr( $site_layout_container_advance_b_t_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $output_css,
                    $site_layout_advance_container_css_t
                );
            }
        }

        /*---------------------------------- Header one layout one design menu typo typography -----------------------------------*/

        //Header one layout one design menu typo typography
        $typo_header_one_layout_one_design_menu_font_size_t = ifb_get_mod( 'typo_header_one_layout_one_design_menu_size_t' );
        $typo_header_one_layout_one_design_menu_line_height_t = ifb_get_mod( 'typo_header_one_layout_one_design_menu_height_t' );
        $typo_header_one_layout_one_design_menu_letter_spacing_t = ifb_get_mod( 'typo_header_one_layout_one_design_menu_spacing_t' );

        $typo_header_one_layout_one_design_menu_css_t = array(
            '.top-bar-menu ul li a' => array(
                'font-size' => esc_attr( $typo_header_one_layout_one_design_menu_font_size_t . 'px' ),
                'line-height' => esc_attr( $typo_header_one_layout_one_design_menu_line_height_t ),
                'letter-spacing' => esc_attr( $typo_header_one_layout_one_design_menu_letter_spacing_t . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_header_one_layout_one_design_menu_css_t
        );

        /*---------------------------------- Header one layout one design social links typo -----------------------------------*/

        //Header one layout one design social links typo
        $typo_header_one_layout_one_design_social_links_font_size_t = ifb_get_mod( 'typo_header_one_layout_one_design_social_links_size_t' );

        $typo_header_one_layout_one_design_social_links_css_t = array(
            '.top-social-icon li a' => array(
                'font-size' => esc_attr( $typo_header_one_layout_one_design_social_links_font_size_t . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_header_one_layout_one_design_social_links_css_t
        );

        /*---------------------------------- Header one layout one advance section -----------------------------------*/

        $header_one_layout_one_advance_toggle = ifb_get_mod( 'header_one_layout_one_advance_toggle' );

        if( $header_one_layout_one_advance_toggle ) {

            $header_one_layout_one_advance_t_p_top = ifb_get_mod( 'header_one_layout_one_advance_t_p_top' );
            $header_one_layout_one_advance_t_p_right = ifb_get_mod( 'header_one_layout_one_advance_t_p_right' );
            $header_one_layout_one_advance_t_p_bottom = ifb_get_mod( 'header_one_layout_one_advance_t_p_bottom' );
            $header_one_layout_one_advance_t_p_left = ifb_get_mod( 'header_one_layout_one_advance_t_p_left' );

            $header_one_layout_one_advance_css_t = array(
                '.header-topbar-block' => array(
                    'padding-top' => esc_attr( $header_one_layout_one_advance_t_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_one_layout_one_advance_t_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_one_layout_one_advance_t_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_one_layout_one_advance_t_p_left . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $header_one_layout_one_advance_css_t
            );

        }

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
                'font-size' => esc_attr( $body_font_size_m . 'px' ),
                'line-height' => esc_attr( $body_line_height_m ),
                'letter-spacing' => esc_attr( $body_letter_spacing_m . 'px' ),
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
                'font-size' => esc_attr( $heading_H1_font_size_m . 'px' ),
                'line-height' => esc_attr( $heading_H1_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H1_letter_spacing_m . 'px' ),
            ),
        );

        $heading_H2_css_m = array(
            'h2' => array(
                'font-size' => esc_attr( $heading_H2_font_size_m . 'px' ),
                'line-height' => esc_attr( $heading_H2_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H2_letter_spacing_m . 'px' ),
            ),
        );

        $heading_H3_css_m = array(
            'h3' => array(
                'font-size' => esc_attr( $heading_H3_font_size_m . 'px' ),
                'line-height' => esc_attr( $heading_H3_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H3_letter_spacing_m . 'px' ),
            ),
        );

        $heading_H4_css_m = array(
            'h4' => array(
                'font-size' => esc_attr( $heading_H4_font_size_m . 'px' ),
                'line-height' => esc_attr( $heading_H4_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H4_letter_spacing_m . 'px' ),
            ),
        );

        $heading_H5_css_m = array(
            'h5' => array(
                'font-size' => esc_attr( $heading_H5_font_size_m . 'px' ),
                'line-height' => esc_attr( $heading_H5_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H5_letter_spacing_m . 'px' ),
            ),
        );

        $heading_H6_css_m = array(
            'h6' => array(
                'font-size' => esc_attr( $heading_H6_font_size_m . 'px' ),
                'line-height' => esc_attr( $heading_H6_line_height_m ),
                'letter-spacing' => esc_attr( $heading_H6_letter_spacing_m . 'px' ),
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

        /*---------------------------------- Site layout advance -----------------------------------*/

        if( $site_layout_advance_toggle ) {

            $site_layout_style_advance_m_p_top = ifb_get_mod( 'site_layout_style_advance_m_p_top' );
            $site_layout_style_advance_m_p_right = ifb_get_mod( 'site_layout_style_advance_m_p_right' );
            $site_layout_style_advance_m_p_bottom = ifb_get_mod( 'site_layout_style_advance_m_p_bottom' );
            $site_layout_style_advance_m_p_left = ifb_get_mod( 'site_layout_style_advance_m_p_left' );

            $site_layout_advance_wide_css_m = array(
                'body.wide, body.boxed .page-wrap, body.framed .page-wrap' => array(
                    'padding-top' => esc_attr( $site_layout_style_advance_m_p_top . 'px' ),
                    'padding-right' => esc_attr( $site_layout_style_advance_m_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $site_layout_style_advance_m_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $site_layout_style_advance_m_p_left . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $site_layout_advance_wide_css_m
            );

            if( $site_layout_style == 'boxed' ) {

                $site_layout_style_advance_b_m_m_right = ifb_get_mod( 'site_layout_style_advance_b_m_m_right' );
                $site_layout_style_advance_b_m_m_left = ifb_get_mod( 'site_layout_style_advance_b_m_m_left' );

                $site_layout_advance_box_css_m = array(
                    'body.boxed .page-wrap' => array(
                        'margin-right' => esc_attr( $site_layout_style_advance_b_m_m_right . 'px' ),
                        'margin-left' => esc_attr( $site_layout_style_advance_b_m_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $output_css,
                    $site_layout_advance_box_css_m
                );
            }

            if( $site_layout_style == 'framed' ) {

                $site_layout_style_advance_f_m_m_top = ifb_get_mod( 'site_layout_style_advance_f_m_m_top' );
                $site_layout_style_advance_f_m_m_right = ifb_get_mod( 'site_layout_style_advance_f_m_m_right' );
                $site_layout_style_advance_f_m_m_bottom = ifb_get_mod( 'site_layout_style_advance_f_m_m_bottom' );
                $site_layout_style_advance_f_m_m_left = ifb_get_mod( 'site_layout_style_advance_f_m_m_left' );

                $site_layout_advance_framed_css_m = array(
                    'body.framed .page-wrap' => array(
                        'margin-top' => esc_attr( $site_layout_style_advance_f_m_m_top . 'px' ),
                        'margin-right' => esc_attr( $site_layout_style_advance_f_m_m_right . 'px' ),
                        'margin-bottom' => esc_attr( $site_layout_style_advance_f_m_m_bottom . 'px' ),
                        'margin-left' => esc_attr( $site_layout_style_advance_f_m_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $output_css,
                    $site_layout_advance_framed_css_m
                );
            }

            /*---------------------------------- Site layout container advance -----------------------------------*/

            $site_layout_container_style = ifb_get_mod( 'site_layout_container_style' );

            $site_layout_container_advance_b_m_p_top = ifb_get_mod( 'site_layout_container_advance_b_m_p_top' );
            $site_layout_container_advance_b_m_p_right = ifb_get_mod( 'site_layout_container_advance_b_m_p_right' );
            $site_layout_container_advance_b_m_p_bottom = ifb_get_mod( 'site_layout_container_advance_b_m_p_bottom' );
            $site_layout_container_advance_b_m_p_left = ifb_get_mod( 'site_layout_container_advance_b_m_p_left' );

            $site_layout_container_advance_b_m_m_top = ifb_get_mod( 'site_layout_container_advance_b_m_m_top' );
            $site_layout_container_advance_b_m_m_right = ifb_get_mod( 'site_layout_container_advance_b_m_m_right' );
            $site_layout_container_advance_b_m_m_bottom = ifb_get_mod( 'site_layout_container_advance_b_m_m_bottom' );
            $site_layout_container_advance_b_m_m_left = ifb_get_mod( 'site_layout_container_advance_b_m_m_left' );

            if( $site_layout_container_style == 'boxed' ) {

                $site_layout_advance_container_css_m = array(
                    '.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget' => array(
                        'padding-top' => esc_attr( $site_layout_container_advance_b_m_p_top . 'px' ),
                        'padding-right' => esc_attr( $site_layout_container_advance_b_m_p_right . 'px' ),
                        'padding-bottom' => esc_attr( $site_layout_container_advance_b_m_p_bottom . 'px' ),
                        'padding-left' => esc_attr( $site_layout_container_advance_b_m_p_left . 'px' ),

                        'margin-top' => esc_attr( $site_layout_container_advance_b_m_m_top . 'px' ),
                        'margin-right' => esc_attr( $site_layout_container_advance_b_m_m_right . 'px' ),
                        'margin-bottom' => esc_attr( $site_layout_container_advance_b_m_m_bottom . 'px' ),
                        'margin-left' => esc_attr( $site_layout_container_advance_b_m_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $output_css,
                    $site_layout_advance_container_css_m
                );
            }

            if( $site_layout_container_style == 'content-boxed' ) {

                $site_layout_advance_container_css_m = array(
                    '.container-style-content-boxed .primary-widget-area' => array(
                        'padding-top' => esc_attr( $site_layout_container_advance_b_m_p_top . 'px' ),
                        'padding-right' => esc_attr( $site_layout_container_advance_b_m_p_right . 'px' ),
                        'padding-bottom' => esc_attr( $site_layout_container_advance_b_m_p_bottom . 'px' ),
                        'padding-left' => esc_attr( $site_layout_container_advance_b_m_p_left . 'px' ),

                        'margin-top' => esc_attr( $site_layout_container_advance_b_m_m_top . 'px' ),
                        'margin-right' => esc_attr( $site_layout_container_advance_b_m_m_right . 'px' ),
                        'margin-bottom' => esc_attr( $site_layout_container_advance_b_m_m_bottom . 'px' ),
                        'margin-left' => esc_attr( $site_layout_container_advance_b_m_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $output_css,
                    $site_layout_advance_container_css_m
                );
            }
        }

        /*---------------------------------- Header one layout one design menu typo typography -----------------------------------*/

        //Header one layout one design menu typo typography
        $typo_header_one_layout_one_design_menu_font_size_m = ifb_get_mod( 'typo_header_one_layout_one_design_menu_size_m' );
        $typo_header_one_layout_one_design_menu_line_height_m = ifb_get_mod( 'typo_header_one_layout_one_design_menu_height_m' );
        $typo_header_one_layout_one_design_menu_letter_spacing_m = ifb_get_mod( 'typo_header_one_layout_one_design_menu_spacing_m' );

        $typo_header_one_layout_one_design_menu_css_m = array(
            '.top-bar-menu ul li a' => array(
                'font-size' => esc_attr( $typo_header_one_layout_one_design_menu_font_size_m . 'px' ),
                'line-height' => esc_attr( $typo_header_one_layout_one_design_menu_line_height_m ),
                'letter-spacing' => esc_attr( $typo_header_one_layout_one_design_menu_letter_spacing_m . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_header_one_layout_one_design_menu_css_m
        );

        /*---------------------------------- Header one layout one design social links typo -----------------------------------*/

        //Header one layout one design social links typo
        $typo_header_one_layout_one_design_social_links_font_size_m = ifb_get_mod( 'typo_header_one_layout_one_design_social_links_size_m' );

        $typo_header_one_layout_one_design_social_links_css_m = array(
            '.top-social-icon li a' => array(
                'font-size' => esc_attr( $typo_header_one_layout_one_design_social_links_font_size_m . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_header_one_layout_one_design_social_links_css_m
        );

        /*---------------------------------- Header one layout one advance section -----------------------------------*/

        $header_one_layout_one_advance_toggle = ifb_get_mod( 'header_one_layout_one_advance_toggle' );

        if( $header_one_layout_one_advance_toggle ) {

            $header_one_layout_one_advance_m_p_top = ifb_get_mod( 'header_one_layout_one_advance_m_p_top' );
            $header_one_layout_one_advance_m_p_right = ifb_get_mod( 'header_one_layout_one_advance_m_p_right' );
            $header_one_layout_one_advance_m_p_bottom = ifb_get_mod( 'header_one_layout_one_advance_m_p_bottom' );
            $header_one_layout_one_advance_m_p_left = ifb_get_mod( 'header_one_layout_one_advance_m_p_left' );

            $header_one_layout_one_advance_css_m = array(
                '.header-topbar-block' => array(
                    'padding-top' => esc_attr( $header_one_layout_one_advance_m_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_one_layout_one_advance_m_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_one_layout_one_advance_m_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_one_layout_one_advance_m_p_left . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $header_one_layout_one_advance_css_m
            );

        }

        $parse_css .= influence_blog_parse_css( $output_css, '', '480' );

        $output_css = array();














        $dynamic_css = $parse_css;

        // trim white space for faster page loading.
        $dynamic_css = influence_blog_trim_css( $dynamic_css );

        return apply_filters( 'influence_blog_filter_dynamic_responsive_style', $dynamic_css );
    }
}
