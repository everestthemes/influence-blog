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
        $body_font_size_t = influence_blog_get_mod( 'typo_body_size_t' );
        $body_line_height_t = influence_blog_get_mod( 'typo_body_height_t' );
        $body_letter_spacing_t = influence_blog_get_mod( 'typo_body_spacing_t' );

        $body_css_t = array(
            'body' => array(
                'font-size' => esc_attr( $body_font_size_t . 'px' ),
                'line-height' => esc_attr( $body_line_height_t ),
                'letter-spacing' => esc_attr( $body_letter_spacing_t . 'px' ),
            ),
        );

        //heading h1 typography
        $heading_H1_font_size_t = influence_blog_get_mod( 'typo_heading_H1_size_t' );
        $heading_H1_line_height_t = influence_blog_get_mod( 'typo_heading_H1_height_t' );
        $heading_H1_letter_spacing_t = influence_blog_get_mod( 'typo_heading_H1_spacing_t' );
        //heading h1 typography
        $heading_H2_font_size_t = influence_blog_get_mod( 'typo_heading_H2_size_t' );
        $heading_H2_line_height_t = influence_blog_get_mod( 'typo_heading_H2_height_t' );
        $heading_H2_letter_spacing_t = influence_blog_get_mod( 'typo_heading_H2_spacing_t' );
        //heading h3 typography
        $heading_H3_font_size_t = influence_blog_get_mod( 'typo_heading_H3_size_t' );
        $heading_H3_line_height_t = influence_blog_get_mod( 'typo_heading_H3_height_t' );
        $heading_H3_letter_spacing_t = influence_blog_get_mod( 'typo_heading_H3_spacing_t' );
        //heading h4 typography
        $heading_H4_font_size_t = influence_blog_get_mod( 'typo_heading_H4_size_t' );
        $heading_H4_line_height_t = influence_blog_get_mod( 'typo_heading_H4_height_t' );
        $heading_H4_letter_spacing_t = influence_blog_get_mod( 'typo_heading_H4_spacing_t' );
        //heading h5 typography
        $heading_H5_font_size_t = influence_blog_get_mod( 'typo_heading_H5_size_t' );
        $heading_H5_line_height_t = influence_blog_get_mod( 'typo_heading_H5_height_t' );
        $heading_H5_letter_spacing_t = influence_blog_get_mod( 'typo_heading_H5_spacing_t' );
        //heading h6 typography
        $heading_H6_font_size_t = influence_blog_get_mod( 'typo_heading_H6_size_t' );
        $heading_H6_line_height_t = influence_blog_get_mod( 'typo_heading_H6_height_t' );
        $heading_H6_letter_spacing_t = influence_blog_get_mod( 'typo_heading_H6_spacing_t' );

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

        $site_layout_style = influence_blog_get_mod( 'site_layout_style' );
        $site_layout_advance_toggle = influence_blog_get_mod( 'site_layout_advance_toggle' );

        if( $site_layout_advance_toggle ) {

            $site_layout_style_advance_t_p_top = influence_blog_get_mod( 'site_layout_style_advance_t_p_top' );
            $site_layout_style_advance_t_p_right = influence_blog_get_mod( 'site_layout_style_advance_t_p_right' );
            $site_layout_style_advance_t_p_bottom = influence_blog_get_mod( 'site_layout_style_advance_t_p_bottom' );
            $site_layout_style_advance_t_p_left = influence_blog_get_mod( 'site_layout_style_advance_t_p_left' );

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

                $site_layout_style_advance_b_t_m_right = influence_blog_get_mod( 'site_layout_style_advance_b_t_m_right' );
                $site_layout_style_advance_b_t_m_left = influence_blog_get_mod( 'site_layout_style_advance_b_t_m_left' );

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

                $site_layout_style_advance_f_t_m_top = influence_blog_get_mod( 'site_layout_style_advance_f_t_m_top' );
                $site_layout_style_advance_f_t_m_right = influence_blog_get_mod( 'site_layout_style_advance_f_t_m_right' );
                $site_layout_style_advance_f_t_m_bottom = influence_blog_get_mod( 'site_layout_style_advance_f_t_m_bottom' );
                $site_layout_style_advance_f_t_m_left = influence_blog_get_mod( 'site_layout_style_advance_f_t_m_left' );

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

            $site_layout_container_style = influence_blog_get_mod( 'site_layout_container_style' );

            $site_layout_container_advance_b_t_p_top = influence_blog_get_mod( 'site_layout_container_advance_b_t_p_top' );
            $site_layout_container_advance_b_t_p_right = influence_blog_get_mod( 'site_layout_container_advance_b_t_p_right' );
            $site_layout_container_advance_b_t_p_bottom = influence_blog_get_mod( 'site_layout_container_advance_b_t_p_bottom' );
            $site_layout_container_advance_b_t_p_left = influence_blog_get_mod( 'site_layout_container_advance_b_t_p_left' );

            $site_layout_container_advance_b_t_m_top = influence_blog_get_mod( 'site_layout_container_advance_b_t_m_top' );
            $site_layout_container_advance_b_t_m_right = influence_blog_get_mod( 'site_layout_container_advance_b_t_m_right' );
            $site_layout_container_advance_b_t_m_bottom = influence_blog_get_mod( 'site_layout_container_advance_b_t_m_bottom' );
            $site_layout_container_advance_b_t_m_left = influence_blog_get_mod( 'site_layout_container_advance_b_t_m_left' );

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
        $typo_header_one_layout_one_design_menu_font_size_t = influence_blog_get_mod( 'typo_header_one_layout_one_design_menu_size_t' );
        $typo_header_one_layout_one_design_menu_line_height_t = influence_blog_get_mod( 'typo_header_one_layout_one_design_menu_height_t' );
        $typo_header_one_layout_one_design_menu_letter_spacing_t = influence_blog_get_mod( 'typo_header_one_layout_one_design_menu_spacing_t' );

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
        $typo_header_one_layout_one_design_social_links_font_size_t = influence_blog_get_mod( 'typo_header_one_layout_one_design_social_links_size_t' );

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

        $header_one_layout_one_advance_toggle = influence_blog_get_mod( 'header_one_layout_one_advance_toggle' );

        if( $header_one_layout_one_advance_toggle ) {

            $header_one_layout_one_advance_t_p_top = influence_blog_get_mod( 'header_one_layout_one_advance_t_p_top' );
            $header_one_layout_one_advance_t_p_right = influence_blog_get_mod( 'header_one_layout_one_advance_t_p_right' );
            $header_one_layout_one_advance_t_p_bottom = influence_blog_get_mod( 'header_one_layout_one_advance_t_p_bottom' );
            $header_one_layout_one_advance_t_p_left = influence_blog_get_mod( 'header_one_layout_one_advance_t_p_left' );

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

        /*---------------------------------- Header two design site title typo -----------------------------------*/

        //Header two design site title typo
        $typo_header_two_design_site_title_font_size_t = influence_blog_get_mod( 'typo_header_two_design_site_title_size_t' );
        $typo_header_two_design_site_title_line_height_t = influence_blog_get_mod( 'typo_header_two_design_site_title_height_t' );
        $typo_header_two_design_site_title_letter_spacing_t = influence_blog_get_mod( 'typo_header_two_design_site_title_spacing_t' );

        $typo_header_two_design_site_title_css_t = array(
            '.site-title' => array(
                'font-size' => esc_attr( $typo_header_two_design_site_title_font_size_t . 'px' ),
                'line-height' => esc_attr( $typo_header_two_design_site_title_line_height_t ),
                'letter-spacing' => esc_attr( $typo_header_two_design_site_title_letter_spacing_t . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_header_two_design_site_title_css_t
        );

        /*---------------------------------- Header two design site title advance Section -----------------------------------*/

        $header_two_advance_toggle = influence_blog_get_mod( 'header_two_advance_toggle' );

        if( $header_two_advance_toggle ) {

            $header_two_advance_site_title_t_m_top = influence_blog_get_mod( 'header_two_advance_site_title_t_m_top' );
            $header_two_advance_site_title_t_m_bottom = influence_blog_get_mod( 'header_two_advance_site_title_t_m_bottom' );

            $header_two_advance_ads_t_m_top = influence_blog_get_mod( 'header_two_advance_ads_t_m_top' );
            $header_two_advance_ads_t_m_bottom = influence_blog_get_mod( 'header_two_advance_ads_t_m_bottom' );

            $header_two_advance_css_t = array(
                '.logo-sec' => array(
                    'margin-top' => esc_attr( $header_two_advance_site_title_t_m_top . 'px' ),
                    'margin-bottom' => esc_attr( $header_two_advance_site_title_t_m_bottom . 'px' ),
                ),
                '.side-img' => array(
                    'margin-top' => esc_attr( $header_two_advance_ads_t_m_top . 'px' ),
                    'margin-bottom' => esc_attr( $header_two_advance_ads_t_m_bottom . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $header_two_advance_css_t
            );
        }

        /*---------------------------------- Header three design -----------------------------------*/

        //Menu icon
        $typo_header_three_design_menu_icon_font_size_t = influence_blog_get_mod( 'typo_header_three_design_menu_icon_size_t' );

        //Menu
        $typo_header_three_design_main_menu_font_size_t = influence_blog_get_mod( 'typo_header_three_design_main_menu_size_t' );
        $typo_header_three_design_main_menu_line_height_t = influence_blog_get_mod( 'typo_header_three_design_main_menu_height_t' );
        $typo_header_three_design_main_menu_letter_spacing_t = influence_blog_get_mod( 'typo_header_three_design_main_menu_spacing_t' );

        $typo_header_three_design_sub_menu_font_size_t = influence_blog_get_mod( 'typo_header_three_design_sub_menu_size_t' );
        $typo_header_three_design_sub_menu_line_height_t = influence_blog_get_mod( 'typo_header_three_design_sub_menu_height_t' );
        $typo_header_three_design_sub_menu_letter_spacing_t = influence_blog_get_mod( 'typo_header_three_design_sub_menu_spacing_t' );

        //Search icon
        $typo_header_three_design_search_icon_font_size_t = influence_blog_get_mod( 'typo_header_three_design_search_icon_size_t' );

        $typo_header_three_design_css_t = array(
            '.home-icon a' => array(
                'font-size' => esc_attr( $typo_header_three_design_menu_icon_font_size_t . 'px' ),
            ),
            '.main_navigation ul li a' => array(
                'font-size' => esc_attr( $typo_header_three_design_main_menu_font_size_t . 'px' ),
                'line-height' => esc_attr( $typo_header_three_design_main_menu_line_height_t ),
                'letter-spacing' => esc_attr( $typo_header_three_design_main_menu_letter_spacing_t . 'px' ),
            ),
            '.main_navigation ul li.menu-item-has-children .sub-menu li a' => array(
                'font-size' => esc_attr( $typo_header_three_design_sub_menu_font_size_t . 'px' ),
                'line-height' => esc_attr( $typo_header_three_design_sub_menu_line_height_t ),
                'letter-spacing' => esc_attr( $typo_header_three_design_sub_menu_letter_spacing_t . 'px' ),
            ),
            '.header-layout1 .search-icon .btn-search' => array(
                'font-size' => esc_attr( $typo_header_three_design_search_icon_font_size_t . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_header_three_design_css_t
        );

        /*---------------------------------- Header three advance Section -----------------------------------*/

        $header_three_advance_toggle = influence_blog_get_mod( 'header_three_advance_toggle' );

        if( $header_three_advance_toggle ) {

            $header_three_advance_t_b_bottom = influence_blog_get_mod( 'header_three_advance_t_b_bottom' );

            $header_three_advance_menu_icon_t_p_top = influence_blog_get_mod( 'header_three_advance_menu_icon_t_p_top' );
            $header_three_advance_menu_icon_t_p_right = influence_blog_get_mod( 'header_three_advance_menu_icon_t_p_right' );
            $header_three_advance_menu_icon_t_p_bottom = influence_blog_get_mod( 'header_three_advance_menu_icon_t_p_bottom' );
            $header_three_advance_menu_icon_t_p_left = influence_blog_get_mod( 'header_three_advance_menu_icon_t_p_left' );

            $header_three_advance_menu_t_p_top = influence_blog_get_mod( 'header_three_advance_menu_t_p_top' );
            $header_three_advance_menu_t_p_right = influence_blog_get_mod( 'header_three_advance_menu_t_p_right' );
            $header_three_advance_menu_t_p_bottom = influence_blog_get_mod( 'header_three_advance_menu_t_p_bottom' );
            $header_three_advance_menu_t_p_left = influence_blog_get_mod( 'header_three_advance_menu_t_p_left' );

            $header_three_advance_search_icon_t_p_top = influence_blog_get_mod( 'header_three_advance_search_icon_t_p_top' );
            $header_three_advance_search_icon_t_p_right = influence_blog_get_mod( 'header_three_advance_search_icon_t_p_right' );
            $header_three_advance_search_icon_t_p_bottom = influence_blog_get_mod( 'header_three_advance_search_icon_t_p_bottom' );
            $header_three_advance_search_icon_t_p_left = influence_blog_get_mod( 'header_three_advance_search_icon_t_p_left' );

            $header_three_advance_css_t = array(
                '.menu-bg-wrap' => array(
                    'border-bottom-width' => esc_attr( $header_three_advance_t_b_bottom . 'px' ),
                ),
                '.home-icon a' => array(
                    'padding-top' => esc_attr( $header_three_advance_menu_icon_t_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_three_advance_menu_icon_t_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_three_advance_menu_icon_t_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_three_advance_menu_icon_t_p_left . 'px' ),
                ),
                '#header' => array(
                    'padding-top' => esc_attr( $header_three_advance_menu_t_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_three_advance_menu_t_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_three_advance_menu_t_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_three_advance_menu_t_p_left . 'px' ),
                ),
                '.header-layout1 .search-icon .btn-search, .search-icon .btn-search' => array(
                    'padding-top' => esc_attr( $header_three_advance_search_icon_t_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_three_advance_search_icon_t_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_three_advance_search_icon_t_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_three_advance_search_icon_t_p_left . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $header_three_advance_css_t
            );
        }

        /*---------------------------------- Blog page section one design Section -----------------------------------*/

        $typo_blogpage_section_one_design_title_size_t = influence_blog_get_mod( 'typo_blogpage_section_one_design_title_size_t' );

        $typo_blogpage_section_one_design_css_t = array(
            '#section-one .widget-tt .l-title' => array(
                'font-size' => esc_attr( $typo_blogpage_section_one_design_title_size_t . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_blogpage_section_one_design_css_t
        );

        /*---------------------------------- Footer one design Section -----------------------------------*/

        $typo_footer_one_widget_area_design_title_font_size_t = influence_blog_get_mod( 'typo_footer_one_widget_area_design_title_size_t' );
        $typo_footer_one_widget_area_design_title_line_height_t = influence_blog_get_mod( 'typo_footer_one_widget_area_design_title_height_t' );
        $typo_footer_one_widget_area_design_title_letter_spacing_t = influence_blog_get_mod( 'typo_footer_one_widget_area_design_title_spacing_t' );

        $typo_footer_one_design_css_t = array(
            '.foot-top-border .side-tt .s-title' => array(
                'font-size' => esc_attr( $typo_footer_one_widget_area_design_title_font_size_t . 'px' ),
                'line-height' => esc_attr( $typo_footer_one_widget_area_design_title_line_height_t ),
                'letter-spacing' => esc_attr( $typo_footer_one_widget_area_design_title_letter_spacing_t . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_footer_one_design_css_t
        );

        /*---------------------------------- Footer one advance Section -----------------------------------*/

        $footer_one_advance_toggle = influence_blog_get_mod( 'footer_one_advance_toggle' );

        if( $footer_one_advance_toggle ) {

            $footer_one_widget_area_advance_t_p_top = influence_blog_get_mod( 'footer_one_widget_area_advance_t_p_top' );
            $footer_one_widget_area_advance_t_p_right = influence_blog_get_mod( 'footer_one_widget_area_advance_t_p_right' );
            $footer_one_widget_area_advance_t_p_bottom = influence_blog_get_mod( 'footer_one_widget_area_advance_t_p_bottom' );
            $footer_one_widget_area_advance_t_p_left = influence_blog_get_mod( 'footer_one_widget_area_advance_t_p_left' );

            $footer_one_widget_title_advance_t_m_top = influence_blog_get_mod( 'footer_one_widget_title_advance_t_m_top' );
            $footer_one_widget_title_advance_t_m_right = influence_blog_get_mod( 'footer_one_widget_title_advance_t_m_right' );
            $footer_one_widget_title_advance_t_m_bottom = influence_blog_get_mod( 'footer_one_widget_title_advance_t_m_bottom' );
            $footer_one_widget_title_advance_t_m_left = influence_blog_get_mod( 'footer_one_widget_title_advance_t_m_left' );

            $footer_one_widget_title_advance_t_p_top = influence_blog_get_mod( 'footer_one_widget_title_advance_t_p_top' );
            $footer_one_widget_title_advance_t_p_right = influence_blog_get_mod( 'footer_one_widget_title_advance_t_p_right' );
            $footer_one_widget_title_advance_t_p_bottom = influence_blog_get_mod( 'footer_one_widget_title_advance_t_p_bottom' );
            $footer_one_widget_title_advance_t_p_left = influence_blog_get_mod( 'footer_one_widget_title_advance_t_p_left' );

            $footer_one_advance_css_t = array(
                '.foot-top-border .widget' => array(
                    'padding-top' => esc_attr( $footer_one_widget_area_advance_t_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_one_widget_area_advance_t_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_one_widget_area_advance_t_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_one_widget_area_advance_t_p_left . 'px' ),
                ),
                '.foot-top-border .side-tt.widget-title,
                .foot-top-border .side-bar .side-tt .s-title,
                .foot-top-border .foot-top-border .recent-cate-wrap .side-tt .s-title,
                .foot-top-border .author-wrap .side-tt .s-title' => array(
                    'margin-top' => esc_attr( $footer_one_widget_title_advance_t_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_one_widget_title_advance_t_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_one_widget_title_advance_t_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_one_widget_title_advance_t_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_one_widget_title_advance_t_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_one_widget_title_advance_t_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_one_widget_title_advance_t_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_one_widget_title_advance_t_p_left . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $footer_one_advance_css_t
            );
        }

        /*---------------------------------- Footer two design Section -----------------------------------*/

        $typo_footer_two_design_title_font_size_t = influence_blog_get_mod( 'typo_footer_two_design_title_size_t' );
        $typo_footer_two_design_title_line_height_t = influence_blog_get_mod( 'typo_footer_two_design_title_height_t' );
        $typo_footer_two_design_title_letter_spacing_t = influence_blog_get_mod( 'typo_footer_two_design_title_spacing_t' );

        $typo_footer_two_design_social_links_font_size_t = influence_blog_get_mod( 'typo_footer_two_design_social_links_size_t' );

        $typo_footer_two_widget_area_design_title_font_size_t = influence_blog_get_mod( 'typo_footer_two_widget_area_design_title_size_t' );
        $typo_footer_two_widget_area_design_title_line_height_t = influence_blog_get_mod( 'typo_footer_two_widget_area_design_title_height_t' );
        $typo_footer_two_widget_area_design_title_letter_spacing_t = influence_blog_get_mod( 'typo_footer_two_widget_area_design_title_spacing_t' );

        $typo_footer_two_design_css_t = array(
            '.contact-info .foo-mid-title .s-title' => array(
                'font-size' => esc_attr( $typo_footer_two_design_title_font_size_t . 'px' ),
                'line-height' => esc_attr( $typo_footer_two_design_title_line_height_t ),
                'letter-spacing' => esc_attr( $typo_footer_two_design_title_letter_spacing_t . 'px' ),
            ),
            '.social-media-foot ul li a' => array(
                'font-size' => esc_attr( $typo_footer_two_design_social_links_font_size_t . 'px' ),
            ),
            '.footer-mid-sec .widget-title .s-title, .footer-mid-sec .widget-title .s-title a, .footer-mid-sec .side-bar .side-tt .s-title, .footer-mid-sec .recent-cate-wrap .side-tt .s-title, .footer-mid-sec .author-wrap .side-tt .s-title' => array(
                'font-size' => esc_attr( $typo_footer_two_widget_area_design_title_font_size_t . 'px' ),
                'line-height' => esc_attr( $typo_footer_two_widget_area_design_title_line_height_t ),
                'letter-spacing' => esc_attr( $typo_footer_two_widget_area_design_title_letter_spacing_t . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_footer_two_design_css_t
        );

        /*---------------------------------- Footer two advance Section -----------------------------------*/

        $footer_two_advance_toggle = influence_blog_get_mod( 'footer_two_advance_toggle' );

        if( $footer_two_advance_toggle ) {

            $footer_two_title_advance_t_m_top = influence_blog_get_mod( 'footer_two_title_advance_t_m_top' );
            $footer_two_title_advance_t_m_right = influence_blog_get_mod( 'footer_two_title_advance_t_m_right' );
            $footer_two_title_advance_t_m_bottom = influence_blog_get_mod( 'footer_two_title_advance_t_m_bottom' );
            $footer_two_title_advance_t_m_left = influence_blog_get_mod( 'footer_two_title_advance_t_m_left' );

            $footer_two_title_advance_t_p_top = influence_blog_get_mod( 'footer_two_title_advance_t_p_top' );
            $footer_two_title_advance_t_p_right = influence_blog_get_mod( 'footer_two_title_advance_t_p_right' );
            $footer_two_title_advance_t_p_bottom = influence_blog_get_mod( 'footer_two_title_advance_t_p_bottom' );
            $footer_two_title_advance_t_p_left = influence_blog_get_mod( 'footer_two_title_advance_t_p_left' );

            $footer_two_social_links_advance_t_m_top = influence_blog_get_mod( 'footer_two_social_links_advance_t_m_top' );
            $footer_two_social_links_advance_t_m_right = influence_blog_get_mod( 'footer_two_social_links_advance_t_m_right' );
            $footer_two_social_links_advance_t_m_bottom = influence_blog_get_mod( 'footer_two_social_links_advance_t_m_bottom' );
            $footer_two_social_links_advance_t_m_left = influence_blog_get_mod( 'footer_two_social_links_advance_t_m_left' );

            $footer_two_social_links_advance_t_p_top = influence_blog_get_mod( 'footer_two_social_links_advance_t_p_top' );
            $footer_two_social_links_advance_t_p_right = influence_blog_get_mod( 'footer_two_social_links_advance_t_p_right' );
            $footer_two_social_links_advance_t_p_bottom = influence_blog_get_mod( 'footer_two_social_links_advance_t_p_bottom' );
            $footer_two_social_links_advance_t_p_left = influence_blog_get_mod( 'footer_two_social_links_advance_t_p_left' );

            $footer_two_widget_area_advance_t_p_top = influence_blog_get_mod( 'footer_two_widget_area_advance_t_p_top' );
            $footer_two_widget_area_advance_t_p_right = influence_blog_get_mod( 'footer_two_widget_area_advance_t_p_right' );
            $footer_two_widget_area_advance_t_p_bottom = influence_blog_get_mod( 'footer_two_widget_area_advance_t_p_bottom' );
            $footer_two_widget_area_advance_t_p_left = influence_blog_get_mod( 'footer_two_widget_area_advance_t_p_left' );

            $footer_two_widget_area_advance_t_m_top = influence_blog_get_mod( 'footer_two_widget_area_advance_t_m_top' );
            $footer_two_widget_area_advance_t_m_right = influence_blog_get_mod( 'footer_two_widget_area_advance_t_m_right' );
            $footer_two_widget_area_advance_t_m_bottom = influence_blog_get_mod( 'footer_two_widget_area_advance_t_m_bottom' );
            $footer_two_widget_area_advance_t_m_left = influence_blog_get_mod( 'footer_two_widget_area_advance_t_m_left' );

            $footer_two_widget_title_advance_t_m_top = influence_blog_get_mod( 'footer_two_widget_title_advance_t_m_top' );
            $footer_two_widget_title_advance_t_m_right = influence_blog_get_mod( 'footer_two_widget_title_advance_t_m_right' );
            $footer_two_widget_title_advance_t_m_bottom = influence_blog_get_mod( 'footer_two_widget_title_advance_t_m_bottom' );
            $footer_two_widget_title_advance_t_m_left = influence_blog_get_mod( 'footer_two_widget_title_advance_t_m_left' );

            $footer_two_widget_title_advance_t_p_top = influence_blog_get_mod( 'footer_two_widget_title_advance_t_p_top' );
            $footer_two_widget_title_advance_t_p_right = influence_blog_get_mod( 'footer_two_widget_title_advance_t_p_right' );
            $footer_two_widget_title_advance_t_p_bottom = influence_blog_get_mod( 'footer_two_widget_title_advance_t_p_bottom' );
            $footer_two_widget_title_advance_t_p_left = influence_blog_get_mod( 'footer_two_widget_title_advance_t_p_left' );

            $footer_two_advance_css_t = array(
                '.footer-mid-sec .contact-info .foo-mid-title .s-title' => array(
                    'margin-top' => esc_attr( $footer_two_title_advance_t_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_title_advance_t_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_title_advance_t_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_title_advance_t_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_two_title_advance_t_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_title_advance_t_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_title_advance_t_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_title_advance_t_p_left . 'px' ),
                ),
                '.footer-mid-sec .social-media-foot' => array(
                    'margin-top' => esc_attr( $footer_two_social_links_advance_t_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_social_links_advance_t_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_social_links_advance_t_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_social_links_advance_t_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_two_social_links_advance_t_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_social_links_advance_t_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_social_links_advance_t_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_social_links_advance_t_p_left . 'px' ),
                ),
                '.footer-mid-sec .widget' => array(
                    'padding-top' => esc_attr( $footer_two_widget_area_advance_t_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_widget_area_advance_t_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_widget_area_advance_t_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_widget_area_advance_t_p_left . 'px' ),
                    'margin-top' => esc_attr( $footer_two_widget_area_advance_t_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_widget_area_advance_t_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_widget_area_advance_t_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_widget_area_advance_t_m_left . 'px' ),
                ),
                '.footer-mid-sec .widget .side-tt.widget-title,
                .footer-mid-sec .side-bar .side-tt .s-title,
                .footer-mid-sec .foot-top-border .recent-cate-wrap .side-tt .s-title,
                .footer-mid-sec .author-wrap .side-tt .s-title' => array(
                    'margin-top' => esc_attr( $footer_two_widget_title_advance_t_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_widget_title_advance_t_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_widget_title_advance_t_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_widget_title_advance_t_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_two_widget_title_advance_t_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_widget_title_advance_t_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_widget_title_advance_t_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_widget_title_advance_t_p_left . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $footer_two_advance_css_t
            );
        }

        if( !defined( 'INFLUENCE_BLOG_PRO' ) && !class_exists( 'Influence_Blog_Pro' ) ) {

            $free_theme_css_t = array(
                '.single-layout1-bdy .single-title,
                .archive-bdy-d1 .widget-tt .l-title' => array(
                    'font-size' => esc_attr( $heading_H1_font_size_t . 'px' ),
                    'line-height' => esc_attr( $heading_H1_line_height_t ),
                    'letter-spacing' => esc_attr( $heading_H1_letter_spacing_t . 'px' ),
                ),
                '.banner-caption .m-title,
                .sub-cate,
                .secondary-widget-area .widget .side-tt.widget-title .s-title,
                .widget .widget-title,
                .comments-area .comment-reply-title' => array(
                    'font-size' => esc_attr( $heading_H3_font_size_t . 'px' ),
                    'line-height' => esc_attr( $heading_H3_line_height_t ),
                    'letter-spacing' => esc_attr( $heading_H3_letter_spacing_t . 'px' ),
                ),
                '.side-widget-d2 .author-detail .sm-title' => array(
                    'font-size' => esc_attr( $heading_H4_font_size_t . 'px' ),
                    'line-height' => esc_attr( $heading_H4_line_height_t ),
                    'letter-spacing' => esc_attr( $heading_H4_letter_spacing_t . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $free_theme_css_t
            );
        }

        $parse_css .= influence_blog_parse_css( $output_css, '', '768' );

        $output_css = array();

        /*-----------------------------------------------------------------------------
							 Mobile
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Global typography -----------------------------------*/

        //body typography
        $body_font_size_m = influence_blog_get_mod( 'typo_body_size_m' );
        $body_line_height_m = influence_blog_get_mod( 'typo_body_height_m' );
        $body_letter_spacing_m = influence_blog_get_mod( 'typo_body_spacing_m' );

        $body_css_m = array(
            'body' => array(
                'font-size' => esc_attr( $body_font_size_m . 'px' ),
                'line-height' => esc_attr( $body_line_height_m ),
                'letter-spacing' => esc_attr( $body_letter_spacing_m . 'px' ),
            ),
        );

        //heading h1 typography
        $heading_H1_font_size_m = influence_blog_get_mod( 'typo_heading_H1_size_m' );
        $heading_H1_line_height_m = influence_blog_get_mod( 'typo_heading_H1_height_m' );
        $heading_H1_letter_spacing_m = influence_blog_get_mod( 'typo_heading_H1_spacing_m' );
        //heading h1 typography
        $heading_H2_font_size_m = influence_blog_get_mod( 'typo_heading_H2_size_m' );
        $heading_H2_line_height_m = influence_blog_get_mod( 'typo_heading_H2_height_m' );
        $heading_H2_letter_spacing_m = influence_blog_get_mod( 'typo_heading_H2_spacing_m' );
        //heading h3 typography
        $heading_H3_font_size_m = influence_blog_get_mod( 'typo_heading_H3_size_m' );
        $heading_H3_line_height_m = influence_blog_get_mod( 'typo_heading_H3_height_m' );
        $heading_H3_letter_spacing_m = influence_blog_get_mod( 'typo_heading_H3_spacing_m' );
        //heading h4 typography
        $heading_H4_font_size_m = influence_blog_get_mod( 'typo_heading_H4_size_m' );
        $heading_H4_line_height_m = influence_blog_get_mod( 'typo_heading_H4_height_m' );
        $heading_H4_letter_spacing_m = influence_blog_get_mod( 'typo_heading_H4_spacing_m' );
        //heading h5 typography
        $heading_H5_font_size_m = influence_blog_get_mod( 'typo_heading_H5_size_m' );
        $heading_H5_line_height_m = influence_blog_get_mod( 'typo_heading_H5_height_m' );
        $heading_H5_letter_spacing_m = influence_blog_get_mod( 'typo_heading_H5_spacing_m' );
        //heading h6 typography
        $heading_H6_font_size_m = influence_blog_get_mod( 'typo_heading_H6_size_m' );
        $heading_H6_line_height_m = influence_blog_get_mod( 'typo_heading_H6_height_m' );
        $heading_H6_letter_spacing_m = influence_blog_get_mod( 'typo_heading_H6_spacing_m' );

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

            $site_layout_style_advance_m_p_top = influence_blog_get_mod( 'site_layout_style_advance_m_p_top' );
            $site_layout_style_advance_m_p_right = influence_blog_get_mod( 'site_layout_style_advance_m_p_right' );
            $site_layout_style_advance_m_p_bottom = influence_blog_get_mod( 'site_layout_style_advance_m_p_bottom' );
            $site_layout_style_advance_m_p_left = influence_blog_get_mod( 'site_layout_style_advance_m_p_left' );

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

                $site_layout_style_advance_b_m_m_right = influence_blog_get_mod( 'site_layout_style_advance_b_m_m_right' );
                $site_layout_style_advance_b_m_m_left = influence_blog_get_mod( 'site_layout_style_advance_b_m_m_left' );

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

                $site_layout_style_advance_f_m_m_top = influence_blog_get_mod( 'site_layout_style_advance_f_m_m_top' );
                $site_layout_style_advance_f_m_m_right = influence_blog_get_mod( 'site_layout_style_advance_f_m_m_right' );
                $site_layout_style_advance_f_m_m_bottom = influence_blog_get_mod( 'site_layout_style_advance_f_m_m_bottom' );
                $site_layout_style_advance_f_m_m_left = influence_blog_get_mod( 'site_layout_style_advance_f_m_m_left' );

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

            $site_layout_container_style = influence_blog_get_mod( 'site_layout_container_style' );

            $site_layout_container_advance_b_m_p_top = influence_blog_get_mod( 'site_layout_container_advance_b_m_p_top' );
            $site_layout_container_advance_b_m_p_right = influence_blog_get_mod( 'site_layout_container_advance_b_m_p_right' );
            $site_layout_container_advance_b_m_p_bottom = influence_blog_get_mod( 'site_layout_container_advance_b_m_p_bottom' );
            $site_layout_container_advance_b_m_p_left = influence_blog_get_mod( 'site_layout_container_advance_b_m_p_left' );

            $site_layout_container_advance_b_m_m_top = influence_blog_get_mod( 'site_layout_container_advance_b_m_m_top' );
            $site_layout_container_advance_b_m_m_right = influence_blog_get_mod( 'site_layout_container_advance_b_m_m_right' );
            $site_layout_container_advance_b_m_m_bottom = influence_blog_get_mod( 'site_layout_container_advance_b_m_m_bottom' );
            $site_layout_container_advance_b_m_m_left = influence_blog_get_mod( 'site_layout_container_advance_b_m_m_left' );

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
        $typo_header_one_layout_one_design_menu_font_size_m = influence_blog_get_mod( 'typo_header_one_layout_one_design_menu_size_m' );
        $typo_header_one_layout_one_design_menu_line_height_m = influence_blog_get_mod( 'typo_header_one_layout_one_design_menu_height_m' );
        $typo_header_one_layout_one_design_menu_letter_spacing_m = influence_blog_get_mod( 'typo_header_one_layout_one_design_menu_spacing_m' );

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
        $typo_header_one_layout_one_design_social_links_font_size_m = influence_blog_get_mod( 'typo_header_one_layout_one_design_social_links_size_m' );

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

        $header_one_layout_one_advance_toggle = influence_blog_get_mod( 'header_one_layout_one_advance_toggle' );

        if( $header_one_layout_one_advance_toggle ) {

            $header_one_layout_one_advance_m_p_top = influence_blog_get_mod( 'header_one_layout_one_advance_m_p_top' );
            $header_one_layout_one_advance_m_p_right = influence_blog_get_mod( 'header_one_layout_one_advance_m_p_right' );
            $header_one_layout_one_advance_m_p_bottom = influence_blog_get_mod( 'header_one_layout_one_advance_m_p_bottom' );
            $header_one_layout_one_advance_m_p_left = influence_blog_get_mod( 'header_one_layout_one_advance_m_p_left' );

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

        /*---------------------------------- Header two design site title typo -----------------------------------*/

        //Header two design site title typo
        $typo_header_two_design_site_title_font_size_m = influence_blog_get_mod( 'typo_header_two_design_site_title_size_m' );
        $typo_header_two_design_site_title_line_height_m = influence_blog_get_mod( 'typo_header_two_design_site_title_height_m' );
        $typo_header_two_design_site_title_letter_spacing_m = influence_blog_get_mod( 'typo_header_two_design_site_title_spacing_m' );

        $typo_header_two_design_site_title_css_m = array(
            '.site-title' => array(
                'font-size' => esc_attr( $typo_header_two_design_site_title_font_size_m . 'px' ),
                'line-height' => esc_attr( $typo_header_two_design_site_title_line_height_m ),
                'letter-spacing' => esc_attr( $typo_header_two_design_site_title_letter_spacing_m . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_header_two_design_site_title_css_m
        );

        /*---------------------------------- Header two design site title/ads advance Section -----------------------------------*/

        $header_two_advance_toggle = influence_blog_get_mod( 'header_two_advance_toggle' );

        if( $header_two_advance_toggle ) {

            $header_two_advance_site_title_m_m_top = influence_blog_get_mod( 'header_two_advance_site_title_m_m_top' );
            $header_two_advance_site_title_m_m_bottom = influence_blog_get_mod( 'header_two_advance_site_title_m_m_bottom' );

            $header_two_advance_ads_m_m_top = influence_blog_get_mod( 'header_two_advance_ads_m_m_top' );
            $header_two_advance_ads_m_m_bottom = influence_blog_get_mod( 'header_two_advance_ads_m_m_bottom' );

            $header_two_advance_css_m = array(
                '.logo-sec' => array(
                    'margin-top' => esc_attr( $header_two_advance_site_title_m_m_top . 'px' ),
                    'margin-bottom' => esc_attr( $header_two_advance_site_title_m_m_bottom . 'px' ),
                ),
                '.side-img' => array(
                    'margin-top' => esc_attr( $header_two_advance_ads_m_m_top . 'px' ),
                    'margin-bottom' => esc_attr( $header_two_advance_ads_m_m_bottom . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $header_two_advance_css_m
            );
        }

        /*---------------------------------- Header three design -----------------------------------*/

        //Menu icon
        $typo_header_three_design_menu_icon_font_size_m = influence_blog_get_mod( 'typo_header_three_design_menu_icon_size_m' );

        //Menu
        $typo_header_three_design_main_menu_font_size_m = influence_blog_get_mod( 'typo_header_three_design_main_menu_size_m' );
        $typo_header_three_design_main_menu_line_height_m = influence_blog_get_mod( 'typo_header_three_design_main_menu_height_m' );
        $typo_header_three_design_main_menu_letter_spacing_m = influence_blog_get_mod( 'typo_header_three_design_main_menu_spacing_m' );

        $typo_header_three_design_sub_menu_font_size_m = influence_blog_get_mod( 'typo_header_three_design_sub_menu_size_m' );
        $typo_header_three_design_sub_menu_line_height_m = influence_blog_get_mod( 'typo_header_three_design_sub_menu_height_m' );
        $typo_header_three_design_sub_menu_letter_spacing_m = influence_blog_get_mod( 'typo_header_three_design_sub_menu_spacing_m' );

        //Search icon
        $typo_header_three_design_search_icon_font_size_m = influence_blog_get_mod( 'typo_header_three_design_search_icon_size_m' );

        $typo_header_three_design_css_m = array(
            '.home-icon a' => array(
                'font-size' => esc_attr( $typo_header_three_design_menu_icon_font_size_m . 'px' ),
            ),
            '.main_navigation ul li a' => array(
                'font-size' => esc_attr( $typo_header_three_design_main_menu_font_size_m . 'px' ),
                'line-height' => esc_attr( $typo_header_three_design_main_menu_line_height_m ),
                'letter-spacing' => esc_attr( $typo_header_three_design_main_menu_letter_spacing_m . 'px' ),
            ),
            '.main_navigation ul li.menu-item-has-children .sub-menu li a' => array(
                'font-size' => esc_attr( $typo_header_three_design_sub_menu_font_size_m . 'px' ),
                'line-height' => esc_attr( $typo_header_three_design_sub_menu_line_height_m ),
                'letter-spacing' => esc_attr( $typo_header_three_design_sub_menu_letter_spacing_m . 'px' ),
            ),
            '.header-layout1 .search-icon .btn-search' => array(
                'font-size' => esc_attr( $typo_header_three_design_search_icon_font_size_m . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_header_three_design_css_m
        );

        /*---------------------------------- Header three advance Section -----------------------------------*/

        $header_three_advance_toggle = influence_blog_get_mod( 'header_three_advance_toggle' );

        if( $header_three_advance_toggle ) {

            $header_three_advance_m_b_bottom = influence_blog_get_mod( 'header_three_advance_m_b_bottom' );

            $header_three_advance_menu_icon_m_p_top = influence_blog_get_mod( 'header_three_advance_menu_icon_m_p_top' );
            $header_three_advance_menu_icon_m_p_right = influence_blog_get_mod( 'header_three_advance_menu_icon_m_p_right' );
            $header_three_advance_menu_icon_m_p_bottom = influence_blog_get_mod( 'header_three_advance_menu_icon_m_p_bottom' );
            $header_three_advance_menu_icon_m_p_left = influence_blog_get_mod( 'header_three_advance_menu_icon_m_p_left' );

            $header_three_advance_menu_m_p_top = influence_blog_get_mod( 'header_three_advance_menu_m_p_top' );
            $header_three_advance_menu_m_p_right = influence_blog_get_mod( 'header_three_advance_menu_m_p_right' );
            $header_three_advance_menu_m_p_bottom = influence_blog_get_mod( 'header_three_advance_menu_m_p_bottom' );
            $header_three_advance_menu_m_p_left = influence_blog_get_mod( 'header_three_advance_menu_m_p_left' );

            $header_three_advance_search_icon_m_p_top = influence_blog_get_mod( 'header_three_advance_search_icon_m_p_top' );
            $header_three_advance_search_icon_m_p_right = influence_blog_get_mod( 'header_three_advance_search_icon_m_p_right' );
            $header_three_advance_search_icon_m_p_bottom = influence_blog_get_mod( 'header_three_advance_search_icon_m_p_bottom' );
            $header_three_advance_search_icon_m_p_left = influence_blog_get_mod( 'header_three_advance_search_icon_m_p_left' );

            $header_three_advance_css_m = array(
                '.menu-bg-wrap' => array(
                    'border-bottom-width' => esc_attr( $header_three_advance_m_b_bottom . 'px' ),
                ),
                '.home-icon a' => array(
                    'padding-top' => esc_attr( $header_three_advance_menu_icon_m_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_three_advance_menu_icon_m_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_three_advance_menu_icon_m_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_three_advance_menu_icon_m_p_left . 'px' ),
                ),
                '#header' => array(
                    'padding-top' => esc_attr( $header_three_advance_menu_m_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_three_advance_menu_m_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_three_advance_menu_m_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_three_advance_menu_m_p_left . 'px' ),
                ),
                '.header-layout1 .search-icon .btn-search, .search-icon .btn-search' => array(
                    'padding-top' => esc_attr( $header_three_advance_search_icon_m_p_top . 'px' ),
                    'padding-right' => esc_attr( $header_three_advance_search_icon_m_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $header_three_advance_search_icon_m_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $header_three_advance_search_icon_m_p_left . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $header_three_advance_css_m
            );
        }

        /*---------------------------------- Blog page section one design Section -----------------------------------*/

        $typo_blogpage_section_one_design_title_size_m = influence_blog_get_mod( 'typo_blogpage_section_one_design_title_size_m' );

        $typo_blogpage_section_one_design_css_m = array(
            '#section-one .widget-tt .l-title' => array(
                'font-size' => esc_attr( $typo_blogpage_section_one_design_title_size_m . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_blogpage_section_one_design_css_m
        );

        /*---------------------------------- Footer one design Section -----------------------------------*/

        $typo_footer_one_widget_area_design_title_font_size_m = influence_blog_get_mod( 'typo_footer_one_widget_area_design_title_size_m' );
        $typo_footer_one_widget_area_design_title_line_height_m = influence_blog_get_mod( 'typo_footer_one_widget_area_design_title_height_m' );
        $typo_footer_one_widget_area_design_title_letter_spacing_m = influence_blog_get_mod( 'typo_footer_one_widget_area_design_title_spacing_m' );

        $typo_footer_one_design_css_t = array(
            '.foot-top-border .side-tt .s-title' => array(
                'font-size' => esc_attr( $typo_footer_one_widget_area_design_title_font_size_m . 'px' ),
                'line-height' => esc_attr( $typo_footer_one_widget_area_design_title_line_height_m ),
                'letter-spacing' => esc_attr( $typo_footer_one_widget_area_design_title_letter_spacing_m . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_footer_one_design_css_t
        );

        /*---------------------------------- Footer one advance Section -----------------------------------*/

        $footer_one_advance_toggle = influence_blog_get_mod( 'footer_one_advance_toggle' );

        if( $footer_one_advance_toggle ) {

            $footer_one_widget_area_advance_m_p_top = influence_blog_get_mod( 'footer_one_widget_area_advance_m_p_top' );
            $footer_one_widget_area_advance_m_p_right = influence_blog_get_mod( 'footer_one_widget_area_advance_m_p_right' );
            $footer_one_widget_area_advance_m_p_bottom = influence_blog_get_mod( 'footer_one_widget_area_advance_m_p_bottom' );
            $footer_one_widget_area_advance_m_p_left = influence_blog_get_mod( 'footer_one_widget_area_advance_m_p_left' );

            $footer_one_widget_title_advance_m_m_top = influence_blog_get_mod( 'footer_one_widget_title_advance_m_m_top' );
            $footer_one_widget_title_advance_m_m_right = influence_blog_get_mod( 'footer_one_widget_title_advance_m_m_right' );
            $footer_one_widget_title_advance_m_m_bottom = influence_blog_get_mod( 'footer_one_widget_title_advance_m_m_bottom' );
            $footer_one_widget_title_advance_m_m_left = influence_blog_get_mod( 'footer_one_widget_title_advance_m_m_left' );

            $footer_one_widget_title_advance_m_p_top = influence_blog_get_mod( 'footer_one_widget_title_advance_m_p_top' );
            $footer_one_widget_title_advance_m_p_right = influence_blog_get_mod( 'footer_one_widget_title_advance_m_p_right' );
            $footer_one_widget_title_advance_m_p_bottom = influence_blog_get_mod( 'footer_one_widget_title_advance_m_p_bottom' );
            $footer_one_widget_title_advance_m_p_left = influence_blog_get_mod( 'footer_one_widget_title_advance_m_p_left' );

            $footer_one_advance_css_m = array(
                '.foot-top-border .widget' => array(
                    'padding-top' => esc_attr( $footer_one_widget_area_advance_m_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_one_widget_area_advance_m_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_one_widget_area_advance_m_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_one_widget_area_advance_m_p_left . 'px' ),
                ),
                '.foot-top-border .side-tt.widget-title,
                .foot-top-border .side-bar .side-tt .s-title,
                .foot-top-border .foot-top-border .recent-cate-wrap .side-tt .s-title,
                .foot-top-border .author-wrap .side-tt .s-title' => array(
                    'margin-top' => esc_attr( $footer_one_widget_title_advance_m_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_one_widget_title_advance_m_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_one_widget_title_advance_m_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_one_widget_title_advance_m_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_one_widget_title_advance_m_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_one_widget_title_advance_m_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_one_widget_title_advance_m_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_one_widget_title_advance_m_p_left . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $footer_one_advance_css_m
            );
        }

        /*---------------------------------- Footer two design Section -----------------------------------*/

        $typo_footer_two_design_title_font_size_m = influence_blog_get_mod( 'typo_footer_two_design_title_size_m' );
        $typo_footer_two_design_title_line_height_m = influence_blog_get_mod( 'typo_footer_two_design_title_height_m' );
        $typo_footer_two_design_title_letter_spacing_m = influence_blog_get_mod( 'typo_footer_two_design_title_spacing_m' );

        $typo_footer_two_design_social_links_font_size_m = influence_blog_get_mod( 'typo_footer_two_design_social_links_size_m' );

        $typo_footer_two_widget_area_design_title_font_size_m = influence_blog_get_mod( 'typo_footer_two_widget_area_design_title_size_m' );
        $typo_footer_two_widget_area_design_title_line_height_m = influence_blog_get_mod( 'typo_footer_two_widget_area_design_title_height_m' );
        $typo_footer_two_widget_area_design_title_letter_spacing_m = influence_blog_get_mod( 'typo_footer_two_widget_area_design_title_spacing_m' );

        $typo_footer_two_design_css_m = array(
            '.contact-info .foo-mid-title .s-title' => array(
                'font-size' => esc_attr( $typo_footer_two_design_title_font_size_m . 'px' ),
                'line-height' => esc_attr( $typo_footer_two_design_title_line_height_m ),
                'letter-spacing' => esc_attr( $typo_footer_two_design_title_letter_spacing_m . 'px' ),
            ),
            '.social-media-foot ul li a' => array(
                'font-size' => esc_attr( $typo_footer_two_design_social_links_font_size_m . 'px' ),
            ),
            '.footer-mid-sec .side-tt .s-title, .footer-mid-sec .widget-title .s-title a, .footer-mid-sec .side-bar .side-tt .s-title, .footer-mid-sec .recent-cate-wrap .side-tt .s-title, .footer-mid-sec .author-wrap .side-tt .s-title' => array(
                'font-size' => esc_attr( $typo_footer_two_widget_area_design_title_font_size_m . 'px' ),
                'line-height' => esc_attr( $typo_footer_two_widget_area_design_title_line_height_m ),
                'letter-spacing' => esc_attr( $typo_footer_two_widget_area_design_title_letter_spacing_m . 'px' ),
            ),
        );

        $output_css = array_merge(
            $output_css,
            $typo_footer_two_design_css_m
        );

        /*---------------------------------- Footer two advance Section -----------------------------------*/

        $footer_two_advance_toggle = influence_blog_get_mod( 'footer_two_advance_toggle' );

        if( $footer_two_advance_toggle ) {

            $footer_two_title_advance_m_m_top = influence_blog_get_mod( 'footer_two_title_advance_m_m_top' );
            $footer_two_title_advance_m_m_right = influence_blog_get_mod( 'footer_two_title_advance_m_m_right' );
            $footer_two_title_advance_m_m_bottom = influence_blog_get_mod( 'footer_two_title_advance_m_m_bottom' );
            $footer_two_title_advance_m_m_left = influence_blog_get_mod( 'footer_two_title_advance_m_m_left' );

            $footer_two_title_advance_m_p_top = influence_blog_get_mod( 'footer_two_title_advance_m_p_top' );
            $footer_two_title_advance_m_p_right = influence_blog_get_mod( 'footer_two_title_advance_m_p_right' );
            $footer_two_title_advance_m_p_bottom = influence_blog_get_mod( 'footer_two_title_advance_m_p_bottom' );
            $footer_two_title_advance_m_p_left = influence_blog_get_mod( 'footer_two_title_advance_m_p_left' );

            $footer_two_social_links_advance_m_m_top = influence_blog_get_mod( 'footer_two_social_links_advance_m_m_top' );
            $footer_two_social_links_advance_m_m_right = influence_blog_get_mod( 'footer_two_social_links_advance_m_m_right' );
            $footer_two_social_links_advance_m_m_bottom = influence_blog_get_mod( 'footer_two_social_links_advance_m_m_bottom' );
            $footer_two_social_links_advance_m_m_left = influence_blog_get_mod( 'footer_two_social_links_advance_m_m_left' );

            $footer_two_social_links_advance_m_p_top = influence_blog_get_mod( 'footer_two_social_links_advance_m_p_top' );
            $footer_two_social_links_advance_m_p_right = influence_blog_get_mod( 'footer_two_social_links_advance_m_p_right' );
            $footer_two_social_links_advance_m_p_bottom = influence_blog_get_mod( 'footer_two_social_links_advance_m_p_bottom' );
            $footer_two_social_links_advance_m_p_left = influence_blog_get_mod( 'footer_two_social_links_advance_m_p_left' );

            $footer_two_widget_area_advance_m_p_top = influence_blog_get_mod( 'footer_two_widget_area_advance_m_p_top' );
            $footer_two_widget_area_advance_m_p_right = influence_blog_get_mod( 'footer_two_widget_area_advance_m_p_right' );
            $footer_two_widget_area_advance_m_p_bottom = influence_blog_get_mod( 'footer_two_widget_area_advance_m_p_bottom' );
            $footer_two_widget_area_advance_m_p_left = influence_blog_get_mod( 'footer_two_widget_area_advance_m_p_left' );

            $footer_two_widget_area_advance_m_m_top = influence_blog_get_mod( 'footer_two_widget_area_advance_m_m_top' );
            $footer_two_widget_area_advance_m_m_right = influence_blog_get_mod( 'footer_two_widget_area_advance_m_m_right' );
            $footer_two_widget_area_advance_m_m_bottom = influence_blog_get_mod( 'footer_two_widget_area_advance_m_m_bottom' );
            $footer_two_widget_area_advance_m_m_left = influence_blog_get_mod( 'footer_two_widget_area_advance_m_m_left' );

            $footer_two_widget_title_advance_m_m_top = influence_blog_get_mod( 'footer_two_widget_title_advance_m_m_top' );
            $footer_two_widget_title_advance_m_m_right = influence_blog_get_mod( 'footer_two_widget_title_advance_m_m_right' );
            $footer_two_widget_title_advance_m_m_bottom = influence_blog_get_mod( 'footer_two_widget_title_advance_m_m_bottom' );
            $footer_two_widget_title_advance_m_m_left = influence_blog_get_mod( 'footer_two_widget_title_advance_m_m_left' );

            $footer_two_widget_title_advance_m_p_top = influence_blog_get_mod( 'footer_two_widget_title_advance_m_p_top' );
            $footer_two_widget_title_advance_m_p_right = influence_blog_get_mod( 'footer_two_widget_title_advance_m_p_right' );
            $footer_two_widget_title_advance_m_p_bottom = influence_blog_get_mod( 'footer_two_widget_title_advance_m_p_bottom' );
            $footer_two_widget_title_advance_m_p_left = influence_blog_get_mod( 'footer_two_widget_title_advance_m_p_left' );

            $footer_two_advance_css_m = array(
                '.footer-mid-sec .contact-info .foo-mid-title .s-title' => array(
                    'margin-top' => esc_attr( $footer_two_title_advance_m_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_title_advance_m_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_title_advance_m_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_title_advance_m_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_two_title_advance_m_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_title_advance_m_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_title_advance_m_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_title_advance_m_p_left . 'px' ),
                ),
                '.footer-mid-sec .social-media-foot' => array(
                    'margin-top' => esc_attr( $footer_two_social_links_advance_m_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_social_links_advance_m_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_social_links_advance_m_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_social_links_advance_m_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_two_social_links_advance_m_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_social_links_advance_m_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_social_links_advance_m_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_social_links_advance_m_p_left . 'px' ),
                ),
                '.footer-mid-sec .widget' => array(
                    'padding-top' => esc_attr( $footer_two_widget_area_advance_m_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_widget_area_advance_m_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_widget_area_advance_m_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_widget_area_advance_m_p_left . 'px' ),
                    'margin-top' => esc_attr( $footer_two_widget_area_advance_m_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_widget_area_advance_m_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_widget_area_advance_m_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_widget_area_advance_m_m_left . 'px' ),
                ),
                '.footer-mid-sec .widget .side-tt.widget-title,
                .footer-mid-sec .side-bar .side-tt .s-title,
                .footer-mid-sec .foot-top-border .recent-cate-wrap .side-tt .s-title,
                .footer-mid-sec .author-wrap .side-tt .s-title' => array(
                    'margin-top' => esc_attr( $footer_two_widget_title_advance_m_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_widget_title_advance_m_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_widget_title_advance_m_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_widget_title_advance_m_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_two_widget_title_advance_m_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_widget_title_advance_m_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_widget_title_advance_m_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_widget_title_advance_m_p_left . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $footer_two_advance_css_m
            );
        }

        if( !defined( 'INFLUENCE_BLOG_PRO' ) && !class_exists( 'Influence_Blog_Pro' ) ) {

            $free_theme_css_m = array(
                '.single-layout1-bdy .single-title,
                .archive-bdy-d1 .widget-tt .l-title' => array(
                    'font-size' => esc_attr( $heading_H1_font_size_m . 'px' ),
                    'line-height' => esc_attr( $heading_H1_line_height_m ),
                    'letter-spacing' => esc_attr( $heading_H1_letter_spacing_m . 'px' ),
                ),
                '.banner-caption .m-title,
                .sub-cate' => array(
                    'font-size' => esc_attr( $heading_H3_font_size_m . 'px' ),
                    'line-height' => esc_attr( $heading_H3_line_height_m ),
                    'letter-spacing' => esc_attr( $heading_H3_letter_spacing_m . 'px' ),
                ),
                '.side-widget-d2 .author-detail .sm-title' => array(
                    'font-size' => esc_attr( $heading_H4_font_size_m . 'px' ),
                    'line-height' => esc_attr( $heading_H4_line_height_m ),
                    'letter-spacing' => esc_attr( $heading_H4_letter_spacing_m . 'px' ),
                ),
            );

            $output_css = array_merge(
                $output_css,
                $free_theme_css_m
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
