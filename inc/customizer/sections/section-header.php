<?php

/**
 * Customizer Section for Header
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Header Section
-----------------------------------------------------------------------------*/

$panel = 'influence_blog_header_settings_panel';

/*---------------------------------- Header -----------------------------------*/

$wp_customize->add_section( 'influence_blog_arrange_header_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Arrange Header', 'influence-blog' ),
    'panel'        => $panel,
) );
