<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_top_header_section';

$tabs     = influence_blog_tab_one_array();

$button_one_array = array(
    'influence_blog_arange_top_header_heading'              => array(),
    'influence_blog_arrange_top_header'                     => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_top_header_button_one_array', $button_one_array );

$button_two_array = array(
);

$button_two_array = apply_filters( 'influence_blog_filter_top_header_button_two_array', $button_two_array );

$button_three_array = array(

);

$button_three_array = apply_filters( 'influence_blog_filter_top_header_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Top header options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_top_header_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_top_header_tabs', array(
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

$wp_customize->add_setting( 'influence_blog_arange_top_header_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_arange_top_header_heading', array(
    'label'                    => esc_html__( 'Arrange elements', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Arrange header optionss -----------------------------------*/

$arrange_top_header_options = influence_blog_arrange_top_header_options();

$arrange_top_header_option  = array();

foreach( $arrange_top_header_options as $key => $val ) {

   $arrange_top_header_option[ $key ] = $val[ 'label' ];
}

$wp_customize->add_setting( 'influence_blog_arrange_top_header', array(
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_sortable_one',
    'default'           => influence_blog_sortable_defaults( $arrange_top_header_options ),
) );

$wp_customize->add_control( new Sortable_One_Control( $wp_customize, 'influence_blog_arrange_top_header', array(
	'section'				=> $section,
    'choices'               => $arrange_top_header_option,
) ) );
