<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_global_color_section';

/*-----------------------------------------------------------------------------
							 Color options
-----------------------------------------------------------------------------*/

/*---------------------------------- Theme color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_color_theme', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'color_theme' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_color_theme', array(
    'label'                    => esc_html__( 'Theme Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Text color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_color_text', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'color_text' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_color_text', array(
    'label'                    => esc_html__( 'Text Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 15,
) ) );

/*---------------------------------- Link color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_color_link', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'color_link' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_color_link', array(
    'label'                    => esc_html__( 'Link Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 20,
) ) );

/*---------------------------------- Link hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_color_link_hover', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'color_link_hover' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_color_link_hover', array(
    'label'                    => esc_html__( 'Link Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 25,
) ) );

/*---------------------------------- Site layout advance toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_reset_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'reset_toggle' ),
) );

$wp_customize->add_control( new Toggle_Two_Control ( $wp_customize, 'influence_blog_reset_toggle', array(
    'label'                    => esc_html__( 'Reset All Setting', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-two',
    'priority'                 => 95,
) ) );
