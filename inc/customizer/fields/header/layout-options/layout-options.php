<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_header_layout_options_section';

$tabs     = influence_blog_tab_one_array();

$button_one_array = array(
    'influence_blog_header_layout_options_select_heading'   => array(),
    'influence_blog_header_layout_options_select'           => array(),
    'influence_blog_header_layout_options_arrange_heading'  => array(),
    'influence_blog_arrange_header_info'                    => array(),
    'influence_blog_arrange_header_layout_one'              => array(),
    'influence_blog_arrange_header_layout_two'              => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_header_layout_options_button_one_array', $button_one_array );

$button_two_array = array(
    'influence_blog_header_layout_options_header_image_heading' => array(),
    'header_image'                                          => array(),
    'influence_blog_header_layout_options_hedader_bg_color_heading' => array(),
    'influence_blog_header_layout_options_hedader_bg_color' => array(),
);

$button_two_array = apply_filters( 'influence_blog_filter_header_layout_options_button_two_array', $button_two_array );

$button_three_array = array(
    'influence_blog_header_layout_options_advance_info'     => array(),
    'influence_blog_header_layout_options_advance_toggle'   => array(),
    'influence_blog_header_layout_options_advance_bg_image_heading' => array(),
    'influence_blog_header_layout_options_advance_bg_image_size' => array(),
    'influence_blog_header_layout_options_advance_bg_image_position_x' => array(),
    'influence_blog_header_layout_options_advance_bg_image_position_y' => array(),
);

$button_three_array = apply_filters( 'influence_blog_filter_header_layout_options_button_three_array', $button_three_array );

$header_layouts = influence_blog_header_layout_options_select_array();

$background_image_sizes = influence_blog_background_image_sizes_array();

$background_image_positions_x = influence_blog_background_image_positions_x_array();

$background_image_positions_y = influence_blog_background_image_positions_y_array();

/*-----------------------------------------------------------------------------
							 Header layout options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_header_layout_options_tabs', array(
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

/*---------------------------------- Header layout select heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_select_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_layout_options_select_heading', array(
    'label'                    => esc_html__( 'Select Layout', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Header layout options select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_select', array(
    'sanitize_callback'        => 'sanitize_radio_image_two',
    'default'                  => influence_blog_defaults( 'header_layout_options_select' ),
) );

$wp_customize->add_control( new Radio_Image_Two_Control( $wp_customize, 'influence_blog_header_layout_options_select', array(
    'section'                  => $section,
    'type'                     => 'radio-image-one',
    'choices'                  => $header_layouts,
    'priority'                 => 15,
) ) );

/*---------------------------------- Arrange header heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_arrange_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_layout_options_arrange_heading', array(
    'label'                    => esc_html__( 'Arrange Header', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-layout-options-arrange-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 20,
) ) );

/*---------------------------------- Arrange info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_arrange_header_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_arrange_header_info', array(
    'label'                    => esc_html__( 'Notice', 'influence-blog' ),
    'description'              => __( 'Rearrange and enable or disable to display heading sections.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 25,
) ) );

/*---------------------------------- Arrange header layout one options -----------------------------------*/

$arrange_header_layout_one_options = influence_blog_arrange_header_layout_one_options();

$arrange_header_layout_one_option  = array();

foreach( $arrange_header_layout_one_options as $key => $val ) {

   $arrange_header_layout_one_option[ $key ] = $val[ 'label' ];
}

$wp_customize->add_setting( 'influence_blog_arrange_header_layout_one', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'sanitize_sortable_one',
    'default'                  => influence_blog_sortable_defaults ( $arrange_header_layout_one_options ),
) );

$wp_customize->add_control( new Sortable_One_Control( $wp_customize, 'influence_blog_arrange_header_layout_one', array(
	'section'				   => $section,
    'choices'                  => $arrange_header_layout_one_option,
    'priority'                 => 30,
    'active_callback'          => 'influence_blog_is_header_layout_options_select_one',
) ) );

/*---------------------------------- Arrange header layout two options -----------------------------------*/

$arrange_header_layout_two_options = influence_blog_arrange_header_layout_two_options();

$arrange_header_layout_two_option  = array();

foreach( $arrange_header_layout_two_options as $key => $val ) {

   $arrange_header_layout_two_option[ $key ] = $val[ 'label' ];
}

$wp_customize->add_setting( 'influence_blog_arrange_header_layout_two', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'sanitize_sortable_one',
    'default'                  => influence_blog_sortable_defaults ( $arrange_header_layout_two_options ),
) );

$wp_customize->add_control( new Sortable_One_Control( $wp_customize, 'influence_blog_arrange_header_layout_two', array(
	'section'				   => $section,
    'choices'                  => $arrange_header_layout_two_option,
    'priority'                 => 35,
    'active_callback'          => 'influence_blog_is_header_layout_options_select_two',
) ) );

/*-----------------------------------------------------------------------------
							 Design options
-----------------------------------------------------------------------------*/

/*---------------------------------- Header image heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_header_image_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_layout_options_header_image_heading', array(
    'label'                    => esc_html__( 'Header Image', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 40,
) ) );

/*---------------------------------- Header background color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_hedader_bg_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_layout_options_hedader_bg_color_heading', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 45,
) ) );

/*---------------------------------- Header background color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_hedader_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_layout_options_hedader_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_layout_options_hedader_bg_color', array(
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 50,
) ) );

/*-----------------------------------------------------------------------------
							 Advance options
-----------------------------------------------------------------------------*/

/*---------------------------------- Header layout options advance Info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_advance_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_header_layout_options_advance_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => __( 'Recommended for experienced user.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 55,
) ) );

/*---------------------------------- Header layout options advance toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_advance_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'header_layout_options_advance_toggle' ),
) );

$wp_customize->add_control( new Toggle_Two_Control ( $wp_customize, 'influence_blog_header_layout_options_advance_toggle', array(
    'label'                    => esc_html__( 'Enable Advance Settings', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-two',
    'priority'                 => 60,
) ) );

/*---------------------------------- Header layout options advance bg image heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_advance_bg_image_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_layout_options_advance_bg_image_heading', array(
    'label'                    => esc_html__( 'Header Image', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-layout-options-advance-bg-image-heading' ),
    'controls_to_wrap'         => 7,
    'expanded'                 => true,
    'priority'                 => 65,
    'active_callback'          => 'influence_blog_is_header_layout_options_advance_enable',
) ) );

/*---------------------------------- Header layout options advance bg image size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_advance_bg_image_size', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'transport' 			   => 'postMessage',
    'default'                  => influence_blog_defaults( 'header_layout_options_advance_bg_image_size' ),
) );

$wp_customize->add_control( 'influence_blog_header_layout_options_advance_bg_image_size', array(
    'label'                    => esc_html__( 'Image Size', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $background_image_sizes,
    'priority'                 => 70,
    'active_callback'          => 'influence_blog_is_header_layout_options_advance_enable',
) );

/*---------------------------------- Header layout options advance bg image position X -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_advance_bg_image_position_x', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'transport' 			   => 'postMessage',
    'default'                  => influence_blog_defaults( 'header_layout_options_advance_bg_image_position_x' ),
) );

$wp_customize->add_control( 'influence_blog_header_layout_options_advance_bg_image_position_x', array(
    'label'                    => esc_html__( 'Image Position', 'influence-blog' ) . ' (X)',
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $background_image_positions_x,
    'priority'                 => 75,
    'active_callback'          => 'influence_blog_is_header_layout_options_advance_enable',
) );

/*---------------------------------- Header layout options advance bg image position Y -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_layout_options_advance_bg_image_position_y', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'transport' 			   => 'postMessage',
    'default'                  => influence_blog_defaults( 'header_layout_options_advance_bg_image_position_y' ),
) );

$wp_customize->add_control( 'influence_blog_header_layout_options_advance_bg_image_position_y', array(
    'label'                    => esc_html__( 'Image Position', 'influence-blog' ) . ' (Y)',
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $background_image_positions_y,
    'priority'                 => 80,
    'active_callback'          => 'influence_blog_is_header_layout_options_advance_enable',
) );
