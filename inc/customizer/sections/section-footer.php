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

/*---------------------------------- Arrange footer -----------------------------------*/

$wp_customize->add_section( 'influence_blog_arrange_footer_section', array(
    'priority'     => 10,
    'title'        => esc_html__( 'Arrange Footer', 'influence-blog' ),
    'panel'        => $panel,
) );

/*---------------------------------- Footer one -----------------------------------*/

$wp_customize->add_section( 'influence_blog_footer_one_section', array(
    'priority'     => 15,
    'title'        => esc_html__( 'Footer One', 'influence-blog' ),
    'panel'        => $panel,
) );

/*---------------------------------- Footer two -----------------------------------*/

$wp_customize->add_section( 'influence_blog_footer_two_section', array(
    'priority'     => 20,
    'title'        => esc_html__( 'Footer Two', 'influence-blog' ),
    'panel'        => $panel,
) );
