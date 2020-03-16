<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_blogpage_section_one_section';

$tabs     = influence_blog_tab_one_array();

$blog_layouts = influence_blog_blog_layouts_select_array();

$categories = influence_blog_categories_array();

$posts_no = influence_blog_posts_number_attrs_array();

$orderby = influence_blog_orderby_array();

$sort_order = influence_blog_sort_order_array();

$sidebar_position = influence_blog_sidebar_position_array();

$area_lists  = influence_blog_get_registered_widget_areas();

$pagination_style = influence_blog_pagination_style_array();

$button_one_array = array(
    'influence_blog_blogpage_section_one_display_toggle' => array(),
    'influence_blog_blogpage_section_one_layout_select_heading' => array(),
    'influence_blog_blogpage_section_one_layout_select' => array(),
    'influence_blog_blogpage_section_one_content_heading' => array(),
    'influence_blog_blogpage_section_one_content_col' => array(),
    'influence_blog_blogpage_section_one_content_title' => array(),
    'influence_blog_blogpage_section_one_content_button_text' => array(),
    'influence_blog_blogpage_section_one_content_query_heading' => array(),
    'influence_blog_blogpage_section_one_content_query_toggle' => array(),
    'influence_blog_blogpage_section_one_content_cat_select_info' => array(),
    'influence_blog_blogpage_section_one_content_category' => array(),
    'influence_blog_blogpage_section_one_content_orderby' => array(),
    'influence_blog_blogpage_section_one_content_sort_order' => array(),
    'influence_blog_blogpage_section_one_content_post_no_info' => array(),
    'influence_blog_blogpage_section_one_content_posts_number' => array(),
    'influence_blog_blogpage_section_one_content_display_heading' => array(),
    'influence_blog_blogpage_section_one_content_image_toggle' => array(),
    'influence_blog_blogpage_section_one_content_title_toggle' => array(),
    'influence_blog_blogpage_section_one_content_cat_toggle' => array(),
    'influence_blog_blogpage_section_one_content_date_toggle' => array(),
    'influence_blog_blogpage_section_one_content_content_toggle' => array(),
    'influence_blog_blogpage_section_one_content_button_toggle' => array(),
    'influence_blog_blogpage_section_one_sidebar_heading' => array(),
    'influence_blog_blogpage_section_one_sidebar_col' => array(),
    'influence_blog_blogpage_section_one_sidebar_position' => array(),
    'influence_blog_blogpage_section_one_widget_area_select' => array(),
    'influence_blog_blogpage_section_one_pagination_heading' => array(),
    'influence_blog_blogpage_section_one_pagination_toggle' => array(),
    'influence_blog_blogpage_section_one_pagination_style' => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_blogpage_section_one_button_one_array', $button_one_array );

$button_two_array = array(
);

$button_two_array = apply_filters( 'influence_blog_filter_blogpage_section_one_button_two_array', $button_two_array );

$button_three_array = array(
);

$button_three_array = apply_filters( 'influence_blog_filter_blogpage_section_one_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Blog page section one
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_blogpage_section_one_tabs', array(
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

/*---------------------------------- Blog page section one display toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_display_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_display_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_blogpage_section_one_display_toggle', array(
    'label'                    => esc_html__( 'Display Section', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 10,
) ) );

/*---------------------------------- Blog page section one layout select heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_layout_select_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_blogpage_section_one_layout_select_heading', array(
    'label'                    => esc_html__( 'Select Layout', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 15,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one layout select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_layout_select', array(
    'sanitize_callback'        => 'sanitize_radio_image_two',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_layout_select' ),
) );

$wp_customize->add_control( new Radio_Image_Two_Control( $wp_customize, 'influence_blog_blogpage_section_one_layout_select', array(
    'section'                  => $section,
    'type'                     => 'radio-image-one',
    'choices'                  => $blog_layouts,
    'priority'                 => 20,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one content heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_blogpage_section_one_content_heading', array(
    'label'                    => esc_html__( 'Content Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'blogpage-section-one-content-heading' ),
    'controls_to_wrap'         => 18,
    'expanded'                 => false,
    'priority'                 => 25,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one content column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_col' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_blogpage_section_one_content_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 30,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one content title -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_title', array(
    'sanitize_callback'        => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_title' ),
) );

$wp_customize->add_control( 'influence_blog_blogpage_section_one_content_title', array(
    'label'                    => esc_html__( 'Title', 'influence-blog' ),
	'section'				   => $section,
    'type'                     => 'text',
    'priority'                 => 35,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) );

/*---------------------------------- Blog page section one content button text -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_button_text', array(
    'sanitize_callback'        => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_button_text' ),
) );

$wp_customize->add_control( 'influence_blog_blogpage_section_one_content_button_text', array(
    'label'                    => esc_html__( 'Button Text', 'influence-blog' ),
	'section'				   => $section,
    'type'                     => 'text',
    'priority'                 => 37,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) );

/*---------------------------------- Blog page section one content query heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_query_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_blogpage_section_one_content_query_heading', array(
    'label'                    => esc_html__( 'Query Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'blogpage-section-one-content-query-heading' ),
    'controls_to_wrap'         => 7,
    'expanded'                 => false,
    'priority'                 => 40,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one content query toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_query_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_query_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_blogpage_section_one_content_query_toggle', array(
    'label'                    => esc_html__( 'Enable Query', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 45,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one content category select info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_cat_select_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_blogpage_section_one_content_cat_select_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => __( 'Hold <strong>"Control"</strong> and click for multiple choices.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 50,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_query_enable',
) ) );

/*---------------------------------- Blog page section one content select category -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_category', array(
    'sanitize_callback'        => 'sanitize_select_one',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_category' ),
) );

$wp_customize->add_control( new Select_One_Control( $wp_customize, 'influence_blog_blogpage_section_one_content_category', array(
    'label'                    => esc_html__( 'Select Category', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select-one',
    'choices'                  => $categories,
    'priority'                 => 55,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_query_enable',
) ) );

/*---------------------------------- Blog page section one content select orderby -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_orderby', array(
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_orderby' ),
) );

$wp_customize->add_control( 'influence_blog_blogpage_section_one_content_orderby', array(
    'label'                    => esc_html__( 'Order By', 'influence-blog' ),
    'description'              => esc_html__( 'Select how to sort retrieved posts.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $orderby,
    'priority'                 => 60,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_query_enable',
) );

/*---------------------------------- Blog page section one content select sort order -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_sort_order', array(
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_sort_order' ),
) );

$wp_customize->add_control( 'influence_blog_blogpage_section_one_content_sort_order', array(
    'label'                    => esc_html__( 'Sort Order', 'influence-blog' ),
    'description'              => esc_html__( 'Designates the ascending or descending order', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $sort_order,
    'priority'                 => 65,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_query_enable',
) );

/*---------------------------------- Blog page section one content posts number info -----------------------------------*/

$post_no_description = apply_filters( 'influence_blog_filter_post_no_description', __( 'Minimum 1 &amp; maximum 6 can be set.', 'influence-blog' ) );

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_post_no_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_blogpage_section_one_content_post_no_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => $post_no_description,
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 70,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_query_enable',
) ) );

/*---------------------------------- Blog page section one content posts number -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_posts_number', array(
    'sanitize_callback'        => 'influence_blog_sanitize_range',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_posts_number' ),
) );

$wp_customize->add_control( 'influence_blog_blogpage_section_one_content_posts_number', array(
    'label'                    => esc_html__( 'Number of Posts', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'number',
    'input_attrs'              => $posts_no,
    'priority'                 => 75,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_query_enable',
) );

/*---------------------------------- Blog page section one content display heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_display_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_blogpage_section_one_content_display_heading', array(
    'label'                    => esc_html__( 'Display Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'blogpage-section-one-content-display-heading' ),
    'controls_to_wrap'         => 6,
    'expanded'                 => false,
    'priority'                 => 80,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one content display image toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_image_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_image_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_blogpage_section_one_content_image_toggle', array(
    'label'                    => esc_html__( 'Featured Image', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 85,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one content display title toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_title_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_title_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_blogpage_section_one_content_title_toggle', array(
    'label'                    => esc_html__( 'Post Title', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 90,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one content display category toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_cat_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_cat_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_blogpage_section_one_content_cat_toggle', array(
    'label'                    => esc_html__( 'Post Category', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 95,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one content display date toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_date_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_date_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_blogpage_section_one_content_date_toggle', array(
    'label'                    => esc_html__( 'Post Date', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 100,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one content display content toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_content_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_content_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_blogpage_section_one_content_content_toggle', array(
    'label'                    => esc_html__( 'Post Content', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 105,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one content display button toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_content_button_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_content_button_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_blogpage_section_one_content_button_toggle', array(
    'label'                    => esc_html__( 'Button', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 110,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one sidebar heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_sidebar_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_blogpage_section_one_sidebar_heading', array(
    'label'                    => esc_html__( 'Sidebar Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'blogpage-section-one-sidebar-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 115,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one sidebar column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_sidebar_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_sidebar_col' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_blogpage_section_one_sidebar_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 120,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one sidebar position -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_sidebar_position', array(
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_sidebar_position' ),
) );

$wp_customize->add_control( 'influence_blog_blogpage_section_one_sidebar_position', array(
    'label'                    => esc_html__( 'Position', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $sidebar_position,
    'priority'                 => 125,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) );

/*---------------------------------- Blog page section one widget area select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_widget_area_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_widget_area_select' ),
) );

$wp_customize->add_control( 'influence_blog_blogpage_section_one_widget_area_select', array(
    'label'                    => esc_html__( 'Widget Area', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $area_lists,
    'type'                     => 'select',
    'priority'                 => 130,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) );

/*---------------------------------- Blog page section one pagination heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_pagination_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_blogpage_section_one_pagination_heading', array(
    'label'                    => esc_html__( 'Pagination Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'blogpage-section-one-pagination-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 135,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one pagination toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_pagination_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_pagination_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_blogpage_section_one_pagination_toggle', array(
    'label'                    => esc_html__( 'Display', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 140,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_display_enable',
) ) );

/*---------------------------------- Blog page section one pagination style -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_blogpage_section_one_pagination_style', array(
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'blogpage_section_one_pagination_style' ),
) );

$wp_customize->add_control( new Button_One_Control ( $wp_customize, 'influence_blog_blogpage_section_one_pagination_style', array(
    'label'                    => esc_html__( 'Style', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices' 		           => $pagination_style,
    'priority'                 => 145,
    'active_callback'          => 'influence_blog_is_blogpage_section_one_pagination_enable',
) ) );
