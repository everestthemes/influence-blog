<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_banner_content_options_section';

$tabs     = influence_blog_tab_one_array();

$categories = influence_blog_categories_array();

$posts_no = influence_blog_posts_number_attrs_array();

$orderby = influence_blog_orderby_array();

$sort_order = influence_blog_sort_order_array();

$button_one_array = array(
    'influence_blog_banner_content_options_basic_heading' => array(),
    'influence_blog_banner_content_options_cat_select_info' => array(),
    'influence_blog_banner_category' => array(),
    'influence_blog_banner_orderby' => array(),
    'influence_blog_banner_sort_order' => array(),
    'influence_blog_banner_content_options_post_no_info' => array(),
    'influence_blog_banner_posts_number' => array(),
    'influence_blog_banner_background_text' => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_banner_content_options_button_one_array', $button_one_array );

$button_two_array = array(
);

$button_two_array = apply_filters( 'influence_blog_filter_banner_content_options_button_two_array', $button_two_array );

$button_three_array = array(
);

$button_three_array = apply_filters( 'influence_blog_filter_banner_content_options_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Banner content options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_banner_content_options_tabs', array(
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

/*---------------------------------- Banner content options basic heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_basic_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_banner_content_options_basic_heading', array(
    'label'                    => esc_html__( 'Basic Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'banner-content-options-basic-heading' ),
    'controls_to_wrap'         => 7,
    'expanded'                 => true,
    'priority'                 => 10,
) ) );

/*---------------------------------- Banner content category select info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_cat_select_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_banner_content_options_cat_select_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => __( 'Hold <strong>"Control"</strong> and click for multiple choices.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 15,
) ) );

/*---------------------------------- Banner select category -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_category', array(
    'sanitize_callback'        => 'sanitize_select_one',
    'default'                  => influence_blog_defaults( 'banner_category' ),
) );

$wp_customize->add_control( new Select_One_Control( $wp_customize, 'influence_blog_banner_category', array(
    'label'                    => esc_html__( 'Select Category', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select-one',
    'choices'                  => $categories,
    'priority'                 => 20,
) ) );

/*---------------------------------- Banner select orderby -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_orderby', array(
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'banner_orderby' ),
) );

$wp_customize->add_control( 'influence_blog_banner_orderby', array(
    'label'                    => esc_html__( 'Order By', 'influence-blog' ),
    'description'              => esc_html__( 'Select how to sort retrieved posts.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $orderby,
    'priority'                 => 25,
) );

/*---------------------------------- Banner select sort order -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_sort_order', array(
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'banner_sort_order' ),
) );

$wp_customize->add_control( 'influence_blog_banner_sort_order', array(
    'label'                    => esc_html__( 'Sort Order', 'influence-blog' ),
    'description'              => esc_html__( 'Designates the ascending or descending order', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $sort_order,
    'priority'                 => 30,
) );

$banner_description = apply_filters( 'influence_blog_filter_banner_post_no_description', __( 'Minimum 1 &amp; maximum 4 can be set.', 'influence-blog' ) );

/*---------------------------------- Banner content posts number info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_post_no_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_banner_content_options_post_no_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => $banner_description,
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 35,
) ) );

/*---------------------------------- Banner posts number -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_posts_number', array(
    'sanitize_callback'        => 'influence_blog_sanitize_range',
    'default'                  => influence_blog_defaults( 'banner_posts_number' ),
) );

$wp_customize->add_control( 'influence_blog_banner_posts_number', array(
    'label'                    => esc_html__( 'Number of Posts', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'number',
    'input_attrs'              => $posts_no,
    'priority'                 => 40,
) );

/*---------------------------------- Banner background text -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_background_text', array(
    'sanitize_callback'        => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'banner_background_text' ),
) );

$wp_customize->add_control( 'influence_blog_banner_background_text', array(
    'label'                    => esc_html__( 'Background Text', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'text',
    'priority'                 => 45,
) );
