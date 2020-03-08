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

$justify = influence_blog_justify_array();

$background_image_sizes = influence_blog_background_image_sizes_array();

$background_image_positions_x = influence_blog_background_image_positions_x_array();

$background_image_positions_y = influence_blog_background_image_positions_y_array();

$background_image_attachment = influence_blog_background_image_attachment_array();

$button_one_array = array(
    'influence_blog_footer_one_widget_area_heading' => array(),
    'influence_blog_footer_one_widget_area_alignment_info' => array(),
    'influence_blog_footer_one_widget_area_alignment' => array(),
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

$button_one_array = apply_filters( 'influence_blog_filter_footer_one_button_one_array', $button_one_array );

$button_two_array = array(
    'influence_blog_footer_one_design_heading' => array(),
    'influence_blog_footer_one_design_bg_image' => array(),
    'influence_blog_footer_one_design_bg_color' => array(),
    'influence_blog_footer_one_design_border_top_color' => array(),
    'influence_blog_footer_one_design_border_bottom_color' => array(),
    'influence_blog_footer_one_design_widget_area_heading' => array(),
    'influence_blog_footer_one_design_widget_area_bg_color' => array(),
    'influence_blog_footer_one_design_widget_area_border_color' => array(),
    'influence_blog_footer_one_design_widget_area_title_heading' => array(),
    'influence_blog_footer_one_design_widget_area_title_alignment' => array(),
    'influence_blog_footer_one_design_widget_area_title_color_heading' => array(),
    'influence_blog_footer_one_design_widget_title_color' => array(),
    'influence_blog_footer_one_design_widget_title_bg_color' => array(),
    'influence_blog_footer_one_design_widget_area_title_typo_heading' => array(),
    'influence_blog_typo_footer_one_widget_area_design_title_font' => array(),
    'influence_blog_typo_footer_one_widget_area_design_title_transform' => array(),
    'influence_blog_typo_footer_one_widget_area_design_title_size' => array(),
    'influence_blog_typo_footer_one_widget_area_design_title_line_height' => array(),
    'influence_blog_typo_footer_one_widget_area_design_title_spacing' => array(),
    'influence_blog_footer_one_design_widget_area_content_heading' => array(),
    'influence_blog_footer_one_design_widget_area_content_color_heading' => array(),
    'influence_blog_footer_one_design_widget_content_color' => array(),
    'influence_blog_footer_one_design_widget_content_hover_color' => array(),
    'influence_blog_footer_one_design_widget_content_bg_color' => array(),
    'influence_blog_footer_one_design_widget_content_bg_hover_color' => array(),
    'influence_blog_footer_one_design_widget_content_border_color' => array(),
    'influence_blog_footer_one_design_widget_content_button_color' => array(),
    'influence_blog_footer_one_design_widget_content_button_hover_color' => array(),
);

$button_two_array = apply_filters( 'influence_blog_filter_footer_one_button_two_array', $button_two_array );

$button_three_array = array(
    'influence_blog_footer_one_advance_info' => array(),
    'influence_blog_footer_one_advance_toggle' => array(),
    'influence_blog_footer_one_advance_heading' => array(),
    'influence_blog_footer_one_advance_bg_image_size' => array(),
    'influence_blog_footer_one_advance_bg_image_attch' => array(),
    'influence_blog_footer_one_advance_bg_image_position_x' => array(),
    'influence_blog_footer_one_advance_bg_image_position_y' => array(),
    'influence_blog_footer_one_advance_border_top' => array(),
    'influence_blog_footer_one_advance_border_bottom' => array(),
    'influence_blog_footer_one_widget_area_advance_heading' => array(),
    'influence_blog_footer_one_widget_area_advance_border_width' => array(),
    'influence_blog_footer_one_widget_area_advance_p' => array(),
    'influence_blog_footer_one_widget_title_advance_heading' => array(),
    'influence_blog_footer_one_widget_title_advance_m' => array(),
    'influence_blog_footer_one_widget_title_advance_p' => array(),
);

$button_three_array = apply_filters( 'influence_blog_filter_footer_one_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Footer one options
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

/*---------------------------------- Footer one widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_widget_area_heading', array(
    'label'                    => esc_html__( 'Widget Area Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 7,
) ) );

/*---------------------------------- Footer one widget area alignment Info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_alignment_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_footer_one_widget_area_alignment_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => __( 'If there is spacing between column in widget areas, then it is only applicable.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 9,
) ) );

/*---------------------------------- Footer one widget area alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_alignment', array(
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_one_widget_area_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_widget_area_alignment', array(
    'label'                    => esc_html__( 'Widget Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $justify,
    'type'                     => 'select',
    'priority'                 => 11,
) );

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
    'priority'                 => 13,
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

/*---------------------------------- Footer one design border top color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_border_top_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_border_top_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_border_top_color', array(
    'label'                    => esc_html__( 'Border Top Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 145,
) ) );

/*---------------------------------- Footer one design border bottom color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_border_bottom_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_border_bottom_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_border_bottom_color', array(
    'label'                    => esc_html__( 'Border Bottom Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 150,
) ) );

/*---------------------------------- Footer one design widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_area_heading', array(
    'label'                    => esc_html__( 'Widget Area Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-design-widget-area-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 155,
) ) );

/*---------------------------------- Footer one design widget area bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_area_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_area_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_area_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 157,
) ) );

/*---------------------------------- Footer one design widget area border color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_area_border_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_area_border_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_area_border_color', array(
    'label'                    => esc_html__( 'Border Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 158,
) ) );

/*---------------------------------- Footer one design widget area title heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_area_title_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_area_title_heading', array(
    'label'                    => esc_html__( 'Widget Title Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-design-widget-area-title-heading' ),
    'controls_to_wrap'         => 10,
    'expanded'                 => false,
    'priority'                 => 160,
) ) );

/*---------------------------------- Footer one widget area alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_area_title_alignment', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_area_title_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_design_widget_area_title_alignment', array(
    'label'                    => esc_html__( 'Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $alignment,
    'type'                     => 'select',
    'priority'                 => 160,
) );

/*---------------------------------- Footer one design widget area title color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_area_title_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_area_title_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 160,
) ) );

/*---------------------------------- Footer one design widget title color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_title_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_title_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_title_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 165,
) ) );

/*---------------------------------- Footer one design widget title bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_title_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_title_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_title_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 170,
) ) );

/*---------------------------------- Footer one design widget area title typo heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_area_title_typo_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_area_title_typo_heading', array(
    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 175,
) ) );

/*---------------------------------- Footer one layout one design title typo font family -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_one_widget_area_design_title_font', array(
    'default'                  => influence_blog_defaults( 'typo_footer_one_widget_area_design_title_font' ),
    'sanitize_callback'        => 'sanitize_typography_one'
) );

$wp_customize->add_control( new Typography_One_Control( $wp_customize, 'influence_blog_typo_footer_one_widget_area_design_title_font', array(
    'label'                    => __( 'Font Family', 'influence-blog' ),
    'section'                  => $section,
    'input_attrs'              => $font_attrs,
    'priority'                 => 180,
) ) );

/*---------------------------------- Footer one layout one design title typo text transform -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_one_widget_area_design_title_transform', array(
    'default'                  => influence_blog_defaults( 'typo_footer_one_widget_area_design_title_transform' ),
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'transport' 		       => 'postMessage',
) );

$wp_customize->add_control( 'influence_blog_typo_footer_one_widget_area_design_title_transform', array(
    'label'                    => __( 'Text Transform', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $text_transform,
    'priority'                 => 185,
) );

/*---------------------------------- Footer one layout one design title typo font size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_one_widget_area_design_title_size_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_one_widget_area_design_title_size_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_one_widget_area_design_title_size_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_one_widget_area_design_title_size_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_one_widget_area_design_title_size_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_one_widget_area_design_title_size_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_one_widget_area_design_title_size', array(
    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_one_widget_area_design_title_size_d',
        'tablet' 	           => 'influence_blog_typo_footer_one_widget_area_design_title_size_t',
        'mobile' 	           => 'influence_blog_typo_footer_one_widget_area_design_title_size_m',
    ),
    'input_attrs' 		       => $size_attrs,
    'priority' 			       => 190,
) ) );

/*---------------------------------- Footer one layout one design title typo line height -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_one_widget_area_design_title_height_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_one_widget_area_design_title_height_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_one_widget_area_design_title_height_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_one_widget_area_design_title_height_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_one_widget_area_design_title_height_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_one_widget_area_design_title_height_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_one_widget_area_design_title_line_height', array(
    'label'                    => esc_html__( 'Line Height', 'influence-blog' ),
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_one_widget_area_design_title_height_d',
        'tablet' 	           => 'influence_blog_typo_footer_one_widget_area_design_title_height_t',
        'mobile' 	           => 'influence_blog_typo_footer_one_widget_area_design_title_height_m',
    ),
    'input_attrs' 		       => $line_height,
    'priority' 			       => 195,
) ) );

/*---------------------------------- Footer one layout one design title typo letter spacing -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_one_widget_area_design_title_spacing_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_one_widget_area_design_title_spacing_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_one_widget_area_design_title_spacing_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_one_widget_area_design_title_spacing_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_one_widget_area_design_title_spacing_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_one_widget_area_design_title_spacing_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_one_widget_area_design_title_spacing', array(
    'label'                    => esc_html__( 'Letter Spacing', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_one_widget_area_design_title_spacing_d',
        'tablet' 	           => 'influence_blog_typo_footer_one_widget_area_design_title_spacing_t',
        'mobile' 	           => 'influence_blog_typo_footer_one_widget_area_design_title_spacing_m',
    ),
    'input_attrs' 		       => $letter_spacing,
    'priority' 			       => 200,
) ) );

/*---------------------------------- Footer one design widget area content heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_area_content_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_area_content_heading', array(
    'label'                    => esc_html__( 'Widget Content Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-design-widget-area-content-heading' ),
    'controls_to_wrap'         => 8,
    'expanded'                 => false,
    'priority'                 => 210,
) ) );

/*---------------------------------- Footer one design widget area content color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_area_content_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_area_content_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 215,
) ) );

/*---------------------------------- Footer one design widget content color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_content_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_content_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_content_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 220,
) ) );

/*---------------------------------- Footer one design widget content hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_content_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_content_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_content_hover_color', array(
    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 225,
) ) );

/*---------------------------------- Footer one design widget content bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_content_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_content_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_content_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 230,
) ) );

/*---------------------------------- Footer one design widget content bg hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_content_bg_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_content_bg_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_content_bg_hover_color', array(
    'label'                    => esc_html__( 'Background Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 235,
) ) );

/*---------------------------------- Footer one design widget content border color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_content_border_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_content_border_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_content_border_color', array(
    'label'                    => esc_html__( 'Border Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 235,
) ) );

/*---------------------------------- Footer one design widget content button color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_content_button_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_content_button_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_content_button_color', array(
    'label'                    => esc_html__( 'Button Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 240,
) ) );

/*---------------------------------- Footer one design widget content button hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_design_widget_content_button_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_one_design_widget_content_button_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_one_design_widget_content_button_hover_color', array(
    'label'                    => esc_html__( 'Button Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 245,
) ) );

/*-----------------------------------------------------------------------------
							 Advance options
-----------------------------------------------------------------------------*/

/*---------------------------------- Footer one advance Info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_advance_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_footer_one_advance_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => __( 'Recommended for experienced user.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 250,
) ) );

/*---------------------------------- Footer one advance toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_advance_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'footer_one_advance_toggle' ),
) );

$wp_customize->add_control( new Toggle_Two_Control ( $wp_customize, 'influence_blog_footer_one_advance_toggle', array(
    'label'                    => esc_html__( 'Enable Advance Settings', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-two',
    'priority'                 => 255,
) ) );

/*---------------------------------- Footer one advance heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_advance_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_advance_heading', array(
    'label'                    => esc_html__( 'Footer One Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 260,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) ) );

/*---------------------------------- Footer one advance bg image size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_advance_bg_image_size', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'transport' 			   => 'postMessage',
    'default'                  => influence_blog_defaults( 'footer_one_advance_bg_image_size' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_advance_bg_image_size', array(
    'label'                    => esc_html__( 'Image Size', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $background_image_sizes,
    'priority'                 => 265,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) );

/*---------------------------------- Footer one advance bg image attachment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_advance_bg_image_attch', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'transport' 			   => 'postMessage',
    'default'                  => influence_blog_defaults( 'footer_one_advance_bg_image_attch' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_advance_bg_image_attch', array(
    'label'                    => esc_html__( 'Image Attachment', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $background_image_attachment,
    'priority'                 => 270,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) );

/*---------------------------------- Footer one advance bg image position X -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_advance_bg_image_position_x', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'transport' 			   => 'postMessage',
    'default'                  => influence_blog_defaults( 'footer_one_advance_bg_image_position_x' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_advance_bg_image_position_x', array(
    'label'                    => esc_html__( 'Image Position', 'influence-blog' ) . ' (X)',
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $background_image_positions_x,
    'priority'                 => 275,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) );

/*---------------------------------- Footer one advance bg image position Y -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_advance_bg_image_position_y', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'transport' 			   => 'postMessage',
    'default'                  => influence_blog_defaults( 'footer_one_advance_bg_image_position_y' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_advance_bg_image_position_y', array(
    'label'                    => esc_html__( 'Image Position', 'influence-blog' ) . ' (Y)',
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $background_image_positions_y,
    'priority'                 => 280,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) );

/*---------------------------------- Footer one advance border top -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_advance_border_top', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_one_advance_border_top' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_one_advance_border_top', array(
    'label'                    => esc_html__( 'Border Top', 'influence-blog' ) . '( px)',
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 10,
        'step'                 => 0.5,
    ),
    'priority'                 => 285,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) ) );

/*---------------------------------- Footer one advance border bottom -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_advance_border_bottom', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_one_advance_border_bottom' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_one_advance_border_bottom', array(
    'label'                    => esc_html__( 'Border Bottom', 'influence-blog' ) . '( px)',
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 10,
        'step'                 => 0.5,
    ),
    'priority'                 => 290,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) ) );

/*---------------------------------- Footer one widget area advance heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_widget_area_advance_heading', array(
    'label'                    => esc_html__( 'Widget Area Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-widget-area-advance-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 295,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) ) );

/*---------------------------------- Footer one widget area advance border width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_border_width', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_one_widget_area_advance_border_width' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_one_widget_area_advance_border_width', array(
    'label'                    => esc_html__( 'Border Width', 'influence-blog' ) . '( px)',
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 10,
        'step'                 => 0.5,
    ),
    'priority'                 => 300,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) ) );

/*---------------------------------- Footer one widget area advance padding -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_d_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_d_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_d_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_d_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_d_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_d_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_d_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_d_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_t_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_t_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_t_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_t_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_t_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_t_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_t_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_t_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_m_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_m_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_m_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_m_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_m_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_m_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_area_advance_m_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_area_advance_m_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_footer_one_widget_area_advance_p', array(
    'label'	   				   => esc_html__( 'Padding', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_one_widget_area_advance_d_p_top',
        'desktop_right' 	   => 'influence_blog_footer_one_widget_area_advance_d_p_right',
        'desktop_bottom' 	   => 'influence_blog_footer_one_widget_area_advance_d_p_bottom',
        'desktop_left' 	       => 'influence_blog_footer_one_widget_area_advance_d_p_left',
        'tablet_top' 		   => 'influence_blog_footer_one_widget_area_advance_t_p_top',
        'tablet_right' 		   => 'influence_blog_footer_one_widget_area_advance_t_p_right',
        'tablet_bottom' 	   => 'influence_blog_footer_one_widget_area_advance_t_p_bottom',
        'tablet_left' 		   => 'influence_blog_footer_one_widget_area_advance_t_p_left',
        'mobile_top' 		   => 'influence_blog_footer_one_widget_area_advance_m_p_top',
        'mobile_right' 		   => 'influence_blog_footer_one_widget_area_advance_m_p_right',
        'mobile_bottom' 	   => 'influence_blog_footer_one_widget_area_advance_m_p_bottom',
        'mobile_left' 		   => 'influence_blog_footer_one_widget_area_advance_m_p_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => 0,
        'max'                  => 50,
        'step'                 => 1,
    ),
    'priority' 				   => 305,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) ) );

/*---------------------------------- Footer one widget title advance heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_widget_title_advance_heading', array(
    'label'                    => esc_html__( 'Widget Title Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-widget-title-advance-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 310,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) ) );

/*---------------------------------- Footer one widget title advance margin -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_d_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_d_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_d_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_d_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_d_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_d_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_d_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_d_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_t_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_t_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_t_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_t_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_t_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_t_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_t_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_t_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_m_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_m_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_m_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_m_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_m_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_m_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_m_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_m_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_footer_one_widget_title_advance_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_one_widget_title_advance_d_m_top',
        'desktop_right' 	   => 'influence_blog_footer_one_widget_title_advance_d_m_right',
        'desktop_bottom' 	   => 'influence_blog_footer_one_widget_title_advance_d_m_bottom',
        'desktop_left' 	       => 'influence_blog_footer_one_widget_title_advance_d_m_left',
        'tablet_top' 		   => 'influence_blog_footer_one_widget_title_advance_t_m_top',
        'tablet_right' 		   => 'influence_blog_footer_one_widget_title_advance_t_m_right',
        'tablet_bottom' 	   => 'influence_blog_footer_one_widget_title_advance_t_m_bottom',
        'tablet_left' 		   => 'influence_blog_footer_one_widget_title_advance_t_m_left',
        'mobile_top' 		   => 'influence_blog_footer_one_widget_title_advance_m_m_top',
        'mobile_right' 		   => 'influence_blog_footer_one_widget_title_advance_m_m_right',
        'mobile_bottom' 	   => 'influence_blog_footer_one_widget_title_advance_m_m_bottom',
        'mobile_left' 		   => 'influence_blog_footer_one_widget_title_advance_m_m_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => -50,
        'max'                  => 50,
        'step'                 => 1,
    ),
    'priority' 				   => 315,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) ) );

/*---------------------------------- Footer one widget title advance padding -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_d_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_d_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_d_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_d_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_d_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_d_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_d_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_d_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_t_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_t_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_t_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_t_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_t_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_t_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_t_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_t_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_m_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_m_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_m_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_m_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_m_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_m_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_one_widget_title_advance_m_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_one_widget_title_advance_m_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_footer_one_widget_title_advance_p', array(
    'label'	   				   => esc_html__( 'Padding', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_one_widget_title_advance_d_p_top',
        'desktop_right' 	   => 'influence_blog_footer_one_widget_title_advance_d_p_right',
        'desktop_bottom' 	   => 'influence_blog_footer_one_widget_title_advance_d_p_bottom',
        'desktop_left' 	       => 'influence_blog_footer_one_widget_title_advance_d_p_left',
        'tablet_top' 		   => 'influence_blog_footer_one_widget_title_advance_t_p_top',
        'tablet_right' 		   => 'influence_blog_footer_one_widget_title_advance_t_p_right',
        'tablet_bottom' 	   => 'influence_blog_footer_one_widget_title_advance_t_p_bottom',
        'tablet_left' 		   => 'influence_blog_footer_one_widget_title_advance_t_p_left',
        'mobile_top' 		   => 'influence_blog_footer_one_widget_title_advance_m_p_top',
        'mobile_right' 		   => 'influence_blog_footer_one_widget_title_advance_m_p_right',
        'mobile_bottom' 	   => 'influence_blog_footer_one_widget_title_advance_m_p_bottom',
        'mobile_left' 		   => 'influence_blog_footer_one_widget_title_advance_m_p_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => 0,
        'max'                  => 50,
        'step'                 => 1,
    ),
    'priority' 				   => 320,
    'active_callback'          => 'influence_blog_is_footer_one_advance_enable',
) ) );
