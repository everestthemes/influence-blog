<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_searchpage_content_options_section';

$tabs     = influence_blog_tab_one_array();

$sidebar_position = influence_blog_sidebar_position_array();

$area_lists  = influence_blog_get_registered_widget_areas();

$pagination_style = influence_blog_default_pagination_style_array();

$button_one_array = array(
    'influence_blog_searchpage_content_options_field_heading' => array(),
    'influence_blog_searchpage_content_options_field_button_title' => array(),
    'influence_blog_searchpage_content_options_display_heading' => array(),
    'influence_blog_searchpage_content_options_image_toggle' => array(),
    'influence_blog_searchpage_content_options_title_toggle' => array(),
    'influence_blog_searchpage_content_options_cat_toggle' => array(),
    'influence_blog_searchpage_content_options_date_toggle' => array(),
    'influence_blog_searchpage_content_options_content_toggle' => array(),
    'influence_blog_searchpage_content_options_button_toggle' => array(),
    'influence_blog_searchpage_content_options_sidebar_heading' => array(),
    'influence_blog_searchpage_content_options_sidebar_position' => array(),
    'influence_blog_searchpage_content_options_widget_area_select' => array(),
    'influence_blog_searchpage_content_options_pagination_heading' => array(),
    'influence_blog_searchpage_content_options_pagination_style' => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_searchpage_content_options_button_one_array', $button_one_array );

$button_two_array = array(
);

$button_two_array = apply_filters( 'influence_blog_filter_searchpage_content_options_button_two_array', $button_two_array );

$button_three_array = array(
);

$button_three_array = apply_filters( 'influence_blog_filter_searchpage_content_options_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Search content options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_searchpage_content_options_tabs', array(
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

/*---------------------------------- Search page content options field heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_field_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_searchpage_content_options_field_heading', array(
    'label'                    => esc_html__( 'Field Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Search page content options field button title -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_field_button_title', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'searchpage_content_options_field_button_title' ),
) );

$wp_customize->add_control( 'influence_blog_searchpage_content_options_field_button_title', array(
    'label'                    => esc_html__( 'Button Title', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'text',
    'priority'                 => 15,
) );

/*---------------------------------- Search page content options display heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_display_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_searchpage_content_options_display_heading', array(
    'label'                    => esc_html__( 'Display Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'searchpage-content-options-display-heading' ),
    'controls_to_wrap'         => 6,
    'expanded'                 => false,
    'priority'                 => 20,
) ) );

/*---------------------------------- Search page content options display image toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_image_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'searchpage_content_options_image_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_searchpage_content_options_image_toggle', array(
    'label'                    => esc_html__( 'Featured Image', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 25,
) ) );

/*---------------------------------- Search page content options display title toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_title_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'searchpage_content_options_title_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_searchpage_content_options_title_toggle', array(
    'label'                    => esc_html__( 'Post Title', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 30,
) ) );

/*---------------------------------- Search page content options display category toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_cat_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'searchpage_content_options_cat_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_searchpage_content_options_cat_toggle', array(
    'label'                    => esc_html__( 'Post Category', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 35,
) ) );

/*---------------------------------- Search page content options display date toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_date_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'searchpage_content_options_date_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_searchpage_content_options_date_toggle', array(
    'label'                    => esc_html__( 'Post Date', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 40,
) ) );

/*---------------------------------- Search page content options display content toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_content_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'searchpage_content_options_content_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_searchpage_content_options_content_toggle', array(
    'label'                    => esc_html__( 'Post Content', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 45,
) ) );

/*---------------------------------- Search page content options display button toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_button_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'searchpage_content_options_button_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_searchpage_content_options_button_toggle', array(
    'label'                    => esc_html__( 'Button', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 50,
) ) );

/*---------------------------------- Search page content options sidebar heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_sidebar_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_searchpage_content_options_sidebar_heading', array(
    'label'                    => esc_html__( 'Sidebar Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'searchpage-content-options-sidebar-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 55,
) ) );

/*---------------------------------- Search page content options sidebar position -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_sidebar_position', array(
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'searchpage_content_options_sidebar_position' ),
) );

$wp_customize->add_control( 'influence_blog_searchpage_content_options_sidebar_position', array(
    'label'                    => esc_html__( 'Position', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $sidebar_position,
    'priority'                 => 60,
) );

/*---------------------------------- Search page content options widget area select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_widget_area_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'searchpage_content_options_widget_area_select' ),
) );

$wp_customize->add_control( 'influence_blog_searchpage_content_options_widget_area_select', array(
    'label'                    => esc_html__( 'Widget Area', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $area_lists,
    'type'                     => 'select',
    'priority'                 => 65,
) );

/*---------------------------------- Search page content options pagination heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_pagination_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_searchpage_content_options_pagination_heading', array(
    'label'                    => esc_html__( 'Pagination Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'searchpage-content-options-pagination-heading' ),
    'controls_to_wrap'         => 1,
    'expanded'                 => false,
    'priority'                 => 70,
) ) );

/*---------------------------------- Search page content options pagination style -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_searchpage_content_options_pagination_style', array(
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'searchpage_content_options_pagination_style' ),
) );

$wp_customize->add_control( new Button_One_Control ( $wp_customize, 'influence_blog_searchpage_content_options_pagination_style', array(
    'label'                    => esc_html__( 'Style', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices' 		           => $pagination_style,
    'priority'                 => 75,
) ) );

