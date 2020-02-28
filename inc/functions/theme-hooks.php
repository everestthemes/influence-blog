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
 * Header search hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_search_action' ) ) :

 	function influence_blog_header_search_action() {

    ?>
    <div class="mobile-search search-icon">
        <button class="btn-style btn-search" type="button"><i class="fa fa-search"></i></button>
        <div id="header-search">
            <?php get_search_form(); ?>
        </div>
    </div>
    <?php
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

    ?>
    <div id="header" class="mastheader header header-layout1">
        <div class="container">
            <nav id="main_navigation" class="main_navigation">
                <?php
                $menu_args = array(
                    'theme_location' => 'menu-1',
                    'container' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'items_wrap' => influence_blog_main_navigation_wrap(),
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
                $menu_args = array(
                    'theme_location' => 'menu-1',
                    'container' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'items_wrap' => influence_blog_main_navigation_wrap(),
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
            <div class="row align-items-center">
                <div class=" col-12 col-md-12">
                    <button class="hamburger hamburger_nb" type="button"> <span class="hamburger_box"> <span class="hamburger_inner"></span> </span> </button>
                    <?php

                    $display_search_icon = true;

                    if( $display_search_icon == true ) {

                        /**
                        * Hook - influence_blog_header_search
                        *
                        * @hooked influence_blog_header_search_action - 75
                        */
                        do_action( 'influence_blog_header_search' );
                    }

                    /**
                    * Hook - influence_blog_header_main_navigation
                    *
                    * @hooked influence_blog_header_main_navigation_action - 80
                    */
                    do_action( 'influence_blog_header_main_navigation' );
                    ?>
                </div><!--col-md-12-->
            </div><!--row-->
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
 * Footer widget left hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_widget_left_action' ) ) :

 	function influence_blog_footer_widget_left_action() {

    ?>
    <div class="col-12 col-md-6 col-lg-4">
        <?php

        if( is_active_sidebar( 'influence-blog-footer-left' ) ) {

            dynamic_sidebar( 'influence-blog-footer-left' );
        }

        ?>
    </div>
    <?php
    }
endif;
add_action( 'influence_blog_footer_widget_left', 'influence_blog_footer_widget_left_action', 705 );



/**
 * Footer widget middle hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_widget_middle_action' ) ) :

 	function influence_blog_footer_widget_middle_action() {

    ?>
    <div class="col-12 col-md-6 col-lg-4">
        <?php

        if( is_active_sidebar( 'influence-blog-footer-middle' ) ) {

            dynamic_sidebar( 'influence-blog-footer-middle' );
        }

        ?>
    </div>
    <?php
    }
endif;
add_action( 'influence_blog_footer_widget_middle', 'influence_blog_footer_widget_middle_action', 710 );



/**
 * Footer widget right hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_widget_right_action' ) ) :

 	function influence_blog_footer_widget_right_action() {

    ?>
    <div class="col-12 col-md-6 col-lg-4">
        <?php

        if( is_active_sidebar( 'influence-blog-footer-right' ) ) {

            dynamic_sidebar( 'influence-blog-footer-right' );
        }

        ?>
    </div>
    <?php
    }
endif;
add_action( 'influence_blog_footer_widget_right', 'influence_blog_footer_widget_right_action', 715 );



/**
 * Footer contact info hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_footer_contact_info_action' ) ) :

 	function influence_blog_footer_contact_info_action() {

    ?>
    <div class="contact-info lrg-padding">
        <?php
        $footer_contact_info_title = ifb_get_mod( 'footer_contact_info_title', '' );

        if( !empty( $footer_contact_info_title ) ) {
            ?>
            <div class="side-tt">
                <h3 class="s-title"><?php echo esc_html( $footer_contact_info_title ); ?></h3>
            </div>
            <?php
        }

        $display_footer_contact_info_social_links = ifb_get_mod( 'display_footer_contact_info_social_links', false );

        if( $display_footer_contact_info_social_links == true ) {
            ?>
            <div class="social-media-foot">
                <ul>
                    <?php influence_blog_social_links_template( 'footer' ); ?>
                </ul>
            </div>
            <?php
        }

        $footer_contact_info_description = ifb_get_mod( 'footer_contact_info_description', '' );

        if( !empty( $footer_contact_info_description ) ) {
            ?>
            <div class="social-detail">
               <p><?php echo esc_html( $footer_contact_info_description ); ?></p>
            </div>
            <?php
        }
        ?>
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

    if( is_active_sidebar( 'influence-blog-footer-left' ) || is_active_sidebar( 'influence-blog-footer-middle' ) || is_active_sidebar( 'influence-blog-footer-right' ) ) {

        ?>
        <div class="container">
            <div class="foot-top-wrap lrg-padding">
                <div class="row">
                    <?php
                    /**
                    * Hook - influence_blog_footer_widget_left
                    *
                    * @hooked influence_blog_footer_widget_left_action - 705
                    */
                    do_action( 'influence_blog_footer_widget_left' );

                    /**
                    * Hook - influence_blog_footer_widget_middle
                    *
                    * @hooked influence_blog_footer_widget_middle_action - 710
                    */
                    do_action( 'influence_blog_footer_widget_middle' );

                    /**
                    * Hook - influence_blog_footer_widget_right
                    *
                    * @hooked influence_blog_footer_widget_right_action - 715
                    */
                    do_action( 'influence_blog_footer_widget_right' );
                    ?>
                </div><!--row-->
            </div>
        </div>
        <?php
        }
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
            <?php
            /**
            * Hook - influence_blog_footer_copyright_text
            *
            * @hooked influence_blog_footer_copyright_text_action - 905
            */
            do_action( 'influence_blog_footer_copyright_text' );
            ?>
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

        ?>
        <div class="foot-top-sec">
        <?php

        /**
        * Hook - influence_blog_footer_top
        *
        * @hooked influence_blog_footer_top_action - 700
        */
        do_action( 'influence_blog_footer_top' );

        $display_footer_contact_info = ifb_get_mod( 'display_footer_contact_info', false );

        if( $display_footer_contact_info == true ) {

            /**
            * Hook - influence_blog_footer_middle
            *
            * @hooked influence_blog_footer_middle_action - 800
            */
            do_action( 'influence_blog_footer_middle' );

        }

        ?>
        </div><!--foot-top-sec-->
        <?php

        /**
        * Hook - influence_blog_footer_bottom
        *
        * @hooked influence_blog_footer_bottom_action - 900
        */
        do_action( 'influence_blog_footer_bottom' );

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
