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

$size_attrs = array(
    'min'                   => 10,
    'max'                   => 90,
    'step'                  => 0.1,
);

$size_attrs = apply_filters( 'influence_blog_filter_site_title_font_size_attr_array', $size_attrs );

$text_transform = influence_blog_font_text_transform_array();

$line_height = influence_blog_line_height_attrs_array();

$letter_spacing = influence_blog_letter_spacing_attrs_array();

$button_one_array = array(
    'influence_blog_arange_header_two_layout_one_heading'   => array(),
    'influence_blog_arrange_header_two_layout_one_two'   => array(),
    'influence_blog_header_two_site_title_heading'   => array(),
    'custom_logo'   => array(),
    'blogname'   => array(),
    'display_header_text'   => array(),
    'blogdescription'   => array(),
    'influence_blog_display_tagline'   => array(),
    'influence_blog_header_two_site_title_alignment'   => array(),
    'influence_blog_header_two_ads_heading'   => array(),
    'influence_blog_header_two_ads_upload_image'   => array(),
    'influence_blog_header_two_ads_link'   => array(),
    'influence_blog_header_two_ads_link_rel'   => array(),
    'influence_blog_header_two_ads_links_tab_toggle'   => array(),
    'influence_blog_header_two_ads_alignment'   => array(),

);

$button_one_array = apply_filters( 'influence_blog_filter_header_two_button_one_array', $button_one_array );

$button_two_array = array(
    'influence_blog_header_two_design_site_title_heading' => array(),
    'influence_blog_header_two_design_site_title_color_heading' => array(),
    'header_textcolor' => array(),
    'influence_blog_header_two_design_site_title_typo_heading' => array(),
    'influence_blog_typo_header_two_design_site_title_font' => array(),
    'influence_blog_typo_header_two_design_site_title_transform' => array(),
    'influence_blog_typo_header_two_design_site_title_size' => array(),
    'influence_blog_typo_header_two_design_site_title_height' => array(),
    'influence_blog_typo_header_two_design_site_title_spacing' => array(),
);

$button_two_array = apply_filters( 'influence_blog_filter_header_two_button_two_array', $button_two_array );

$button_three_array = array(
    'influence_blog_header_two_advance_info' => array(),
    'influence_blog_header_two_advance_toggle' => array(),
    'influence_blog_header_two_advance_site_title_heading' => array(),
    'influence_blog_header_two_advance_site_title_col' => array(),
    'influence_blog_header_two_advance_site_title_m' => array(),
    'influence_blog_header_two_advance_ads_heading' => array(),
    'influence_blog_header_two_advance_ads_col' => array(),
    'influence_blog_header_two_advance_ads_m' => array(),
);

$button_three_array = apply_filters( 'influence_blog_filter_header_two_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Header one options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Influence_Blog_Tab_One_Control( $wp_customize, 'influence_blog_header_two_tabs', array(
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

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_arange_header_two_layout_one_heading', array(
    'label'                    => esc_html__( 'Arrange elements', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Arrange elements header two layout one two options -----------------------------------*/

$arrange_header_two_layout_one_two_options = influence_blog_arrange_header_two_layout_one_two_options();

$arrange_header_two_layout_one_two_option  = array();

foreach( $arrange_header_two_layout_one_two_options as $key => $val ) {

   $arrange_header_two_layout_one_two_option[ $key ] = $val[ 'label' ];
}

$wp_customize->add_setting( 'influence_blog_arrange_header_two_layout_one_two', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'sanitize_sortable_one',
    'default'                  => influence_blog_sortable_defaults( $arrange_header_two_layout_one_two_options ),
) );

$wp_customize->add_control( new Influence_Blog_Sortable_One_Control( $wp_customize, 'influence_blog_arrange_header_two_layout_one_two', array(
	'section'				   => $section,
    'choices'                  => $arrange_header_two_layout_one_two_option,
    'priority'                 => 15
) ) );

/*---------------------------------- Header two site title heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_site_title_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_header_two_site_title_heading', array(
    'label'                    => esc_html__( 'Site Title Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-two-sitle-title-heading' ),
    'controls_to_wrap'         => 6,
    'expanded'                 => false,
    'priority'                 => 20,
) ) );

$wp_customize->add_setting( 'influence_blog_display_tagline', array(
    'transport'                => 'postMessage',
    'sanitize_callback' 	   => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'display_tagline' ),
) );

$wp_customize->add_control( 'influence_blog_display_tagline', array(
    'label'                    => esc_html__( 'Display Tagline', 'influence-blog' ),
    'type'                     => 'checkbox',
	'section'				   => $section,
    'priority'                 => 45,
) );

/*---------------------------------- Header two sitle title alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_site_title_alignment', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'header_two_site_title_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_header_two_site_title_alignment', array(
    'label'                    => esc_html__( 'Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $alignment,
    'type'                     => 'select',
    'priority'                 => 50,
) );

/*---------------------------------- Header two advertismenet heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_ads_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_header_two_ads_heading', array(
    'label'                    => esc_html__( 'Advertisement Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-two-ads-heading' ),
    'controls_to_wrap'         => 5,
    'expanded'                 => false,
    'priority'                 => 55,
) ) );

/*---------------------------------- Header two advertisement image -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_ads_upload_image', array(
    'sanitize_callback'        => 'influence_blog_sanitize_image',
    'default'                  => influence_blog_defaults( 'header_two_ads_upload_image' ),
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'influence_blog_header_two_ads_upload_image', array(
    'label'       		       => esc_html__( 'Upload Image', 'influence-blog' ),
    'section'     		       => $section,
    'priority'                 => 60,
) ) );

/*---------------------------------- Header two advertisement link -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_ads_link', array(
    'sanitize_callback'        => 'esc_url_raw',
    'default'                  => influence_blog_defaults( 'header_two_ads_link' ),
) );

$wp_customize->add_control( 'influence_blog_header_two_ads_link', array(
    'label'                    => esc_html__( 'Link', 'influence-blog' ),
	'section'				   => $section,
    'type'                     => 'url',
    'priority'                 => 65,
) );

/*---------------------------------- Header two advertisement link rel -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_ads_link_rel', array(
    'sanitize_callback'        => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'header_two_ads_link_rel' ),
) );

$wp_customize->add_control( 'influence_blog_header_two_ads_link_rel', array(
    'label'                    => esc_html__( 'Link Rel', 'influence-blog' ),
	'section'				   => $section,
    'type'                     => 'text',
    'priority'                 => 70,
) );

/*---------------------------------- Header two advertisement new tab toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_ads_links_tab_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'header_two_ads_links_tab_toggle' ),
) );

$wp_customize->add_control( new Influence_Blog_Toggle_Three_Control ( $wp_customize, 'influence_blog_header_two_ads_links_tab_toggle', array(
    'label'                    => esc_html__( 'Open in new tab', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 75,
) ) );

/*---------------------------------- Header two advertisement alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_ads_alignment', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'header_two_ads_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_header_two_ads_alignment', array(
    'label'                    => esc_html__( 'Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $alignment,
    'type'                     => 'select',
    'priority'                 => 85,
) );

/*-----------------------------------------------------------------------------
							 Design options
-----------------------------------------------------------------------------*/

/*---------------------------------- Header two design site title heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_design_site_title_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_header_two_design_site_title_heading', array(
    'label'                    => esc_html__( 'Site Title Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-two-design-sitle-title-heading' ),
    'controls_to_wrap'         => 8,
    'expanded'                 => false,
    'priority'                 => 90,
) ) );

/*---------------------------------- Header two design site title color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_design_site_title_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_header_two_design_site_title_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 95,
) ) );

/*---------------------------------- Header two design site title typo heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_design_site_title_typo_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_header_two_design_site_title_typo_heading', array(
    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 105,
) ) );

/*---------------------------------- Header two design site title typo font family -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_two_design_site_title_font', array(
    'default'                  => influence_blog_defaults( 'typo_header_two_design_site_title_font' ),
    'sanitize_callback'        => 'sanitize_typography_one'
) );

$wp_customize->add_control( new Influence_Blog_Typography_One_Control( $wp_customize, 'influence_blog_typo_header_two_design_site_title_font', array(
    'label'                    => __( 'Font Family', 'influence-blog' ),
    'section'                  => $section,
    'input_attrs'              => $font_attrs,
    'priority'                 => 110,
) ) );

/*---------------------------------- Header two design site title typo text transform -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_two_design_site_title_transform', array(
    'default'                  => influence_blog_defaults( 'typo_header_two_design_site_title_transform' ),
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'transport' 		       => 'postMessage',
) );

$wp_customize->add_control( 'influence_blog_typo_header_two_design_site_title_transform', array(
    'label'                    => __( 'Text Transform', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $text_transform,
    'priority'                 => 115,
) );

/*---------------------------------- Header two design site title typo font size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_two_design_site_title_size_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_header_two_design_site_title_size_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_two_design_site_title_size_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_two_design_site_title_size_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_two_design_site_title_size_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_two_design_site_title_size_m' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_two_design_site_title_size', array(
    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_header_two_design_site_title_size_d',
        'tablet' 	           => 'influence_blog_typo_header_two_design_site_title_size_t',
        'mobile' 	           => 'influence_blog_typo_header_two_design_site_title_size_m',
    ),
    'input_attrs' 		       => $size_attrs,
    'priority' 			       => 120,
) ) );

/*---------------------------------- Header two design site title typo line height -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_two_design_site_title_height_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_header_two_design_site_title_height_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_two_design_site_title_height_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_two_design_site_title_height_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_two_design_site_title_height_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_two_design_site_title_height_m' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_two_design_site_title_height', array(
    'label'                    => esc_html__( 'Line Height', 'influence-blog' ),
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_header_two_design_site_title_height_d',
        'tablet' 	           => 'influence_blog_typo_header_two_design_site_title_height_t',
        'mobile' 	           => 'influence_blog_typo_header_two_design_site_title_height_m',
    ),
    'input_attrs' 		       => $line_height,
    'priority' 			       => 125,
) ) );

/*---------------------------------- Header two design site title typo letter spacing -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_header_two_design_site_title_spacing_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_header_two_design_site_title_spacing_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_two_design_site_title_spacing_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_two_design_site_title_spacing_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_header_two_design_site_title_spacing_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_header_two_design_site_title_spacing_m' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_header_two_design_site_title_spacing', array(
    'label'                    => esc_html__( 'Letter Spacing', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_header_two_design_site_title_spacing_d',
        'tablet' 	           => 'influence_blog_typo_header_two_design_site_title_spacing_t',
        'mobile' 	           => 'influence_blog_typo_header_two_design_site_title_spacing_m',
    ),
    'input_attrs' 		       => $letter_spacing,
    'priority' 			       => 130,
) ) );

/*-----------------------------------------------------------------------------
							 Advance options
-----------------------------------------------------------------------------*/

/*---------------------------------- Header two advance Info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_advance_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Info_One_Control ( $wp_customize, 'influence_blog_header_two_advance_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => __( 'Recommended for experienced user.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 135,
) ) );

/*---------------------------------- Header two advance toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_advance_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'header_two_advance_toggle' ),
) );

$wp_customize->add_control( new Influence_Blog_Toggle_Two_Control ( $wp_customize, 'influence_blog_header_two_advance_toggle', array(
    'label'                    => esc_html__( 'Enable Advance Settings', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-two',
    'priority'                 => 140,
) ) );

/*---------------------------------- Header two advance site title heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_advance_site_title_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_header_two_advance_site_title_heading', array(
    'label'                    => esc_html__( 'Site Title Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-two-advance-sitle-title-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 145,
    'active_callback'          => 'influence_blog_is_header_two_advance_enable',
) ) );

/*---------------------------------- Header two advance site title column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_advance_site_title_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'header_two_advance_site_title_col' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_header_two_advance_site_title_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 150,
    'active_callback'          => 'influence_blog_is_header_two_advance_enable',
) ) );

/*---------------------------------- Header two advance site title margin -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_advance_site_title_d_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_site_title_d_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_header_two_advance_site_title_d_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_site_title_d_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_header_two_advance_site_title_t_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_site_title_t_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_header_two_advance_site_title_t_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_site_title_t_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_header_two_advance_site_title_m_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_site_title_m_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_header_two_advance_site_title_m_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_site_title_m_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Influence_Blog_Dimension_One_Control( $wp_customize, 'influence_blog_header_two_advance_site_title_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_header_two_advance_site_title_d_m_top',
        'desktop_bottom' 	   => 'influence_blog_header_two_advance_site_title_d_m_bottom',
        'tablet_top' 		   => 'influence_blog_header_two_advance_site_title_t_m_top',
        'tablet_bottom' 	   => 'influence_blog_header_two_advance_site_title_t_m_bottom',
        'mobile_top' 		   => 'influence_blog_header_two_advance_site_title_m_m_top',
        'mobile_bottom' 	   => 'influence_blog_header_two_advance_site_title_m_m_bottom',
    ),
    'input_attrs' 			   => array(
        'min'                  => -100,
        'max'                  => 100,
        'step'                 => 1,
    ),
    'priority' 				   => 155,
    'active_callback'          => 'influence_blog_is_header_two_advance_enable',
) ) );

/*---------------------------------- Header two advance ads heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_advance_ads_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_header_two_advance_ads_heading', array(
    'label'                    => esc_html__( 'Advertisement Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'header-two-advance-ads-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 160,
    'active_callback'          => 'influence_blog_is_header_two_advance_enable',
) ) );

/*---------------------------------- Header two advance ads column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_advance_ads_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'header_two_advance_ads_col' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_header_two_advance_ads_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 165,
    'active_callback'          => 'influence_blog_is_header_two_advance_enable',
) ) );

/*---------------------------------- Header two advance ads margin -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_header_two_advance_ads_d_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_ads_d_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_header_two_advance_ads_d_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_ads_d_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_header_two_advance_ads_t_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_ads_t_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_header_two_advance_ads_t_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_ads_t_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_header_two_advance_ads_m_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_ads_m_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_header_two_advance_ads_m_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'header_two_advance_ads_m_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Influence_Blog_Dimension_One_Control( $wp_customize, 'influence_blog_header_two_advance_ads_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_header_two_advance_ads_d_m_top',
        'desktop_bottom' 	   => 'influence_blog_header_two_advance_ads_d_m_bottom',
        'tablet_top' 		   => 'influence_blog_header_two_advance_ads_t_m_top',
        'tablet_bottom' 	   => 'influence_blog_header_two_advance_ads_t_m_bottom',
        'mobile_top' 		   => 'influence_blog_header_two_advance_ads_m_m_top',
        'mobile_bottom' 	   => 'influence_blog_header_two_advance_ads_m_m_bottom',
    ),
    'input_attrs' 			   => array(
        'min'                  => -100,
        'max'                  => 100,
        'step'                 => 1,
    ),
    'priority' 				   => 170,
    'active_callback'          => 'influence_blog_is_header_two_advance_enable',
) ) );
