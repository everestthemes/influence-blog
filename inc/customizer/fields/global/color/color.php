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
    'transport' 			   => 'refresh',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'color_theme' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_color_theme', array(
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

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_color_text', array(
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

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_color_link', array(
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

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_color_link_hover', array(
    'label'                    => esc_html__( 'Link Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 25,
) ) );
