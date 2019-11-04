<?php
/**
 * Collection of active callback functions for customizer fields.
 *
 * @package Influence_Blog
 */

/**
 * Active callback function for when top header is active.
 */
if( ! function_exists( 'influence_blog_active_top_header' ) ) {

	function influence_blog_active_top_header( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_display_top_header' )->value() == true ) {

			return true;
		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for when banner is active.
 */
if( ! function_exists( 'influence_blog_active_banner' ) ) {

	function influence_blog_active_banner( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_display_banner' )->value() == true ) {

			return true;
		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for when blog page grid three layout is active.
 */
if( ! function_exists( 'influence_blog_active_blog_page_grid_three_col_layout' ) ) {

	function influence_blog_active_blog_page_grid_three_col_layout( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_display_blog_page_grid_three_col_layout' )->value() == true ) {

			return true;
		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for when blog page pagination for is active.
 */
if( ! function_exists( 'influence_blog_active_blog_page_pagination' ) ) {

	function influence_blog_active_blog_page_pagination( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_display_blog_page_pagination' )->value() == true ) {

			return true;
		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for when blog page about info is active.
 */
if( ! function_exists( 'influence_blog_active_blog_page_about_info' ) ) {

	function influence_blog_active_blog_page_about_info( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_display_blog_page_about_info' )->value() == true ) {

			return true;
		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for when related posts section is active.
 */
if( ! function_exists( 'influence_blog_active_related_post_section' ) ) {

	function influence_blog_active_related_post_section( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_display_single_post_related_posts_section' )->value() == true ) {

			return true;
		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for when footer contact info is active.
 */
if( ! function_exists( 'influence_blog_active_footer_contact_info' ) ) {

	function influence_blog_active_footer_contact_info( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_display_footer_contact_info' )->value() == true ) {

			return true;
		} else {
			
			return false;
		}		
	}
}

