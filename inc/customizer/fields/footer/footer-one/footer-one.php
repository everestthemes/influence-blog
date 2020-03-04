<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_footer_one_section';

$tabs     = influence_blog_tab_one_array();

$area_lists  = influence_blog_get_registered_widget_areas();

$alignment  = influence_blog_alignment_array();

$font_attrs = influence_blog_font_attrs_array();

$size_attrs = influence_blog_font_size_attrs_array();

$text_transform = influence_blog_font_text_transform_array();

$line_height = influence_blog_line_height_attrs_array();

$letter_spacing = influence_blog_letter_spacing_attrs_array();

$button_one_array = array(
    'influence_blog_footer_one_first_widget_area_heading' => array(),
    'influence_blog_footer_one_first_widget_area_toggle' => array(),
    'influence_blog_footer_one_first_widget_area_select' => array(),
    'influence_blog_footer_one_first_widget_area_col' => array(),
    'influence_blog_footer_one_second_widget_area_heading' => array(),
    'influence_blog_footer_one_second_widget_area_toggle' => array(),
    'influence_blog_footer_one_second_widget_area_select' => array(),
    'influence_blog_footer_one_second_widget_area_col' => array(),
    'influence_blog_footer_one_third_widget_area_heading' => array(),
    'influence_blog_footer_one_third_widget_area_toggle' => array(),
    'influence_blog_footer_one_third_widget_area_select' => array(),
    'influence_blog_footer_one_third_widget_area_col' => array(),
    'influence_blog_footer_one_fourth_widget_area_heading' => array(),
    'influence_blog_footer_one_fourth_widget_area_toggle' => array(),
    'influence_blog_footer_one_fourth_widget_area_select' => array(),
    'influence_blog_footer_one_fourth_widget_area_col' => array(),
    'influence_blog_footer_one_fifth_widget_area_heading' => array(),
    'influence_blog_footer_one_fifth_widget_area_toggle' => array(),
    'influence_blog_footer_one_fifth_widget_area_select' => array(),
    'influence_blog_footer_one_fifth_widget_area_col' => array(),
    'influence_blog_footer_one_sixth_widget_area_heading' => array(),
    'influence_blog_footer_one_sixth_widget_area_toggle' => array(),
    'influence_blog_footer_one_sixth_widget_area_select' => array(),
    'influence_blog_footer_one_sixth_widget_area_col' => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_header_one_button_one_array', $button_one_array );

$button_two_array = array(
    'influence_blog_footer_one_design_heading' => array(),
    'influence_blog_footer_one_design_bg_image' => array(),
    'influence_blog_footer_one_design_bg_color' => array(),
);

$button_two_array = apply_filters( 'influence_blog_filter_header_one_button_two_array', $button_two_array );

$button_three_array = array(
);

$button_three_array = apply_filters( 'influence_blog_filter_header_one_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Header one options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_footer_one_tabs', array(
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

/*---------------------------------- First widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_first_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_first_widget_area_heading', array(
    'label'                    => esc_html__( 'First Widget Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-first-widget-area-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 10,
) ) );

/*---------------------------------- First widget area toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_first_widget_area_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'footer_one_first_widget_area_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_footer_one_first_widget_area_toggle', array(
    'label'                    => esc_html__( 'Display Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 15,
) ) );

/*---------------------------------- First widget area select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_first_widget_area_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_one_first_widget_area_select' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_first_widget_area_select', array(
    'label'                    => esc_html__( 'Select Widget Area', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $area_lists,
    'type'                     => 'select',
    'priority'                 => 20,
    'active_callback'          => 'influence_blog_is_footer_one_first_widget_enable',
) );

/*---------------------------------- First widget area column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_first_widget_area_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_one_first_widget_area_col' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_one_first_widget_area_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 25,
    'active_callback'          => 'influence_blog_is_footer_one_first_widget_enable',
) ) );

/*---------------------------------- Second widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_second_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_second_widget_area_heading', array(
    'label'                    => esc_html__( 'Second Widget Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-second-widget-area-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 30,
) ) );

/*---------------------------------- Second widget area toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_second_widget_area_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'footer_one_second_widget_area_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_footer_one_second_widget_area_toggle', array(
    'label'                    => esc_html__( 'Display Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 35,
) ) );

/*---------------------------------- Second widget area select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_second_widget_area_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_one_second_widget_area_select' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_second_widget_area_select', array(
    'label'                    => esc_html__( 'Select Widget Area', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $area_lists,
    'type'                     => 'select',
    'priority'                 => 40,
    'active_callback'          => 'influence_blog_is_footer_one_second_widget_enable',
) );

/*---------------------------------- Second widget area column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_second_widget_area_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_one_second_widget_area_col' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_one_second_widget_area_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 45,
    'active_callback'          => 'influence_blog_is_footer_one_second_widget_enable',
) ) );

/*---------------------------------- Third widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_third_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_third_widget_area_heading', array(
    'label'                    => esc_html__( 'Third Widget Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-third-widget-area-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 50,
) ) );

/*---------------------------------- Third widget area toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_third_widget_area_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'footer_one_third_widget_area_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_footer_one_third_widget_area_toggle', array(
    'label'                    => esc_html__( 'Display Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 55,
) ) );

/*---------------------------------- Third widget area select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_third_widget_area_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_one_third_widget_area_select' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_third_widget_area_select', array(
    'label'                    => esc_html__( 'Select Widget Area', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $area_lists,
    'type'                     => 'select',
    'priority'                 => 60,
    'active_callback'          => 'influence_blog_is_footer_one_third_widget_enable',
) );

/*---------------------------------- Third widget area column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_third_widget_area_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_one_third_widget_area_col' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_one_third_widget_area_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 65,
    'active_callback'          => 'influence_blog_is_footer_one_third_widget_enable',
) ) );

/*---------------------------------- Fourth widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_fourth_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_fourth_widget_area_heading', array(
    'label'                    => esc_html__( 'Fourth Widget Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-fourth-widget-area-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 70,
) ) );

/*---------------------------------- Fourth widget area toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_fourth_widget_area_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'footer_one_fourth_widget_area_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_footer_one_fourth_widget_area_toggle', array(
    'label'                    => esc_html__( 'Display Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 75,
) ) );

/*---------------------------------- Fourth widget area select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_fourth_widget_area_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_one_fourth_widget_area_select' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_fourth_widget_area_select', array(
    'label'                    => esc_html__( 'Select Widget Area', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $area_lists,
    'type'                     => 'select',
    'priority'                 => 80,
    'active_callback'          => 'influence_blog_is_footer_one_fourth_widget_enable',
) );

/*---------------------------------- Fourth widget area column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_fourth_widget_area_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_one_fourth_widget_area_col' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_one_fourth_widget_area_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 85,
    'active_callback'          => 'influence_blog_is_footer_one_fourth_widget_enable',
) ) );

/*---------------------------------- Fifth widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_fifth_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_fifth_widget_area_heading', array(
    'label'                    => esc_html__( 'Fifth Widget Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-fifth-widget-area-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 90,
) ) );

/*---------------------------------- Fifth widget area toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_fifth_widget_area_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'footer_one_fifth_widget_area_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_footer_one_fifth_widget_area_toggle', array(
    'label'                    => esc_html__( 'Display Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 95,
) ) );

/*---------------------------------- Fifth widget area select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_fifth_widget_area_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_one_fifth_widget_area_select' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_fifth_widget_area_select', array(
    'label'                    => esc_html__( 'Select Widget Area', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $area_lists,
    'type'                     => 'select',
    'priority'                 => 100,
    'active_callback'          => 'influence_blog_is_footer_one_fifth_widget_enable',
) );

/*---------------------------------- Fifth widget area column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_fifth_widget_area_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_one_fifth_widget_area_col' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_one_fifth_widget_area_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 105,
    'active_callback'          => 'influence_blog_is_footer_one_fifth_widget_enable',
) ) );

/*---------------------------------- Sixth widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_sixth_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_sixth_widget_area_heading', array(
    'label'                    => esc_html__( 'Sixth Widget Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-sixth-widget-area-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 110,
) ) );

/*---------------------------------- Sixth widget area toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_sixth_widget_area_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'footer_one_sixth_widget_area_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_footer_one_sixth_widget_area_toggle', array(
    'label'                    => esc_html__( 'Display Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 115,
) ) );

/*---------------------------------- Sixth widget area select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_sixth_widget_area_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_one_sixth_widget_area_select' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_sixth_widget_area_select', array(
    'label'                    => esc_html__( 'Select Widget Area', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $area_lists,
    'type'                     => 'select',
    'priority'                 => 120,
    'active_callback'          => 'influence_blog_is_footer_one_sixth_widget_enable',
) );

/*---------------------------------- Sixth widget area column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_sixth_widget_area_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_one_sixth_widget_area_col' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_one_sixth_widget_area_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 125,
    'active_callback'          => 'influence_blog_is_footer_one_sixth_widget_enable',
) ) );

/*-----------------------------------------------------------------------------
							 Design options
-----------------------------------------------------------------------------*/

/*---------------------------------- Footer one design heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_design_heading', array(
    'label'                    => esc_html__( 'Footer One Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 130,
) ) );

/*---------------------------------- Footer one design background image -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_bg_image', array(
    'sanitize_callback'        => 'influence_blog_sanitize_image',
    'default'                  => influence_blog_defaults( 'footer_one_design_bg_image' ),
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'influence_blog_footer_one_design_bg_image', array(
    'label'       		       => esc_html__( 'Background Image', 'influence-blog' ),
    'section'     		       => $section,
    'priority'                 => 135,
) ) );

/*---------------------------------- Footer one design background color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 140,
) ) );

///*---------------------------------- Header one layout one design menu heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_menu_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_menu_heading', array(
//    'label'                    => esc_html__( 'Menu Options', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'heading-one',
//    'accordion'                => true,
//    'class'                    => esc_attr( 'header-one-layout-one-design-menu-heading' ),
//    'controls_to_wrap'         => 10,
//    'expanded'                 => false,
//    'priority'                 => 65,
//) ) );
//
///*---------------------------------- Header one layout one design menu color heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_menu_color_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_menu_color_heading', array(
//    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'heading-one',
//    'accordion'                => false,
//    'class'                    => esc_attr( 'header-one-layout-one-design-menu-color-heading' ),
//    'controls_to_wrap'         => 3,
//    'expanded'                 => false,
//    'priority'                 => 70,
//) ) );
//
///*---------------------------------- Header one layout one design menu color -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_menu_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_one_layout_one_design_menu_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_menu_color', array(
//    'label'                    => esc_html__( 'Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 70,
//) ) );
//
///*---------------------------------- Header one layout one design menu hover color -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_menu_hover_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_one_layout_one_design_menu_hover_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_menu_hover_color', array(
//    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 75,
//) ) );
//
///*---------------------------------- Header one layout one design menu sep color -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_menu_sep_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_one_layout_one_design_menu_sep_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_menu_sep_color', array(
//    'label'                    => esc_html__( 'Separator Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 80,
//) ) );
//
///*---------------------------------- Header one layout one design menu typo heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_menu_typo_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_menu_typo_heading', array(
//    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'heading-one',
//    'accordion'                => false,
//    'class'                    => esc_attr( 'header-one-layout-one-design-menu-typo-heading' ),
//    'controls_to_wrap'         => 5,
//    'expanded'                 => false,
//    'priority'                 => 85,
//) ) );
//
///*---------------------------------- Header one layout one design menu typo font family -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_menu_font', array(
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_menu_font' ),
//    'sanitize_callback'        => 'sanitize_typography_one'
//) );
//
//$wp_customize->add_control( new Typography_One_Control( $wp_customize, 'influence_blog_typo_header_one_layout_one_design_menu_font', array(
//    'label'                    => __( 'Font Family', 'influence-blog' ),
//    'section'                  => $section,
//    'input_attrs'              => $font_attrs,
//    'priority'                 => 90,
//) ) );
//
///*---------------------------------- Header one layout one design menu typo text transform -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_menu_transform', array(
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_menu_transform' ),
//    'sanitize_callback'        => 'influence_blog_sanitize_select',
//    'transport' 		       => 'postMessage',
//) );
//
//$wp_customize->add_control( 'influence_blog_typo_header_one_layout_one_design_menu_transform', array(
//    'label'                    => __( 'Text Transform', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'select',
//    'choices'                  => $text_transform,
//    'priority'                 => 95,
//) );
//
///*---------------------------------- Header one layout one design menu typo font size -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_menu_size_d', array(
//    'sanitize_callback'        => 'sanitize_range_slider_two_number',
//    'transport' 		       => 'postMessage',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_menu_size_d' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_menu_size_t', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_menu_size_t' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_menu_size_m', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_menu_size_m' ),
//) );
//
//$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_one_layout_one_design_menu_size', array(
//    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
//    'section' 			       => $section,
//    'type'                     => 'range-slider-two',
//    'settings' 			       => array(
//        'desktop' 	           => 'influence_blog_typo_header_one_layout_one_design_menu_size_d',
//        'tablet' 	           => 'influence_blog_typo_header_one_layout_one_design_menu_size_t',
//        'mobile' 	           => 'influence_blog_typo_header_one_layout_one_design_menu_size_m',
//    ),
//    'input_attrs' 		       => $size_attrs,
//    'priority' 			       => 100,
//) ) );
//
///*---------------------------------- Header one layout one design menu typo line height -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_menu_height_d', array(
//    'sanitize_callback'        => 'sanitize_range_slider_two_number',
//    'transport' 		       => 'postMessage',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_menu_height_d' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_menu_height_t', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_menu_height_t' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_menu_height_m', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_menu_height_m' ),
//) );
//
//$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_one_layout_one_design_menu_line_height', array(
//    'label'                    => esc_html__( 'Line Height', 'influence-blog' ),
//    'section' 			       => $section,
//    'type'                     => 'range-slider-two',
//    'settings' 			       => array(
//        'desktop' 	           => 'influence_blog_typo_header_one_layout_one_design_menu_height_d',
//        'tablet' 	           => 'influence_blog_typo_header_one_layout_one_design_menu_height_t',
//        'mobile' 	           => 'influence_blog_typo_header_one_layout_one_design_menu_height_m',
//    ),
//    'input_attrs' 		       => $line_height,
//    'priority' 			       => 105,
//) ) );
//
///*---------------------------------- Header one layout one design menu typo letter spacing -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_menu_spacing_d', array(
//    'sanitize_callback'        => 'sanitize_range_slider_two_number',
//    'transport' 		       => 'postMessage',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_menu_spacing_d' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_menu_spacing_t', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_menu_spacing_t' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_menu_spacing_m', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_menu_spacing_m' ),
//) );
//
//$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_one_layout_one_design_menu_spacing', array(
//    'label'                    => esc_html__( 'Letter Spacing', 'influence-blog' ) . ' (px) ',
//    'section' 			       => $section,
//    'type'                     => 'range-slider-two',
//    'settings' 			       => array(
//        'desktop' 	           => 'influence_blog_typo_header_one_layout_one_design_menu_spacing_d',
//        'tablet' 	           => 'influence_blog_typo_header_one_layout_one_design_menu_spacing_t',
//        'mobile' 	           => 'influence_blog_typo_header_one_layout_one_design_menu_spacing_m',
//    ),
//    'input_attrs' 		       => $letter_spacing,
//    'priority' 			       => 110,
//) ) );
//
///*---------------------------------- Header one layout one design social links heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_social_links_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_social_links_heading', array(
//    'label'                    => esc_html__( 'Social Links Options', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'heading-one',
//    'accordion'                => true,
//    'class'                    => esc_attr( 'header-one-layout-one-design-social-links-heading' ),
//    'controls_to_wrap'         => 6,
//    'expanded'                 => false,
//    'priority'                 => 115,
//) ) );
//
///*---------------------------------- Header one layout one design social links color heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_social_links_color_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_social_links_color_heading', array(
//    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'heading-one',
//    'accordion'                => false,
//    'class'                    => esc_attr( 'header-one-layout-one-design-social-links-color-heading' ),
//    'controls_to_wrap'         => 3,
//    'expanded'                 => false,
//    'priority'                 => 120,
//) ) );
//
///*---------------------------------- Header one layout one design social links color -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_social_links_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_one_layout_one_design_social_links_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_social_links_color', array(
//    'label'                    => esc_html__( 'Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 125,
//) ) );
//
///*---------------------------------- Header one layout one design social links hover color -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_social_links_hover_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_one_layout_one_design_social_links_hover_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_social_links_hover_color', array(
//    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 130,
//) ) );
//
///*---------------------------------- Header one layout one design social links sep color -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_social_links_sep_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_one_layout_one_design_social_links_sep_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_social_links_sep_color', array(
//    'label'                    => esc_html__( 'Separator Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 135,
//) ) );
//
///*---------------------------------- Header one layout one design social links typo heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_design_social_links_typo_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_design_social_links_typo_heading', array(
//    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'heading-one',
//    'accordion'                => false,
//    'class'                    => esc_attr( 'header-one-layout-one-design-social-links-typo-heading' ),
//    'controls_to_wrap'         => 1,
//    'expanded'                 => false,
//    'priority'                 => 140,
//) ) );
//
///*---------------------------------- Header one layout one design social links typo font size -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_social_links_size_d', array(
//    'sanitize_callback'        => 'sanitize_range_slider_two_number',
//    'transport' 		       => 'postMessage',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_social_links_size_d' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_social_links_size_t', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_social_links_size_t' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_one_layout_one_design_social_links_size_m', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_one_layout_one_design_social_links_size_m' ),
//) );
//
//$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_one_layout_one_design_social_links_size', array(
//    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
//    'section' 			       => $section,
//    'type'                     => 'range-slider-two',
//    'settings' 			       => array(
//        'desktop' 	           => 'influence_blog_typo_header_one_layout_one_design_social_links_size_d',
//        'tablet' 	           => 'influence_blog_typo_header_one_layout_one_design_social_links_size_t',
//        'mobile' 	           => 'influence_blog_typo_header_one_layout_one_design_social_links_size_m',
//    ),
//    'input_attrs' 		       => $size_attrs,
//    'priority' 			       => 145,
//) ) );
//
///*-----------------------------------------------------------------------------
//							 Advance options
//-----------------------------------------------------------------------------*/
//
///*---------------------------------- Header one layout one advance Info -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_info', array(
//    'sanitize_callback'        => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_header_one_layout_one_advance_info', array(
//    'label'                    => esc_html__( 'Note', 'influence-blog' ),
//    'description'              => __( 'Recommended for experienced user.', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'info-one',
//    'info_type'                => 'info',
//    'priority'                 => 150,
//) ) );
//
///*---------------------------------- Header one layout one advance toggle -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_toggle', array(
//    'sanitize_callback'        => 'wp_validate_boolean',
//    'default'                  => influence_blog_defaults( 'header_one_layout_one_advance_toggle' ),
//) );
//
//$wp_customize->add_control( new Toggle_Two_Control ( $wp_customize, 'influence_blog_header_one_layout_one_advance_toggle', array(
//    'label'                    => esc_html__( 'Enable Advance Settings', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'toggle-two',
//    'priority'                 => 155,
//) ) );
//
///*---------------------------------- Header one layout one advance heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_advance_heading', array(
//    'label'                    => esc_html__( 'Header One Options', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'heading-one',
//    'priority'                 => 160,
//    'active_callback'          => 'influence_blog_is_header_one_layout_one_advance_enable',
//) ) );
//
///*---------------------------------- Header one layout one padding -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_d_p_top', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_d_p_top' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_d_p_right', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_d_p_right' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_d_p_bottom', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_d_p_bottom' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_d_p_left', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_d_p_left' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_t_p_top', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_t_p_top' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_t_p_right', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_t_p_right' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_t_p_bottom', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_t_p_bottom' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_t_p_left', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_t_p_left' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_m_p_top', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_m_p_top' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_m_p_right', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_m_p_right' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_m_p_bottom', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_m_p_bottom' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_one_layout_one_advance_m_p_left', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_one_layout_one_advance_m_p_left' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//
//$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_header_one_layout_one_advance_p', array(
//    'label'	   				   => esc_html__( 'Padding', 'influence-blog' ) . ' (px) ',
//    'section'  				   => $section,
//    'settings'                 => array(
//        'desktop_top' 		   => 'influence_blog_header_one_layout_one_advance_d_p_top',
//        'desktop_right' 	   => 'influence_blog_header_one_layout_one_advance_d_p_right',
//        'desktop_bottom' 	   => 'influence_blog_header_one_layout_one_advance_d_p_bottom',
//        'desktop_left' 	       => 'influence_blog_header_one_layout_one_advance_d_p_left',
//        'tablet_top' 		   => 'influence_blog_header_one_layout_one_advance_t_p_top',
//        'tablet_right' 		   => 'influence_blog_header_one_layout_one_advance_t_p_right',
//        'tablet_bottom' 	   => 'influence_blog_header_one_layout_one_advance_t_p_bottom',
//        'tablet_left' 		   => 'influence_blog_header_one_layout_one_advance_t_p_left',
//        'mobile_top' 		   => 'influence_blog_header_one_layout_one_advance_m_p_top',
//        'mobile_right' 		   => 'influence_blog_header_one_layout_one_advance_m_p_right',
//        'mobile_bottom' 	   => 'influence_blog_header_one_layout_one_advance_m_p_bottom',
//        'mobile_left' 		   => 'influence_blog_header_one_layout_one_advance_m_p_left',
//    ),
//    'input_attrs' 			   => array(
//        'min'                  => -100,
//        'max'                  => 100,
//        'step'                 => 1,
//    ),
//    'priority' 				   => 165,
//    'active_callback'          => 'influence_blog_is_header_one_layout_one_advance_enable',
//) ) );
