<?php

/**
 * Customizer Section for Archive Page
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Archive Page Section
-----------------------------------------------------------------------------*/

$panel = 'influence_blog_archivepage_settings_panel';

/*---------------------------------- Archive Page layout options section -----------------------------------*/

$wp_customize->add_section( 'influence_blog_archivepage_layout_options_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Layout Options', 'influence-blog' ),
    'panel'        => $panel,
) );

/*---------------------------------- Archive Page content options section -----------------------------------*/

$wp_customize->add_section( 'influence_blog_archivepage_content_options_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Content Options', 'influence-blog' ),
    'panel'        => $panel,
) );

