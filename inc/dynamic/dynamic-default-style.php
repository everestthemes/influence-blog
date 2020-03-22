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

        $header_three_design_sub_menu_color = influence_blog_get_mod( 'header_three_design_sub_menu_color' );
        $header_three_design_sub_menu_hover_color = influence_blog_get_mod( 'header_three_design_sub_menu_hover_color' );
        $header_three_design_sub_menu_bg_color = influence_blog_get_mod( 'header_three_design_sub_menu_bg_color' );
        $header_three_design_main_menu_bg_color = influence_blog_get_mod( 'header_three_design_main_menu_bg_color' );
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

        $footer_one_design_widget_content_color = influence_blog_get_mod( 'footer_one_design_widget_content_color' );
        $footer_one_design_widget_content_hover_color = influence_blog_get_mod( 'footer_one_design_widget_content_hover_color' );
        $footer_one_design_widget_content_bg_color = influence_blog_get_mod( 'footer_one_design_widget_content_bg_color' );
        $footer_one_design_widget_content_bg_hover_color = influence_blog_get_mod( 'footer_one_design_widget_content_bg_hover_color' );
        $footer_one_design_widget_content_border_color = influence_blog_get_mod( 'footer_one_design_widget_content_border_color' );

        $footer_one_design_css = array(
            '.foot-top-wrap .widget_archive>ul>li a,
            .foot-top-wrap .widget_archive>ul>li,
            .foot-top-wrap .calendar_wrap tr th,
            .foot-top-wrap .calendar_wrap tr td,
            .foot-top-wrap .calendar_wrap caption,
            .foot-top-wrap .calendar_wrap tr td a,
            .foot-top-wrap .widget_pages>ul>li,
            .foot-top-wrap .widget_nav_menu .menu>li,
            .foot-top-wrap .widget_nav_menu .menu>li a,
            .foot-top-wrap .widget_nav_menu .menu>li .sub-menu li a,
            .foot-top-wrap .widget_pages>ul>li a,
            .foot-top-wrap .widget_rss>ul>li a,
            .foot-top-wrap .rssSummary,
            .foot-top-wrap .widget_rss>ul>li cite,
            .foot-top-wrap .widget_rss>ul>li .rss-date,
            .foot-top-wrap .recentcomments,
            .foot-top-wrap .recentcomments .comment-author-link,
            .foot-top-wrap .widget_search .search-form .search-submit,
            .foot-top-wrap .form-submit .submit,
            .foot-top-wrap .widget_search .search-form #submit,
            .foot-top-wrap .widget_text .textwidget p,
            .foot-top-wrap .widget_text .textwidget a,
            .foot-top-wrap .widget_tag_cloud .tagcloud a,
            .foot-top-wrap input[type="text"],
            .foot-top-wrap input[type="email"],
            .foot-top-wrap input[type="url"],
            .foot-top-wrap input[type="password"],
            .foot-top-wrap input[type="search"],
            .foot-top-wrap input[type="number"],
            .foot-top-wrap input[type="tel"],
            .foot-top-wrap input[type="range"],
            .foot-top-wrap input[type="date"],
            .foot-top-wrap input[type="month"],
            .foot-top-wrap input[type="week"],
            .foot-top-wrap input[type="time"],
            .foot-top-wrap input[type="datetime"],
            .foot-top-wrap input[type="datetime-local"],
            .foot-top-wrap input[type="color"],
            .foot-top-wrap textarea,
            .foot-top-wrap .textwidget p,
            .foot-top-wrap .widget_recent_entries .post-date,
            .foot-top-wrap .widget.widget_recent_comments li,
            .foot-top-wrap .textwidget,
            .foot-top-wrap .textwidget.custom-html-widget h4,
            .foot-top-wrap .widget .gallery-caption,
            .foot-top-wrap .calendar_wrap caption,
            .foot-top-wrap form.search-form input[type="search"],
            .foot-top-wrap .widget_product_search form input[type="search"],
            .foot-top-wrap .widget_pages ul li .sub-menu>li>.sub-menu li:before,
            .foot-top-wrap .widget_nav_menu ul li .sub-menu>li>.sub-menu li:before,
            .foot-top-wrap .widget select,
            .foot-top-wrap .post-categories li a,
            .foot-top-wrap .recent-cate-wrap .sm-title a,
            .foot-top-wrap .side-bar .sm-title a,
            .foot-top-wrap .author-wrap.style-one .side-widget-d2 .sm-title,
            .foot-top-wrap .author-wrap.style-one .side-widget-d2 .author-detail p,
            .foot-top-wrap .author-detail .sm-title,
            .foot-top-wrap .author-wrap .author-detail p,
            .foot-top-wrap .widget a, .foot-top-wrap .widget ul li a,
            .foot-top-wrap .widget_product_categories ul li,
            .foot-top-wrap .widget_categories ul li
            ' => array(
                'color' => esc_attr( $footer_one_design_widget_content_color ),
            ),
            '.foot-top-wrap .widget a:hover,
            .foot-top-wrap .widget ul li a:hover,
            .foot-top-wrap .widget_tag_cloud .tagcloud a:hover,
            .foot-top-wrap .recent-cate-wrap .sm-title a:hover,
            .foot-top-wrap .side-bar .sm-title a:hover
            '=> array(
                'color'=> esc_attr( $footer_one_design_widget_content_hover_color ),
            ),
            '.foot-top-wrap .widget_search .search-form .search-submit,
            .foot-top-wrap .form-submit .submit,
            .foot-top-wrap .widget_search .search-form #submit,
            .foot-top-wrap .widget_search .search-form .search-submit:hover,
            .foot-top-wrap .form-submit .submit:hover,
            .foot-top-wrap .post-categories li a,
            .foot-top-wrap .post-categories li a:before
            '=> array(
                'background-color'=> esc_attr( $footer_one_design_widget_content_bg_color ),
            ),
            '.foot-top-wrap .widget_tag_cloud .tagcloud a:hover
            '=> array(
                'background-color'=> esc_attr( $footer_one_design_widget_content_bg_hover_color ),
            ),
            '.foot-top-wrap .calendar_wrap table th,
            .foot-top-wrap .widget_tag_cloud .tagcloud a,
            .foot-top-wrap .widget_product_tag_cloud .tagcloud a,
            .foot-top-wrap .author-wrap.style-two .side-widget-d2 .img-holder,
            .foot-top-wrap .author-wrap.style-three .side-widget-d2 .img-holder
            '=> array(
                'border'=> esc_attr( '1px solid ' . $footer_one_design_widget_content_border_color ),
            ),
            '.foot-top-wrap .widget.widget_recent_entries li,
            .foot-top-wrap .widget.widget_recent_comments li,
            .foot-top-wrap .widget.widget_meta li,
            .foot-top-wrap .side-widget-d1
            '=> array(
                'border-bottom'=> esc_attr( '1px solid ' . $footer_one_design_widget_content_border_color ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $footer_one_design_css );

        /*-----------------------------------------------------------------------------
							 Footer Two
        -----------------------------------------------------------------------------*/

        /*---------------------------------- Design Section -----------------------------------*/

        $footer_two_design_widget_content_color = influence_blog_get_mod( 'footer_two_design_widget_content_color' );
        $footer_two_design_widget_content_hover_color = influence_blog_get_mod( 'footer_two_design_widget_content_hover_color' );
        $footer_two_design_widget_content_bg_color = influence_blog_get_mod( 'footer_two_design_widget_content_bg_color' );
        $footer_two_design_widget_content_bg_hover_color = influence_blog_get_mod( 'footer_two_design_widget_content_bg_hover_color' );
        $footer_two_design_widget_content_border_color = influence_blog_get_mod( 'footer_two_design_widget_content_border_color' );

        $footer_two_design_css = array(
            '.footer-mid-sec .widget_archive>ul>li a,
            .footer-mid-sec .widget_archive>ul>li,
            .footer-mid-sec .calendar_wrap tr th,
            .footer-mid-sec .calendar_wrap tr td,
            .footer-mid-sec .calendar_wrap caption,
            .footer-mid-sec .calendar_wrap tr td a,
            .footer-mid-sec .widget_pages>ul>li,
            .footer-mid-sec .widget_nav_menu .menu>li,
            .footer-mid-sec .widget_nav_menu .menu>li a,
            .footer-mid-sec .widget_nav_menu .menu>li .sub-menu li a,
            .footer-mid-sec .widget_pages>ul>li a,
            .footer-mid-sec .widget_rss>ul>li a,
            .footer-mid-sec .rssSummary,
            .footer-mid-sec .widget_rss>ul>li cite,
            .footer-mid-sec .widget_rss>ul>li .rss-date,
            .footer-mid-sec .recentcomments,
            .footer-mid-sec .recentcomments .comment-author-link,
            .footer-mid-sec .widget_search .search-form .search-submit,
            .footer-mid-sec .form-submit .submit,
            .footer-mid-sec .widget_search .search-form #submit,
            .footer-mid-sec .widget_text .textwidget p,
            .footer-mid-sec .widget_text .textwidget a,
            .footer-mid-sec .widget_tag_cloud .tagcloud a,
            .footer-mid-sec input[type="text"],
            .footer-mid-sec input[type="email"],
            .footer-mid-sec input[type="url"],
            .footer-mid-sec input[type="password"],
            .footer-mid-sec input[type="search"],
            .footer-mid-sec input[type="number"],
            .footer-mid-sec input[type="tel"],
            .footer-mid-sec input[type="range"],
            .footer-mid-sec input[type="date"],
            .footer-mid-sec input[type="month"],
            .footer-mid-sec input[type="week"],
            .footer-mid-sec input[type="time"],
            .footer-mid-sec input[type="datetime"],
            .footer-mid-sec input[type="datetime-local"],
            .footer-mid-sec input[type="color"],
            .footer-mid-sec textarea,
            .footer-mid-sec .textwidget p,
            .footer-mid-sec .widget_recent_entries .post-date,
            .footer-mid-sec .widget.widget_recent_comments li,
            .footer-mid-sec .textwidget,
            .footer-mid-sec .textwidget.custom-html-widget h4,
            .footer-mid-sec .widget .gallery-caption,
            .footer-mid-sec .calendar_wrap caption,
            .footer-mid-sec form.search-form input[type="search"],
            .footer-mid-sec .widget_product_search form input[type="search"],
            .footer-mid-sec .widget_pages ul li .sub-menu>li>.sub-menu li:before,
            .footer-mid-sec .widget_nav_menu ul li .sub-menu>li>.sub-menu li:before,
            .footer-mid-sec .widget select,
            .footer-mid-sec .side-bar .post-categories a,
            .footer-mid-sec .post-categories a,
            .footer-mid-sec .recent-cate-wrap .sm-title a,
            .footer-mid-sec .side-bar .sm-title a,
            .footer-mid-sec .author-wrap.style-one .side-widget-d2 .sm-title,
            .footer-mid-sec .author-wrap.style-one .side-widget-d2 .author-detail p,
            .footer-mid-sec .author-detail .sm-title,
            .footer-mid-sec .author-wrap .author-detail p,
            .footer-mid-sec .widget a, .widget ul li a,
            .footer-mid-sec .widget_product_categories ul li,
            .footer-mid-sec .widget_categories ul li
            ' => array(
                'color' => esc_attr( $footer_two_design_widget_content_color ),
            ),
            '.footer-mid-sec .widget a:hover,
            .footer-mid-sec .widget ul li a:hover,
            .footer-mid-sec .widget_tag_cloud .tagcloud a:hover,
            .footer-mid-sec .recent-cate-wrap .sm-title a:hover,
            .footer-mid-sec .side-bar .sm-title a:hover
            '=> array(
                'color'=> esc_attr( $footer_two_design_widget_content_hover_color ),
            ),
            '.footer-mid-sec .widget_search .search-form .search-submit,
            .footer-mid-sec .form-submit .submit,
            .footer-mid-sec .widget_search .search-form #submit,
            .footer-mid-sec .widget_search .search-form .search-submit:hover,
            .footer-mid-sec .form-submit .submit:hover,
            .footer-mid-sec .post-categories li a,
            .footer-mid-sec .post-categories li a:before,
            .footer-mid-sec .author-wrap.style-one .side-widget-d2
            '=> array(
                'background-color'=> esc_attr( $footer_two_design_widget_content_bg_color ),
            ),
            '.footer-mid-sec .widget_tag_cloud .tagcloud a:hover
            '=> array(
                'background-color'=> esc_attr( $footer_two_design_widget_content_bg_hover_color ),
            ),
            '.footer-mid-sec .calendar_wrap table th,
            .footer-mid-sec .widget_tag_cloud .tagcloud a,
            .footer-mid-sec .widget_product_tag_cloud .tagcloud a,
            .footer-mid-sec .author-wrap.style-two .side-widget-d2 .img-holder,
            .footer-mid-sec .author-wrap.style-three .side-widget-d2 .img-holder
            '=> array(
                'border'=> esc_attr( '1px solid ' . $footer_two_design_widget_content_border_color ),
            ),
            '.footer-mid-sec .widget.widget_recent_entries li,
            .footer-mid-sec .widget.widget_recent_comments li,
            .footer-mid-sec .widget.widget_meta li,
            .footer-mid-sec .side-widget-d1
            '=> array(
                'border-bottom'=> esc_attr( '1px solid ' . $footer_two_design_widget_content_border_color ),
            ),
        );

        $parse_css .= influence_blog_parse_css( $footer_two_design_css );

        /*---------------------------------- Advance Section -----------------------------------*/

        $footer_two_advance_toggle = influence_blog_get_mod( 'footer_two_advance_toggle' );

        if( $footer_two_advance_toggle ) {

            $footer_two_title_advance_d_m_top = influence_blog_get_mod( 'footer_two_title_advance_d_m_top' );
            $footer_two_title_advance_d_m_right = influence_blog_get_mod( 'footer_two_title_advance_d_m_right' );
            $footer_two_title_advance_d_m_bottom = influence_blog_get_mod( 'footer_two_title_advance_d_m_bottom' );
            $footer_two_title_advance_d_m_left = influence_blog_get_mod( 'footer_two_title_advance_d_m_left' );

            $footer_two_title_advance_d_p_top = influence_blog_get_mod( 'footer_two_title_advance_d_p_top' );
            $footer_two_title_advance_d_p_right = influence_blog_get_mod( 'footer_two_title_advance_d_p_right' );
            $footer_two_title_advance_d_p_bottom = influence_blog_get_mod( 'footer_two_title_advance_d_p_bottom' );
            $footer_two_title_advance_d_p_left = influence_blog_get_mod( 'footer_two_title_advance_d_p_left' );
            $footer_two_title_advance_border = influence_blog_get_mod( 'footer_two_title_advance_border' );

            $footer_two_social_links_advance_d_m_top = influence_blog_get_mod( 'footer_two_social_links_advance_d_m_top' );
            $footer_two_social_links_advance_d_m_right = influence_blog_get_mod( 'footer_two_social_links_advance_d_m_right' );
            $footer_two_social_links_advance_d_m_bottom = influence_blog_get_mod( 'footer_two_social_links_advance_d_m_bottom' );
            $footer_two_social_links_advance_d_m_left = influence_blog_get_mod( 'footer_two_social_links_advance_d_m_left' );

            $footer_two_social_links_advance_d_p_top = influence_blog_get_mod( 'footer_two_social_links_advance_d_p_top' );
            $footer_two_social_links_advance_d_p_right = influence_blog_get_mod( 'footer_two_social_links_advance_d_p_right' );
            $footer_two_social_links_advance_d_p_bottom = influence_blog_get_mod( 'footer_two_social_links_advance_d_p_bottom' );
            $footer_two_social_links_advance_d_p_left = influence_blog_get_mod( 'footer_two_social_links_advance_d_p_left' );

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
