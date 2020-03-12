<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_banner_layout_options_section';

$tabs     = influence_blog_tab_one_array();

$banner_layouts = influence_blog_banner_layout_options_select_array();

$button_one_array = array(
    'influence_blog_banner_display_toggle'   => array(),
    'influence_blog_banner_layout_options_select_heading'   => array(),
    'influence_blog_banner_layout_options_select'           => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_banner_layout_options_button_one_array', $button_one_array );

$button_two_array = array(
);

$button_two_array = apply_filters( 'influence_blog_filter_banner_layout_options_button_two_array', $button_two_array );

$button_three_array = array(
);

$button_three_array = apply_filters( 'influence_blog_filter_banner_layout_options_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Banner layout options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_layout_options_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_banner_layout_options_tabs', array(
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

/*---------------------------------- Banner display toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_display_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'banner_display_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_banner_display_toggle', array(
    'label'                    => esc_html__( 'Display Banner', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 10,
) ) );

/*---------------------------------- Banner layout select heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_layout_options_select_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_banner_layout_options_select_heading', array(
    'label'                    => esc_html__( 'Select Layout', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 15,
    'active_callback'          => 'influence_blog_is_banner_display_enable',
) ) );

/*---------------------------------- Banner layout options select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_layout_options_select', array(
    'sanitize_callback'        => 'sanitize_radio_image_two',
    'default'                  => influence_blog_defaults( 'banner_layout_options_select' ),
) );

$wp_customize->add_control( new Radio_Image_Two_Control( $wp_customize, 'influence_blog_banner_layout_options_select', array(
    'section'                  => $section,
    'type'                     => 'radio-image-one',
    'choices'                  => $banner_layouts,
    'priority'                 => 20,
    'active_callback'          => 'influence_blog_is_banner_display_enable',
) ) );
