<?php

/**
 * Customizer Section for Global
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Global Section
-----------------------------------------------------------------------------*/

$panel = 'influence_blog_global_settings_panel';

/*---------------------------------- Site layout -----------------------------------*/

$wp_customize->add_section( 'influence_blog_global_site_layout_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Site Layout', 'influence-blog' ),
    'panel'        => $panel,
) );

/*---------------------------------- Typography -----------------------------------*/

$wp_customize->add_section( 'influence_blog_global_typography_section', array(
    'priority'     => 15,
    'title'        => esc_html__( 'Typography', 'influence-blog' ),
    'panel'        => $panel,
) );

/*---------------------------------- Color -----------------------------------*/

$wp_customize->add_section( 'influence_blog_global_color_section', array(
    'priority'     => 20,
    'title'        => esc_html__( 'Color', 'influence-blog' ),
    'panel'        => $panel,
) );
