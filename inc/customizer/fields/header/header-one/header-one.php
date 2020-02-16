<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_header_one_section';

$tabs     = influence_blog_tab_one_array();

$button_one_array = array(
    'influence_blog_arange_header_one_heading'              => array(),
    'influence_blog_arrange_header_one'                     => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_header_one_button_one_array', $button_one_array );

$button_two_array = array(
);

$button_two_array = apply_filters( 'influence_blog_filter_header_one_button_two_array', $button_two_array );

$button_three_array = array(

);

$button_three_array = apply_filters( 'influence_blog_filter_header_one_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Header one options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_one_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_header_one_tabs', array(
    'section'                  => $section,
    'tabs'                     => $tabs,
    'controls'                 => array(
        'button_one'           => $button_one_array,
        'button_two'           => $button_two_array,
        'button_three'         => $button_three_array,
    ),
    'priority'                 => 5,
) ) );

/*-----------------------------------------------------------------------------
							 General options
-----------------------------------------------------------------------------*/

/*---------------------------------- Arrange elements heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_arange_header_one_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_arange_header_one_heading', array(
    'label'                    => esc_html__( 'Arrange elements', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Arrange header optionss -----------------------------------*/

$arrange_header_one_options = influence_blog_arrange_header_one_options();

$arrange_header_one_option  = array();

foreach( $arrange_header_one_options as $key => $val ) {

   $arrange_header_one_option[ $key ] = $val[ 'label' ];
}

$wp_customize->add_setting( 'influence_blog_arrange_header_one', array(
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_sortable_one',
    'default'           => influence_blog_sortable_defaults( $arrange_header_one_options ),
) );

$wp_customize->add_control( new Sortable_One_Control( $wp_customize, 'influence_blog_arrange_header_one', array(
	'section'				=> $section,
    'choices'               => $arrange_header_one_option,
    'priority'              => 15
) ) );