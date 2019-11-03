<?php
/**
 * Custom hooks for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Influence_Blog
 */ 


/**
 * Header top navigation hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_header_top_navigation_action' ) ) :

 	function influence_blog_header_top_navigation_action() {
        
    ?>
    <div class="top-bar-menu">
        <?php
        wp_nav_menu( array( 
            'theme_location' 	=> 'menu-2',
            'container'			=> '',
            'depth'             => 1,
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
        <?php influence_blog_social_links_template( 'header' ); ?>
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
        
    ?>
    <div class="side-img">
        <?php
        
        if( is_active_sidebar( 'influence-blog-header-advertisement' ) ) {

            dynamic_sidebar( 'influence-blog-header-advertisement' );
        }
        
        ?>
    </div>
    <?php
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
                <div class="col-12 col-md-6">
                    <?php
        
                    $display_top_header_menu = ifb_mod( 'display_top_header_menu', true );
        
                    if( $display_top_header_menu == true ) {
                        
                        /**
                        * Hook - influence_blog_header_top_navigation
                        *
                        * @hooked influence_blog_header_top_navigation_action - 35
                        */
                        do_action( 'influence_blog_header_top_navigation' );
                    }
                    ?>
                </div><!--//col-12 col-md-6-->
                <div class="col-12 col-md-6">
                    <?php
        
                    $display_top_header_social_links = ifb_mod( 'display_top_header_social_links', true );
        
                    if( $display_top_header_social_links == true ) {
                        
                        /**
                        * Hook - influence_blog_header_social_links
                        *
                        * @hooked influence_blog_header_social_links_action - 40
                        */
                        do_action( 'influence_blog_header_social_links' );
                    }
                    ?>
                </div><!--//col-12 col-md-6-->
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
                <div class="col-12 col-md-4">
                    <?php
                    /**
                    * Hook - influence_blog_header_logo
                    *
                    * @hooked influence_blog_header_logo_action - 55
                    */
                    do_action( 'influence_blog_header_logo' );
                    ?>
                </div><!--//col-md-4-->
                <div class="col-12 col-md-8">
                    <?php
                    /**
                    * Hook - influence_blog_header_advertisement
                    *
                    * @hooked influence_blog_header_advertisement_action - 60
                    */
                    do_action( 'influence_blog_header_advertisement' );
                    ?>
                </div><!--//col-md-4-->
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
        
                    $display_search_icon = ifb_mod( 'display_search_icon', true );
        
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
        
        ?>
        <header id="header1" class="header header-layout1">
        <?php
        
        $display_top_header = ifb_mod( 'display_top_header', true );
        
        if( $display_top_header == true ) {
            
            /**
            * Hook - influence_blog_header_top
            *
            * @hooked influence_blog_header_top_action - 30
            */
            do_action( 'influence_blog_header_top' );
            
        }
        
        /**
        * Hook - influence_blog_header_middle
        *
        * @hooked influence_blog_header_middle_action - 50
        */
        do_action( 'influence_blog_header_middle' );
        
        /**
        * Hook - influence_blog_header_bottom
        *
        * @hooked influence_blog_header_bottom_action - 70
        */
        do_action( 'influence_blog_header_bottom' );
        
        ?>
        </header>
        <?php
                
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
        $footer_contact_info_title = ifb_mod( 'footer_contact_info_title', 'Get In Touch' );
        
        if( !empty( $footer_contact_info_title ) ) {
            ?>
            <div class="side-tt">
                <h3 class="s-title"><?php echo esc_html( $footer_contact_info_title ); ?></h3>
            </div>
            <?php
        }
        
        $display_footer_contact_info_social_links = ifb_mod( 'display_footer_contact_info_social_links', true );
        
        if( $display_footer_contact_info_social_links == true ) {
            ?>
            <div class="social-media-foot">
                <ul>
                    <?php influence_blog_social_links_template( 'footer' ); ?>
                </ul>
            </div>
            <?php
        }
        
        $footer_contact_info_description = ifb_mod( 'footer_contact_info_description', '' );
        
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
        $footer_copyright_text = ifb_mod( 'footer_copyright_text', '' );
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

        $display_footer_scroll_top = ifb_mod( 'display_footer_scroll_top', true );

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
        
        $display_footer_contact_info = ifb_mod( 'display_footer_contact_info', true );
        
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

