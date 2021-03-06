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

        $site_layout_style = influence_blog_get_mod( 'site_layout_style' );
        $site_layout_style_design_options = influence_blog_get_mod( 'site_layout_style_design_options' );
        $site_layout_style_design_box_shadow_toggle = influence_blog_get_mod( 'site_layout_style_design_box_shadow_toggle' );

        if( $site_layout_style !== 'wide' ) {

            if( $site_layout_style_design_options == 'color' ) {

                $site_layout_style_design_outside = influence_blog_get_mod( 'site_layout_style_design_outside' );
                $site_layout_style_design_inside = influence_blog_get_mod( 'site_layout_style_design_inside' );

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

        /*---------------------------------- Container Style - Design -----------------------------------*/

        $site_layout_container_style = influence_blog_get_mod( 'site_layout_container_style' );
        $site_layout_container_design_bg = influence_blog_get_mod( 'site_layout_container_design_bg' );

        if( $site_layout_container_style == 'boxed' ) {

            $site_layout_container_design_bg_css = array(
                '.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget' => array(
                    'background-color' => esc_attr( $site_layout_container_design_bg ),
                ),
            );

            $output_css = array_merge(
                $site_layout_container_design_bg_css
            );

            $parse_css .= influence_blog_parse_css( $output_css );

            $output_css = array();
        }

        if( $site_layout_container_style == 'content-boxed' ) {

            $site_layout_container_design_bg_css = array(
                '.container-style-content-boxed .primary-widget-area' => array(
                    'background-color' => esc_attr( $site_layout_container_design_bg ),
                ),
            );

            $output_css = array_merge(
                $site_layout_container_design_bg_css
            );

            $parse_css .= influence_blog_parse_css( $output_css );

            $output_css = array();
        }

        /*---------------------------------- Advance Section -----------------------------------*/

        $site_layout_advance_toggle = influence_blog_get_mod( 'site_layout_advance_toggle' );

        if( $site_layout_advance_toggle ) {

            $site_layout_style_advance_d_p_top = influence_blog_get_mod( 'site_layout_style_advance_d_p_top' );
            $site_layout_style_advance_d_p_right = influence_blog_get_mod( 'site_layout_style_advance_d_p_right' );
            $site_layout_style_advance_d_p_bottom = influence_blog_get_mod( 'site_layout_style_advance_d_p_bottom' );
            $site_layout_style_advance_d_p_left = influence_blog_get_mod( 'site_layout_style_advance_d_p_left' );

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

                $site_layout_style_advance_b_d_m_right = influence_blog_get_mod( 'site_layout_style_advance_b_d_m_right' );
                $site_layout_style_advance_b_d_m_left = influence_blog_get_mod( 'site_layout_style_advance_b_d_m_left' );

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

                $site_layout_style_advance_f_d_m_top = influence_blog_get_mod( 'site_layout_style_advance_f_d_m_top' );
                $site_layout_style_advance_f_d_m_right = influence_blog_get_mod( 'site_layout_style_advance_f_d_m_right' );
                $site_layout_style_advance_f_d_m_bottom = influence_blog_get_mod( 'site_layout_style_advance_f_d_m_bottom' );
                $site_layout_style_advance_f_d_m_left = influence_blog_get_mod( 'site_layout_style_advance_f_d_m_left' );

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

                $site_layout_style_advance_boxed_width = influence_blog_get_mod( 'site_layout_style_advance_boxed_width' );
                $site_layout_style_advance_boxed_border_radius = influence_blog_get_mod( 'site_layout_style_advance_boxed_border_radius' );
                $site_layout_style_advance_boxed_border_width = influence_blog_get_mod( 'site_layout_style_advance_boxed_border_width' );
                $site_layout_style_advance_boxed_border_color = influence_blog_get_mod( 'site_layout_style_advance_boxed_border_color' );

                $site_layout_advance_box_border_radius_css = array(
                    'body.boxed .page-wrap, body.framed .page-wrap' => array(
                        'width' => esc_attr( $site_layout_style_advance_boxed_width . 'vw' ),
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

            $site_layout_container_advance_b_d_p_top = influence_blog_get_mod( 'site_layout_container_advance_b_d_p_top' );
            $site_layout_container_advance_b_d_p_right = influence_blog_get_mod( 'site_layout_container_advance_b_d_p_right' );
            $site_layout_container_advance_b_d_p_bottom = influence_blog_get_mod( 'site_layout_container_advance_b_d_p_bottom' );
            $site_layout_container_advance_b_d_p_left = influence_blog_get_mod( 'site_layout_container_advance_b_d_p_left' );

            $site_layout_container_advance_b_d_m_top = influence_blog_get_mod( 'site_layout_container_advance_b_d_m_top' );
            $site_layout_container_advance_b_d_m_right = influence_blog_get_mod( 'site_layout_container_advance_b_d_m_right' );
            $site_layout_container_advance_b_d_m_bottom = influence_blog_get_mod( 'site_layout_container_advance_b_d_m_bottom' );
            $site_layout_container_advance_b_d_m_left = influence_blog_get_mod( 'site_layout_container_advance_b_d_m_left' );

            if( $site_layout_container_style == 'boxed' ) {

                $site_layout_advance_container_css = array(
                    '.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget' => array(
                        'padding-top' => esc_attr( $site_layout_container_advance_b_d_p_top . 'px' ),
                        'padding-right' => esc_attr( $site_layout_container_advance_b_d_p_right . 'px' ),
                        'padding-bottom' => esc_attr( $site_layout_container_advance_b_d_p_bottom . 'px' ),
                        'padding-left' => esc_attr( $site_layout_container_advance_b_d_p_left . 'px' ),

                        'margin-top' => esc_attr( $site_layout_container_advance_b_d_m_top . 'px' ),
                        'margin-right' => esc_attr( $site_layout_container_advance_b_d_m_right . 'px' ),
                        'margin-bottom' => esc_attr( $site_layout_container_advance_b_d_m_bottom . 'px' ),
                        'margin-left' => esc_attr( $site_layout_container_advance_b_d_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $site_layout_advance_container_css
                );

                $parse_css .= influence_blog_parse_css( $output_css );

                $output_css = array();
            }

            if( $site_layout_container_style == 'content-boxed' ) {

                $site_layout_advance_container_css = array(
                    '.container-style-content-boxed .primary-widget-area' => array(
                        'padding-top' => esc_attr( $site_layout_container_advance_b_d_p_top . 'px' ),
                        'padding-right' => esc_attr( $site_layout_container_advance_b_d_p_right . 'px' ),
                        'padding-bottom' => esc_attr( $site_layout_container_advance_b_d_p_bottom . 'px' ),
                        'padding-left' => esc_attr( $site_layout_container_advance_b_d_p_left . 'px' ),

                        'margin-top' => esc_attr( $site_layout_container_advance_b_d_m_top . 'px' ),
                        'margin-right' => esc_attr( $site_layout_container_advance_b_d_m_right . 'px' ),
                        'margin-bottom' => esc_attr( $site_layout_container_advance_b_d_m_bottom . 'px' ),
                        'margin-left' => esc_attr( $site_layout_container_advance_b_d_m_left . 'px' ),
                    ),
                );

                $output_css = array_merge(
                    $site_layout_advance_container_css
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
        $body_text_transform = influence_blog_get_mod( 'typo_body_transform' );
        $body_font_size = influence_blog_get_mod( 'typo_body_size_d' );
        $body_line_height = influence_blog_get_mod( 'typo_body_height_d' );
        $body_letter_spacing = influence_blog_get_mod( 'typo_body_spacing_d' );

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

        $color_theme = influence_blog_get_mod( 'color_theme' );
        $color_text = influence_blog_get_mod( 'color_text' );
        $color_link = influence_blog_get_mod( 'color_link' );
        $color_link_hover = influence_blog_get_mod( 'color_link_hover' );

        $color_theme_css = array(
            '.slick-arrow' => array(
                'color' => esc_attr( $color_theme ),
                'border' => esc_attr( '2px solid ' . $color_theme ),
            ),
            '.slick-arrow:hover,
            .scrollup,
            .author-box' => array(
                'background-color' => esc_attr( $color_theme ),
            ),
        );

        $color_text_css = array(
            'body, p, h1, h2, h3, h4, h5, h6' => array(
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

        /*-----------------------------------------------------------------------------
							 Header Settings
        -----------------------------------------------------------------------------*/

        /*-----------------------------------------------------------------------------
							 Layout Options
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Design Section -----------------------------------*/

        $header_bg_color = influence_blog_get_mod( 'header_layout_options_hedader_bg_color' );

        $header_bg_color_css = array(
            '.header-layout1 .header-top-block:before, .header-layout2:before' => array(
                'background-color' => esc_attr( $header_bg_color ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $header_bg_color_css );

        /*---------------------------------- Advance Section -----------------------------------*/

        $header_layout_options_advance_toggle = influence_blog_get_mod( 'header_layout_options_advance_toggle' );

        if( $header_layout_options_advance_toggle ) {

            $header_layout_options_advance_bg_image_size = influence_blog_get_mod( 'header_layout_options_advance_bg_image_size' );
            $header_layout_options_advance_bg_image_position_x = influence_blog_get_mod( 'header_layout_options_advance_bg_image_position_x' );
            $header_layout_options_advance_bg_image_position_y = influence_blog_get_mod( 'header_layout_options_advance_bg_image_position_y' );
            $header_layout_options_advance_header_height = influence_blog_get_mod( 'header_layout_options_advance_header_height' );

            $header_layout_options_advance_bg_css = array(
                '.header-layout1 .header-top-block, .header-layout2, .header-layout1' => array(
                    'background-size' => esc_attr( $header_layout_options_advance_bg_image_size ),
                    'background-position-x' => esc_attr( $header_layout_options_advance_bg_image_position_x ),
                    'background-position-y' => esc_attr( $header_layout_options_advance_bg_image_position_y ),
                ),
                '.header-layout1 .header-top-block, .header-layout2' => array(
                    'height' => esc_attr( $header_layout_options_advance_header_height . 'px' ),
                ),
            );

            $parse_css .= influence_blog_parse_css( $header_layout_options_advance_bg_css );
        }

        /*-----------------------------------------------------------------------------
							 Header One Options
        -----------------------------------------------------------------------------*/

        /*---------------------------------- General Section -----------------------------------*/

        $header_one_layout_one_menu_alignment = influence_blog_get_mod( 'header_one_layout_one_menu_alignment' );

        $header_one_menu_alignment_css = array(
            '.top-bar-menu' => array(
                'text-align' => esc_attr( $header_one_layout_one_menu_alignment ),
            ),
        );

        $header_one_layout_one_social_links_alignment = influence_blog_get_mod( 'header_one_layout_one_social_links_alignment' );

        $header_one_social_links_alignment_css = array(
            '.top-social-icon' => array(
                'text-align' => esc_attr( $header_one_layout_one_social_links_alignment ),
            ),
        );

        $output_css = array_merge(
            $header_one_menu_alignment_css,
            $header_one_social_links_alignment_css
        );

        $parse_css .= influence_blog_parse_css( $output_css );

        $output_css = array();

        /*---------------------------------- Design Section -----------------------------------*/

        $header_one_layout_one_design_bg_color = influence_blog_get_mod( 'header_one_layout_one_design_bg_color' );

        $header_one_layout_one_design_bg_color_css = array(
            '.header-topbar-block' => array(
                'background-color' => esc_attr( $header_one_layout_one_design_bg_color ),
            ),
        );

        $header_one_layout_one_design_menu_color = influence_blog_get_mod( 'header_one_layout_one_design_menu_color' );
        $header_one_layout_one_design_menu_hover_color = influence_blog_get_mod( 'header_one_layout_one_design_menu_hover_color' );
        $header_one_layout_one_design_menu_sep_color = influence_blog_get_mod( 'header_one_layout_one_design_menu_sep_color' );

        $header_one_layout_one_design_menu_color_css = array(
            '.top-bar-menu ul li a' => array(
                'color' => esc_attr( $header_one_layout_one_design_menu_color ),
                'border-right' => esc_attr( '1px solid ' . $header_one_layout_one_design_menu_sep_color ),
            ),
            '.top-bar-menu ul li a:hover' => array(
                'color' => esc_attr( $header_one_layout_one_design_menu_hover_color ),
            ),
        );

        $output_css = array_merge(
            $header_one_layout_one_design_bg_color_css,
            $header_one_layout_one_design_menu_color_css
        );

        $parse_css .= influence_blog_parse_css( $output_css );

        $output_css = array();

        //Header one layout one design menu typo typography
        $typo_header_one_layout_one_design_menu_font_family = influence_blog_get_font_data( 'typo_header_one_layout_one_design_menu_font' );
        $typo_header_one_layout_one_design_menu_font_weight = influence_blog_get_font_data( 'typo_header_one_layout_one_design_menu_font', 'fontweight' );
        $typo_header_one_layout_one_design_menu_text_transform = influence_blog_get_mod( 'typo_header_one_layout_one_design_menu_transform' );
        $typo_header_one_layout_one_design_menu_font_size = influence_blog_get_mod( 'typo_header_one_layout_one_design_menu_size_d' );
        $typo_header_one_layout_one_design_menu_line_height = influence_blog_get_mod( 'typo_header_one_layout_one_design_menu_height_d' );
        $typo_header_one_layout_one_design_menu_letter_spacing = influence_blog_get_mod( 'typo_header_one_layout_one_design_menu_spacing_d' );

        $typo_header_one_layout_one_design_menu_css = array(
            '.top-bar-menu ul li a' => array(
                'font-family' => esc_attr( $typo_header_one_layout_one_design_menu_font_family ),
                'font-weight' => esc_attr( $typo_header_one_layout_one_design_menu_font_weight ),
                'text-transform' => esc_attr( $typo_header_one_layout_one_design_menu_text_transform ),
                'font-size' => esc_attr( $typo_header_one_layout_one_design_menu_font_size . 'px' ),
                'line-height' => esc_attr( $typo_header_one_layout_one_design_menu_line_height ),
                'letter-spacing' => esc_attr( $typo_header_one_layout_one_design_menu_letter_spacing . 'px' ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $typo_header_one_layout_one_design_menu_css );

        $header_one_layout_one_design_social_links_color = influence_blog_get_mod( 'header_one_layout_one_design_social_links_color' );
        $header_one_layout_one_design_social_links_hover_color = influence_blog_get_mod( 'header_one_layout_one_design_social_links_hover_color' );
        $header_one_layout_one_design_social_links_sep_color = influence_blog_get_mod( 'header_one_layout_one_design_social_links_sep_color' );
        $typo_header_one_layout_one_design_social_links_font_size = influence_blog_get_mod( 'typo_header_one_layout_one_design_social_links_size_d' );

        $header_one_layout_one_design_social_links_color_css = array(
            '.top-social-icon li a' => array(
                'color' => esc_attr( $header_one_layout_one_design_social_links_color ),
                'border-left' => esc_attr( '1px solid ' . $header_one_layout_one_design_social_links_sep_color ),
                'font-size' => esc_attr( $typo_header_one_layout_one_design_social_links_font_size . 'px' ),
            ),
            '.top-social-icon li a:hover' => array(
                'color' => esc_attr( $header_one_layout_one_design_social_links_hover_color ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $header_one_layout_one_design_social_links_color_css );

        /*---------------------------------- Advance Section -----------------------------------*/

        $header_one_layout_one_advance_toggle = influence_blog_get_mod( 'header_one_layout_one_advance_toggle' );

        if( $header_one_layout_one_advance_toggle ) {

            $header_one_layout_one_advance_d_p_top = influence_blog_get_mod( 'header_one_layout_one_advance_d_p_top' );
            $header_one_layout_one_advance_d_p_right = influence_blog_get_mod( 'header_one_layout_one_advance_d_p_right' );
            $header_one_layout_one_advance_d_p_bottom = influence_blog_get_mod( 'header_one_layout_one_advance_d_p_bottom' );
            $header_one_layout_one_advance_d_p_left = influence_blog_get_mod( 'header_one_layout_one_advance_d_p_left' );

            $header_one_layout_one_advance_css = array(
                '.header-topbar-block' => array(
                    'padding-top' => esc_attr( $header_one_layout_one_advance_d_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_one_layout_one_advance_d_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_one_layout_one_advance_d_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_one_layout_one_advance_d_p_left . 'px' ),
                ),
            );

            $parse_css .= influence_blog_parse_css( $header_one_layout_one_advance_css );
        }

        /*-----------------------------------------------------------------------------
							 Header Two Options
        -----------------------------------------------------------------------------*/

        /*---------------------------------- General Section -----------------------------------*/

        $header_two_site_title_alignment = influence_blog_get_mod( 'header_two_site_title_alignment' );
        $header_two_ads_alignment = influence_blog_get_mod( 'header_two_ads_alignment' );

        $header_two_general_css = array(
            '.logo-sec' => array(
                'text-align' => esc_attr( $header_two_site_title_alignment ),
            ),
            '.side-img' => array(
                'text-align' => esc_attr( $header_two_ads_alignment ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $header_two_general_css );

        /*---------------------------------- Design Section -----------------------------------*/

        //Header two design site title typo
        $typo_header_two_design_site_title_font_family = influence_blog_get_font_data( 'typo_header_two_design_site_title_font' );
        $typo_header_two_design_site_title_font_weight = influence_blog_get_font_data( 'typo_header_two_design_site_title_font', 'fontweight' );
        $typo_header_two_design_site_title_text_transform = influence_blog_get_mod( 'typo_header_two_design_site_title_transform' );
        $typo_header_two_design_site_title_font_size = influence_blog_get_mod( 'typo_header_two_design_site_title_size_d' );
        $typo_header_two_design_site_title_line_height = influence_blog_get_mod( 'typo_header_two_design_site_title_height_d' );
        $typo_header_two_design_site_title_letter_spacing = influence_blog_get_mod( 'typo_header_two_design_site_title_spacing_d' );

        $typo_header_two_design_site_title_css = array(
            '.site-title' => array(
                'font-family' => esc_attr( $typo_header_two_design_site_title_font_family ),
                'font-weight' => esc_attr( $typo_header_two_design_site_title_font_weight ),
                'text-transform' => esc_attr( $typo_header_two_design_site_title_text_transform ),
                'font-size' => esc_attr( $typo_header_two_design_site_title_font_size . 'px' ),
                'line-height' => esc_attr( $typo_header_two_design_site_title_line_height ),
                'letter-spacing' => esc_attr( $typo_header_two_design_site_title_letter_spacing . 'px' ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $typo_header_two_design_site_title_css );

        /*---------------------------------- Advance Section -----------------------------------*/

        $header_two_advance_toggle = influence_blog_get_mod( 'header_two_advance_toggle' );

        if( $header_two_advance_toggle ) {

            $header_two_advance_site_title_d_m_top = influence_blog_get_mod( 'header_two_advance_site_title_d_m_top' );
            $header_two_advance_site_title_d_m_bottom = influence_blog_get_mod( 'header_two_advance_site_title_d_m_bottom' );

            $header_two_advance_ads_d_m_top = influence_blog_get_mod( 'header_two_advance_ads_d_m_top' );
            $header_two_advance_ads_d_m_bottom = influence_blog_get_mod( 'header_two_advance_ads_d_m_bottom' );

            $header_two_advance_css = array(
                '.logo-sec' => array(
                    'margin-top' => esc_attr( $header_two_advance_site_title_d_m_top . 'px' ),
                    'margin-bottom' => esc_attr( $header_two_advance_site_title_d_m_bottom . 'px' ),
                ),
                '.side-img' => array(
                    'margin-top' => esc_attr( $header_two_advance_ads_d_m_top . 'px' ),
                    'margin-bottom' => esc_attr( $header_two_advance_ads_d_m_bottom . 'px' ),
                ),
            );

            $parse_css .= influence_blog_parse_css( $header_two_advance_css );
        }

        /*-----------------------------------------------------------------------------
							 Header Three Options
        -----------------------------------------------------------------------------*/

        /*---------------------------------- General Section -----------------------------------*/

        $header_three_menu_icon_alignment = influence_blog_get_mod( 'header_three_menu_icon_alignment' );
        $header_three_menu_alignment = influence_blog_get_mod( 'header_three_menu_alignment' );
        $header_three_search_icon_alignment = influence_blog_get_mod( 'header_three_search_icon_alignment' );

        $header_three_general_css = array(
            '.home-icon' => array(
                'text-align' => esc_attr( $header_three_menu_icon_alignment ),
            ),
            '.main_navigation' => array(
                'text-align' => esc_attr( $header_three_menu_alignment ),
            ),
            '.mobile-search.search-icon' => array(
                'text-align' => esc_attr( $header_three_search_icon_alignment ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $header_three_general_css );

        /*---------------------------------- Design Section -----------------------------------*/

        $header_three_design_bg_color = influence_blog_get_mod( 'header_three_design_bg_color' );
        $header_three_design_border_color = influence_blog_get_mod( 'header_three_design_border_color' );

        $header_three_design_menu_icon_color = influence_blog_get_mod( 'header_three_design_menu_icon_color' );
        $header_three_design_menu_icon_hover_color = influence_blog_get_mod( 'header_three_design_menu_icon_hover_color' );
        $header_three_design_menu_icon_bg_color = influence_blog_get_mod( 'header_three_design_menu_icon_bg_color' );
        $header_three_design_menu_icon_bg_hover_color = influence_blog_get_mod( 'header_three_design_menu_icon_bg_hover_color' );
        $typo_header_three_design_menu_icon_size_d = influence_blog_get_mod( 'typo_header_three_design_menu_icon_size_d' );

        $header_three_design_main_menu_color = influence_blog_get_mod( 'header_three_design_main_menu_color' );
        $header_three_design_main_menu_hover_color = influence_blog_get_mod( 'header_three_design_main_menu_hover_color' );
        $header_three_design_main_menu_bg_color = influence_blog_get_mod( 'header_three_design_main_menu_bg_color' );
        $header_three_design_main_menu_bg_hover_color = influence_blog_get_mod( 'header_three_design_main_menu_bg_hover_color' );
        $typo_header_three_design_main_menu_font_family = influence_blog_get_font_data( 'typo_header_three_design_main_menu_font' );
        $typo_header_three_design_main_menu_font_weight = influence_blog_get_font_data( 'typo_header_three_design_main_menu_font', 'fontweight' );
        $typo_header_three_design_main_menu_transform = influence_blog_get_mod( 'typo_header_three_design_main_menu_transform' );
        $typo_header_three_design_main_menu_font_size = influence_blog_get_mod( 'typo_header_three_design_main_menu_size_d' );
        $typo_header_three_design_main_menu_line_height = influence_blog_get_mod( 'typo_header_three_design_main_menu_height_d' );
        $typo_header_three_design_main_menu_letter_spacing = influence_blog_get_mod( 'typo_header_three_design_main_menu_spacing_d' );

        $header_three_design_sub_menu_color = influence_blog_get_mod( 'header_three_design_sub_menu_color' );
        $header_three_design_sub_menu_hover_color = influence_blog_get_mod( 'header_three_design_sub_menu_hover_color' );
        $header_three_design_sub_menu_bg_color = influence_blog_get_mod( 'header_three_design_sub_menu_bg_color' );
        $header_three_design_sub_menu_sep_color = influence_blog_get_mod( 'header_three_design_sub_menu_sep_color' );
        $typo_header_three_design_sub_menu_transform = influence_blog_get_mod( 'typo_header_three_design_sub_menu_transform' );
        $typo_header_three_design_sub_menu_font_size = influence_blog_get_mod( 'typo_header_three_design_sub_menu_size_d' );
        $typo_header_three_design_sub_menu_line_height = influence_blog_get_mod( 'typo_header_three_design_sub_menu_height_d' );
        $typo_header_three_design_sub_menu_letter_spacing = influence_blog_get_mod( 'typo_header_three_design_sub_menu_spacing_d' );

        $header_three_design_search_icon_color = influence_blog_get_mod( 'header_three_design_search_icon_color' );
        $header_three_design_search_icon_hover_color = influence_blog_get_mod( 'header_three_design_search_icon_hover_color' );
        $header_three_design_search_icon_bg_color = influence_blog_get_mod( 'header_three_design_search_icon_bg_color' );
        $header_three_design_search_icon_bg_hover_color = influence_blog_get_mod( 'header_three_design_search_icon_bg_hover_color' );
        $typo_header_three_design_search_icon_size_d = influence_blog_get_mod( 'typo_header_three_design_search_icon_size_d' );

        $header_three_design_css = array(
            '.header-layout1 .header-medium-block, .header-layout2 .header-medium-block' => array(
                'background-color' => esc_attr( $header_three_design_bg_color ),
            ),
            '.home-icon a' => array(
                'color' => esc_attr( $header_three_design_menu_icon_color ),
                'background-color' => esc_attr( $header_three_design_menu_icon_bg_color ),
                'font-size' => esc_attr( $typo_header_three_design_menu_icon_size_d . 'px' ),
            ),
            '.home-icon a:hover' => array(
                'color' => esc_attr( $header_three_design_menu_icon_hover_color ),
                'background-color' => esc_attr( $header_three_design_menu_icon_bg_hover_color ),
            ),
            '.main_navigation ul li a, .header-layout1 .main_navigation ul li a, .header-layout2 .main_navigation ul li a' => array(
                'color' => esc_attr( $header_three_design_main_menu_color ),
            ),
            '.main_navigation ul li a:hover, .header-layout1 .main_navigation ul li a:hover, .header-layout2 .main_navigation ul li a:hover' => array(
                'color' => esc_attr( $header_three_design_main_menu_hover_color ),
            ),
            '.main_navigation ul li:before, .header-layout2 .main_navigation ul li.current_page_item a, .header-layout2 .main_navigation ul li:before' => array(
                'background-color' => esc_attr( $header_three_design_main_menu_bg_hover_color ),
            ),
            '.main_navigation ul li a' => array(
                'font-family' => esc_attr( $typo_header_three_design_main_menu_font_family ),
                'text-transform' => esc_attr( $typo_header_three_design_main_menu_transform ),
                'font-size' => esc_attr( $typo_header_three_design_main_menu_font_size . 'px' ),
                'line-height' => esc_attr( $typo_header_three_design_main_menu_line_height ),
                'letter-spacing' => esc_attr( $typo_header_three_design_main_menu_letter_spacing . 'px' ),
            ),
            '.main_navigation ul li.menu-item-has-children, .main_navigation ul li.menu-item-has-children ul.sub-menu li a' => array(
                'color' => esc_attr( $header_three_design_sub_menu_color ),
            ),
            '.main_navigation ul li.menu-item-has-children ul.sub-menu li a:hover' => array(
                'color' => esc_attr( $header_three_design_sub_menu_hover_color . '!important' ),
            ),
            '.main_navigation ul li.menu-item-has-children .sub-menu' => array(
                'background-color' => esc_attr( $header_three_design_sub_menu_bg_color ),
            ),
            '.header-layout2 .main_navigation ul li.menu-item-has-children ul.sub-menu li, .main_navigation ul li.menu-item-has-children ul.sub-menu li' => array(
                'border-bottom' => esc_attr( '1px solid ' . $header_three_design_sub_menu_sep_color ),
            ),
            '.main_navigation ul li.menu-item-has-children .sub-menu li a' => array(
                'text-transform' => esc_attr( $typo_header_three_design_sub_menu_transform ),
                'font-size' => esc_attr( $typo_header_three_design_sub_menu_font_size . 'px' ),
                'line-height' => esc_attr( $typo_header_three_design_sub_menu_line_height ),
                'letter-spacing' => esc_attr( $typo_header_three_design_sub_menu_letter_spacing . 'px' ),
            ),
            '.header-layout1 .search-icon .btn-search, .search-icon .btn-search' => array(
                'color' => esc_attr( $header_three_design_search_icon_color ),
                'background-color' => esc_attr( $header_three_design_search_icon_bg_color ),
                'font-size' => esc_attr( $typo_header_three_design_search_icon_size_d . 'px' ),
            ),
            '.header-layout1 .search-icon .btn-search:hover, .search-icon .btn-search:hover' => array(
                'color' => esc_attr( $header_three_design_search_icon_hover_color ),
                'background-color' => esc_attr( $header_three_design_search_icon_bg_hover_color ),
            ),
            '.menu-bg-wrap' => array(
                'border-color' => esc_attr( $header_three_design_border_color ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $header_three_design_css );

        /*---------------------------------- Advance Section -----------------------------------*/

        $header_three_advance_toggle = influence_blog_get_mod( 'header_three_advance_toggle' );

        if( $header_three_advance_toggle ) {

            $header_three_advance_d_b_bottom = influence_blog_get_mod( 'header_three_advance_d_b_bottom' );

            $header_three_advance_menu_icon_d_p_top = influence_blog_get_mod( 'header_three_advance_menu_icon_d_p_top' );
            $header_three_advance_menu_icon_d_p_right = influence_blog_get_mod( 'header_three_advance_menu_icon_d_p_right' );
            $header_three_advance_menu_icon_d_p_bottom = influence_blog_get_mod( 'header_three_advance_menu_icon_d_p_bottom' );
            $header_three_advance_menu_icon_d_p_left = influence_blog_get_mod( 'header_three_advance_menu_icon_d_p_left' );

            $header_three_advance_menu_d_p_top = influence_blog_get_mod( 'header_three_advance_menu_d_p_top' );
            $header_three_advance_menu_d_p_right = influence_blog_get_mod( 'header_three_advance_menu_d_p_right' );
            $header_three_advance_menu_d_p_bottom = influence_blog_get_mod( 'header_three_advance_menu_d_p_bottom' );
            $header_three_advance_menu_d_p_left = influence_blog_get_mod( 'header_three_advance_menu_d_p_left' );

            $header_three_advance_search_icon_d_p_top = influence_blog_get_mod( 'header_three_advance_search_icon_d_p_top' );
            $header_three_advance_search_icon_d_p_right = influence_blog_get_mod( 'header_three_advance_search_icon_d_p_right' );
            $header_three_advance_search_icon_d_p_bottom = influence_blog_get_mod( 'header_three_advance_search_icon_d_p_bottom' );
            $header_three_advance_search_icon_d_p_left = influence_blog_get_mod( 'header_three_advance_search_icon_d_p_left' );

            $header_three_advance_css = array(
                '.menu-bg-wrap' => array(
                    'border-bottom-width' => esc_attr( $header_three_advance_d_b_bottom . 'px' ),
                ),
                '.home-icon a' => array(
                    'padding-top' => esc_attr( $header_three_advance_menu_icon_d_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_three_advance_menu_icon_d_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_three_advance_menu_icon_d_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_three_advance_menu_icon_d_p_left . 'px' ),
                ),
                '#header' => array(
                    'padding-top' => esc_attr( $header_three_advance_menu_d_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_three_advance_menu_d_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_three_advance_menu_d_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_three_advance_menu_d_p_left . 'px' ),
                ),
                '.header-layout1 .search-icon .btn-search, .search-icon .btn-search' => array(
                    'padding-top' => esc_attr( $header_three_advance_search_icon_d_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_three_advance_search_icon_d_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_three_advance_search_icon_d_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_three_advance_search_icon_d_p_left . 'px' ),
                ),
            );

            $parse_css .= influence_blog_parse_css( $header_three_advance_css );
        }

        /*-----------------------------------------------------------------------------
							 Blog Page Settings
        -----------------------------------------------------------------------------*/

        /*-----------------------------------------------------------------------------
							 Section one options
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Design Section -----------------------------------*/

        $typo_blogpage_section_one_design_title_font_family = influence_blog_get_font_data( 'typo_blogpage_section_one_design_title_font' );
        $typo_blogpage_section_one_design_title_font_weight = influence_blog_get_font_data( 'typo_blogpage_section_one_design_title_font', 'fontweight' );
        $typo_blogpage_section_one_design_title_font_size = influence_blog_get_mod( 'typo_blogpage_section_one_design_title_size_d' );

        $blogpage_section_one_design_css = array(
            '#section-one .widget-tt .l-title' => array(
                'font-family' => esc_attr( $typo_blogpage_section_one_design_title_font_family ),
                'font-weight' => esc_attr( $typo_blogpage_section_one_design_title_font_weight ),
                'font-size' => esc_attr( $typo_blogpage_section_one_design_title_font_size . 'px' ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $blogpage_section_one_design_css );

        /*-----------------------------------------------------------------------------
							 Footer One Options
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Design Section -----------------------------------*/

        $footer_one_design_bg_color = influence_blog_get_mod( 'footer_one_design_bg_color' );
        $footer_one_design_border_top_color = influence_blog_get_mod( 'footer_one_design_border_top_color' );
        $footer_one_design_border_bottom_color = influence_blog_get_mod( 'footer_one_design_border_bottom_color' );

        $footer_one_design_widget_area_title_alignment = influence_blog_get_mod( 'footer_one_design_widget_area_title_alignment' );
        $footer_one_design_widget_area_bg_color = influence_blog_get_mod( 'footer_one_design_widget_area_bg_color' );
        $footer_one_design_widget_area_border_color = influence_blog_get_mod( 'footer_one_design_widget_area_border_color' );

        $footer_one_design_widget_title_color = influence_blog_get_mod( 'footer_one_design_widget_title_color' );
        $footer_one_design_widget_title_bg_color = influence_blog_get_mod( 'footer_one_design_widget_title_bg_color' );

        $typo_footer_one_widget_area_design_title_font_family = influence_blog_get_font_data( 'typo_footer_one_widget_area_design_title_font' );
        $typo_footer_one_widget_area_design_title_font_weight = influence_blog_get_font_data( 'typo_footer_one_widget_area_design_title_font', 'fontweight' );
        $typo_footer_one_widget_area_design_title_text_transform = influence_blog_get_mod( 'typo_footer_one_widget_area_design_title_transform' );
        $typo_footer_one_widget_area_design_title_font_size = influence_blog_get_mod( 'typo_footer_one_widget_area_design_title_size_d' );
        $typo_footer_one_widget_area_design_title_line_height = influence_blog_get_mod( 'typo_footer_one_widget_area_design_title_height_d' );
        $typo_footer_one_widget_area_design_title_letter_spacing = influence_blog_get_mod( 'typo_footer_one_widget_area_design_title_spacing_d' );

        $footer_one_design_css = array(
            '.foot-top-border .widget .side-tt,
            .foot-top-wrap .recent-cate-wrap .side-tt .s-title,
            .foot-top-wrap .side-bar .side-tt,
            .foot-top-wrap .author-wrap .side-tt .s-title' => array(
                'text-align' => esc_attr( $footer_one_design_widget_area_title_alignment ),
            ),
            '.foot-top-wrap:before' => array(
                'background-color' => esc_attr( $footer_one_design_bg_color ),
            ),
            '.foot-top-border' => array(
                'border-top-color' => esc_attr( $footer_one_design_border_top_color ),
                'border-bottom-color' => esc_attr( $footer_one_design_border_bottom_color ),
            ),
            '.foot-top-border .widget' => array(
                'background-color' => esc_attr( $footer_one_design_widget_area_bg_color ),
                'border-top-color' => esc_attr( $footer_one_design_widget_area_border_color ),
                'border-right-color' => esc_attr( $footer_one_design_widget_area_border_color ),
                'border-bottom-color' => esc_attr( $footer_one_design_widget_area_border_color ),
                'border-left-color' => esc_attr( $footer_one_design_widget_area_border_color ),
            ),
            '.foot-top-border .widget-title,
            .foot-top-border .side-tt' => array(
                'background-color' => esc_attr( $footer_one_design_widget_title_bg_color ),
            ),
            '.foot-top-border .side-tt .s-title' => array(
                'color' => esc_attr( $footer_one_design_widget_title_color ),
                'font-family' => esc_attr( $typo_footer_one_widget_area_design_title_font_family ),
                'font-weight' => esc_attr( $typo_footer_one_widget_area_design_title_font_weight ),
                'text-transform' => esc_attr( $typo_footer_one_widget_area_design_title_text_transform ),
                'font-size' => esc_attr( $typo_footer_one_widget_area_design_title_font_size . 'px' ),
                'line-height' => esc_attr( $typo_footer_one_widget_area_design_title_line_height ),
                'letter-spacing' => esc_attr( $typo_footer_one_widget_area_design_title_letter_spacing . 'px' ),
            ),
            '.foot-top-wrap .side-bar .side-tt .s-title,
            .foot-top-wrap .foot-top-border .recent-cate-wrap .side-tt .s-title,
            .foot-top-wrap .author-wrap .side-tt .s-title' => array(
                'color' => esc_attr( $footer_one_design_widget_title_color ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $footer_one_design_css );

        $footer_one_advance_toggle = influence_blog_get_mod( 'footer_one_advance_toggle' );

        if( $footer_one_advance_toggle ) {

            $footer_one_advance_bg_image_size = influence_blog_get_mod( 'footer_one_advance_bg_image_size' );
            $footer_one_advance_bg_image_attch = influence_blog_get_mod( 'footer_one_advance_bg_image_attch' );
            $footer_one_advance_bg_image_position_x = influence_blog_get_mod( 'footer_one_advance_bg_image_position_x' );
            $footer_one_advance_bg_image_position_y = influence_blog_get_mod( 'footer_one_advance_bg_image_position_y' );
            $footer_one_advance_border_top = influence_blog_get_mod( 'footer_one_advance_border_top' );
            $footer_one_advance_border_bottom = influence_blog_get_mod( 'footer_one_advance_border_bottom' );

            $footer_one_widget_area_advance_border_width = influence_blog_get_mod( 'footer_one_widget_area_advance_border_width' );
            $footer_one_widget_area_advance_d_p_top = influence_blog_get_mod( 'footer_one_widget_area_advance_d_p_top' );
            $footer_one_widget_area_advance_d_p_right = influence_blog_get_mod( 'footer_one_widget_area_advance_d_p_right' );
            $footer_one_widget_area_advance_d_p_bottom = influence_blog_get_mod( 'footer_one_widget_area_advance_d_p_bottom' );
            $footer_one_widget_area_advance_d_p_left = influence_blog_get_mod( 'footer_one_widget_area_advance_d_p_left' );

            $footer_one_widget_title_advance_d_m_top = influence_blog_get_mod( 'footer_one_widget_title_advance_d_m_top' );
            $footer_one_widget_title_advance_d_m_right = influence_blog_get_mod( 'footer_one_widget_title_advance_d_m_right' );
            $footer_one_widget_title_advance_d_m_bottom = influence_blog_get_mod( 'footer_one_widget_title_advance_d_m_bottom' );
            $footer_one_widget_title_advance_d_m_left = influence_blog_get_mod( 'footer_one_widget_title_advance_d_m_left' );

            $footer_one_widget_title_advance_d_p_top = influence_blog_get_mod( 'footer_one_widget_title_advance_d_p_top' );
            $footer_one_widget_title_advance_d_p_right = influence_blog_get_mod( 'footer_one_widget_title_advance_d_p_right' );
            $footer_one_widget_title_advance_d_p_bottom = influence_blog_get_mod( 'footer_one_widget_title_advance_d_p_bottom' );
            $footer_one_widget_title_advance_d_p_left = influence_blog_get_mod( 'footer_one_widget_title_advance_d_p_left' );

            $footer_one_advance_css = array(
                '.foot-top-wrap' => array(
                    'background-size' => esc_attr( $footer_one_advance_bg_image_size ),
                    'background-attachment' => esc_attr( $footer_one_advance_bg_image_attch ),
                    'background-position-x' => esc_attr( $footer_one_advance_bg_image_position_x ),
                    'background-position-y' => esc_attr( $footer_one_advance_bg_image_position_y ),
                ),
                '.foot-top-border' => array(
                    'border-top-width' => esc_attr( $footer_one_advance_border_top . 'px' ),
                    'border-bottom-width' => esc_attr( $footer_one_advance_border_bottom . 'px' ),
                ),
                '.foot-top-border .widget' => array(
                    'border-style' => esc_attr( 'solid' ),
                    'border-top-width' => esc_attr( $footer_one_widget_area_advance_border_width . 'px' ),
                    'border-right-width' => esc_attr( $footer_one_widget_area_advance_border_width . 'px' ),
                    'border-bottom-width' => esc_attr( $footer_one_widget_area_advance_border_width . 'px' ),
                    'border-left-width' => esc_attr( $footer_one_widget_area_advance_border_width . 'px' ),
                    'padding-top' => esc_attr( $footer_one_widget_area_advance_d_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_one_widget_area_advance_d_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_one_widget_area_advance_d_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_one_widget_area_advance_d_p_left . 'px' ),
                ),
                '.foot-top-border .side-tt.widget-title,
                .foot-top-wrap .side-bar .side-tt .s-title,
                .foot-top-wrap .foot-top-border .recent-cate-wrap .side-tt .s-title,
                .foot-top-wrap .author-wrap .side-tt .s-title' => array(
                    'margin-top' => esc_attr( $footer_one_widget_title_advance_d_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_one_widget_title_advance_d_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_one_widget_title_advance_d_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_one_widget_title_advance_d_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_one_widget_title_advance_d_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_one_widget_title_advance_d_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_one_widget_title_advance_d_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_one_widget_title_advance_d_p_left . 'px' ),
                ),
            );

            $parse_css .= influence_blog_parse_css( $footer_one_advance_css );
        }

        /*-----------------------------------------------------------------------------
							 Footer Two Options
        -----------------------------------------------------------------------------*/

        /*---------------------------------- General Section -----------------------------------*/

        $footer_two_title_alignment = influence_blog_get_mod( 'footer_two_title_alignment' );
        $footer_two_social_links_alignment = influence_blog_get_mod( 'footer_two_social_links_alignment' );
        $footer_two_widget_area_alignment = influence_blog_get_mod( 'footer_two_widget_area_alignment' );

        $footer_two_general_css = array(
            '.footer-mid-sec .foo-mid-title' => array(
                'text-align' => esc_attr( $footer_two_title_alignment ),
            ),
            '.footer-mid-sec .foo-mid-social' => array(
                'text-align' => esc_attr( $footer_two_social_links_alignment ),
            ),
            '.footer-mid-sec .foo-mid-wid .center' => array(
                'text-align' => esc_attr( $footer_two_widget_area_alignment ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $footer_two_general_css );

        /*---------------------------------- Design Section -----------------------------------*/

        $footer_two_design_bg_color = influence_blog_get_mod( 'footer_two_design_bg_color' );
        $footer_two_design_border_top_color = influence_blog_get_mod( 'footer_two_design_border_top_color' );
        $footer_two_design_border_bottom_color = influence_blog_get_mod( 'footer_two_design_border_bottom_color' );

        $footer_two_design_title_color = influence_blog_get_mod( 'footer_two_design_title_color' );
        $footer_two_design_title_border_color = influence_blog_get_mod( 'footer_two_design_title_border_color' );
        $typo_footer_two_design_title_font_family = influence_blog_get_font_data( 'typo_footer_two_design_title_font' );
        $typo_footer_two_design_title_font_weight = influence_blog_get_font_data( 'typo_footer_two_design_title_font', 'fontweight' );
        $typo_footer_two_design_title_transform = influence_blog_get_mod( 'typo_footer_two_design_title_transform' );
        $typo_footer_two_design_title_font_size = influence_blog_get_mod( 'typo_footer_two_design_title_size_d' );
        $typo_footer_two_design_title_line_height = influence_blog_get_mod( 'typo_footer_two_design_title_height_d' );
        $typo_footer_two_design_title_letter_spacing = influence_blog_get_mod( 'typo_footer_two_design_title_spacing_d' );

        $footer_two_design_social_links_color = influence_blog_get_mod( 'footer_two_design_social_links_color' );
        $footer_two_design_social_links_hover_color = influence_blog_get_mod( 'footer_two_design_social_links_hover_color' );
        $footer_two_design_social_links_border_color = influence_blog_get_mod( 'footer_two_design_social_links_border_color' );
        $footer_two_design_social_links_border_hover_color = influence_blog_get_mod( 'footer_two_design_social_links_border_hover_color' );
        $typo_footer_two_design_social_links_font_size = influence_blog_get_mod( 'typo_footer_two_design_social_links_size_d' );

        $footer_two_design_widget_area_bg_color = influence_blog_get_mod( 'footer_two_design_widget_area_bg_color' );
        $footer_two_design_widget_area_border_color = influence_blog_get_mod( 'footer_two_design_widget_area_border_color' );

        $footer_two_design_widget_area_title_alignment = influence_blog_get_mod( 'footer_two_design_widget_area_title_alignment' );
        $footer_two_design_widget_title_color = influence_blog_get_mod( 'footer_two_design_widget_title_color' );
        $footer_two_design_widget_title_border_color = influence_blog_get_mod( 'footer_two_design_widget_title_border_color' );

        $typo_footer_two_widget_area_design_title_font_family = influence_blog_get_font_data( 'typo_footer_two_widget_area_design_title_font' );
        $typo_footer_two_widget_area_design_title_font_weight = influence_blog_get_font_data( 'typo_footer_two_widget_area_design_title_font', 'fontweight' );
        $typo_footer_two_widget_area_design_title_text_transform = influence_blog_get_mod( 'typo_footer_two_widget_area_design_title_transform' );
        $typo_footer_two_widget_area_design_title_font_size = influence_blog_get_mod( 'typo_footer_two_widget_area_design_title_size_d' );
        $typo_footer_two_widget_area_design_title_line_height = influence_blog_get_mod( 'typo_footer_two_widget_area_design_title_height_d' );
        $typo_footer_two_widget_area_design_title_letter_spacing = influence_blog_get_mod( 'typo_footer_two_widget_area_design_title_spacing_d' );

        $footer_two_design_css = array(
            '.footer-mid-sec:before' => array(
                'background-color' => esc_attr( $footer_two_design_bg_color ),
            ),
            '.contact-info' => array(
                'border-top-color' => esc_attr( $footer_two_design_border_top_color ),
                'border-bottom-color' => esc_attr( $footer_two_design_border_bottom_color ),
            ),
            '.contact-info .foo-mid-title .s-title' => array(
                'color' => esc_attr( $footer_two_design_title_color ),
                'border-bottom-color' => esc_attr( $footer_two_design_title_border_color ),
                'font-family' => esc_attr( $typo_footer_two_design_title_font_family ),
                'font-weight' => esc_attr( $typo_footer_two_design_title_font_weight ),
                'text-transform' => esc_attr( $typo_footer_two_design_title_transform ),
                'font-size' => esc_attr( $typo_footer_two_design_title_font_size . 'px' ),
                'line-height' => esc_attr( $typo_footer_two_design_title_line_height ),
                'letter-spacing' => esc_attr( $typo_footer_two_design_title_letter_spacing . 'px' ),
            ),
            '.social-media-foot ul li a' => array(
                'color' => esc_attr( $footer_two_design_social_links_color ),
                'border-right-color' => esc_attr( $footer_two_design_social_links_border_color ),
                'border-bottom-color' => esc_attr( $footer_two_design_social_links_border_color ),
                'font-size' => esc_attr( $typo_footer_two_design_social_links_font_size . 'px' ),
            ),
            '.social-media-foot ul li a:hover' => array(
                'color' => esc_attr( $footer_two_design_social_links_hover_color ),
                'border-top-color' => esc_attr( $footer_two_design_social_links_border_hover_color ),
                'border-right-color' => esc_attr( $footer_two_design_social_links_border_hover_color ),
                'border-bottom-color' => esc_attr( $footer_two_design_social_links_border_hover_color ),
                'border-left-color' => esc_attr( $footer_two_design_social_links_border_hover_color ),
            ),
            '.footer-mid-sec .widget' => array(
                'background-color' => esc_attr( $footer_two_design_widget_area_bg_color ),
                'border-top-color' => esc_attr( $footer_two_design_widget_area_border_color ),
                'border-right-color' => esc_attr( $footer_two_design_widget_area_border_color ),
                'border-bottom-color' => esc_attr( $footer_two_design_widget_area_border_color ),
                'border-left-color' => esc_attr( $footer_two_design_widget_area_border_color ),
            ),
            '.footer-mid-sec .widget-title,
            .footer-mid-sec .recent-cate-wrap .side-tt,
            .footer-mid-sec .side-bar .side-tt,
            .footer-mid-sec .author-wrap .side-tt' => array(
                'text-align' => esc_attr( $footer_two_design_widget_area_title_alignment ),
            ),
            '.footer-mid-sec .widget-title .s-title,
            .footer-mid-sec .widget-title .s-title a,
            .footer-mid-sec .side-bar .side-tt .s-title,
            .footer-mid-sec .recent-cate-wrap .side-tt .s-title,
            .footer-mid-sec .author-wrap .side-tt .s-title' => array(
                'color' => esc_attr( $footer_two_design_widget_title_color ),
                'border-bottom-color' => esc_attr( $footer_two_design_widget_title_border_color ),
                'font-family' => esc_attr( $typo_footer_two_widget_area_design_title_font_family ),
                'font-weight' => esc_attr( $typo_footer_two_widget_area_design_title_font_weight ),
                'text-transform' => esc_attr( $typo_footer_two_widget_area_design_title_text_transform ),
                'font-size' => esc_attr( $typo_footer_two_widget_area_design_title_font_size . 'px' ),
                'line-height' => esc_attr( $typo_footer_two_widget_area_design_title_line_height ),
                'letter-spacing' => esc_attr( $typo_footer_two_widget_area_design_title_letter_spacing . 'px' ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $footer_two_design_css );

        $footer_two_advance_toggle = influence_blog_get_mod( 'footer_two_advance_toggle' );

        if( $footer_two_advance_toggle ) {

            $footer_two_advance_bg_image_size = influence_blog_get_mod( 'footer_two_advance_bg_image_size' );
            $footer_two_advance_bg_image_attch = influence_blog_get_mod( 'footer_two_advance_bg_image_attch' );
            $footer_two_advance_bg_image_position_x = influence_blog_get_mod( 'footer_two_advance_bg_image_position_x' );
            $footer_two_advance_bg_image_position_y = influence_blog_get_mod( 'footer_two_advance_bg_image_position_y' );
            $footer_two_advance_border_top = influence_blog_get_mod( 'footer_two_advance_border_top' );
            $footer_two_advance_border_bottom = influence_blog_get_mod( 'footer_two_advance_border_bottom' );

            $footer_two_widget_area_advance_border_width = influence_blog_get_mod( 'footer_two_widget_area_advance_border_width' );
            $footer_two_widget_area_advance_d_p_top = influence_blog_get_mod( 'footer_two_widget_area_advance_d_p_top' );
            $footer_two_widget_area_advance_d_p_right = influence_blog_get_mod( 'footer_two_widget_area_advance_d_p_right' );
            $footer_two_widget_area_advance_d_p_bottom = influence_blog_get_mod( 'footer_two_widget_area_advance_d_p_bottom' );
            $footer_two_widget_area_advance_d_p_left = influence_blog_get_mod( 'footer_two_widget_area_advance_d_p_left' );

            $footer_two_widget_area_advance_d_m_top = influence_blog_get_mod( 'footer_two_widget_area_advance_d_m_top' );
            $footer_two_widget_area_advance_d_m_right = influence_blog_get_mod( 'footer_two_widget_area_advance_d_m_right' );
            $footer_two_widget_area_advance_d_m_bottom = influence_blog_get_mod( 'footer_two_widget_area_advance_d_m_bottom' );
            $footer_two_widget_area_advance_d_m_left = influence_blog_get_mod( 'footer_two_widget_area_advance_d_m_left' );

            $footer_two_widget_title_advance_d_m_top = influence_blog_get_mod( 'footer_two_widget_title_advance_d_m_top' );
            $footer_two_widget_title_advance_d_m_right = influence_blog_get_mod( 'footer_two_widget_title_advance_d_m_right' );
            $footer_two_widget_title_advance_d_m_bottom = influence_blog_get_mod( 'footer_two_widget_title_advance_d_m_bottom' );
            $footer_two_widget_title_advance_d_m_left = influence_blog_get_mod( 'footer_two_widget_title_advance_d_m_left' );

            $footer_two_widget_title_advance_d_p_top = influence_blog_get_mod( 'footer_two_widget_title_advance_d_p_top' );
            $footer_two_widget_title_advance_d_p_right = influence_blog_get_mod( 'footer_two_widget_title_advance_d_p_right' );
            $footer_two_widget_title_advance_d_p_bottom = influence_blog_get_mod( 'footer_two_widget_title_advance_d_p_bottom' );
            $footer_two_widget_title_advance_d_p_left = influence_blog_get_mod( 'footer_two_widget_title_advance_d_p_left' );
            $footer_two_widget_title_advance_border_width = influence_blog_get_mod( 'footer_two_widget_title_advance_border_width' );

            $footer_two_advance_css = array(
                '.footer-mid-sec' => array(
                    'background-size' => esc_attr( $footer_two_advance_bg_image_size ),
                    'background-attachment' => esc_attr( $footer_two_advance_bg_image_attch ),
                    'background-position-x' => esc_attr( $footer_two_advance_bg_image_position_x ),
                    'background-position-y' => esc_attr( $footer_two_advance_bg_image_position_y ),
                ),
                '.contact-info' => array(
                    'border-top-width' => esc_attr( $footer_two_advance_border_top . 'px' ),
                    'border-bottom-width' => esc_attr( $footer_two_advance_border_bottom . 'px' ),
                ),
                '.footer-mid-sec .widget' => array(
                    'border-style' => esc_attr( 'solid' ),
                    'border-top-width' => esc_attr( $footer_two_widget_area_advance_border_width . 'px' ),
                    'border-right-width' => esc_attr( $footer_two_widget_area_advance_border_width . 'px' ),
                    'border-bottom-width' => esc_attr( $footer_two_widget_area_advance_border_width . 'px' ),
                    'border-left-width' => esc_attr( $footer_two_widget_area_advance_border_width . 'px' ),
                    'padding-top' => esc_attr( $footer_two_widget_area_advance_d_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_widget_area_advance_d_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_widget_area_advance_d_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_widget_area_advance_d_p_left . 'px' ),
                    'margin-top' => esc_attr( $footer_two_widget_area_advance_d_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_widget_area_advance_d_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_widget_area_advance_d_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_widget_area_advance_d_m_left . 'px' ),
                ),
                '.footer-mid-sec .widget .side-tt.widget-title,
                .footer-mid-sec .side-bar .side-tt .s-title,
                .footer-mid-sec .foot-top-border .recent-cate-wrap .side-tt .s-title,
                .footer-mid-sec .author-wrap .side-tt .s-title' => array(
                    'margin-top' => esc_attr( $footer_two_widget_title_advance_d_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_widget_title_advance_d_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_widget_title_advance_d_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_widget_title_advance_d_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_two_widget_title_advance_d_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_widget_title_advance_d_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_widget_title_advance_d_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_widget_title_advance_d_p_left . 'px' ),
                ),
                '.footer-mid-sec .widget .side-tt .s-title,
                .footer-mid-sec .widget-title .s-title a,
                .footer-mid-sec .side-bar .side-tt .s-title,
                .footer-mid-sec .recent-cate-wrap .side-tt .s-title,
                .footer-mid-sec .author-wrap .side-tt .s-title' => array(
                    'border-bottom-width' => esc_attr( $footer_two_widget_title_advance_border_width . 'px' ),
                ),
            );

            $parse_css .= influence_blog_parse_css( $footer_two_advance_css );
        }

        if( !defined( 'INFLUENCE_BLOG_PRO' ) && !class_exists( 'Influence_Blog_Pro' ) ) {

            $free_theme_css = array(
                '.single-layout1-bdy .single-title' => array(
                    'font-size' => esc_attr( $heading_H1_font_size . 'px' ),
                ),
                '.archive-bdy-d1 .widget-tt .l-title' => array(
                    'font-family' => esc_attr( $heading_font_family ),
                    'font-weight' => esc_attr( $heading_font_weight ),
                    'text-transform' => esc_attr( $heading_H1_text_transform ),
                    'font-size' => esc_attr( $heading_H1_font_size . 'px' ),
                    'line-height' => esc_attr( $heading_H1_line_height ),
                    'letter-spacing' => esc_attr( $heading_H1_letter_spacing . 'px' ),
                ),
                '.sub-cate,
                .secondary-widget-area .side-tt .s-title,
                .author-name .s-title,
                .single-related-post .widget-tt .l-title,
                .primary-widget-area .text_widget .m-title' => array(
                    'font-family' => esc_attr( $heading_font_family ),
                    'font-weight' => esc_attr( $heading_font_weight ),
                    'text-transform' => esc_attr( $heading_H3_text_transform ),
                    'line-height' => esc_attr( $heading_H3_line_height ),
                    'letter-spacing' => esc_attr( $heading_H3_letter_spacing . 'px' ),
                ),
                '.banner-caption .m-title' => array(
                    'font-weight' => esc_attr( $heading_font_weight ),
                    'text-transform' => esc_attr( $heading_H3_text_transform ),
                    'font-size' => esc_attr( $heading_H3_font_size . 'px' ),
                    'line-height' => esc_attr( $heading_H3_line_height ),
                    'letter-spacing' => esc_attr( $heading_H3_letter_spacing . 'px' ),
                ),
                '.side-widget-d2 .author-detail .sm-title' => array(
                    'font-family' => esc_attr( $heading_font_family ),
                    'font-weight' => esc_attr( $heading_font_weight ),
                    'text-transform' => esc_attr( $heading_H4_text_transform ),
                    'line-height' => esc_attr( $heading_H4_line_height ),
                    'letter-spacing' => esc_attr( $heading_H4_letter_spacing . 'px' ),
                ),
                '.banner-inner:before,
                .abt-img-sec:before,
                .date-meta,
                .trangle,
                .full-widget-d1 .btn-more:hover,
                .author-wrap.style-one .side-widget-d2' => array(
                    'background-color' => esc_attr( $color_theme ),
                ),
                '.full-widget-d1 .btn-more,
                .full-widget-d1 .btn-more:hover' => array(
                    'border-color' => esc_attr( $color_theme ),
                ),
                '.banner-wrapper .banner-caption' => array(
                    'background-image' => esc_attr( 'linear-gradient(180deg, transparent 0%, rgba(233, 177, 5, 0.7) 40%, ' . $color_theme . ' 100%)' ),
                ),
                '' => array(
                    'color' => esc_attr( $color_link ),
                ),
                '' => array(
                    'color' => esc_attr( $color_link_hover ),
                ),
            );

            $parse_css .= influence_blog_parse_css( $free_theme_css );
        }


        $dynamic_css = $parse_css;

        // trim white space for faster page loading.
        $dynamic_css = influence_blog_trim_css( $dynamic_css );

        return apply_filters( 'influence_blog_filter_dynamic_main_style', $dynamic_css );
    }
}
