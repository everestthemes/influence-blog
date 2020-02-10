<?php

/**
 * Customizer Panel for Global
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Global Panel
-----------------------------------------------------------------------------*/

$wp_customize->add_panel( 'influence_blog_global_settings_panel', array(
    'title'        => esc_html__( 'Global Settings', 'influence-blog' ),
    'priority'     => 10,
) );
