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

        /*---------------------------------- Container Style - Design -----------------------------------*/

        $site_layout_container_style = ifb_get_mod( 'site_layout_container_style' );
        $site_layout_container_design_bg = ifb_get_mod( 'site_layout_container_design_bg' );

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

                $site_layout_style_advance_boxed_width = ifb_get_mod( 'site_layout_style_advance_boxed_width' );
                $site_layout_style_advance_boxed_border_radius = ifb_get_mod( 'site_layout_style_advance_boxed_border_radius' );
                $site_layout_style_advance_boxed_border_width = ifb_get_mod( 'site_layout_style_advance_boxed_border_width' );
                $site_layout_style_advance_boxed_border_color = ifb_get_mod( 'site_layout_style_advance_boxed_border_color' );

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

            $site_layout_container_advance_b_d_p_top = ifb_get_mod( 'site_layout_container_advance_b_d_p_top' );
            $site_layout_container_advance_b_d_p_right = ifb_get_mod( 'site_layout_container_advance_b_d_p_right' );
            $site_layout_container_advance_b_d_p_bottom = ifb_get_mod( 'site_layout_container_advance_b_d_p_bottom' );
            $site_layout_container_advance_b_d_p_left = ifb_get_mod( 'site_layout_container_advance_b_d_p_left' );

            $site_layout_container_advance_b_d_m_top = ifb_get_mod( 'site_layout_container_advance_b_d_m_top' );
            $site_layout_container_advance_b_d_m_right = ifb_get_mod( 'site_layout_container_advance_b_d_m_right' );
            $site_layout_container_advance_b_d_m_bottom = ifb_get_mod( 'site_layout_container_advance_b_d_m_bottom' );
            $site_layout_container_advance_b_d_m_left = ifb_get_mod( 'site_layout_container_advance_b_d_m_left' );

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

        /*-----------------------------------------------------------------------------
							 Header Settings
        -----------------------------------------------------------------------------*/

        /*-----------------------------------------------------------------------------
							 Layout Options
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Design Section -----------------------------------*/

        $header_bg_color = ifb_get_mod( 'header_layout_options_hedader_bg_color' );

        $header_bg_color_css = array(
            '.header-layout1 .header-top-block:before, .header-layout2:before' => array(
                'background-color' => esc_attr( $header_bg_color ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $header_bg_color_css );

        /*---------------------------------- Advance Section -----------------------------------*/

        $header_layout_options_advance_toggle = ifb_get_mod( 'header_layout_options_advance_toggle' );

        if( $header_layout_options_advance_toggle ) {

            $header_layout_options_advance_bg_image_size = ifb_get_mod( 'header_layout_options_advance_bg_image_size' );
            $header_layout_options_advance_bg_image_position_x = ifb_get_mod( 'header_layout_options_advance_bg_image_position_x' );
            $header_layout_options_advance_bg_image_position_y = ifb_get_mod( 'header_layout_options_advance_bg_image_position_y' );
            $header_layout_options_advance_header_height = ifb_get_mod( 'header_layout_options_advance_header_height' );

            $header_layout_options_advance_bg_css = array(
                '.header-layout1 .header-top-block, .header-layout2' => array(
                    'background-size' => esc_attr( $header_layout_options_advance_bg_image_size ),
                    'background-position-x' => esc_attr( $header_layout_options_advance_bg_image_position_x ),
                    'background-position-y' => esc_attr( $header_layout_options_advance_bg_image_position_y ),
                    'height' => esc_attr( $header_layout_options_advance_header_height . 'px' ),
                ),
            );

            $parse_css .= influence_blog_parse_css( $header_layout_options_advance_bg_css );
        }

        /*-----------------------------------------------------------------------------
							 Header One Options
        -----------------------------------------------------------------------------*/

        /*---------------------------------- General Section -----------------------------------*/

        $header_one_layout_one_menu_alignment = ifb_get_mod( 'header_one_layout_one_menu_alignment' );

        $header_one_menu_alignment_css = array(
            '.top-bar-menu' => array(
                'text-align' => esc_attr( $header_one_layout_one_menu_alignment ),
            ),
        );

        $header_one_layout_one_social_links_alignment = ifb_get_mod( 'header_one_layout_one_social_links_alignment' );

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

        $header_one_layout_one_design_bg_color = ifb_get_mod( 'header_one_layout_one_design_bg_color' );

        $header_one_layout_one_design_bg_color_css = array(
            '.header-topbar-block' => array(
                'background-color' => esc_attr( $header_one_layout_one_design_bg_color ),
            ),
        );

        $header_one_layout_one_design_menu_color = ifb_get_mod( 'header_one_layout_one_design_menu_color' );
        $header_one_layout_one_design_menu_hover_color = ifb_get_mod( 'header_one_layout_one_design_menu_hover_color' );
        $header_one_layout_one_design_menu_sep_color = ifb_get_mod( 'header_one_layout_one_design_menu_sep_color' );

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
        $typo_header_one_layout_one_design_menu_text_transform = ifb_get_mod( 'typo_header_one_layout_one_design_menu_transform' );
        $typo_header_one_layout_one_design_menu_font_size = ifb_get_mod( 'typo_header_one_layout_one_design_menu_size_d' );
        $typo_header_one_layout_one_design_menu_line_height = ifb_get_mod( 'typo_header_one_layout_one_design_menu_height_d' );
        $typo_header_one_layout_one_design_menu_letter_spacing = ifb_get_mod( 'typo_header_one_layout_one_design_menu_spacing_d' );

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

        $header_one_layout_one_design_social_links_color = ifb_get_mod( 'header_one_layout_one_design_social_links_color' );
        $header_one_layout_one_design_social_links_hover_color = ifb_get_mod( 'header_one_layout_one_design_social_links_hover_color' );
        $header_one_layout_one_design_social_links_sep_color = ifb_get_mod( 'header_one_layout_one_design_social_links_sep_color' );
        $typo_header_one_layout_one_design_social_links_font_size = ifb_get_mod( 'typo_header_one_layout_one_design_social_links_size_d' );

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

        $header_one_layout_one_advance_toggle = ifb_get_mod( 'header_one_layout_one_advance_toggle' );

        if( $header_one_layout_one_advance_toggle ) {

            $header_one_layout_one_advance_d_p_top = ifb_get_mod( 'header_one_layout_one_advance_d_p_top' );
            $header_one_layout_one_advance_d_p_right = ifb_get_mod( 'header_one_layout_one_advance_d_p_right' );
            $header_one_layout_one_advance_d_p_bottom = ifb_get_mod( 'header_one_layout_one_advance_d_p_bottom' );
            $header_one_layout_one_advance_d_p_left = ifb_get_mod( 'header_one_layout_one_advance_d_p_left' );

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

        $header_two_site_title_alignment = ifb_get_mod( 'header_two_site_title_alignment' );
        $header_two_ads_alignment = ifb_get_mod( 'header_two_ads_alignment' );

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
        $typo_header_two_design_site_title_text_transform = ifb_get_mod( 'typo_header_two_design_site_title_transform' );
        $typo_header_two_design_site_title_font_size = ifb_get_mod( 'typo_header_two_design_site_title_size_d' );
        $typo_header_two_design_site_title_line_height = ifb_get_mod( 'typo_header_two_design_site_title_height_d' );
        $typo_header_two_design_site_title_letter_spacing = ifb_get_mod( 'typo_header_two_design_site_title_spacing_d' );

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

        $header_two_advance_toggle = ifb_get_mod( 'header_two_advance_toggle' );

        if( $header_two_advance_toggle ) {

            $header_two_advance_site_title_d_m_top = ifb_get_mod( 'header_two_advance_site_title_d_m_top' );
            $header_two_advance_site_title_d_m_bottom = ifb_get_mod( 'header_two_advance_site_title_d_m_bottom' );

            $header_two_advance_ads_d_m_top = ifb_get_mod( 'header_two_advance_ads_d_m_top' );
            $header_two_advance_ads_d_m_bottom = ifb_get_mod( 'header_two_advance_ads_d_m_bottom' );

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

        $header_three_menu_icon_alignment = ifb_get_mod( 'header_three_menu_icon_alignment' );
        $header_three_menu_alignment = ifb_get_mod( 'header_three_menu_alignment' );
        $header_three_search_icon_alignment = ifb_get_mod( 'header_three_search_icon_alignment' );

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

        $header_three_design_bg_color = ifb_get_mod( 'header_three_design_bg_color' );
        $header_three_design_border_color = ifb_get_mod( 'header_three_design_border_color' );

        $header_three_design_menu_icon_color = ifb_get_mod( 'header_three_design_menu_icon_color' );
        $header_three_design_menu_icon_hover_color = ifb_get_mod( 'header_three_design_menu_icon_hover_color' );
        $header_three_design_menu_icon_bg_color = ifb_get_mod( 'header_three_design_menu_icon_bg_color' );
        $header_three_design_menu_icon_bg_hover_color = ifb_get_mod( 'header_three_design_menu_icon_bg_hover_color' );
        $typo_header_three_design_menu_icon_size_d = ifb_get_mod( 'typo_header_three_design_menu_icon_size_d' );

        $header_three_design_main_menu_color = ifb_get_mod( 'header_three_design_main_menu_color' );
        $header_three_design_main_menu_hover_color = ifb_get_mod( 'header_three_design_main_menu_hover_color' );
        $header_three_design_main_menu_bg_color = ifb_get_mod( 'header_three_design_main_menu_bg_color' );
        $header_three_design_main_menu_bg_hover_color = ifb_get_mod( 'header_three_design_main_menu_bg_hover_color' );
        $typo_header_three_design_main_menu_font_family = influence_blog_get_font_data( 'typo_header_three_design_main_menu_font' );
        $typo_header_three_design_main_menu_font_weight = influence_blog_get_font_data( 'typo_header_three_design_main_menu_font', 'fontweight' );
        $typo_header_three_design_main_menu_transform = ifb_get_mod( 'typo_header_three_design_main_menu_transform' );
        $typo_header_three_design_main_menu_font_size = ifb_get_mod( 'typo_header_three_design_main_menu_size_d' );
        $typo_header_three_design_main_menu_line_height = ifb_get_mod( 'typo_header_three_design_main_menu_height_d' );
        $typo_header_three_design_main_menu_letter_spacing = ifb_get_mod( 'typo_header_three_design_main_menu_spacing_d' );

        $header_three_design_sub_menu_color = ifb_get_mod( 'header_three_design_sub_menu_color' );
        $header_three_design_sub_menu_hover_color = ifb_get_mod( 'header_three_design_sub_menu_hover_color' );
        $header_three_design_sub_menu_bg_color = ifb_get_mod( 'header_three_design_sub_menu_bg_color' );
        $header_three_design_sub_menu_sep_color = ifb_get_mod( 'header_three_design_sub_menu_sep_color' );
        $typo_header_three_design_sub_menu_transform = ifb_get_mod( 'typo_header_three_design_sub_menu_transform' );
        $typo_header_three_design_sub_menu_font_size = ifb_get_mod( 'typo_header_three_design_sub_menu_size_d' );
        $typo_header_three_design_sub_menu_line_height = ifb_get_mod( 'typo_header_three_design_sub_menu_height_d' );
        $typo_header_three_design_sub_menu_letter_spacing = ifb_get_mod( 'typo_header_three_design_sub_menu_spacing_d' );

        $header_three_design_search_icon_color = ifb_get_mod( 'header_three_design_search_icon_color' );
        $header_three_design_search_icon_hover_color = ifb_get_mod( 'header_three_design_search_icon_hover_color' );
        $header_three_design_search_icon_bg_color = ifb_get_mod( 'header_three_design_search_icon_bg_color' );
        $header_three_design_search_icon_bg_hover_color = ifb_get_mod( 'header_three_design_search_icon_bg_hover_color' );
        $typo_header_three_design_search_icon_size_d = ifb_get_mod( 'typo_header_three_design_search_icon_size_d' );

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
                'color' => esc_attr( $header_three_design_sub_menu_hover_color ),
            ),
            '.main_navigation ul li.menu-item-has-children .sub-menu' => array(
                'background-color' => esc_attr( $header_three_design_sub_menu_bg_color ),
            ),
            '.main_navigation ul li.menu-item-has-children ul.sub-menu li' => array(
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




        $dynamic_css = $parse_css;

        // trim white space for faster page loading.
        $dynamic_css = influence_blog_trim_css( $dynamic_css );

        return apply_filters( 'influence_blog_filter_dynamic_main_style', $dynamic_css );
    }
}
