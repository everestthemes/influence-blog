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

/*---------------------------------- Header layout options -----------------------------------*/

$wp_customize->add_section( 'influence_blog_header_layout_options_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Layout Options', 'influence-blog' ),
    'panel'        => $panel,
) );

/*---------------------------------- Top header -----------------------------------*/

$wp_customize->add_section( 'influence_blog_top_header_section', array(
    'priority'     => 15,
    'title'        => esc_html__( 'Top Header', 'influence-blog' ),
    'panel'        => $panel,
) );

/*---------------------------------- Middle header -----------------------------------*/

$wp_customize->add_section( 'influence_blog_middle_header_section', array(
    'priority'     => 20,
    'title'        => esc_html__( 'Main Header', 'influence-blog' ),
    'panel'        => $panel,
) );

/*---------------------------------- Bottom header -----------------------------------*/

$wp_customize->add_section( 'influence_blog_bottom_header_section', array(
    'priority'     => 25,
    'title'        => esc_html__( 'Bottom Header', 'influence-blog' ),
    'panel'        => $panel,
) );
