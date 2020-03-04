<?php

/**
 * Customizer Panel for Footer
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Footer Panel
-----------------------------------------------------------------------------*/

$wp_customize->add_panel( 'influence_blog_footer_settings_panel', array(
    'title'        => esc_html__( 'Footer Settings', 'influence-blog' ),
    'priority'     => 30,
) );
