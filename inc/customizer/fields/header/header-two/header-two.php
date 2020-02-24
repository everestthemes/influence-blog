<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_header_two_section';

$tabs     = influence_blog_tab_one_array();

$menu_lists  = get_registered_nav_menus();

$alignment  = influence_blog_alignment_array();

$font_attrs = influence_blog_font_attrs_array();

$size_attrs = influence_blog_font_size_attrs_array();

$text_transform = influence_blog_font_text_transform_array();

$line_height = influence_blog_line_height_attrs_array();

$letter_spacing = influence_blog_letter_spacing_attrs_array();

$button_one_array = array(
    'influence_blog_arange_header_two_layout_one_heading'   => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_header_two_button_one_array', $button_one_array );

$button_two_array = array(
);

$button_two_array = apply_filters( 'influence_blog_filter_header_two_button_two_array', $button_two_array );

$button_three_array = array(
);

$button_three_array = apply_filters( 'influence_blog_filter_header_two_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Header one options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_header_two_tabs', array(
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

/*---------------------------------- Arrange elements header two layout one heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_arange_header_two_layout_one_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_arange_header_two_layout_one_heading', array(
    'label'                    => esc_html__( 'Arrange elements', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );
