<?php

/**
 * Customizer Section for Banner
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Banner Section
-----------------------------------------------------------------------------*/

$panel = 'influence_blog_banner_settings_panel';

/*---------------------------------- Banner layout options -----------------------------------*/

$wp_customize->add_section( 'influence_blog_banner_layout_options_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Layout Options', 'influence-blog' ),
    'panel'        => $panel,
) );

/*---------------------------------- Banner content options -----------------------------------*/

$wp_customize->add_section( 'influence_blog_banner_content_options_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Content Options', 'influence-blog' ),
    'panel'        => $panel,
    'active_callback' => 'influence_blog_is_banner_display_enable',
) );

/*---------------------------------- Banner widget area -----------------------------------*/

$wp_customize->add_section( 'influence_blog_banner_widget_area_section', array(
    'priority'     => 100,
    'title'        => esc_html__( 'Widget Area', 'influence-blog' ),
    'panel'        => $panel,
    'active_callback' => 'influence_blog_is_banner_display_enable',
) );
