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

        $header_one_layout_one_menu_select = ifb_get_mod( 'header_one_layout_one_menu_select' );

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

            $new_tab = ifb_get_mod( 'header_one_layout_one_social_links_tab_toggle' );

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

            ?>
            <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
            <?php

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

        $ads_image = ifb_get_mod( 'header_two_ads_upload_image' );

        $ads_image_id_src[0] = $rel_tag = '';

        $tab_class = '_self';

        if( !empty( $ads_image ) ) {

            $ads_image_id = attachment_url_to_postid( $ads_image );

            $ads_image_id_src = wp_get_attachment_image_src( $ads_image_id, 'full' );

            $ads_link = ifb_get_mod( 'header_two_ads_link' );

            $ads_link_tab = ifb_get_mod( 'header_two_ads_links_tab_toggle' );

            if( $ads_link_tab == true ) {

                $tab_class = '_blank';
            }

            $ads_link_rel = ifb_get_mod( 'header_two_ads_link_rel' );

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

        $icon_col = ifb_get_mod( 'header_three_advance_menu_icon_col' );

        $col_class = influence_blog_col_value( $icon_col, 'md' );

        $tab_class = '_self';

        $menu_icon = ifb_get_mod( 'header_three_menu_icon_select' );

        $icon_link = ifb_get_mod( 'header_three_menu_icon_link' );

        $tab_class = ifb_get_mod( 'header_three_menu_icon_link_tab_toggle' );

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

        $search_icon = ifb_get_mod( 'header_three_search_icon_select' );

        if( !empty( $search_icon ) ) {

            $search_col = ifb_get_mod( 'header_three_advance_search_icon_col' );

            $col_class = influence_blog_col_value( $search_col, 'md' );

            ?>
            <div class="<?php echo esc_attr( $col_class ); ?>">
                <div class="mobile-search search-icon">
                    <button class="btn-style btn-search" type="button"><i class="<?php echo esc_attr( $search_icon ); ?>"></i></button>
                    <div id="header-search">
                        <?php get_search_form(); ?>
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

        $menu_col = ifb_get_mod( 'header_three_advance_menu_col' );

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

                        $header_three_menu_select = ifb_get_mod( 'header_three_menu_select' );

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
 * Header mobile navigation hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_mobile_navigation_action' ) ) :

 	function influence_blog_header_mobile_navigation_action() {

    ?>
    <div class="container">
        <div class="mobile-nav">
            <nav id="mobile_navigation" class="mobile_navigation">
                <?php

                $header_three_menu_select = ifb_get_mod( 'header_three_menu_select' );

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
    <?php
    }
endif;
add_action( 'influence_blog_header_mobile_navigation', 'influence_blog_header_mobile_navigation_action', 10 );



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

        /**
        * Hook - influence_blog_header_mobile_navigation
        *
        * @hooked influence_blog_header_mobile_navigation_action - 10
        */
        do_action( 'influence_blog_header_mobile_navigation' );

        $header_layout = ifb_get_mod( 'header_layout_options_select' );

        $header_layout = apply_filters( 'influence_blog_filter_header_layout', $header_layout );

        if( $header_layout == 'one' || $header_layout == 'two' ) {

            get_template_part( 'template-parts/header/header', $header_layout );
        }

        $header_layout = apply_filters( 'influence_blog_filter_header_template', $header_layout );
    }
endif;
add_action( 'influence_blog_header', 'influence_blog_header_action', 100 );



/**
 * Footer first widget area hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_first_widget_area_action' ) ) :

 	function influence_blog_footer_first_widget_area_action() {

        $area_col = ifb_get_mod( 'footer_one_first_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = ifb_get_mod( 'footer_one_first_widget_area_select' );

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

        $area_col = ifb_get_mod( 'footer_one_second_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = ifb_get_mod( 'footer_one_second_widget_area_select' );

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

        $area_col = ifb_get_mod( 'footer_one_third_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = ifb_get_mod( 'footer_one_third_widget_area_select' );

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

        $area_col = ifb_get_mod( 'footer_one_fourth_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = ifb_get_mod( 'footer_one_fourth_widget_area_select' );

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

        $area_col = ifb_get_mod( 'footer_one_fifth_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = ifb_get_mod( 'footer_one_fifth_widget_area_select' );

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

        $area_col = ifb_get_mod( 'footer_one_sixth_widget_area_col' );

        $col_class = influence_blog_col_value( $area_col, 'lg' );

        ?>
        <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
            <?php

            $widget_area = ifb_get_mod( 'footer_one_sixth_widget_area_select' );

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
 * Footer contact info hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_contact_info_action' ) ) :

 	function influence_blog_footer_contact_info_action() {

    ?>
    <div class="side-tt">
        <h3 class="s-title">Get in Touch</h3>
    </div>
    <div class="social-media-foot">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
    <div class="social-detail">
        <div class="social-detail-bdy center">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="popular-post">
                        <div class="side-tt">
                            <h3 class="s-title">Popular Post</h3>
                        </div>
                        <div class="popular-post-bdy">
                            <div class="img-holder">
                                <figure><img src="assets/images/post-fashion.jpg" alt="blog-img"></figure>
                            </div>
                            <div class="side-widget-bdy">
                                <h3><a href="#" tabindex="-1">Traveling is one of my passion</a></h3>
                            </div>
                        </div><!--popular-post-bdy-->
                    </div><!--popular-post-->
                </div><!--col-12 col-md-4-->
            </div>
        </div>
    </div>
    <?php
    }
endif;
add_action( 'influence_blog_footer_contact_info', 'influence_blog_footer_contact_info_action', 805 );



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
            $footer_copyright_text = ifb_get_mod( 'footer_copyright_text', '' );
            if( !empty( $footer_copyright_text ) ) {

                echo esc_html( $footer_copyright_text );
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( ' %1$s by %2$s','influence-blog' ), 'Influence Blog', '<a href="'. esc_url( 'https://everestthemes.com' ) . '">Everestthemes</a>' );
            } else {
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( '%1$s by %2$s', 'influence-blog' ), 'Influence Blog', '<a href="'. esc_url( 'https://everestthemes.com' ) . '">Everestthemes</a>' );
            }
            ?>
        </div>
    </div>
    <?php
    }
endif;
add_action( 'influence_blog_footer_copyright_text', 'influence_blog_footer_copyright_text_action', 905 );



/**
 * Footer scroll top hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_scroll_top_action' ) ) :

 	function influence_blog_footer_scroll_top_action() {

        $display_footer_scroll_top = ifb_get_mod( 'display_footer_scroll_top', false );

        if( $display_footer_scroll_top == true ) {

            ?>
            <a href="#" class="scrollup"><i class="fa fa-long-arrow-up"></i></a>
            <?php
        }
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

        $footer_one_design_bg_image = ifb_get_mod( 'footer_one_design_bg_image' );

        ?>
        <div class="foot-top-wrap"<?php influence_blog_has_image_url( $footer_one_design_bg_image ); ?>>
            <div class="container">
                <div class="foot-top-border lrg-padding">
                    <div class="row justify-content-center">
                    <?php

                    $first_widget_area_toggle = ifb_get_mod( 'footer_one_first_widget_area_toggle' );

                    if( $first_widget_area_toggle ) {
                        /**
                        * Hook - influence_blog_footer_first_widget_area
                        *
                        * @hooked influence_blog_footer_first_widget_area_action - 705
                        */
                        do_action( 'influence_blog_footer_first_widget_area' );
                    }

                    $second_widget_area_toggle = ifb_get_mod( 'footer_one_second_widget_area_toggle' );

                    if( $second_widget_area_toggle ) {
                        /**
                        * Hook - influence_blog_footer_second_widget_area
                        *
                        * @hooked influence_blog_footer_second_widget_area_action - 707
                        */
                        do_action( 'influence_blog_footer_second_widget_area' );
                    }

                    $third_widget_area_toggle = ifb_get_mod( 'footer_one_third_widget_area_toggle' );

                    if( $third_widget_area_toggle ) {
                        /**
                        * Hook - influence_blog_footer_third_widget_area
                        *
                        * @hooked influence_blog_footer_third_widget_area_action - 709
                        */
                        do_action( 'influence_blog_footer_third_widget_area' );
                    }

                    $fourth_widget_area_toggle = ifb_get_mod( 'footer_one_fourth_widget_area_toggle' );

                    if( $fourth_widget_area_toggle ) {
                        /**
                        * Hook - influence_blog_footer_fourth_widget_area
                        *
                        * @hooked influence_blog_footer_fourth_widget_area_action - 711
                        */
                        do_action( 'influence_blog_footer_fourth_widget_area' );
                    }

                    $fifth_widget_area_toggle = ifb_get_mod( 'footer_one_fifth_widget_area_toggle' );

                    if( $fifth_widget_area_toggle ) {
                        /**
                        * Hook - influence_blog_footer_fifth_widget_area
                        *
                        * @hooked influence_blog_footer_fifth_widget_area_action - 713
                        */
                        do_action( 'influence_blog_footer_fifth_widget_area' );
                    }

                    $sixth_widget_area_toggle = ifb_get_mod( 'footer_one_sixth_widget_area_toggle' );

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

    ?>
    <div class="footer-mid-sec center">
        <div class="container">
            <div class="contact-info lrg-padding">
                <?php
                /**
                * Hook - influence_blog_footer_contact_info
                *
                * @hooked influence_blog_footer_contact_info_action - 805
                */
                do_action( 'influence_blog_footer_contact_info' );
                ?>
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
                ?>
                <div class="col-lg-6">
                    <div class="foot-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                
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
 * Pagination loadmore template hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_pagination_loadmore_template_action' ) ) :

 	function influence_blog_pagination_loadmore_template_action() {

        ?>
        <div class="loadmore">
            <button class="load-more-btn"><?php esc_html_e( 'Load More', 'influence-blog' ); ?> <span class="load-more-icon"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i></span></button>
        </div>
        <?php

        /**
        * Hook - influence_blog_pagination_no_more_template
        *
        * @hooked influence_blog_pagination_no_more_template - 520
        */
        do_action( 'influence_blog_pagination_no_more_template' );
        ?>
        <script type="text/javascript">
            var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
            var page = 2;
            jQuery(function($) {

                $('.load_no_more').hide();

                $('body').on('click', '.loadmore', function() {
                    var data = {
                        'action': 'load_posts_by_ajax',
                        'page': page,
                        'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
                    };

                    $.post(ajaxurl, data, function(response) {
                        if(response != '') {
                            $('.ifb-home-posts').append(response);
                            page++;
                        } else {
                            $('.loadmore').hide();
                            $('.load_no_more').show();
                        }
                    });
                });
            });
        </script>
        <?php
    }
endif;
add_action( 'influence_blog_pagination_loadmore_template', 'influence_blog_pagination_loadmore_template_action', 500 );



/**
 * Pagination default template hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_pagination_default_template_action' ) ) :

 	function influence_blog_pagination_default_template_action() {

    ?>
    <div class="ifb-pagination">
    <?php

        the_posts_pagination( array(
            'mid_size' => 2,
        ) );
    ?>
    </div>
    <?php
    }
endif;
add_action( 'influence_blog_pagination_default_template', 'influence_blog_pagination_default_template_action', 510 );



/**
 * Pagination no more template hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_pagination_no_more_template_action' ) ) :

 	function influence_blog_pagination_no_more_template_action() {

    ?>
    <div class="load_no_more">
        <button class="no-more-to-load"><?php esc_html_e( 'Nothing More To Load', 'influence-blog' ); ?></button>
    </div>
    <?php
    }
endif;
add_action( 'influence_blog_pagination_no_more_template', 'influence_blog_pagination_no_more_template_action', 520 );
