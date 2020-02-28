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

/*---------------------------------- Header one -----------------------------------*/

$wp_customize->add_section( 'influence_blog_header_one_section', array(
    'priority'     => 15,
    'title'        => esc_html__( 'Header One', 'influence-blog' ),
    'panel'        => $panel,
    'active_callback' => 'influence_blog_is_header_one',
) );

/*---------------------------------- Main Header -----------------------------------*/

$wp_customize->add_section( 'influence_blog_header_two_section', array(
    'priority'     => 20,
    'title'        => esc_html__( 'Main Header', 'influence-blog' ),
    'panel'        => $panel,
    'active_callback' => 'influence_blog_is_header_two',
) );

/*---------------------------------- Header two -----------------------------------*/

$wp_customize->add_section( 'influence_blog_header_three_section', array(
    'priority'     => 25,
    'title'        => esc_html__( 'Header Two', 'influence-blog' ),
    'panel'        => $panel,
) );
