<?php

/**
 * Customizer Panel for Blog Page
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Blog Page Panel
-----------------------------------------------------------------------------*/

$wp_customize->add_panel( 'influence_blog_blogpage_settings_panel', array(
    'title'        => esc_html__( 'Blog Page Settings', 'influence-blog' ),
    'priority'     => 40,
) );
