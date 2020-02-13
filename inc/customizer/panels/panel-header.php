<?php

/**
 * Customizer Panel for Header
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Header Panel
-----------------------------------------------------------------------------*/

$wp_customize->add_panel( 'influence_blog_header_settings_panel', array(
    'title'        => esc_html__( 'Header Settings', 'influence-blog' ),
    'priority'     => 20,
) );
