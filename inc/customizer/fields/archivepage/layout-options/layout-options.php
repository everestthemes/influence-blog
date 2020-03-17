<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_archivepage_layout_options_section';

$tabs     = influence_blog_tab_one_array();

$archive_layouts = influence_blog_blog_layouts_select_array();

$button_one_array = array(
);

$button_one_array = apply_filters( 'influence_blog_filter_archivepage_layout_options_button_one_array', $button_one_array );

$button_two_array = array(
);

$button_two_array = apply_filters( 'influence_blog_filter_archivepage_layout_options_button_two_array', $button_two_array );

$button_three_array = array(
);

$button_three_array = apply_filters( 'influence_blog_filter_archivepage_layout_options_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Archive layout options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_archivepage_layout_options_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_archivepage_layout_options_tabs', array(
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

/*---------------------------------- Archive page layout select heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_archivepage_layout_options_select_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_archivepage_layout_options_select_heading', array(
    'label'                    => esc_html__( 'Select Layout', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Archive page layout options select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_archivepage_layout_options_select', array(
    'sanitize_callback'        => 'sanitize_radio_image_two',
    'default'                  => influence_blog_defaults( 'archivepage_layout_options_select' ),
) );

$wp_customize->add_control( new Radio_Image_Two_Control( $wp_customize, 'influence_blog_archivepage_layout_options_select', array(
    'section'                  => $section,
    'type'                     => 'radio-image-one',
    'choices'                  => $archive_layouts,
    'priority'                 => 15,
) ) );
