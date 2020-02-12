<?php
/**
 * Influence Blog customizer helper functions
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

function influence_blog_site_layout_style() {

    return ifb_get_mod( 'site_layout_style' );
}

function influence_blog_site_layout_container_style() {

    return ifb_get_mod( 'site_layout_container_style' );
}

/**
 * Function to reset date with respect to condition
 */
function influence_blog_customizer_reset_data() {

	if ( ifb_get_mod( 'reset_toggle' ) ) {

		remove_theme_mods();

		return;
	}
}
add_action( 'customize_save_after', 'influence_blog_customizer_reset_data' );
