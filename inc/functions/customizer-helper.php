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
