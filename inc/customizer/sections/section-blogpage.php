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

