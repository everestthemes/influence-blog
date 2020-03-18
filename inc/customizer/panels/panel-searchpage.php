<?php

/**
 * Customizer Panel for Search Page
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Search Page Panel
-----------------------------------------------------------------------------*/

$wp_customize->add_panel( 'influence_blog_searchpage_settings_panel', array(
    'title'        => esc_html__( 'Search Page Settings', 'influence-blog' ),
    'priority'     => 50,
) );
