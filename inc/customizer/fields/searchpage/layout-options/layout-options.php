<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_searchpage_layout_options_section';

$option_tabs     = influence_blog_tab_one_array();

$archive_layouts = influence_blog_blog_layouts_select_array();

$button_one_array = array(
    'influence_blog_searchpage_layout_options_select_heading' => array(),
    'influence_blog_searchpage_layout_options_select' => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_searchpage_layout_options_button_one_array', $button_one_array );

$button_two_array = array(
);

$button_two_array = apply_filters( 'influence_blog_filter_searchpage_layout_options_button_two_array', $button_two_array );

$button_three_array = array(
);

$button_three_array = apply_filters( 'influence_blog_filter_searchpage_layout_options_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Search layout options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_layout_options_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Influence_Blog_Tab_One_Control( $wp_customize, 'influence_blog_searchpage_layout_options_tabs', array(
    'section'                  => $section,
    'tabs'                     => $option_tabs,
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

/*---------------------------------- Search page layout select heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_layout_options_select_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_searchpage_layout_options_select_heading', array(
    'label'                    => esc_html__( 'Select Layout', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Search page layout options select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_layout_options_select', array(
    'sanitize_callback'        => 'sanitize_radio_image_two',
    'default'                  => influence_blog_defaults( 'searchpage_layout_options_select' ),
) );

$wp_customize->add_control( new Influence_Blog_Radio_Image_Two_Control( $wp_customize, 'influence_blog_searchpage_layout_options_select', array(
    'section'                  => $section,
    'type'                     => 'radio-image-one',
    'choices'                  => $archive_layouts,
    'priority'                 => 15,
) ) );
