<?php

/**
 * Customizer Section for Reset
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Reset Section
-----------------------------------------------------------------------------*/

$wp_customize->add_section( 'influence_blog_reset_section', array(
    'priority'     => 999,
    'title'        => esc_html__( 'Reset', 'influence-blog' ),
) );
