<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_footer_three_section';

$tabs     = influence_blog_tab_one_array();

$button_one_array = array(
    'influence_blog_footer_three_cr_text_heading' => array(),
    'influence_blog_footer_three_cr_text' => array(),
    'influence_blog_footer_three_menu_heading' => array(),
    'influence_blog_footer_three_menu_select' => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_footer_three_button_one_array', $button_one_array );

$button_two_array = array(
);

$button_two_array = apply_filters( 'influence_blog_filter_footer_three_button_two_array', $button_two_array );

$button_three_array = array(
);

$button_three_array = apply_filters( 'influence_blog_filter_footer_three_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Footer three options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_three_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_footer_three_tabs', array(
    'section'                  => $section,
    'tabs'                     => $tabs,
    'controls'                 => array(
        'button_one'           => $button_one_array,
        'button_two'           => $button_two_array,
        'button_three'         => $button_three_array,
    ),
    'priority'                 => 5,
) ) );

/*---------------------------------- Footer three copy right text heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_three_cr_text_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_three_cr_text_heading', array(
    'label'                    => esc_html__( 'Copy Right Text', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 20,
) ) );

/*---------------------------------- Footer three copy right text -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_three_cr_text', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'footer_three_cr_text' ),
) );

$wp_customize->add_control( 'influence_blog_footer_three_cr_text', array(
    'label'                    => esc_html__( 'Text', 'influence-blog' ),
	'section'				   => $section,
    'type'                     => 'text',
    'priority'                 => 25,
) );

/*---------------------------------- Footer three menu heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_three_menu_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_three_menu_heading', array(
    'label'                    => esc_html__( 'Menu Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 30,
) ) );

/*---------------------------------- Footer three menu select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_three_menu_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_three_menu_select' ),
) );

$wp_customize->add_control( 'influence_blog_footer_three_menu_select', array(
    'label'                    => esc_html__( 'Select Menu', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $menu_lists,
    'type'                     => 'select',
    'priority'                 => 35,
) );
