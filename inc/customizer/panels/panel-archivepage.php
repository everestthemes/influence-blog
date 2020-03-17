<?php

/**
 * Customizer Panel for Archive Page
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Archive Page Panel
-----------------------------------------------------------------------------*/

$wp_customize->add_panel( 'influence_blog_archivepage_settings_panel', array(
    'title'        => esc_html__( 'Archive Page Settings', 'influence-blog' ),
    'priority'     => 50,
) );
