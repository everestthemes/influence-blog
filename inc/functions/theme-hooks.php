<?php
/**
 * Custom hooks for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/**
 * Header top navigation hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_top_navigation_action' ) ) :

 	function influence_blog_header_top_navigation_action() {

        $header_one_layout_one_menu_select = influence_blog_get_mod( 'header_one_layout_one_menu_select' );

        ?>
        <div class="top-bar-menu">
            <?php
            wp_nav_menu( array(
                'theme_location' 	=> $header_one_layout_one_menu_select,
                'container'			=> '',
                'depth'             => 1,
                'fallback_cb'       => 'influence_blog_navigation_fallback',
             ) );
            ?>
        </div><!--//top-bar-menu -->
        <?php
    }
endif;
add_action( 'influence_blog_header_top_navigation', 'influence_blog_header_top_navigation_action', 35 );


/**
 * Header social links hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_social_links_action' ) ) :

 	function influence_blog_header_social_links_action() {

    ?>
    <ul class="top-social-icon">
        <?php
        $social_links = get_theme_mod( 'influence_blog_header_one_layout_one_social_links' );
        $social_links = json_decode( $social_links );

        if( !empty( $social_links ) ) {

            $new_tab = influence_blog_get_mod( 'header_one_layout_one_social_links_tab_toggle' );

            $target_attr = '_self';

            if( $new_tab == true ) {

                $target_attr = '_blank';

            }

            foreach( $social_links as $social ) {

                $link = $social->link;
                $icon = $social->icon_value;

                if( empty( $link ) ) {

                    $link = '#';
                }

                if( !empty( $icon ) ) {
                    ?>
                    <li>
                        <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $target_attr ); ?>">
                           <i class="fa <?php echo esc_attr( $icon ); ?>"></i>
                        </a>
                    </li>
                    <?php
                }
            }
        }
        ?>
    </ul><!--//top-social-icon-->
    <?php
    }
endif;
add_action( 'influence_blog_header_social_links', 'influence_blog_header_social_links_action', 40 );



/**
 * Header logo hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_logo_action' ) ) :

 	function influence_blog_header_logo_action() {

        ?>
        <div class="logo-sec">
            <?php

            the_custom_logo();
            if( is_home() || is_front_page() ) {

                ?>
                <h1>
                    <span class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    </span>
                </h1>
                <?php

            } else {

                ?>
                <span class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </span>
                <?php
            }

            $influence_blog_description = get_bloginfo( 'description', 'display' );

            if ( $influence_blog_description || is_customize_preview() ) :

            ?>
            <p class="site-description"><?php echo esc_html( $influence_blog_description ); /* WPCS: xss ok. */ ?></p>
            <?php

            endif;
            ?>
        </div>
    <?php
    }
endif;
add_action( 'influence_blog_header_logo', 'influence_blog_header_logo_action', 55 );



/**
 * Header advertisement hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_advertisement_action' ) ) :

 	function influence_blog_header_advertisement_action() {

        $ads_image = influence_blog_get_mod( 'header_two_ads_upload_image' );

        $ads_image_id_src[0] = $rel_tag = '';

        $tab_class = '_self';

        if( !empty( $ads_image ) ) {

            $ads_image_id = attachment_url_to_postid( $ads_image );

            $ads_image_id_src = wp_get_attachment_image_src( $ads_image_id, 'full' );

            $ads_link = influence_blog_get_mod( 'header_two_ads_link' );

            $ads_link_tab = influence_blog_get_mod( 'header_two_ads_links_tab_toggle' );

            if( $ads_link_tab == true ) {

                $tab_class = '_blank';
            }

            $ads_link_rel = influence_blog_get_mod( 'header_two_ads_link_rel' );

            if( !empty( $ads_link_rel ) ) {

                $rel_tag = 'rel=' . $ads_link_rel;
            }

            ?>
            <div class="side-img">
                <a href="<?php echo esc_url( $ads_link ); ?>" <?php echo esc_attr( $rel_tag ); ?> target="<?php echo esc_attr( $tab_class ); ?>">
                    <img src="<?php echo esc_url( $ads_image_id_src[0] ); ?>">
                </a>
            </div>
            <?php
        }
    }
endif;
add_action( 'influence_blog_header_advertisement', 'influence_blog_header_advertisement_action', 60 );



/**
 * Header menu icon hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_menu_icon_action' ) ) :

 	function influence_blog_header_menu_icon_action() {

        $icon_col = influence_blog_get_mod( 'header_three_advance_menu_icon_col' );

        $col_class = influence_blog_col_value( $icon_col, 'md' );

        $tab_class = '_self';

        $menu_icon = influence_blog_get_mod( 'header_three_menu_icon_select' );

        $icon_link = influence_blog_get_mod( 'header_three_menu_icon_link' );

        $tab_class = influence_blog_get_mod( 'header_three_menu_icon_link_tab_toggle' );

        if( !empty( $menu_icon ) && !empty( $icon_link ) ) {
            ?>
            <div class="<?php echo esc_attr( $col_class ); ?>">
                <div class="home-icon">
                    <a href="<?php echo esc_url( $icon_link ); ?>" target="<?php echo esc_attr( $tab_class ); ?>">
                        <i class="<?php echo esc_attr( $menu_icon ); ?>"></i>
                    </a>
                </div>
            </div>
            <?php
        }
    }
endif;
add_action( 'influence_blog_header_menu_icon', 'influence_blog_header_menu_icon_action', 75 );


/**
 * Header search hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_search_action' ) ) :

 	function influence_blog_header_search_action() {

        $search_icon = influence_blog_get_mod( 'header_three_search_icon_select' );

        if( !empty( $search_icon ) ) {

            $search_col = influence_blog_get_mod( 'header_three_advance_search_icon_col' );

            $col_class = influence_blog_col_value( $search_col, 'md' );

            ?>
            <div class="<?php echo esc_attr( $col_class ); ?>">
                <div class="mobile-search search-icon">
                    <button class="btn-style btn-search" type="button"><i class="<?php echo esc_attr( $search_icon ); ?>"></i></button>
                    <div id="header-search">
                        <?php get_search_form(); ?>
                        <button class="search-form-close-btn"><i class="fa fa-close"></i></button>
                    </div>
                </div>
            </div><!--col-md-2-->
            <?php
        }
    }
endif;
add_action( 'influence_blog_header_search', 'influence_blog_header_search_action', 75 );



/**
 * Header main_navigation hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_main_navigation_action' ) ) :

 	function influence_blog_header_main_navigation_action() {

        $menu_col = influence_blog_get_mod( 'header_three_advance_menu_col' );

        $col_class = influence_blog_col_value( $menu_col, 'md' );

        ?>
        <div class="<?php echo esc_attr( $col_class ); ?>">
            <div id="header" class="mastheader header header-layout1">
                <div class="container">
                   <button class="hamburger hamburger_nb" type="button">
                        <span class="hamburger_box">
                            <span class="hamburger_inner"></span>
                        </span>
                    </button>
                    <nav id="main_navigation" class="main_navigation">
                        <?php

                        $header_three_menu_select = influence_blog_get_mod( 'header_three_menu_select' );

                        $menu_args = array(
                            'theme_location' => $header_three_menu_select,
                            'container' => '',
                            'menu_class' => '',
                            'menu_id' => '',
                            'fallback_cb' => 'influence_blog_navigation_fallback',
                        );
                        wp_nav_menu( $menu_args );
                        ?>
                    </nav>
                </div>
            </div>
        </div><!--col-md-9-->
        <?php
    }
endif;
add_action( 'influence_blog_header_main_navigation', 'influence_blog_header_main_navigation_action', 80 );



/**
 * Header top hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_top_action' ) ) :

 	function influence_blog_header_top_action() {

    ?>
    <div class="header-topbar-block">
        <div class="container">
            <div class="row">
                <?php

                $items     = influence_blog_arrange_header_one_layout_one_options();
                $defaults  = influence_blog_sortable_defaults( $items );
                $mod       = get_theme_mod( 'influence_blog_arrange_header_one_layout_one', $defaults );

                if( ! $mod ) return;

                $mod = explode( ',', $mod );

                $new = influence_blog_sortable_items_to_array( $mod, $items );

                influence_blog_sortable_items_ouput( $items, $new, $mod );

                ?>
            </div><!--//col-lg-6-->
        </div><!--//container-->
    </div><!--//topbar-block-->
    <?php
    }
endif;
add_action( 'influence_blog_header_top', 'influence_blog_header_top_action', 30 );



/**
 * Header middle hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_middle_action' ) ) :

 	function influence_blog_header_middle_action() {

    ?>
    <div class="header-top-block">
        <div class="container">
            <div class="row align-items-center">
                <?php

                $items     = influence_blog_arrange_header_two_layout_one_two_options();
                $defaults  = influence_blog_sortable_defaults( $items );
                $mod       = get_theme_mod( 'influence_blog_arrange_header_two_layout_one_two', $defaults );

                if( ! $mod ) return;

                $mod = explode( ',', $mod );

                $new = influence_blog_sortable_items_to_array( $mod, $items );

                influence_blog_sortable_items_ouput( $items, $new, $mod );

                ?>
            </div><!--//row-->
        </div><!--//container-->
    </div><!--header-top-block-->
    <?php
    }
endif;
add_action( 'influence_blog_header_middle', 'influence_blog_header_middle_action', 50 );



/**
 * Header bottom hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_bottom_action' ) ) :

 	function influence_blog_header_bottom_action() {

    ?>
    <div class="header-medium-block">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="row align-items-center">
                    <?php

                    $items     = influence_blog_arrange_header_three_options();
                    $defaults  = influence_blog_sortable_defaults( $items );
                    $mod       = get_theme_mod( 'influence_blog_arrange_header_three', $defaults );

                    if( ! $mod ) return;

                    $mod = explode( ',', $mod );

                    $new = influence_blog_sortable_items_to_array( $mod, $items );

                    influence_blog_sortable_items_ouput( $items, $new, $mod );

                    ?>
                </div><!--row-->
            </div>
        </div><!--container-->
    </div><!--header-medium-block-->
    <?php
    }
endif;
add_action( 'influence_blog_header_bottom', 'influence_blog_header_bottom_action', 70 );



/**
 * Header hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_action' ) ) :

 	function influence_blog_header_action() {

        $header_layout = influence_blog_get_mod( 'header_layout_options_select' );

        $header_layout = apply_filters( 'influence_blog_filter_header_layout', $header_layout );

        if( $header_layout == 'one' || $header_layout == 'two' ) {

            get_template_part( 'template-parts/header/header', $header_layout );
        }

        $header_layout = apply_filters( 'influence_blog_filter_header_template', $header_layout );
    }
endif;
add_action( 'influence_blog_header', 'influence_blog_header_action', 100 );



/**
 * Banner hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_banner_action' ) ) :

 	function influence_blog_banner_action() {

        $display_banner = influence_blog_get_mod( 'banner_display_toggle' );

        if( $display_banner == true ) {

            $banner_layout = influence_blog_get_mod( 'banner_layout_options_select' );

            if( $banner_layout == 'one' || $banner_layout == 'two' ) {

                get_template_part( 'template-parts/banner/banner', $banner_layout );
            }

            $banner_template = apply_filters( 'influence_blog_banner_layout_template', $banner_layout );

            /**
            * Hook - influence_blog_banner_widget_area
            *
            * @hooked influence_blog_banner_widget_area_action - 199
            */
            do_action( 'influence_blog_banner_widget_area' );
        }
    }
endif;
add_action( 'influence_blog_banner', 'influence_blog_banner_action', 200 );

/**
 * Blogpage hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_blogpage_action' ) ) :

 	function influence_blog_blogpage_action() {

        $display_section_one = influence_blog_get_mod( 'blogpage_section_one_display_toggle' );

        if( $display_section_one ) {

            /**
            * Hook - influence_blog_blogpage_section_one
            *
            * @hooked influence_blog_blogpage_section_one_action - 310
            */
            do_action( 'influence_blog_blogpage_section_one' );

            /**
            * Hook - influence_blog_blogpage_section_one_widget_area
            *
            * @hooked influence_blog_blogpage_section_one_widget_area_action - 299
            */
            do_action( 'influence_blog_blogpage_section_one_widget_area' );
        }
    }
endif;
add_action( 'influence_blog_blogpage', 'influence_blog_blogpage_action', 300 );

/**
 * Blogpage section one hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_blogpage_section_one_action' ) ) :

 	function influence_blog_blogpage_section_one_action() {

        $sidebar_col = influence_blog_get_mod( 'blogpage_section_one_sidebar_col' );

        $sidebar_position = influence_blog_get_mod( 'blogpage_section_one_sidebar_position' );

        $sidebar_area = influence_blog_get_mod( 'blogpage_section_one_widget_area_select' );

        $content_col = influence_blog_get_mod( 'blogpage_section_one_content_col' );

        $sticky = apply_filters( 'influence_blog_section_one_sticky_status', false );

        ?>
        <div id="section-one" class="half-widget-area">
            <div class="half-widget-area-inner lrg-padding">
                <div class="container">
                    <div class="row">
                        <?php influence_blog_blogpage_get_sidebar( $sidebar_position, $sidebar_area, $sidebar_col, $sticky, 'left' ); ?>
                        <div class="<?php influence_blog_blogpage_container_class( $sidebar_position, $content_col, $sticky ); ?>">
                            <aside id="primary" class="primary-widget-area">
                                <?php

                                $section_one_layout = influence_blog_get_mod( 'blogpage_section_one_layout_select' );

                                if( $section_one_layout == 'one' || $section_one_layout == 'two' || $section_one_layout == 'three' ) {

                                    get_template_part( 'template-parts/section-one/layout/layout', $section_one_layout );
                                }

                                $section_one_template = apply_filters( 'influence_blog_section_one_layout_template', $section_one_layout );

                                ?>
                            </aside>
                        </div><!--//col-12 col-md-6 col-lg-9-->
                        <?php influence_blog_blogpage_get_sidebar( $sidebar_position, $sidebar_area, $sidebar_col, $sticky, 'right' ); ?>
                    </div><!--//row-->
                </div><!--//container-->
            </div><!--//half-widget-area-->
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_blogpage_section_one', 'influence_blog_blogpage_section_one_action', 310 );

/**
 * Footer first widget area hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_first_widget_area_action' ) ) :

 	function influence_blog_footer_first_widget_area_action() {

        $area_col = influence_blog_get_mod( 'footer_one_first_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = influence_blog_get_mod( 'footer_one_first_widget_area_select' );

            if( is_active_sidebar( $widget_area ) ) {

                dynamic_sidebar( $widget_area );
            }

            ?>
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_footer_first_widget_area', 'influence_blog_footer_first_widget_area_action', 705 );



/**
 * Footer second widget area hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_second_widget_area_action' ) ) :

 	function influence_blog_footer_second_widget_area_action() {

        $area_col = influence_blog_get_mod( 'footer_one_second_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = influence_blog_get_mod( 'footer_one_second_widget_area_select' );

            if( is_active_sidebar( $widget_area ) ) {

                dynamic_sidebar( $widget_area );
            }

            ?>
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_footer_second_widget_area', 'influence_blog_footer_second_widget_area_action', 707 );



/**
 * Footer third widget area hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_third_widget_area_action' ) ) :

 	function influence_blog_footer_third_widget_area_action() {

        $area_col = influence_blog_get_mod( 'footer_one_third_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = influence_blog_get_mod( 'footer_one_third_widget_area_select' );

            if( is_active_sidebar( $widget_area ) ) {

                dynamic_sidebar( $widget_area );
            }

            ?>
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_footer_third_widget_area', 'influence_blog_footer_third_widget_area_action', 709 );



/**
 * Footer fourth widget area hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_fourth_widget_area_action' ) ) :

 	function influence_blog_footer_fourth_widget_area_action() {

        $area_col = influence_blog_get_mod( 'footer_one_fourth_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = influence_blog_get_mod( 'footer_one_fourth_widget_area_select' );

            if( is_active_sidebar( $widget_area ) ) {

                dynamic_sidebar( $widget_area );
            }

            ?>
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_footer_fourth_widget_area', 'influence_blog_footer_fourth_widget_area_action', 711 );

/**
 * Footer fifth widget area hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_fifth_widget_area_action' ) ) :

 	function influence_blog_footer_fifth_widget_area_action() {

        $area_col = influence_blog_get_mod( 'footer_one_fifth_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = influence_blog_get_mod( 'footer_one_fifth_widget_area_select' );

            if( is_active_sidebar( $widget_area ) ) {

                dynamic_sidebar( $widget_area );
            }

            ?>
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_footer_fifth_widget_area', 'influence_blog_footer_fifth_widget_area_action', 713 );



/**
 * Footer sixth widget area hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_sixth_widget_area_action' ) ) :

 	function influence_blog_footer_sixth_widget_area_action() {

        $area_col = influence_blog_get_mod( 'footer_one_sixth_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = influence_blog_get_mod( 'footer_one_sixth_widget_area_select' );

            if( is_active_sidebar( $widget_area ) ) {

                dynamic_sidebar( $widget_area );
            }

            ?>
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_footer_sixth_widget_area', 'influence_blog_footer_sixth_widget_area_action', 715 );



/**
 * Footer middle title hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_middle_title_action' ) ) :

 	function influence_blog_footer_middle_title_action() {

        $title_col = influence_blog_get_mod( 'footer_two_title_col' );

        $col_class = influence_blog_col_value( $title_col, 'lg' );

        $title = influence_blog_get_mod( 'footer_two_title' );

        ?>
        <div class="foo-mid-title col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php
            if( !empty( $title ) ) {
                ?>
                <div class="side-tt">
                    <h3 class="s-title"><?php echo esc_html( $title ); ?></h3>
                </div>
                <?php
            }
            ?>
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_footer_middle_title', 'influence_blog_footer_middle_title_action', 805 );



/**
 * Footer middle social links hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_middle_social_links_action' ) ) :

 	function influence_blog_footer_middle_social_links_action() {

        $links_col = influence_blog_get_mod( 'footer_two_social_links_col' );

        $col_class = influence_blog_col_value( $links_col, 'lg' );

        ?>
        <div class="foo-mid-social col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <div class="social-media-foot">
                <ul>
                <?php

                $social_links = get_theme_mod( 'influence_blog_footer_two_social_links' );

                $social_links = json_decode( $social_links );

                if( !empty( $social_links ) ) {

                    $new_tab = influence_blog_get_mod( 'footer_two_social_links_tab_toggle' );

                    $target_attr = '_self';

                    if( $new_tab == true ) {

                        $target_attr = '_blank';

                    }

                    foreach( $social_links as $social ) {

                        $link = $social->link;
                        $icon = $social->icon_value;

                        if( empty( $link ) ) {

                            $link = '#';
                        }

                        if( !empty( $icon ) ) {
                            ?>
                            <li>
                                <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $target_attr ); ?>">
                                   <i class="fa <?php echo esc_attr( $icon ); ?>"></i>
                                </a>
                            </li>
                            <?php
                        }
                    }
                }
                ?>
                </ul>
            </div>
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_footer_middle_social_links', 'influence_blog_footer_middle_social_links_action', 810 );



/**
 * Footer middle widget area hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_middle_widget_area_action' ) ) :

 	function influence_blog_footer_middle_widget_area_action() {

        $area_col = influence_blog_get_mod( 'footer_two_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="foo-mid-wid col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <div class="social-detail">
                <div class="social-detail-bdy center">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <?php

                            $widget_area = influence_blog_get_mod( 'footer_two_widget_area_select' );

                            if( is_active_sidebar( $widget_area ) ) {

                                dynamic_sidebar( $widget_area );
                            }

                            ?>
                        </div><!--col-12 col-md-4-->
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_footer_middle_widget_area', 'influence_blog_footer_middle_widget_area_action', 815 );



/**
 * Footer copyright text hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_copyright_text_action' ) ) :

 	function influence_blog_footer_copyright_text_action() {

    ?>
    <div class="col-lg-6">
        <div class="copy center">
            <?php
            $footer_copyright_text = influence_blog_get_mod( 'footer_three_cr_text' );

            if( has_filter( 'influence_blog_filter_footer_three_cr_text' ) ) {

                $footer_copyright_text = apply_filters( 'influence_blog_filter_footer_three_cr_text', $footer_copyright_text );

            } else {

                if( !empty( $footer_copyright_text ) ) {

                    /* translators: 1: Copyright Text 2: Theme name, 3: Theme author. */
                    printf( esc_html__( '%1$s %2$s by %3$s','influence-blog' ), $footer_copyright_text, get_bloginfo( 'name' ), '<a href="'. esc_url( 'https://everestthemes.com' ) . '">' . esc_html__( 'Everestthemes', 'influence-blog' ) . '</a>' );

                } else {

                    /* translators: 1: Theme name, 2: Theme author. */
                    printf( esc_html__( '%1$s by %2$s', 'influence-blog' ), get_bloginfo( 'name' ), '<a href="'. esc_url( 'https://everestthemes.com' ) . '">' . esc_html__( 'Everestthemes', 'influence-blog' ) . '</a>' );
                }
            }
            ?>
        </div>
    </div>
    <?php
    }
endif;
add_action( 'influence_blog_footer_copyright_text', 'influence_blog_footer_copyright_text_action', 905 );



/**
 * Footer three menu hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_three_menu_action' ) ) :

 	function influence_blog_footer_three_menu_action() {

    ?>
    <div class="col-lg-6">
        <?php $footer_three_menu_select = influence_blog_get_mod( 'footer_three_menu_select' ); ?>
        <div class="foot-menu">
            <?php
            wp_nav_menu( array(
                'theme_location' 	=> $footer_three_menu_select,
                'container'			=> '',
                'depth'             => 1,
             ) );
            ?>
        </div>
    </div>
    <?php
    }
endif;
add_action( 'influence_blog_footer_three_menu', 'influence_blog_footer_three_menu_action', 910 );



/**
 * Footer scroll top hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_scroll_top_action' ) ) :

 	function influence_blog_footer_scroll_top_action() {

        ?>
        <a href="#" class="scrollup"><i class="fa fa-long-arrow-up"></i></a>
        <?php
    }
endif;
add_action( 'influence_blog_footer_scroll_top', 'influence_blog_footer_scroll_top_action', 910 );



/**
 * Footer top hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_top_action' ) ) :

 	function influence_blog_footer_top_action() {

        $footer_one_design_bg_image = influence_blog_get_mod( 'footer_one_design_bg_image' );
        $footer_one_widget_area_alignment = influence_blog_get_mod( 'footer_one_widget_area_alignment' );

        ?>
        <div class="foot-top-wrap"<?php influence_blog_has_image_url( $footer_one_design_bg_image ); ?>>
            <div class="container">
                <div class="foot-top-border lrg-padding">
                    <div class="row justify-content-<?php echo esc_attr( $footer_one_widget_area_alignment ); ?>">
                    <?php

                    $first_widget_area_toggle = influence_blog_get_mod( 'footer_one_first_widget_area_toggle' );

                    if( $first_widget_area_toggle ) {
                        /**
                        * Hook - influence_blog_footer_first_widget_area
                        *
                        * @hooked influence_blog_footer_first_widget_area_action - 705
                        */
                        do_action( 'influence_blog_footer_first_widget_area' );
                    }

                    $second_widget_area_toggle = influence_blog_get_mod( 'footer_one_second_widget_area_toggle' );

                    if( $second_widget_area_toggle ) {
                        /**
                        * Hook - influence_blog_footer_second_widget_area
                        *
                        * @hooked influence_blog_footer_second_widget_area_action - 707
                        */
                        do_action( 'influence_blog_footer_second_widget_area' );
                    }

                    $third_widget_area_toggle = influence_blog_get_mod( 'footer_one_third_widget_area_toggle' );

                    if( $third_widget_area_toggle ) {
                        /**
                        * Hook - influence_blog_footer_third_widget_area
                        *
                        * @hooked influence_blog_footer_third_widget_area_action - 709
                        */
                        do_action( 'influence_blog_footer_third_widget_area' );
                    }

                    $fourth_widget_area_toggle = influence_blog_get_mod( 'footer_one_fourth_widget_area_toggle' );

                    if( $fourth_widget_area_toggle ) {
                        /**
                        * Hook - influence_blog_footer_fourth_widget_area
                        *
                        * @hooked influence_blog_footer_fourth_widget_area_action - 711
                        */
                        do_action( 'influence_blog_footer_fourth_widget_area' );
                    }

                    $fifth_widget_area_toggle = influence_blog_get_mod( 'footer_one_fifth_widget_area_toggle' );

                    if( $fifth_widget_area_toggle ) {
                        /**
                        * Hook - influence_blog_footer_fifth_widget_area
                        *
                        * @hooked influence_blog_footer_fifth_widget_area_action - 713
                        */
                        do_action( 'influence_blog_footer_fifth_widget_area' );
                    }

                    $sixth_widget_area_toggle = influence_blog_get_mod( 'footer_one_sixth_widget_area_toggle' );

                    if( $sixth_widget_area_toggle ) {
                        /**
                        * Hook - influence_blog_footer_sixth_widget_area
                        *
                        * @hooked influence_blog_footer_sixth_widget_area_action - 715
                        */
                        do_action( 'influence_blog_footer_sixth_widget_area' );
                    }
                    ?>
                    </div><!--row-->
                </div>
            </div>
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_footer_top', 'influence_blog_footer_top_action', 700 );



/**
 * Footer middle hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_middle_action' ) ) :

 	function influence_blog_footer_middle_action() {

        $footer_two_design_bg_image = influence_blog_get_mod( 'footer_two_design_bg_image' );

        ?>
        <div class="footer-mid-sec center"<?php influence_blog_has_image_url( $footer_two_design_bg_image ); ?>>
            <div class="container">
                <div class="contact-info lrg-padding">
                    <div class="row">
                        <?php

                        $items     = influence_blog_arrange_footer_two_options();
                        $defaults  = influence_blog_sortable_defaults( $items );
                        $mod       = get_theme_mod( 'influence_blog_arrange_footer_two', $defaults );

                        if( ! $mod ) return;

                        $mod = explode( ',', $mod );

                        $new = influence_blog_sortable_items_to_array( $mod, $items );

                        influence_blog_sortable_items_ouput( $items, $new, $mod );
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
endif;
add_action( 'influence_blog_footer_middle', 'influence_blog_footer_middle_action', 800 );



/**
 * Footer bottom hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_bottom_action' ) ) :

 	function influence_blog_footer_bottom_action() {

    ?>
    <footer class="footer-bottom">
        <div class="container">
            <div class="row">
                <?php
                /**
                * Hook - influence_blog_footer_copyright_text
                *
                * @hooked influence_blog_footer_copyright_text_action - 905
                */
                do_action( 'influence_blog_footer_copyright_text' );

                /**
                * Hook - influence_blog_footer_three_menu
                *
                * @hooked influence_blog_footer_three_menu_action - 910
                */
                do_action( 'influence_blog_footer_three_menu' );
                ?>
            </div> 
        </div>
        <?php
        /**
        * Hook - influence_blog_footer_scroll_top
        *
        * @hooked influence_blog_footer_scroll_top_action - 910
        */
        do_action( 'influence_blog_footer_scroll_top' );
        ?>
    </footer>
    <?php
    }
endif;
add_action( 'influence_blog_footer_bottom', 'influence_blog_footer_bottom_action', 900 );



/**
 * Footer hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_action' ) ) :

 	function influence_blog_footer_action() {

        $items     = influence_blog_arrange_footer_options();
        $defaults  = influence_blog_sortable_defaults( $items );
        $mod       = get_theme_mod( 'influence_blog_arrange_footer', $defaults );

        if( ! $mod ) return;

        $mod = explode( ',', $mod );

        $new = influence_blog_sortable_items_to_array( $mod, $items );

        influence_blog_sortable_items_ouput( $items, $new, $mod );
    }
endif;
add_action( 'influence_blog_footer', 'influence_blog_footer_action', 999 );

/**
 * Pagination default template hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_pagination_default_template_action' ) ) :

 	function influence_blog_pagination_default_template_action() {

        $style = 'one';

        if( is_archive() ) {

            $style = influence_blog_get_mod( 'archivepage_content_options_pagination_style' );
        }

        if( is_search() ) {

            $style = influence_blog_get_mod( 'searchpage_content_options_pagination_style' );
        }

        ?>
        <div class="ifb-pagination">
        <?php

        switch( $style ) {

            case 'one':

                the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text' => esc_html__( 'Prev', 'influence-blog' ),
                    'next_text' => esc_html__( 'Next', 'influence-blog' ),
                ) );

                break;

            case 'two':

                the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text' => false,
                    'next_text' => false,
                ) );

                break;

            default:
                //code is poetry
        }
        ?>
        </div>
    <?php
    }
endif;
add_action( 'influence_blog_pagination_default_template', 'influence_blog_pagination_default_template_action', 510 );

/**
 * Header widget area hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_widget_area_action' ) ) :

 	function influence_blog_header_widget_area_action() {

        $display = influence_blog_get_mod( 'header_widget_area_display_toggle' );

        $area = influence_blog_get_mod( 'header_widget_area_select' );

        if( $display ) {

            if( is_active_sidebar( $area ) ) {

                ?>
                <div class="header-widget-area">
                    <?php dynamic_sidebar( $area ); ?>
                </div>
                <?php
            }
        }
    }
endif;
add_action( 'influence_blog_header_widget_area', 'influence_blog_header_widget_area_action', 99 );

/**
 * Banner widget area hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_banner_widget_area_action' ) ) :

 	function influence_blog_banner_widget_area_action() {

        $display = influence_blog_get_mod( 'banner_widget_area_display_toggle' );

        $area = influence_blog_get_mod( 'banner_widget_area_select' );

        if( $display ) {

            if( is_active_sidebar( $area ) ) {

                ?>
                <div class="banner-widget-area">
                    <?php dynamic_sidebar( $area ); ?>
                </div>
                <?php
            }
        }
    }
endif;
add_action( 'influence_blog_banner_widget_area', 'influence_blog_banner_widget_area_action', 199 );

/**
 * Blogpage section one widget area hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_blogpage_section_one_widget_area_action' ) ) :

 	function influence_blog_blogpage_section_one_widget_area_action() {

        $display = influence_blog_get_mod( 'blogpage_section_one_widget_area_below_display_toggle' );

        $area = influence_blog_get_mod( 'blogpage_section_one_widget_area_below_select' );

        if( $display ) {

            if( is_active_sidebar( $area ) ) {

                ?>
                <div class="blogpage-section-one-widget-area">
                    <?php dynamic_sidebar( $area ); ?>
                </div>
                <?php
            }
        }
    }
endif;
add_action( 'influence_blog_blogpage_section_one_widget_area', 'influence_blog_blogpage_section_one_widget_area_action', 299 );
