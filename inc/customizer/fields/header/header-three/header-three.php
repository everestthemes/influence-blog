<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_header_three_section';

$tabs     = influence_blog_tab_one_array();

$menu_lists  = get_registered_nav_menus();

$alignment  = influence_blog_alignment_array();

$font_attrs = influence_blog_font_attrs_array();

$size_attrs = influence_blog_font_size_attrs_array();

$text_transform = influence_blog_font_text_transform_array();

$line_height = influence_blog_line_height_attrs_array();

$letter_spacing = influence_blog_letter_spacing_attrs_array();

$button_one_array = array(
    'influence_blog_arange_header_three_heading'   => array(),
    'influence_blog_arrange_header_three'          => array(),
    'influence_blog_header_three_menu_icon_heading' => array(),
    'influence_blog_header_three_menu_icon_select'  => array(),
    'influence_blog_header_three_menu_icon_link'    => array(),
    'influence_blog_header_three_menu_icon_link_tab_toggle' => array(),
    'influence_blog_header_three_menu_icon_alignment' => array(),
    'influence_blog_header_three_menu_heading'     => array(),
    'influence_blog_header_three_menu_select'      => array(),
    'influence_blog_header_three_menu_alignment'   => array(),
    'influence_blog_header_three_search_heading'   => array(),
    'influence_blog_header_three_search_icon_select'   => array(),
    'influence_blog_header_three_search_icon_alignment'   => array(),
//    'influence_blog_header_three_layout_one_social_links_heading' => array(),
//    'influence_blog_header_three_layout_one_social_links'     => array(),
//    'influence_blog_header_three_layout_one_social_links_tab_toggle' => array(),
//    'influence_blog_header_three_layout_one_social_links_alignment' => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_header_three_button_one_array', $button_one_array );

$button_two_array = array(
    'influence_blog_header_three_design_heading'   => array(),
    'influence_blog_header_three_design_bg_color'  => array(),
    'influence_blog_header_three_design_border_color'  => array(),
    'influence_blog_header_three_design_menu_icon_heading'  => array(),
    'influence_blog_header_three_design_menu_icon_color_heading'  => array(),
    'influence_blog_header_three_design_menu_icon_color'  => array(),
    'influence_blog_header_three_design_menu_icon_hover_color'  => array(),
    'influence_blog_header_three_design_menu_icon_bg_color'  => array(),
    'influence_blog_header_three_design_menu_icon_bg_hover_color'  => array(),
    'influence_blog_header_three_design_menu_icon_typo_heading'  => array(),
    'influence_blog_typo_header_three_design_menu_icon_size'  => array(),
    'influence_blog_header_three_design_menu_heading'  => array(),
    'influence_blog_header_three_design_main_menu_heading'  => array(),
    'influence_blog_header_three_design_main_menu_color_heading'  => array(),
    'influence_blog_header_three_design_main_menu_color'  => array(),
    'influence_blog_header_three_design_main_menu_hover_color'  => array(),
    'influence_blog_header_three_design_main_menu_bg_color'  => array(),
    'influence_blog_header_three_design_main_menu_bg_hover_color'  => array(),
    'influence_blog_header_three_design_main_menu_typo_heading'  => array(),
    'influence_blog_typo_header_three_design_main_menu_font'  => array(),
    'influence_blog_typo_header_three_design_main_menu_transform'  => array(),
    'influence_blog_typo_header_three_design_main_menu_size'  => array(),
    'influence_blog_typo_header_three_design_main_menu_line_height'  => array(),
    'influence_blog_typo_header_three_design_main_menu_spacing'  => array(),
    'influence_blog_header_three_design_sub_menu_heading'  => array(),
    'influence_blog_header_three_design_sub_menu_color_heading'  => array(),
    'influence_blog_header_three_design_sub_menu_color'  => array(),
    'influence_blog_header_three_design_sub_menu_hover_color'  => array(),
    'influence_blog_header_three_design_sub_menu_bg_color'  => array(),
    'influence_blog_header_three_design_sub_menu_sep_color'  => array(),
    'influence_blog_header_three_design_sub_menu_typo_heading'  => array(),
    'influence_blog_typo_header_three_design_sub_menu_transform'  => array(),
    'influence_blog_typo_header_three_design_sub_menu_size'  => array(),
    'influence_blog_typo_header_three_design_sub_menu_line_height'  => array(),
    'influence_blog_typo_header_three_design_sub_menu_spacing'  => array(),
    'influence_blog_header_three_design_search_icon_heading'  => array(),
    'influence_blog_header_three_design_search_icon_color_heading'  => array(),
    'influence_blog_header_three_design_search_icon_color'  => array(),
    'influence_blog_header_three_design_search_icon_hover_color'  => array(),
    'influence_blog_header_three_design_search_icon_bg_color'  => array(),
    'influence_blog_header_three_design_search_icon_bg_hover_color'  => array(),
    'influence_blog_header_three_design_search_icon_typo_heading'  => array(),
    'influence_blog_typo_header_three_design_search_icon_size'  => array(),
//    'influence_blog_header_three_layout_one_design_menu_heading'  => array(),
//    'influence_blog_header_three_layout_one_design_menu_color_heading'  => array(),
//    'influence_blog_header_three_layout_one_design_menu_color'  => array(),
//    'influence_blog_header_three_layout_one_design_menu_hover_color'  => array(),
//    'influence_blog_header_three_layout_one_design_menu_sep_color'  => array(),
//    'influence_blog_header_three_layout_one_design_menu_typo_heading'  => array(),
//    'influence_blog_typo_header_three_layout_one_design_menu_font'  => array(),
//    'influence_blog_typo_header_three_layout_one_design_menu_transform'  => array(),
//    'influence_blog_typo_header_three_layout_one_design_menu_size'  => array(),
//    'influence_blog_typo_header_three_layout_one_design_menu_line_height'  => array(),
//    'influence_blog_typo_header_three_layout_one_design_menu_spacing'  => array(),
//    'influence_blog_header_three_layout_one_design_social_links_heading'  => array(),
//    'influence_blog_header_three_layout_one_design_social_links_color_heading'  => array(),
//    'influence_blog_header_three_layout_one_design_social_links_color'  => array(),
//    'influence_blog_header_three_layout_one_design_social_links_hover_color'  => array(),
//    'influence_blog_header_three_layout_one_design_social_links_sep_color'  => array(),
//    'influence_blog_header_three_layout_one_design_social_links_typo_heading'  => array(),
//    'influence_blog_typo_header_three_layout_one_design_social_links_size'  => array(),
);

$button_two_array = apply_filters( 'influence_blog_filter_header_three_button_two_array', $button_two_array );

$button_three_array = array(
//    'influence_blog_header_three_layout_one_advance_info' => array(),
//    'influence_blog_header_three_layout_one_advance_toggle' => array(),
//    'influence_blog_header_three_layout_one_advance_heading' => array(),
//    'influence_blog_header_three_layout_one_advance_p' => array(),
);

$button_three_array = apply_filters( 'influence_blog_filter_header_three_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Header one options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_header_three_tabs', array(
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

/*---------------------------------- Arrange elements header three heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_arange_header_three_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_arange_header_three_heading', array(
    'label'                    => esc_html__( 'Arrange elements', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Arrange elements header three options -----------------------------------*/

$arrange_header_three_options = influence_blog_arrange_header_three_options();

$arrange_header_three_option  = array();

foreach( $arrange_header_three_options as $key => $val ) {

   $arrange_header_three_option[ $key ] = $val[ 'label' ];
}

$wp_customize->add_setting( 'influence_blog_arrange_header_three', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'sanitize_sortable_one',
    'default'                  => influence_blog_sortable_defaults( $arrange_header_three_options ),
) );

$wp_customize->add_control( new Sortable_One_Control( $wp_customize, 'influence_blog_arrange_header_three', array(
	'section'				   => $section,
    'choices'                  => $arrange_header_three_option,
    'priority'                 => 15
) ) );

/*---------------------------------- Header three menu icon heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_menu_icon_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_menu_icon_heading', array(
    'label'                    => esc_html__( 'Icon Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-three-menu-icon-heading' ),
    'controls_to_wrap'         => 4,
    'expanded'                 => false,
    'priority'                 => 20,
) ) );

/*---------------------------------- Header three menu icon select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_menu_icon_select', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'header_three_menu_icon_select' ),
) );

$wp_customize->add_control( new Icon_Picker_One_Control( $wp_customize, 'influence_blog_header_three_menu_icon_select', array(
    'label'                    => esc_html__( 'Select Icon', 'influence-blog' ),
    'section'                  => $section,
    'priority'                 => 25,
) ) );

/*---------------------------------- Header three menu icon link -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_menu_icon_link', array(
    'sanitize_callback' 	   => 'esc_url_raw',
    'default'                  => influence_blog_defaults( 'header_three_menu_icon_link' ),
) );

$wp_customize->add_control( 'influence_blog_header_three_menu_icon_link', array(
    'label'                    => esc_html__( 'Link', 'influence-blog' ),
    'type'                     => 'url',
    'section'                  => $section,
    'priority'                 => 30,
) );

/*---------------------------------- Header three menu icon new tab toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_menu_icon_link_tab_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'header_three_menu_icon_link_tab_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_header_three_menu_icon_link_tab_toggle', array(
    'label'                    => esc_html__( 'Open in new tab', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 35,
) ) );

/*---------------------------------- Header three menu icon alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_menu_icon_alignment', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'header_three_menu_icon_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_header_three_menu_icon_alignment', array(
    'label'                    => esc_html__( 'Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $alignment,
    'type'                     => 'select',
    'priority'                 => 40,
) );

/*---------------------------------- Header three menu heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_menu_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_menu_heading', array(
    'label'                    => esc_html__( 'Menu Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-three-menu-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 45,
) ) );

/*---------------------------------- Header three menu select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_menu_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'header_three_menu_select' ),
) );

$wp_customize->add_control( 'influence_blog_header_three_menu_select', array(
    'label'                    => esc_html__( 'Select Menu', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $menu_lists,
    'type'                     => 'select',
    'priority'                 => 50,
) );

/*---------------------------------- Header three menu alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_menu_alignment', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'header_three_menu_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_header_three_menu_alignment', array(
    'label'                    => esc_html__( 'Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $alignment,
    'type'                     => 'select',
    'priority'                 => 55,
) );

/*---------------------------------- Header three search heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_search_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_search_heading', array(
    'label'                    => esc_html__( 'Search Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-three-search-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 60,
) ) );

/*---------------------------------- Header three search icon select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_search_icon_select', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'header_three_search_icon_select' ),
) );

$wp_customize->add_control( new Icon_Picker_One_Control( $wp_customize, 'influence_blog_header_three_search_icon_select', array(
    'label'                    => esc_html__( 'Select Icon', 'influence-blog' ),
    'section'                  => $section,
    'priority'                 => 65,
) ) );

/*---------------------------------- Header three search icon alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_search_icon_alignment', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'header_three_search_icon_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_header_three_search_icon_alignment', array(
    'label'                    => esc_html__( 'Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $alignment,
    'type'                     => 'select',
    'priority'                 => 70,
) );

/*-----------------------------------------------------------------------------
							 Design options
-----------------------------------------------------------------------------*/

/*---------------------------------- Header three design heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_heading', array(
    'label'                    => esc_html__( 'Header Two Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 75,
) ) );

/*---------------------------------- Header three design background color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 80,
) ) );

/*---------------------------------- Header three design border color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_border_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_border_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_border_color', array(
    'label'                    => esc_html__( 'Border Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 82,
) ) );

/*---------------------------------- Header three design menu icon heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_menu_icon_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_menu_icon_heading', array(
    'label'                    => esc_html__( 'Icon Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-three-design-menu-icon-heading' ),
    'controls_to_wrap'         => 7,
    'expanded'                 => false,
    'priority'                 => 85,
) ) );

/*---------------------------------- Header three design menu icon color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_menu_icon_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_menu_icon_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 90,
) ) );

/*---------------------------------- Header three design menu icon color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_menu_icon_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_menu_icon_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_menu_icon_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 95,
) ) );

/*---------------------------------- Header three design menu icon color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_menu_icon_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_menu_icon_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_menu_icon_hover_color', array(
    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 100,
) ) );

/*---------------------------------- Header three design menu icon bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_menu_icon_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_menu_icon_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_menu_icon_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 105,
) ) );

/*---------------------------------- Header three design menu icon bg hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_menu_icon_bg_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_menu_icon_bg_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_menu_icon_bg_hover_color', array(
    'label'                    => esc_html__( 'Background Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 110,
) ) );

/*---------------------------------- Header three design menu icon typo heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_menu_icon_typo_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_menu_icon_typo_heading', array(
    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 115,
) ) );

/*---------------------------------- Header three design menu icon typo font size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_menu_icon_size_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_menu_icon_size_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_menu_icon_size_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_menu_icon_size_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_menu_icon_size_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_menu_icon_size_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_design_menu_icon_size', array(
    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_header_three_design_menu_icon_size_d',
        'tablet' 	           => 'influence_blog_typo_header_three_design_menu_icon_size_t',
        'mobile' 	           => 'influence_blog_typo_header_three_design_menu_icon_size_m',
    ),
    'input_attrs' 		       => $size_attrs,
    'priority' 			       => 120,
) ) );

/*---------------------------------- Header three design menu heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_menu_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_menu_heading', array(
    'label'                    => esc_html__( 'Menu Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-three-design-menu-heading' ),
    'controls_to_wrap'         => 23,
    'expanded'                 => false,
    'priority'                 => 125,
) ) );

/*---------------------------------- Header three design main menu heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_main_menu_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_main_menu_heading', array(
    'label'                    => esc_html__( 'Main Menu', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-three-design-main-menu-heading' ),
    'controls_to_wrap'         => 11,
    'expanded'                 => false,
    'priority'                 => 130,
) ) );

/*---------------------------------- Header three design main menu color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_main_menu_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_main_menu_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 135,
) ) );

/*---------------------------------- Header three design main menu color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_main_menu_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_main_menu_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_main_menu_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 140,
) ) );

/*---------------------------------- Header three design main menu hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_main_menu_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_main_menu_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_main_menu_hover_color', array(
    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 145,
) ) );

/*---------------------------------- Header three design main menu bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_main_menu_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_main_menu_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_main_menu_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 150,
) ) );

/*---------------------------------- Header three design main menu bg hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_main_menu_bg_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_main_menu_bg_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_main_menu_bg_hover_color', array(
    'label'                    => esc_html__( 'Background Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 155,
) ) );

/*---------------------------------- Header three design main menu typo heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_main_menu_typo_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_main_menu_typo_heading', array(
    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 160,
) ) );

/*---------------------------------- Header three design main menu typo font family -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_main_menu_font', array(
    'default'                  => influence_blog_defaults( 'typo_header_three_design_main_menu_font' ),
    'sanitize_callback'        => 'sanitize_typography_one'
) );

$wp_customize->add_control( new Typography_One_Control( $wp_customize, 'influence_blog_typo_header_three_design_main_menu_font', array(
    'label'                    => __( 'Font Family', 'influence-blog' ),
    'section'                  => $section,
    'input_attrs'              => $font_attrs,
    'priority'                 => 165,
) ) );

/*---------------------------------- Header three design main menu typo text transform -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_main_menu_transform', array(
    'default'                  => influence_blog_defaults( 'typo_header_three_design_main_menu_transform' ),
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'transport' 		       => 'postMessage',
) );

$wp_customize->add_control( 'influence_blog_typo_header_three_design_main_menu_transform', array(
    'label'                    => __( 'Text Transform', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $text_transform,
    'priority'                 => 170,
) );

/*---------------------------------- Header three design main menu typo font size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_main_menu_size_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_main_menu_size_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_main_menu_size_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_main_menu_size_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_main_menu_size_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_main_menu_size_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_design_main_menu_size', array(
    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_header_three_design_main_menu_size_d',
        'tablet' 	           => 'influence_blog_typo_header_three_design_main_menu_size_t',
        'mobile' 	           => 'influence_blog_typo_header_three_design_main_menu_size_m',
    ),
    'input_attrs' 		       => $size_attrs,
    'priority' 			       => 175,
) ) );

/*---------------------------------- Header three design main menu typo line height -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_main_menu_height_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_main_menu_height_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_main_menu_height_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_main_menu_height_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_main_menu_height_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_main_menu_height_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_design_main_menu_line_height', array(
    'label'                    => esc_html__( 'Line Height', 'influence-blog' ),
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_header_three_design_main_menu_height_d',
        'tablet' 	           => 'influence_blog_typo_header_three_design_main_menu_height_t',
        'mobile' 	           => 'influence_blog_typo_header_three_design_main_menu_height_m',
    ),
    'input_attrs' 		       => $line_height,
    'priority' 			       => 180,
) ) );

/*---------------------------------- Header three design main menu typo letter spacing -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_main_menu_spacing_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_main_menu_spacing_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_main_menu_spacing_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_main_menu_spacing_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_main_menu_spacing_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_main_menu_spacing_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_design_main_menu_spacing', array(
    'label'                    => esc_html__( 'Letter Spacing', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_header_three_design_main_menu_spacing_d',
        'tablet' 	           => 'influence_blog_typo_header_three_design_main_menu_spacing_t',
        'mobile' 	           => 'influence_blog_typo_header_three_design_main_menu_spacing_m',
    ),
    'input_attrs' 		       => $letter_spacing,
    'priority' 			       => 185,
) ) );

/*---------------------------------- Header three design sub menu heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_sub_menu_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_sub_menu_heading', array(
    'label'                    => esc_html__( 'Sub Menu', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-three-design-sub-menu-heading' ),
    'controls_to_wrap'         => 10,
    'expanded'                 => false,
    'priority'                 => 187,
) ) );

/*---------------------------------- Header three design sub menu color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_sub_menu_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_sub_menu_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 190,
) ) );

/*---------------------------------- Header three design sub menu color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_sub_menu_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_sub_menu_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_sub_menu_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 195,
) ) );

/*---------------------------------- Header three design sub menu hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_sub_menu_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_sub_menu_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_sub_menu_hover_color', array(
    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 200,
) ) );

/*---------------------------------- Header three design sub menu bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_sub_menu_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_sub_menu_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_sub_menu_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 205,
) ) );

/*---------------------------------- Header three design sub main sep color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_sub_menu_sep_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_sub_menu_sep_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_sub_menu_sep_color', array(
    'label'                    => esc_html__( 'Separator Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 210,
) ) );

/*---------------------------------- Header three design sub menu typo heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_sub_menu_typo_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_sub_menu_typo_heading', array(
    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 215,
) ) );

/*---------------------------------- Header three design sub menu typo text transform -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_sub_menu_transform', array(
    'default'                  => influence_blog_defaults( 'typo_header_three_design_sub_menu_transform' ),
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'transport' 		       => 'postMessage',
) );

$wp_customize->add_control( 'influence_blog_typo_header_three_design_sub_menu_transform', array(
    'label'                    => __( 'Text Transform', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $text_transform,
    'priority'                 => 220,
) );

/*---------------------------------- Header three design sub menu typo font size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_sub_menu_size_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_sub_menu_size_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_sub_menu_size_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_sub_menu_size_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_sub_menu_size_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_sub_menu_size_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_design_sub_menu_size', array(
    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_header_three_design_sub_menu_size_d',
        'tablet' 	           => 'influence_blog_typo_header_three_design_sub_menu_size_t',
        'mobile' 	           => 'influence_blog_typo_header_three_design_sub_menu_size_m',
    ),
    'input_attrs' 		       => $size_attrs,
    'priority' 			       => 225,
) ) );

/*---------------------------------- Header three design sub menu typo line height -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_sub_menu_height_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_sub_menu_height_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_sub_menu_height_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_sub_menu_height_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_sub_menu_height_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_sub_menu_height_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_design_sub_menu_line_height', array(
    'label'                    => esc_html__( 'Line Height', 'influence-blog' ),
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_header_three_design_sub_menu_height_d',
        'tablet' 	           => 'influence_blog_typo_header_three_design_sub_menu_height_t',
        'mobile' 	           => 'influence_blog_typo_header_three_design_sub_menu_height_m',
    ),
    'input_attrs' 		       => $line_height,
    'priority' 			       => 230,
) ) );

/*---------------------------------- Header three design sub menu typo letter spacing -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_sub_menu_spacing_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_sub_menu_spacing_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_sub_menu_spacing_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_sub_menu_spacing_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_sub_menu_spacing_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_sub_menu_spacing_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_design_sub_menu_spacing', array(
    'label'                    => esc_html__( 'Letter Spacing', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_header_three_design_sub_menu_spacing_d',
        'tablet' 	           => 'influence_blog_typo_header_three_design_sub_menu_spacing_t',
        'mobile' 	           => 'influence_blog_typo_header_three_design_sub_menu_spacing_m',
    ),
    'input_attrs' 		       => $letter_spacing,
    'priority' 			       => 235,
) ) );

/*---------------------------------- Header three design search icon heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_search_icon_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_search_icon_heading', array(
    'label'                    => esc_html__( 'Search Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-three-design-search-icon-heading' ),
    'controls_to_wrap'         => 7,
    'expanded'                 => false,
    'priority'                 => 240,
) ) );

/*---------------------------------- Header three design search icon color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_search_icon_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_search_icon_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 245,
) ) );

/*---------------------------------- Header three design search icon color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_search_icon_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_search_icon_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_search_icon_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 250,
) ) );

/*---------------------------------- Header three design search icon color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_search_icon_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_search_icon_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_search_icon_hover_color', array(
    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 255,
) ) );

/*---------------------------------- Header three design search icon bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_search_icon_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_search_icon_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_search_icon_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 260,
) ) );

/*---------------------------------- Header three design search icon bg hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_search_icon_bg_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'header_three_design_search_icon_bg_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_design_search_icon_bg_hover_color', array(
    'label'                    => esc_html__( 'Background Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 265,
) ) );

/*---------------------------------- Header three design search icon typo heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_three_design_search_icon_typo_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_design_search_icon_typo_heading', array(
    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 270,
) ) );

/*---------------------------------- Header three design search icon typo font size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_search_icon_size_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_search_icon_size_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_search_icon_size_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_search_icon_size_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_three_design_search_icon_size_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_three_design_search_icon_size_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_design_search_icon_size', array(
    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_header_three_design_search_icon_size_d',
        'tablet' 	           => 'influence_blog_typo_header_three_design_search_icon_size_t',
        'mobile' 	           => 'influence_blog_typo_header_three_design_search_icon_size_m',
    ),
    'input_attrs' 		       => $size_attrs,
    'priority' 			       => 275,
) ) );

///*---------------------------------- Header one layout one design menu heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_menu_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_menu_heading', array(
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
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_menu_color_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_menu_color_heading', array(
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
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_menu_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_three_layout_one_design_menu_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_menu_color', array(
//    'label'                    => esc_html__( 'Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 70,
//) ) );
//
///*---------------------------------- Header one layout one design menu hover color -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_menu_hover_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_three_layout_one_design_menu_hover_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_menu_hover_color', array(
//    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 75,
//) ) );
//
///*---------------------------------- Header one layout one design menu sep color -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_menu_sep_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_three_layout_one_design_menu_sep_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_menu_sep_color', array(
//    'label'                    => esc_html__( 'Separator Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 80,
//) ) );
//
///*---------------------------------- Header one layout one design menu typo heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_menu_typo_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_menu_typo_heading', array(
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
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_menu_font', array(
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_menu_font' ),
//    'sanitize_callback'        => 'sanitize_typography_one'
//) );
//
//$wp_customize->add_control( new Typography_One_Control( $wp_customize, 'influence_blog_typo_header_three_layout_one_design_menu_font', array(
//    'label'                    => __( 'Font Family', 'influence-blog' ),
//    'section'                  => $section,
//    'input_attrs'              => $font_attrs,
//    'priority'                 => 90,
//) ) );
//
///*---------------------------------- Header one layout one design menu typo text transform -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_menu_transform', array(
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_menu_transform' ),
//    'sanitize_callback'        => 'influence_blog_sanitize_select',
//    'transport' 		       => 'postMessage',
//) );
//
//$wp_customize->add_control( 'influence_blog_typo_header_three_layout_one_design_menu_transform', array(
//    'label'                    => __( 'Text Transform', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'select',
//    'choices'                  => $text_transform,
//    'priority'                 => 95,
//) );
//
///*---------------------------------- Header one layout one design menu typo font size -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_menu_size_d', array(
//    'sanitize_callback'        => 'sanitize_range_slider_two_number',
//    'transport' 		       => 'postMessage',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_menu_size_d' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_menu_size_t', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_menu_size_t' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_menu_size_m', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_menu_size_m' ),
//) );
//
//$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_layout_one_design_menu_size', array(
//    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
//    'section' 			       => $section,
//    'type'                     => 'range-slider-two',
//    'settings' 			       => array(
//        'desktop' 	           => 'influence_blog_typo_header_three_layout_one_design_menu_size_d',
//        'tablet' 	           => 'influence_blog_typo_header_three_layout_one_design_menu_size_t',
//        'mobile' 	           => 'influence_blog_typo_header_three_layout_one_design_menu_size_m',
//    ),
//    'input_attrs' 		       => $size_attrs,
//    'priority' 			       => 100,
//) ) );
//
///*---------------------------------- Header one layout one design menu typo line height -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_menu_height_d', array(
//    'sanitize_callback'        => 'sanitize_range_slider_two_number',
//    'transport' 		       => 'postMessage',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_menu_height_d' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_menu_height_t', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_menu_height_t' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_menu_height_m', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_menu_height_m' ),
//) );
//
//$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_layout_one_design_menu_line_height', array(
//    'label'                    => esc_html__( 'Line Height', 'influence-blog' ),
//    'section' 			       => $section,
//    'type'                     => 'range-slider-two',
//    'settings' 			       => array(
//        'desktop' 	           => 'influence_blog_typo_header_three_layout_one_design_menu_height_d',
//        'tablet' 	           => 'influence_blog_typo_header_three_layout_one_design_menu_height_t',
//        'mobile' 	           => 'influence_blog_typo_header_three_layout_one_design_menu_height_m',
//    ),
//    'input_attrs' 		       => $line_height,
//    'priority' 			       => 105,
//) ) );
//
///*---------------------------------- Header one layout one design menu typo letter spacing -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_menu_spacing_d', array(
//    'sanitize_callback'        => 'sanitize_range_slider_two_number',
//    'transport' 		       => 'postMessage',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_menu_spacing_d' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_menu_spacing_t', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_menu_spacing_t' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_menu_spacing_m', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_menu_spacing_m' ),
//) );
//
//$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_layout_one_design_menu_spacing', array(
//    'label'                    => esc_html__( 'Letter Spacing', 'influence-blog' ) . ' (px) ',
//    'section' 			       => $section,
//    'type'                     => 'range-slider-two',
//    'settings' 			       => array(
//        'desktop' 	           => 'influence_blog_typo_header_three_layout_one_design_menu_spacing_d',
//        'tablet' 	           => 'influence_blog_typo_header_three_layout_one_design_menu_spacing_t',
//        'mobile' 	           => 'influence_blog_typo_header_three_layout_one_design_menu_spacing_m',
//    ),
//    'input_attrs' 		       => $letter_spacing,
//    'priority' 			       => 110,
//) ) );
//
///*---------------------------------- Header one layout one design social links heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_social_links_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_social_links_heading', array(
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
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_social_links_color_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_social_links_color_heading', array(
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
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_social_links_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_three_layout_one_design_social_links_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_social_links_color', array(
//    'label'                    => esc_html__( 'Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 125,
//) ) );
//
///*---------------------------------- Header one layout one design social links hover color -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_social_links_hover_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_three_layout_one_design_social_links_hover_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_social_links_hover_color', array(
//    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 130,
//) ) );
//
///*---------------------------------- Header one layout one design social links sep color -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_social_links_sep_color', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_color_one',
//    'default'                  => influence_blog_defaults( 'header_three_layout_one_design_social_links_sep_color' ),
//) );
//
//$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_social_links_sep_color', array(
//    'label'                    => esc_html__( 'Separator Color', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'color-one',
//    'priority'                 => 135,
//) ) );
//
///*---------------------------------- Header one layout one design social links typo heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_design_social_links_typo_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_design_social_links_typo_heading', array(
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
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_social_links_size_d', array(
//    'sanitize_callback'        => 'sanitize_range_slider_two_number',
//    'transport' 		       => 'postMessage',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_social_links_size_d' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_social_links_size_t', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_social_links_size_t' ),
//) );
//
//$wp_customize->add_setting( 'influence_blog_typo_header_three_layout_one_design_social_links_size_m', array(
//    'transport' 			   => 'postMessage',
//    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
//    'default'                  => influence_blog_defaults( 'typo_header_three_layout_one_design_social_links_size_m' ),
//) );
//
//$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_three_layout_one_design_social_links_size', array(
//    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
//    'section' 			       => $section,
//    'type'                     => 'range-slider-two',
//    'settings' 			       => array(
//        'desktop' 	           => 'influence_blog_typo_header_three_layout_one_design_social_links_size_d',
//        'tablet' 	           => 'influence_blog_typo_header_three_layout_one_design_social_links_size_t',
//        'mobile' 	           => 'influence_blog_typo_header_three_layout_one_design_social_links_size_m',
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
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_info', array(
//    'sanitize_callback'        => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_header_three_layout_one_advance_info', array(
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
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_toggle', array(
//    'sanitize_callback'        => 'wp_validate_boolean',
//    'default'                  => influence_blog_defaults( 'header_three_layout_one_advance_toggle' ),
//) );
//
//$wp_customize->add_control( new Toggle_Two_Control ( $wp_customize, 'influence_blog_header_three_layout_one_advance_toggle', array(
//    'label'                    => esc_html__( 'Enable Advance Settings', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'toggle-two',
//    'priority'                 => 155,
//) ) );
//
///*---------------------------------- Header one layout one advance heading -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_heading', array(
//    'sanitize_callback' 	   => 'sanitize_text_field',
//) );
//
//$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_advance_heading', array(
//    'label'                    => esc_html__( 'Header One Options', 'influence-blog' ),
//    'section'                  => $section,
//    'type'                     => 'heading-one',
//    'priority'                 => 160,
//    'active_callback'          => 'influence_blog_is_header_three_layout_one_advance_enable',
//) ) );
//
///*---------------------------------- Header one layout one padding -----------------------------------*/
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_d_p_top', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_d_p_top' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_d_p_right', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_d_p_right' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_d_p_bottom', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_d_p_bottom' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_d_p_left', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_d_p_left' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_t_p_top', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_t_p_top' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_t_p_right', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_t_p_right' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_t_p_bottom', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_t_p_bottom' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_t_p_left', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_t_p_left' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_m_p_top', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_m_p_top' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_m_p_right', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_m_p_right' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_m_p_bottom', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_m_p_bottom' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//$wp_customize->add_setting( 'influence_blog_header_three_layout_one_advance_m_p_left', array(
//    'transport' 			   => 'postMessage',
//    'default'           	   => influence_blog_defaults( 'header_three_layout_one_advance_m_p_left' ),
//    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
//) );
//
//$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_header_three_layout_one_advance_p', array(
//    'label'	   				   => esc_html__( 'Padding', 'influence-blog' ) . ' (px) ',
//    'section'  				   => $section,
//    'settings'                 => array(
//        'desktop_top' 		   => 'influence_blog_header_three_layout_one_advance_d_p_top',
//        'desktop_right' 	   => 'influence_blog_header_three_layout_one_advance_d_p_right',
//        'desktop_bottom' 	   => 'influence_blog_header_three_layout_one_advance_d_p_bottom',
//        'desktop_left' 	       => 'influence_blog_header_three_layout_one_advance_d_p_left',
//        'tablet_top' 		   => 'influence_blog_header_three_layout_one_advance_t_p_top',
//        'tablet_right' 		   => 'influence_blog_header_three_layout_one_advance_t_p_right',
//        'tablet_bottom' 	   => 'influence_blog_header_three_layout_one_advance_t_p_bottom',
//        'tablet_left' 		   => 'influence_blog_header_three_layout_one_advance_t_p_left',
//        'mobile_top' 		   => 'influence_blog_header_three_layout_one_advance_m_p_top',
//        'mobile_right' 		   => 'influence_blog_header_three_layout_one_advance_m_p_right',
//        'mobile_bottom' 	   => 'influence_blog_header_three_layout_one_advance_m_p_bottom',
//        'mobile_left' 		   => 'influence_blog_header_three_layout_one_advance_m_p_left',
//    ),
//    'input_attrs' 			   => array(
//        'min'                  => -100,
//        'max'                  => 100,
//        'step'                 => 1,
//    ),
//    'priority' 				   => 165,
//    'active_callback'          => 'influence_blog_is_header_three_layout_one_advance_enable',
//) ) );
