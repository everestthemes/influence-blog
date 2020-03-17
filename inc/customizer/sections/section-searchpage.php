<?php

/**
 * Customizer Section for Search Page
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Search Page Section
-----------------------------------------------------------------------------*/

$panel = 'influence_blog_searchpage_settings_panel';

/*---------------------------------- Search Page layout options section -----------------------------------*/

$wp_customize->add_section( 'influence_blog_searchpage_layout_options_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Layout Options', 'influence-blog' ),
    'panel'        => $panel,
) );

/*---------------------------------- Search Page content options section -----------------------------------*/

$wp_customize->add_section( 'influence_blog_searchpage_content_options_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Content Options', 'influence-blog' ),
    'panel'        => $panel,
) );

