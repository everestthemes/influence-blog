<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_footer_two_section';

$tabs     = influence_blog_tab_one_array();

$area_lists  = influence_blog_get_registered_widget_areas();

$alignment  = influence_blog_alignment_array();

$font_attrs = influence_blog_font_attrs_array();

$size_attrs = influence_blog_font_size_attrs_array();

$text_transform = influence_blog_font_text_transform_array();

$line_height = influence_blog_line_height_attrs_array();

$letter_spacing = influence_blog_letter_spacing_attrs_array();

$background_image_sizes = influence_blog_background_image_sizes_array();

$background_image_positions_x = influence_blog_background_image_positions_x_array();

$background_image_positions_y = influence_blog_background_image_positions_y_array();

$background_image_attachment = influence_blog_background_image_attachment_array();

$button_one_array = array(
    'influence_blog_footer_two_arrange_heading' => array(),
    'influence_blog_arrange_footer_two' => array(),
    'influence_blog_footer_two_title_heading' => array(),
    'influence_blog_footer_two_title' => array(),
    'influence_blog_footer_two_title_col' => array(),
    'influence_blog_footer_two_title_alignment' => array(),
    'influence_blog_footer_two_social_links_heading' => array(),
    'influence_blog_footer_two_social_links' => array(),
    'influence_blog_footer_two_social_links_tab_toggle' => array(),
    'influence_blog_footer_two_social_links_col' => array(),
    'influence_blog_footer_two_social_links_alignment' => array(),
    'influence_blog_footer_two_widget_area_heading' => array(),
    'influence_blog_footer_two_widget_area_select' => array(),
    'influence_blog_footer_two_widget_area_col' => array(),
    'influence_blog_footer_two_widget_area_alignment' => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_footer_two_button_one_array', $button_one_array );

$button_two_array = array(
    'influence_blog_footer_two_design_heading' => array(),
    'influence_blog_footer_two_design_bg_image' => array(),
    'influence_blog_footer_two_design_bg_color' => array(),
    'influence_blog_footer_two_design_border_top_color' => array(),
    'influence_blog_footer_two_design_border_bottom_color' => array(),
    'influence_blog_footer_two_design_title_heading' => array(),
    'influence_blog_footer_two_design_title_color_heading' => array(),
    'influence_blog_footer_two_design_title_color' => array(),
    'influence_blog_footer_two_design_title_border_color' => array(),
    'influence_blog_footer_two_design_title_typo_heading' => array(),
    'influence_blog_typo_footer_two_design_title_font' => array(),
    'influence_blog_typo_footer_two_design_title_transform' => array(),
    'influence_blog_typo_footer_two_design_title_size' => array(),
    'influence_blog_typo_footer_two_design_title_line_height' => array(),
    'influence_blog_typo_footer_two_design_title_spacing' => array(),
    'influence_blog_footer_two_design_social_links_heading'  => array(),
    'influence_blog_footer_two_design_social_links_color_heading'  => array(),
    'influence_blog_footer_two_design_social_links_color'  => array(),
    'influence_blog_footer_two_design_social_links_hover_color'  => array(),
    'influence_blog_footer_two_design_social_links_border_color'  => array(),
    'influence_blog_footer_two_design_social_links_border_hover_color'  => array(),
    'influence_blog_footer_two_design_social_links_typo_heading'  => array(),
    'influence_blog_typo_footer_two_design_social_links_size'  => array(),

    'influence_blog_footer_two_design_widget_area_heading' => array(),
    'influence_blog_footer_two_design_widget_area_bg_color' => array(),
    'influence_blog_footer_two_design_widget_area_border_color' => array(),
    'influence_blog_footer_two_design_widget_area_title_heading' => array(),
    'influence_blog_footer_two_design_widget_area_title_alignment' => array(),
    'influence_blog_footer_two_design_widget_area_title_color_heading' => array(),
    'influence_blog_footer_two_design_widget_title_color' => array(),
    'influence_blog_footer_two_design_widget_title_border_color' => array(),
    'influence_blog_footer_two_design_widget_area_title_typo_heading' => array(),
    'influence_blog_typo_footer_two_widget_area_design_title_font' => array(),
    'influence_blog_typo_footer_two_widget_area_design_title_transform' => array(),
    'influence_blog_typo_footer_two_widget_area_design_title_size' => array(),
    'influence_blog_typo_footer_two_widget_area_design_title_line_height' => array(),
    'influence_blog_typo_footer_two_widget_area_design_title_spacing' => array(),
    'influence_blog_footer_two_design_widget_area_content_heading' => array(),
    'influence_blog_footer_two_design_widget_area_content_color_heading' => array(),
    'influence_blog_footer_two_design_widget_content_color' => array(),
    'influence_blog_footer_two_design_widget_content_hover_color' => array(),
    'influence_blog_footer_two_design_widget_content_bg_color' => array(),
    'influence_blog_footer_two_design_widget_content_bg_hover_color' => array(),
    'influence_blog_footer_two_design_widget_content_border_color' => array(),
    'influence_blog_footer_two_design_widget_content_button_color' => array(),
    'influence_blog_footer_two_design_widget_content_button_hover_color' => array(),
);

$button_two_array = apply_filters( 'influence_blog_filter_footer_two_button_two_array', $button_two_array );

$button_three_array = array(
    'influence_blog_footer_two_advance_info' => array(),
    'influence_blog_footer_two_advance_toggle' => array(),
    'influence_blog_footer_two_advance_heading' => array(),
    'influence_blog_footer_two_advance_bg_image_size' => array(),
    'influence_blog_footer_two_advance_bg_image_attch' => array(),
    'influence_blog_footer_two_advance_bg_image_position_x' => array(),
    'influence_blog_footer_two_advance_bg_image_position_y' => array(),
    'influence_blog_footer_two_advance_border_top' => array(),
    'influence_blog_footer_two_advance_border_bottom' => array(),
    'influence_blog_footer_two_title_advance_heading' => array(),
    'influence_blog_footer_two_title_advance_m' => array(),
    'influence_blog_footer_two_title_advance_p' => array(),
    'influence_blog_footer_two_title_advance_border' => array(),
    'influence_blog_footer_two_social_links_advance_heading' => array(),
    'influence_blog_footer_two_social_links_advance_m' => array(),
    'influence_blog_footer_two_social_links_advance_p' => array(),
    'influence_blog_footer_two_widget_area_advance_heading' => array(),
    'influence_blog_footer_two_widget_area_advance_border_width' => array(),
    'influence_blog_footer_two_widget_area_advance_m' => array(),
    'influence_blog_footer_two_widget_area_advance_p' => array(),
    'influence_blog_footer_two_widget_title_advance_heading' => array(),
    'influence_blog_footer_two_widget_title_advance_m' => array(),
    'influence_blog_footer_two_widget_title_advance_p' => array(),
    'influence_blog_footer_two_widget_title_advance_border_width' => array(),
);

$button_three_array = apply_filters( 'influence_blog_filter_footer_two_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Footer two options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Influence_Blog_Tab_One_Control( $wp_customize, 'influence_blog_footer_two_tabs', array(
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

/*---------------------------------- Footer two arrange elements heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_arrange_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_arrange_heading', array(
    'label'                    => esc_html__( 'Arrange Elements', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Arrange footer two options -----------------------------------*/

$arrange_footer_two_options = influence_blog_arrange_footer_two_options();

$arrange_footer_two_option  = array();

foreach( $arrange_footer_two_options as $key => $val ) {

   $arrange_footer_two_option[ $key ] = $val[ 'label' ];
}

$wp_customize->add_setting( 'influence_blog_arrange_footer_two', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'sanitize_sortable_one',
    'default'                  => influence_blog_sortable_defaults ( $arrange_footer_two_options ),
) );

$wp_customize->add_control( new Influence_Blog_Sortable_One_Control( $wp_customize, 'influence_blog_arrange_footer_two', array(
	'section'				   => $section,
    'choices'                  => $arrange_footer_two_option,
    'priority'                 => 15,
) ) );

/*---------------------------------- Footer two title heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_title_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_title_heading', array(
    'label'                    => esc_html__( 'Main Title Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-title-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 20,
) ) );

/*---------------------------------- Footer two title -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_title', array(
    'sanitize_callback'        => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'footer_two_title' ),
) );

$wp_customize->add_control( new Influence_Blog_Sortable_One_Control( $wp_customize, 'influence_blog_footer_two_title', array(
    'label'                    => esc_html__( 'Title', 'influence-blog' ),
	'section'				   => $section,
    'type'                     => 'text',
    'priority'                 => 25,
) ) );

/*---------------------------------- Footer two title col -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_title_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_two_title_col' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_two_title_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 30,
) ) );

/*---------------------------------- Footer two title alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_title_alignment', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_two_title_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_footer_two_title_alignment', array(
    'label'                    => esc_html__( 'Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $alignment,
    'type'                     => 'select',
    'priority'                 => 35,
) );

/*---------------------------------- Footer two social links heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_social_links_heading', array(
    'label'                    => esc_html__( 'Social Links Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-social-links-heading' ),
    'controls_to_wrap'         => 4,
    'expanded'                 => false,
    'priority'                 => 40,
) ) );

/*---------------------------------- Footer two social links repeater -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_social_links', array(
    'sanitize_callback'        => 'sanitize_repeater_two',
) );

$wp_customize->add_control( new Influence_Blog_Repeater_Two_Control( $wp_customize, 'influence_blog_footer_two_social_links', array(
    'label'                    => esc_html__( 'Social Links','influence-blog' ),
    'section'                  => $section,
    'add_field_label'          => esc_html__( 'Add New Social Links', 'influence-blog' ),
    'item_name'                => esc_html__( 'Icon', 'influence-blog' ),
    'priority'                 => 45,
    'customizer_repeater_two_icon_control' => true,
    'customizer_repeater_two_link_control' => true,
) ) );

/*---------------------------------- Footer two social links toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_tab_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'footer_two_social_links_tab_toggle' ),
) );

$wp_customize->add_control( new Influence_Blog_Toggle_Three_Control ( $wp_customize, 'influence_blog_footer_two_social_links_tab_toggle', array(
    'label'                    => esc_html__( 'Open in new tab', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 50,
) ) );

/*---------------------------------- Footer two social links col -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_two_social_links_col' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_two_social_links_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 55,
) ) );

/*---------------------------------- Footer two social links alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_alignment', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_two_social_links_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_footer_two_social_links_alignment', array(
    'label'                    => esc_html__( 'Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $alignment,
    'type'                     => 'select',
    'priority'                 => 60,
) );


/*---------------------------------- Footer two widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_widget_area_heading', array(
    'label'                    => esc_html__( 'Widget Area Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-widget-area-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 65,
) ) );

/*---------------------------------- Footer two widget area select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_two_widget_area_select' ),
) );

$wp_customize->add_control( 'influence_blog_footer_two_widget_area_select', array(
    'label'                    => esc_html__( 'Select Widget Area', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $area_lists,
    'type'                     => 'select',
    'priority'                 => 70,
) );

/*---------------------------------- Footer two widget area column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_two_widget_area_col' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_two_widget_area_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 75,
) ) );

/*---------------------------------- Footer two widget area alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_alignment', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_two_widget_area_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_footer_two_widget_area_alignment', array(
    'label'                    => esc_html__( 'Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $alignment,
    'type'                     => 'select',
    'priority'                 => 80,
) );

/*-----------------------------------------------------------------------------
							 Design options
-----------------------------------------------------------------------------*/

/*---------------------------------- Footer two design heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_heading', array(
    'label'                    => esc_html__( 'Footer Two Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 85,
) ) );

/*---------------------------------- Footer two design background image -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_bg_image', array(
    'sanitize_callback'        => 'influence_blog_sanitize_image',
    'default'                  => influence_blog_defaults( 'footer_two_design_bg_image' ),
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'influence_blog_footer_two_design_bg_image', array(
    'label'       		       => esc_html__( 'Background Image', 'influence-blog' ),
    'section'     		       => $section,
    'priority'                 => 90,
) ) );

/*---------------------------------- Footer two design background color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_bg_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 95,
) ) );

/*---------------------------------- Footer two design border top color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_border_top_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_border_top_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_border_top_color', array(
    'label'                    => esc_html__( 'Border Top Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 100,
) ) );

/*---------------------------------- Footer two design border bottom color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_border_bottom_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_border_bottom_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_border_bottom_color', array(
    'label'                    => esc_html__( 'Border Bottom Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 105,
) ) );

/*---------------------------------- Footer two design title heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_title_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_title_heading', array(
    'label'                    => esc_html__( 'Main Title Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-design-title-heading' ),
    'controls_to_wrap'         => 9,
    'expanded'                 => false,
    'priority'                 => 110,
) ) );

/*---------------------------------- Footer two design title color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_title_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_title_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 115,
) ) );

/*---------------------------------- Footer two design title color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_title_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_title_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_title_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 120,
) ) );

/*---------------------------------- Footer two design title border color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_title_border_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_title_border_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_title_border_color', array(
    'label'                    => esc_html__( 'Border Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 125,
) ) );

/*---------------------------------- Footer two design title typo heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_title_typo_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_title_typo_heading', array(
    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 130,
) ) );

/*---------------------------------- Footer two title typo font family -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_title_font', array(
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_title_font' ),
    'sanitize_callback'        => 'sanitize_typography_one'
) );

$wp_customize->add_control( new Influence_Blog_Typography_One_Control( $wp_customize, 'influence_blog_typo_footer_two_design_title_font', array(
    'label'                    => __( 'Font Family', 'influence-blog' ),
    'section'                  => $section,
    'input_attrs'              => $font_attrs,
    'priority'                 => 135,
) ) );

/*---------------------------------- Footer two design title typo text transform -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_title_transform', array(
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_title_transform' ),
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'transport' 		       => 'postMessage',
) );

$wp_customize->add_control( 'influence_blog_typo_footer_two_design_title_transform', array(
    'label'                    => __( 'Text Transform', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $text_transform,
    'priority'                 => 140,
) );

/*---------------------------------- Footer two design title typo font size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_title_size_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_title_size_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_title_size_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_title_size_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_title_size_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_title_size_m' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_two_design_title_size', array(
    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_two_design_title_size_d',
        'tablet' 	           => 'influence_blog_typo_footer_two_design_title_size_t',
        'mobile' 	           => 'influence_blog_typo_footer_two_design_title_size_m',
    ),
    'input_attrs' 		       => $size_attrs,
    'priority' 			       => 145,
) ) );

/*---------------------------------- Footer two design title typo line height -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_title_height_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_title_height_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_title_height_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_title_height_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_title_height_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_title_height_m' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_two_design_title_line_height', array(
    'label'                    => esc_html__( 'Line Height', 'influence-blog' ),
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_two_design_title_height_d',
        'tablet' 	           => 'influence_blog_typo_footer_two_design_title_height_t',
        'mobile' 	           => 'influence_blog_typo_footer_two_design_title_height_m',
    ),
    'input_attrs' 		       => $line_height,
    'priority' 			       => 150,
) ) );

/*---------------------------------- Footer two design title typo letter spacing -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_title_spacing_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_title_spacing_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_title_spacing_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_title_spacing_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_title_spacing_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_title_spacing_m' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_two_design_title_spacing', array(
    'label'                    => esc_html__( 'Letter Spacing', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_two_design_title_spacing_d',
        'tablet' 	           => 'influence_blog_typo_footer_two_design_title_spacing_t',
        'mobile' 	           => 'influence_blog_typo_footer_two_design_title_spacing_m',
    ),
    'input_attrs' 		       => $letter_spacing,
    'priority' 			       => 155,
) ) );

/*---------------------------------- Footer two design social links heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_social_links_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_social_links_heading', array(
    'label'                    => esc_html__( 'Social Links Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-design-social-links-heading' ),
    'controls_to_wrap'         => 7,
    'expanded'                 => false,
    'priority'                 => 160,
) ) );

/*---------------------------------- Footer two design social links color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_social_links_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_social_links_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => false,
    'class'                    => esc_attr( 'footer-two-design-social-links-color-heading' ),
    'controls_to_wrap'         => 4,
    'expanded'                 => false,
    'priority'                 => 165,
) ) );

/*---------------------------------- Footer two design social links color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_social_links_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_social_links_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_social_links_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 170,
) ) );

/*---------------------------------- Footer two design social links hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_social_links_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_social_links_hover_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_social_links_hover_color', array(
    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 175,
) ) );

/*---------------------------------- Footer two design social links border color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_social_links_border_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_social_links_border_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_social_links_border_color', array(
    'label'                    => esc_html__( 'Border Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 180,
) ) );

/*---------------------------------- Footer two design social links border hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_social_links_border_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_social_links_border_hover_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_social_links_border_hover_color', array(
    'label'                    => esc_html__( 'Border Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 185,
) ) );

/*---------------------------------- Footer two design social links typo heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_social_links_typo_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_social_links_typo_heading', array(
    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => false,
    'class'                    => esc_attr( 'footer-two-design-social-links-typo-heading' ),
    'controls_to_wrap'         => 1,
    'expanded'                 => false,
    'priority'                 => 190,
) ) );

/*---------------------------------- Footer two design social links typo font size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_social_links_size_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_social_links_size_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_social_links_size_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_social_links_size_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_design_social_links_size_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_design_social_links_size_m' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_two_design_social_links_size', array(
    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_two_design_social_links_size_d',
        'tablet' 	           => 'influence_blog_typo_footer_two_design_social_links_size_t',
        'mobile' 	           => 'influence_blog_typo_footer_two_design_social_links_size_m',
    ),
    'input_attrs' 		       => $size_attrs,
    'priority' 			       => 195,
) ) );

/*---------------------------------- Footer two design widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_heading', array(
    'label'                    => esc_html__( 'Widget Area Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-design-widget-area-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 200,
) ) );

/*---------------------------------- Footer two design widget area bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_area_bg_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 205,
) ) );

/*---------------------------------- Footer two design widget area border color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_border_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_area_border_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_border_color', array(
    'label'                    => esc_html__( 'Border Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 210,
) ) );

/*---------------------------------- Footer two design widget area title heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_title_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_title_heading', array(
    'label'                    => esc_html__( 'Widget Title Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-design-widget-area-title-heading' ),
    'controls_to_wrap'         => 10,
    'expanded'                 => false,
    'priority'                 => 215,
) ) );

/*---------------------------------- Footer two widget area alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_title_alignment', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_area_title_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_footer_two_design_widget_area_title_alignment', array(
    'label'                    => esc_html__( 'Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $alignment,
    'type'                     => 'select',
    'priority'                 => 220,
) );

/*---------------------------------- Footer two design widget area title color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_title_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_title_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 225,
) ) );

/*---------------------------------- Footer two design widget title color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_title_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_title_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_title_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 230,
) ) );

/*---------------------------------- Footer two design widget title border color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_title_border_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_title_border_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_title_border_color', array(
    'label'                    => esc_html__( 'Border Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 235,
) ) );

/*---------------------------------- Footer two design widget area title typo heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_title_typo_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_title_typo_heading', array(
    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 240,
) ) );

/*---------------------------------- Footer two widget area design title typo font family -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_font', array(
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_font' ),
    'sanitize_callback'        => 'sanitize_typography_one'
) );

$wp_customize->add_control( new Influence_Blog_Typography_One_Control( $wp_customize, 'influence_blog_typo_footer_two_widget_area_design_title_font', array(
    'label'                    => __( 'Font Family', 'influence-blog' ),
    'section'                  => $section,
    'input_attrs'              => $font_attrs,
    'priority'                 => 245,
) ) );

/*---------------------------------- Footer two widget area design title typo text transform -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_transform', array(
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_transform' ),
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'transport' 		       => 'postMessage',
) );

$wp_customize->add_control( 'influence_blog_typo_footer_two_widget_area_design_title_transform', array(
    'label'                    => __( 'Text Transform', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $text_transform,
    'priority'                 => 250,
) );

/*---------------------------------- Footer two widget area design title typo font size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_size_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_size_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_size_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_size_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_size_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_size_m' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_two_widget_area_design_title_size', array(
    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_size_d',
        'tablet' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_size_t',
        'mobile' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_size_m',
    ),
    'input_attrs' 		       => $size_attrs,
    'priority' 			       => 255,
) ) );

/*---------------------------------- Footer two widget area design title typo line height -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_height_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_height_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_height_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_height_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_height_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_height_m' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_two_widget_area_design_title_line_height', array(
    'label'                    => esc_html__( 'Line Height', 'influence-blog' ),
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_height_d',
        'tablet' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_height_t',
        'mobile' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_height_m',
    ),
    'input_attrs' 		       => $line_height,
    'priority' 			       => 260,
) ) );

/*---------------------------------- Footer two widget area design title typo letter spacing -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_spacing_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_spacing_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_spacing_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_spacing_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_spacing_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_spacing_m' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_two_widget_area_design_title_spacing', array(
    'label'                    => esc_html__( 'Letter Spacing', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_spacing_d',
        'tablet' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_spacing_t',
        'mobile' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_spacing_m',
    ),
    'input_attrs' 		       => $letter_spacing,
    'priority' 			       => 265,
) ) );

/*---------------------------------- Footer two design widget area content heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_content_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_content_heading', array(
    'label'                    => esc_html__( 'Widget Content Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-design-widget-area-content-heading' ),
    'controls_to_wrap'         => 8,
    'expanded'                 => false,
    'priority'                 => 270,
) ) );

/*---------------------------------- Footer two design widget area content color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_content_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_content_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 275,
) ) );

/*---------------------------------- Footer two design widget content color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 280,
) ) );

/*---------------------------------- Footer two design widget content hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_hover_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_hover_color', array(
    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 285,
) ) );

/*---------------------------------- Footer two design widget content bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_bg_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 290,
) ) );

/*---------------------------------- Footer two design widget content bg hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_bg_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_bg_hover_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_bg_hover_color', array(
    'label'                    => esc_html__( 'Background Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 295,
) ) );

/*---------------------------------- Footer two design widget content border color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_border_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_border_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_border_color', array(
    'label'                    => esc_html__( 'Border Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 300,
) ) );

/*---------------------------------- Footer two design widget content button color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_button_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_button_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_button_color', array(
    'label'                    => esc_html__( 'Button Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 305,
) ) );

/*---------------------------------- Footer two design widget content button hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_button_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_button_hover_color' ),
) );

$wp_customize->add_control( new Influence_Blog_Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_button_hover_color', array(
    'label'                    => esc_html__( 'Button Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 310,
) ) );


/*-----------------------------------------------------------------------------
							 Advance options
-----------------------------------------------------------------------------*/

/*---------------------------------- Footer two advance Info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_advance_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Info_One_Control ( $wp_customize, 'influence_blog_footer_two_advance_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => __( 'Recommended for experienced user.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 315,
) ) );

/*---------------------------------- Footer two advance toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_advance_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'footer_two_advance_toggle' ),
) );

$wp_customize->add_control( new Influence_Blog_Toggle_Two_Control ( $wp_customize, 'influence_blog_footer_two_advance_toggle', array(
    'label'                    => esc_html__( 'Enable Advance Settings', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-two',
    'priority'                 => 320,
) ) );

/*---------------------------------- Footer two advance heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_advance_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_advance_heading', array(
    'label'                    => esc_html__( 'Footer Two Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 325,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two advance bg image size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_advance_bg_image_size', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'transport' 			   => 'postMessage',
    'default'                  => influence_blog_defaults( 'footer_two_advance_bg_image_size' ),
) );

$wp_customize->add_control( 'influence_blog_footer_two_advance_bg_image_size', array(
    'label'                    => esc_html__( 'Image Size', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $background_image_sizes,
    'priority'                 => 330,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) );

/*---------------------------------- Footer two advance bg image attachment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_advance_bg_image_attch', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'transport' 			   => 'postMessage',
    'default'                  => influence_blog_defaults( 'footer_two_advance_bg_image_attch' ),
) );

$wp_customize->add_control( 'influence_blog_footer_two_advance_bg_image_attch', array(
    'label'                    => esc_html__( 'Image Attachment', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $background_image_attachment,
    'priority'                 => 335,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) );

/*---------------------------------- Footer two advance bg image position X -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_advance_bg_image_position_x', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'transport' 			   => 'postMessage',
    'default'                  => influence_blog_defaults( 'footer_two_advance_bg_image_position_x' ),
) );

$wp_customize->add_control( 'influence_blog_footer_two_advance_bg_image_position_x', array(
    'label'                    => esc_html__( 'Image Position', 'influence-blog' ) . ' (X)',
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $background_image_positions_x,
    'priority'                 => 340,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) );

/*---------------------------------- Footer two advance bg image position Y -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_advance_bg_image_position_y', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'transport' 			   => 'postMessage',
    'default'                  => influence_blog_defaults( 'footer_two_advance_bg_image_position_y' ),
) );

$wp_customize->add_control( 'influence_blog_footer_two_advance_bg_image_position_y', array(
    'label'                    => esc_html__( 'Image Position', 'influence-blog' ) . ' (Y)',
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $background_image_positions_y,
    'priority'                 => 345,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) );

/*---------------------------------- Footer two advance border top -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_advance_border_top', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_two_advance_border_top' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_two_advance_border_top', array(
    'label'                    => esc_html__( 'Border Top', 'influence-blog' ) . ' (px)',
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 10,
        'step'                 => 0.5,
    ),
    'priority'                 => 350,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two advance border bottom -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_advance_border_bottom', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_two_advance_border_bottom' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_two_advance_border_bottom', array(
    'label'                    => esc_html__( 'Border Bottom', 'influence-blog' ) . ' (px)',
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 10,
        'step'                 => 0.5,
    ),
    'priority'                 => 355,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two title advance heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_title_advance_heading', array(
    'label'                    => esc_html__( 'Main Title Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-title-advance-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 360,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two title advance margin -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_d_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_d_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_d_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_d_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_d_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_d_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_d_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_d_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_t_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_t_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_t_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_t_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_t_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_t_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_t_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_t_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_m_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_m_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_m_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_m_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_m_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_m_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_m_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_m_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Influence_Blog_Dimension_One_Control( $wp_customize, 'influence_blog_footer_two_title_advance_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_two_title_advance_d_m_top',
        'desktop_right' 	   => 'influence_blog_footer_two_title_advance_d_m_right',
        'desktop_bottom' 	   => 'influence_blog_footer_two_title_advance_d_m_bottom',
        'desktop_left' 	       => 'influence_blog_footer_two_title_advance_d_m_left',
        'tablet_top' 		   => 'influence_blog_footer_two_title_advance_t_m_top',
        'tablet_right' 		   => 'influence_blog_footer_two_title_advance_t_m_right',
        'tablet_bottom' 	   => 'influence_blog_footer_two_title_advance_t_m_bottom',
        'tablet_left' 		   => 'influence_blog_footer_two_title_advance_t_m_left',
        'mobile_top' 		   => 'influence_blog_footer_two_title_advance_m_m_top',
        'mobile_right' 		   => 'influence_blog_footer_two_title_advance_m_m_right',
        'mobile_bottom' 	   => 'influence_blog_footer_two_title_advance_m_m_bottom',
        'mobile_left' 		   => 'influence_blog_footer_two_title_advance_m_m_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => -200,
        'max'                  => 200,
        'step'                 => 1,
    ),
    'priority' 				   => 365,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two title advance padding -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_d_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_d_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_d_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_d_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_d_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_d_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_d_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_d_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_t_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_t_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_t_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_t_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_t_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_t_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_t_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_t_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_m_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_m_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_m_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_m_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_m_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_m_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_m_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_title_advance_m_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Influence_Blog_Dimension_One_Control( $wp_customize, 'influence_blog_footer_two_title_advance_p', array(
    'label'	   				   => esc_html__( 'Padding', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_two_title_advance_d_p_top',
        'desktop_right' 	   => 'influence_blog_footer_two_title_advance_d_p_right',
        'desktop_bottom' 	   => 'influence_blog_footer_two_title_advance_d_p_bottom',
        'desktop_left' 	       => 'influence_blog_footer_two_title_advance_d_p_left',
        'tablet_top' 		   => 'influence_blog_footer_two_title_advance_t_p_top',
        'tablet_right' 		   => 'influence_blog_footer_two_title_advance_t_p_right',
        'tablet_bottom' 	   => 'influence_blog_footer_two_title_advance_t_p_bottom',
        'tablet_left' 		   => 'influence_blog_footer_two_title_advance_t_p_left',
        'mobile_top' 		   => 'influence_blog_footer_two_title_advance_m_p_top',
        'mobile_right' 		   => 'influence_blog_footer_two_title_advance_m_p_right',
        'mobile_bottom' 	   => 'influence_blog_footer_two_title_advance_m_p_bottom',
        'mobile_left' 		   => 'influence_blog_footer_two_title_advance_m_p_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => 0,
        'max'                  => 200,
        'step'                 => 1,
    ),
    'priority' 				   => 370,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two title advance border -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_title_advance_border', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_two_title_advance_border' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_two_title_advance_border', array(
    'label'                    => esc_html__( 'Border Width', 'influence-blog' ) . ' (px)',
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 10,
        'step'                 => 0.5,
    ),
    'priority'                 => 375,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two social links advance heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_social_links_advance_heading', array(
    'label'                    => esc_html__( 'Social Links Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-social-links-advance-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 380,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two social links advance margin -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Influence_Blog_Dimension_One_Control( $wp_customize, 'influence_blog_footer_two_social_links_advance_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_two_social_links_advance_d_m_top',
        'desktop_right' 	   => 'influence_blog_footer_two_social_links_advance_d_m_right',
        'desktop_bottom' 	   => 'influence_blog_footer_two_social_links_advance_d_m_bottom',
        'desktop_left' 	       => 'influence_blog_footer_two_social_links_advance_d_m_left',
        'tablet_top' 		   => 'influence_blog_footer_two_social_links_advance_t_m_top',
        'tablet_right' 		   => 'influence_blog_footer_two_social_links_advance_t_m_right',
        'tablet_bottom' 	   => 'influence_blog_footer_two_social_links_advance_t_m_bottom',
        'tablet_left' 		   => 'influence_blog_footer_two_social_links_advance_t_m_left',
        'mobile_top' 		   => 'influence_blog_footer_two_social_links_advance_m_m_top',
        'mobile_right' 		   => 'influence_blog_footer_two_social_links_advance_m_m_right',
        'mobile_bottom' 	   => 'influence_blog_footer_two_social_links_advance_m_m_bottom',
        'mobile_left' 		   => 'influence_blog_footer_two_social_links_advance_m_m_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => -200,
        'max'                  => 200,
        'step'                 => 1,
    ),
    'priority' 				   => 385,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two social links advance padding -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Influence_Blog_Dimension_One_Control( $wp_customize, 'influence_blog_footer_two_social_links_advance_p', array(
    'label'	   				   => esc_html__( 'Padding', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_two_social_links_advance_d_p_top',
        'desktop_right' 	   => 'influence_blog_footer_two_social_links_advance_d_p_right',
        'desktop_bottom' 	   => 'influence_blog_footer_two_social_links_advance_d_p_bottom',
        'desktop_left' 	       => 'influence_blog_footer_two_social_links_advance_d_p_left',
        'tablet_top' 		   => 'influence_blog_footer_two_social_links_advance_t_p_top',
        'tablet_right' 		   => 'influence_blog_footer_two_social_links_advance_t_p_right',
        'tablet_bottom' 	   => 'influence_blog_footer_two_social_links_advance_t_p_bottom',
        'tablet_left' 		   => 'influence_blog_footer_two_social_links_advance_t_p_left',
        'mobile_top' 		   => 'influence_blog_footer_two_social_links_advance_m_p_top',
        'mobile_right' 		   => 'influence_blog_footer_two_social_links_advance_m_p_right',
        'mobile_bottom' 	   => 'influence_blog_footer_two_social_links_advance_m_p_bottom',
        'mobile_left' 		   => 'influence_blog_footer_two_social_links_advance_m_p_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => 0,
        'max'                  => 200,
        'step'                 => 1,
    ),
    'priority' 				   => 390,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two widget area advance heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_widget_area_advance_heading', array(
    'label'                    => esc_html__( 'Widget Area Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-widget-area-advance-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 395,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two widget area advance border width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_border_width', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_two_widget_area_advance_border_width' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_two_widget_area_advance_border_width', array(
    'label'                    => esc_html__( 'Border Width', 'influence-blog' ) . ' (px)',
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 10,
        'step'                 => 0.5,
    ),
    'priority'                 => 400,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two widget area advance margin -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Influence_Blog_Dimension_One_Control( $wp_customize, 'influence_blog_footer_two_widget_area_advance_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_two_widget_area_advance_d_m_top',
        'desktop_right' 	   => 'influence_blog_footer_two_widget_area_advance_d_m_right',
        'desktop_bottom' 	   => 'influence_blog_footer_two_widget_area_advance_d_m_bottom',
        'desktop_left' 	       => 'influence_blog_footer_two_widget_area_advance_d_m_left',
        'tablet_top' 		   => 'influence_blog_footer_two_widget_area_advance_t_m_top',
        'tablet_right' 		   => 'influence_blog_footer_two_widget_area_advance_t_m_right',
        'tablet_bottom' 	   => 'influence_blog_footer_two_widget_area_advance_t_m_bottom',
        'tablet_left' 		   => 'influence_blog_footer_two_widget_area_advance_t_m_left',
        'mobile_top' 		   => 'influence_blog_footer_two_widget_area_advance_m_m_top',
        'mobile_right' 		   => 'influence_blog_footer_two_widget_area_advance_m_m_right',
        'mobile_bottom' 	   => 'influence_blog_footer_two_widget_area_advance_m_m_bottom',
        'mobile_left' 		   => 'influence_blog_footer_two_widget_area_advance_m_m_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => -200,
        'max'                  => 200,
        'step'                 => 1,
    ),
    'priority' 				   => 402,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two widget area advance padding -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Influence_Blog_Dimension_One_Control( $wp_customize, 'influence_blog_footer_two_widget_area_advance_p', array(
    'label'	   				   => esc_html__( 'Padding', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_two_widget_area_advance_d_p_top',
        'desktop_right' 	   => 'influence_blog_footer_two_widget_area_advance_d_p_right',
        'desktop_bottom' 	   => 'influence_blog_footer_two_widget_area_advance_d_p_bottom',
        'desktop_left' 	       => 'influence_blog_footer_two_widget_area_advance_d_p_left',
        'tablet_top' 		   => 'influence_blog_footer_two_widget_area_advance_t_p_top',
        'tablet_right' 		   => 'influence_blog_footer_two_widget_area_advance_t_p_right',
        'tablet_bottom' 	   => 'influence_blog_footer_two_widget_area_advance_t_p_bottom',
        'tablet_left' 		   => 'influence_blog_footer_two_widget_area_advance_t_p_left',
        'mobile_top' 		   => 'influence_blog_footer_two_widget_area_advance_m_p_top',
        'mobile_right' 		   => 'influence_blog_footer_two_widget_area_advance_m_p_right',
        'mobile_bottom' 	   => 'influence_blog_footer_two_widget_area_advance_m_p_bottom',
        'mobile_left' 		   => 'influence_blog_footer_two_widget_area_advance_m_p_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => 0,
        'max'                  => 50,
        'step'                 => 1,
    ),
    'priority' 				   => 405,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two widget title advance heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_footer_two_widget_title_advance_heading', array(
    'label'                    => esc_html__( 'Widget Title Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-widget-title-advance-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 410,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two widget title advance margin -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_d_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_d_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_d_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_d_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_d_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_d_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_d_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_d_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_t_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_t_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_t_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_t_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_t_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_t_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_t_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_t_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_m_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_m_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_m_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_m_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_m_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_m_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_m_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_m_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Influence_Blog_Dimension_One_Control( $wp_customize, 'influence_blog_footer_two_widget_title_advance_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_two_widget_title_advance_d_m_top',
        'desktop_right' 	   => 'influence_blog_footer_two_widget_title_advance_d_m_right',
        'desktop_bottom' 	   => 'influence_blog_footer_two_widget_title_advance_d_m_bottom',
        'desktop_left' 	       => 'influence_blog_footer_two_widget_title_advance_d_m_left',
        'tablet_top' 		   => 'influence_blog_footer_two_widget_title_advance_t_m_top',
        'tablet_right' 		   => 'influence_blog_footer_two_widget_title_advance_t_m_right',
        'tablet_bottom' 	   => 'influence_blog_footer_two_widget_title_advance_t_m_bottom',
        'tablet_left' 		   => 'influence_blog_footer_two_widget_title_advance_t_m_left',
        'mobile_top' 		   => 'influence_blog_footer_two_widget_title_advance_m_m_top',
        'mobile_right' 		   => 'influence_blog_footer_two_widget_title_advance_m_m_right',
        'mobile_bottom' 	   => 'influence_blog_footer_two_widget_title_advance_m_m_bottom',
        'mobile_left' 		   => 'influence_blog_footer_two_widget_title_advance_m_m_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => -50,
        'max'                  => 50,
        'step'                 => 1,
    ),
    'priority' 				   => 415,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two widget title advance padding -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_d_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_d_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_d_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_d_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_d_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_d_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_d_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_d_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_t_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_t_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_t_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_t_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_t_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_t_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_t_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_t_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_m_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_m_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_m_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_m_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_m_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_m_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_m_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_title_advance_m_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Influence_Blog_Dimension_One_Control( $wp_customize, 'influence_blog_footer_two_widget_title_advance_p', array(
    'label'	   				   => esc_html__( 'Padding', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_two_widget_title_advance_d_p_top',
        'desktop_right' 	   => 'influence_blog_footer_two_widget_title_advance_d_p_right',
        'desktop_bottom' 	   => 'influence_blog_footer_two_widget_title_advance_d_p_bottom',
        'desktop_left' 	       => 'influence_blog_footer_two_widget_title_advance_d_p_left',
        'tablet_top' 		   => 'influence_blog_footer_two_widget_title_advance_t_p_top',
        'tablet_right' 		   => 'influence_blog_footer_two_widget_title_advance_t_p_right',
        'tablet_bottom' 	   => 'influence_blog_footer_two_widget_title_advance_t_p_bottom',
        'tablet_left' 		   => 'influence_blog_footer_two_widget_title_advance_t_p_left',
        'mobile_top' 		   => 'influence_blog_footer_two_widget_title_advance_m_p_top',
        'mobile_right' 		   => 'influence_blog_footer_two_widget_title_advance_m_p_right',
        'mobile_bottom' 	   => 'influence_blog_footer_two_widget_title_advance_m_p_bottom',
        'mobile_left' 		   => 'influence_blog_footer_two_widget_title_advance_m_p_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => 0,
        'max'                  => 50,
        'step'                 => 1,
    ),
    'priority' 				   => 420,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two widget title advance border width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_widget_title_advance_border_width', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_two_widget_title_advance_border_width' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_two_widget_title_advance_border_width', array(
    'label'                    => esc_html__( 'Border Width', 'influence-blog' ) . ' (px)',
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 10,
        'step'                 => 0.5,
    ),
    'priority'                 => 425,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );
