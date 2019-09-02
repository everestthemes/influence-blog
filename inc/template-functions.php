<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Influence_Blog
 */



/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function influence_blog_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'influence_blog_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function influence_blog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'influence_blog_pingback_header' );



/**
 * Selects banner template
 */
if( ! function_exists( 'influence_blog_banner_template' ) ) {
    
    function influence_blog_banner_template() {
        
        $display_banner = ifb_mod( 'display_banner', true );
        
        if( $display_banner == true ) {

            get_template_part( 'template-parts/banner/banner', 'one' );
            
        }
    
    }
}



/**
 * Selects post listing layout template
 */
if( ! function_exists( 'influence_blog_post_listing_layout_template' ) ) {
    
    function influence_blog_post_listing_layout_template() {
        
        get_template_part( 'template-parts/layout/layout', 'grid' );
    }
}



/**
 * Function to get post and page sidebar position.
 */
if( ! function_exists( 'influence_blog_single_sidebar_position' ) ) {

	function influence_blog_single_sidebar_position() {

		global $influence_blog_prefix;

		$sidebar_position_key = $influence_blog_prefix . '_sidebar_position';

		$single_sidebar_position = get_post_meta( get_the_ID(), $sidebar_position_key, true );

		return $single_sidebar_position;
	}
}



/**
 * Function to check position of sidebar.
 */
if( !function_exists( 'influence_blog_sidebar_position' ) ) {

    function influence_blog_sidebar_position() {

    	$sidebar_position = '';

        if( is_active_sidebar( 'influence-blog-sidebar' ) ) {

            if( !is_singular() ) {

                if( is_archive() ) {

                    $sidebar_position = ifb_mod( 'archive_page_sidebar_position', 'right' );
                } 

                if( is_search() ) {

                    $sidebar_position = ifb_mod( 'search_page_sidebar_position', 'right' );
                } 

                if( is_home() ) {

                    $sidebar_position = ifb_mod( 'blog_page_sidebar_position', 'right' );
                }
            } else {

                $sidebar_position = influence_blog_single_sidebar_position();
            }

            if( empty( $sidebar_position ) ) {

                $sidebar_position = 'right';
            }
        } else {

            $sidebar_position = 'none';
        }

    	return $sidebar_position;
    }
}



/**
 * Add custom class for main container containing posts.
 */
if( ! function_exists( 'influence_blog_main_container_class' ) ) {

	function influence_blog_main_container_class() {

		$container_class = '';
        
        $sidebar_position = influence_blog_sidebar_position();
        
		$sticky_enabled = ifb_mod( 'enable_sticky_sidebar', true );

		if( $sidebar_position == 'none' || !is_active_sidebar( 'influence-blog-sidebar' ) ) {
            
            $container_class = 'col-md-12 col-lg-12';
	
		} else {

			$container_class = 'col-12 col-md-6 col-lg-9';
		}

		if( $sticky_enabled == true && $sidebar_position != 'none' ) {

			$container_class .= ' sticky-portion';
		}

		echo esc_attr( $container_class );
	}
}



/**
 * Add custom class for sidebar.
 */
if( ! function_exists( 'influence_blog_sidebar_class' ) ) {

	function influence_blog_sidebar_class() {

		$sidebar_class = 'col-12 col-md-6 col-lg-3';
		$sticky_enabled = ifb_mod( 'enable_sticky_sidebar', true );

		if( $sticky_enabled == true ) {
			$sidebar_class .= ' sticky-portion';
		}
        
		echo esc_attr( $sidebar_class );
	}
}



if ( ! function_exists( 'influence_blog_has_image_url' ) ) :
	/*
	 * Prints style background image if post has thumbnail
	 */
	function influence_blog_has_image_url( $post_image_url ) {
        
        $bg_image_style = '';
		
		if( !empty( $post_image_url ) ) {
            
            $post_image_url = esc_url( $post_image_url );
            
            $bg_image_style = ' style="background-image: url(' . $post_image_url . ');"';
          
        } else {
            
            $bg_image_style = '';
        }
        
        echo $bg_image_style;
	}
endif;
