<?php

/**
 * Customizer Section for Blog Page
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Blog Page Section
-----------------------------------------------------------------------------*/

$panel = 'influence_blog_blogpage_settings_panel';

/*---------------------------------- Blog Page section one -----------------------------------*/

$wp_customize->add_section( 'influence_blog_blogpage_section_one_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Section One Options', 'influence-blog' ),
    'panel'        => $panel,
) );

/*---------------------------------- Blog page widget area -----------------------------------*/

$wp_customize->add_section( 'influence_blog_blogpage_section_one_widget_area_section', array(
    'priority'     => 15,
    'title'        => esc_html__( 'Widget Area', 'influence-blog' ),
    'panel'        => $panel,
    'active_callback' => 'influence_blog_is_blogpage_section_one_display_enable',
) );
