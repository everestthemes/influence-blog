<?php

/**
 * Customizer Section for Footer
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/*-----------------------------------------------------------------------------
							Footer Section
-----------------------------------------------------------------------------*/

$panel = 'influence_blog_footer_settings_panel';

/*---------------------------------- Footer layout options -----------------------------------*/

$wp_customize->add_section( 'influence_blog_footer_layout_options_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Layout Options', 'influence-blog' ),
    'panel'        => $panel,
) );
