<?php

/**
 * Customizer Panel for Banner
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Banner Panel
-----------------------------------------------------------------------------*/

$wp_customize->add_panel( 'influence_blog_banner_settings_panel', array(
    'title'        => esc_html__( 'Banner Settings', 'influence-blog' ),
    'priority'     => 30,
) );
