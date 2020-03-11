<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( !function_exists( 'influence_blog_dynamic_default_style' ) ) {
    /*
    * Functions for dynamic default styles
    */
    function influence_blog_dynamic_default_style() {

        global $pagenow;

        $dynamic_css = '';

        $output_css = array();

        $parse_css = '';

        /*-----------------------------------------------------------------------------
							 Header Three Options
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Design Section -----------------------------------*/

        $header_three_design_sub_menu_color = ifb_get_mod( 'header_three_design_sub_menu_color' );
        $header_three_design_sub_menu_hover_color = ifb_get_mod( 'header_three_design_sub_menu_hover_color' );
        $header_three_design_sub_menu_bg_color = ifb_get_mod( 'header_three_design_sub_menu_bg_color' );
        $header_three_design_main_menu_bg_color = ifb_get_mod( 'header_three_design_main_menu_bg_color' );
        $typo_header_three_design_main_menu_font_weight = influence_blog_get_font_data( 'typo_header_three_design_main_menu_font', 'fontweight' );

        $header_three_design_css = array(
            '.main_navigation ul li.menu-item-has-children .sub-menu li.menu-item-has-children>.sub-menu li a' => array(
                'color' => esc_attr( $header_three_design_sub_menu_color ),
            ),
            '.main_navigation ul li.menu-item-has-children .sub-menu li.menu-item-has-children>.sub-menu li a:hover' => array(
                'color' => esc_attr( $header_three_design_sub_menu_hover_color ),
            ),
            '.main_navigation ul li.menu-item-has-children .sub-menu li.menu-item-has-children>.sub-menu li a, .main_navigation ul li.current_page_item a:hover, .main_navigation ul li.menu-item-has-children:hover .sub-menu li a' => array(
                'background-color' => esc_attr( $header_three_design_sub_menu_bg_color ),
            ),
            '.menu-bg-wrap' => array(
                'background-color' => esc_attr( $header_three_design_main_menu_bg_color ),
            ),
            '.main_navigation ul li a, .header-layout1 .main_navigation ul li a' => array(
                'font-weight' => esc_attr( $typo_header_three_design_main_menu_font_weight ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $header_three_design_css );

        /*-----------------------------------------------------------------------------
							 Footer One
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Design Section -----------------------------------*/

        $footer_one_design_widget_content_color = ifb_get_mod( 'footer_one_design_widget_content_color' );
        $footer_one_design_widget_content_hover_color = ifb_get_mod( 'footer_one_design_widget_content_hover_color' );
        $footer_one_design_widget_content_bg_color = ifb_get_mod( 'footer_one_design_widget_content_bg_color' );
        $footer_one_design_widget_content_bg_hover_color = ifb_get_mod( 'footer_one_design_widget_content_bg_hover_color' );
        $footer_one_design_widget_content_border_color = ifb_get_mod( 'footer_one_design_widget_content_border_color' );
        $footer_one_design_widget_content_button_color = ifb_get_mod( 'footer_one_design_widget_content_button_color' );
        $footer_one_design_widget_content_button_hover_color = ifb_get_mod( 'footer_one_design_widget_content_button_hover_color' );

        $footer_one_design_css = array(
            '.foot-top-wrap select.postform,
            .foot-top-wrap .widget_archive>ul>li,
            .foot-top-wrap .widget_archive>ul>li a,
            .foot-top-wrap #wp-calendar tr th,
            .foot-top-wrap #wp-calendar tr td,
            .foot-top-wrap #wp-calendar caption,
            .foot-top-wrap .widget_categories>ul>li,
            .foot-top-wrap .widget_categories>ul>li a,
            .foot-top-wrap .widget_pages>ul>li,
            .foot-top-wrap .widget_nav_menu .menu>li,
            .foot-top-wrap .widget_nav_menu .menu>li a,
            .foot-top-wrap .widget_nav_menu .menu>li .sub-menu li a,
            .foot-top-wrap .widget_pages>ul>li a,
            .foot-top-wrap .widget_rss>ul>li a,
            .foot-top-wrap .rssSummary,
            .foot-top-wrap .widget_rss>ul>li cite,
            .foot-top-wrap .recentcomments:before,
            .foot-top-wrap .widget_search .search-form .search-submit,
            .foot-top-wrap .form-submit .submit,
            .foot-top-wrap .widget_search .search-form #submit,
            .foot-top-wrap .widget_text .textwidget p,
            .foot-top-wrap .widget_text .textwidget a,
            .foot-top-wrap .widget_tag_cloud .tagcloud,
            .foot-top-wrap .widget_tag_cloud .tagcloud a
            ' => array(
                'color' => esc_attr( $footer_one_design_widget_content_color ),
            ),
            '.foot-top-wrap .widget_search .search-form .search-submit:hover,
            .foot-top-wrap .form-submit .submit:hover
            '=> array(
                'color'=> esc_attr( $footer_one_design_widget_content_hover_color ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $footer_one_design_css );

        /*-----------------------------------------------------------------------------
							 Footer Two
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Design Section -----------------------------------*/

        $footer_two_design_widget_content_color = ifb_get_mod( 'footer_two_design_widget_content_color' );
        $footer_two_design_widget_content_hover_color = ifb_get_mod( 'footer_two_design_widget_content_hover_color' );
        $footer_two_design_widget_content_bg_color = ifb_get_mod( 'footer_two_design_widget_content_bg_color' );
        $footer_two_design_widget_content_bg_hover_color = ifb_get_mod( 'footer_two_design_widget_content_bg_hover_color' );
        $footer_two_design_widget_content_border_color = ifb_get_mod( 'footer_two_design_widget_content_border_color' );
        $footer_two_design_widget_content_button_color = ifb_get_mod( 'footer_two_design_widget_content_button_color' );
        $footer_two_design_widget_content_button_hover_color = ifb_get_mod( 'footer_two_design_widget_content_button_hover_color' );

        $footer_two_design_css = array(
            '.classhere
            ' => array(
                'color' => esc_attr( $footer_two_design_widget_content_color ),
            ),
            '.classhere
            '=> array(
                'color'=> esc_attr( $footer_two_design_widget_content_hover_color ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $footer_two_design_css );

        /*---------------------------------- Advance Section -----------------------------------*/

        $footer_two_advance_toggle = ifb_get_mod( 'footer_two_advance_toggle' );

        if( $footer_two_advance_toggle ) {

            $footer_two_title_advance_d_m_top = ifb_get_mod( 'footer_two_title_advance_d_m_top' );
            $footer_two_title_advance_d_m_right = ifb_get_mod( 'footer_two_title_advance_d_m_right' );
            $footer_two_title_advance_d_m_bottom = ifb_get_mod( 'footer_two_title_advance_d_m_bottom' );
            $footer_two_title_advance_d_m_left = ifb_get_mod( 'footer_two_title_advance_d_m_left' );

            $footer_two_title_advance_d_p_top = ifb_get_mod( 'footer_two_title_advance_d_p_top' );
            $footer_two_title_advance_d_p_right = ifb_get_mod( 'footer_two_title_advance_d_p_right' );
            $footer_two_title_advance_d_p_bottom = ifb_get_mod( 'footer_two_title_advance_d_p_bottom' );
            $footer_two_title_advance_d_p_left = ifb_get_mod( 'footer_two_title_advance_d_p_left' );
            $footer_two_title_advance_border = ifb_get_mod( 'footer_two_title_advance_border' );

            $footer_two_social_links_advance_d_m_top = ifb_get_mod( 'footer_two_social_links_advance_d_m_top' );
            $footer_two_social_links_advance_d_m_right = ifb_get_mod( 'footer_two_social_links_advance_d_m_right' );
            $footer_two_social_links_advance_d_m_bottom = ifb_get_mod( 'footer_two_social_links_advance_d_m_bottom' );
            $footer_two_social_links_advance_d_m_left = ifb_get_mod( 'footer_two_social_links_advance_d_m_left' );

            $footer_two_social_links_advance_d_p_top = ifb_get_mod( 'footer_two_social_links_advance_d_p_top' );
            $footer_two_social_links_advance_d_p_right = ifb_get_mod( 'footer_two_social_links_advance_d_p_right' );
            $footer_two_social_links_advance_d_p_bottom = ifb_get_mod( 'footer_two_social_links_advance_d_p_bottom' );
            $footer_two_social_links_advance_d_p_left = ifb_get_mod( 'footer_two_social_links_advance_d_p_left' );

            $footer_two_advance_css = array(
                '.footer-mid-sec .contact-info .foo-mid-title .s-title' => array(
                    'margin-top' => esc_attr( $footer_two_title_advance_d_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_title_advance_d_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_title_advance_d_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_title_advance_d_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_two_title_advance_d_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_title_advance_d_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_title_advance_d_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_title_advance_d_p_left . 'px' ),
                    'border-bottom-width' => esc_attr( $footer_two_title_advance_border . 'px' ),
                ),
                '.footer-mid-sec .social-media-foot' => array(
                    'margin-top' => esc_attr( $footer_two_social_links_advance_d_m_top . 'px' ),
                    'margin-right' => esc_attr( $footer_two_social_links_advance_d_m_right . 'px' ),
                    'margin-bottom' => esc_attr( $footer_two_social_links_advance_d_m_bottom . 'px' ),
                    'margin-left' => esc_attr( $footer_two_social_links_advance_d_m_left . 'px' ),
                    'padding-top' => esc_attr( $footer_two_social_links_advance_d_p_top . 'px' ),
                    'padding-right' => esc_attr( $footer_two_social_links_advance_d_p_right . 'px' ),
                    'padding-bottom' => esc_attr( $footer_two_social_links_advance_d_p_bottom . 'px' ),
                    'padding-left' => esc_attr( $footer_two_social_links_advance_d_p_left . 'px' ),
                ),
            );

            $parse_css .= influence_blog_parse_css( $footer_two_advance_css );
        }

        $dynamic_css = $parse_css;

        // trim white space for faster page loading.
        $dynamic_css = influence_blog_trim_css( $dynamic_css );

        return apply_filters( 'influence_blog_filter_dynamic_default_style', $dynamic_css );
    }
}
